<?php

namespace App\Console\Commands\DiscountProfessional;


use App\Console\Commands\DiscountProfessional\utils\Asaas;
use App\Console\Commands\DiscountProfessional\utils\Verifications;
use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class DiscountProfessional extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'discountProfessional:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Desconta das profissionais pagamentos do tipo 8,9,10';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Log::info("-------------------------------------------------");
        Log::info("iniciando cron de desconto");
        $payments = Payment::whereIn('payment_status_id', [1, 5])
            ->whereIn('payment_category', [8, 9, 10])
            ->where('payment_type', 'C')
            ->whereNotNull('franchise_id')
            ->whereDate('due_date', '>=', '2022-07-01')
            ->whereDate('due_date', '<=', Carbon::now()->toDateString())->has('active_user');

        $key = 0;
        if ($payments->exists()) {
            foreach ($payments->get() as $key => $payment) {
                $this->logInfoUser($payment);
                $this->discountProfessionals($payment);
            }
        } else {
            Log::info("Nenhum desconto a ser realizado");
        }

        Log::info("Total de descontos percorridos: " . $key ?? '0');
        Log::info("fim cron desconto");
        Log::info("-------------------------------------------------");
        return true;
    }

    public function logInfoUser($payment)
    {
        Log::info('Desconto encontrado: ' . (isset($payment->user->name) ? $payment->user->name : "Profissional sem nome") . " Id: " . $payment->user->id . " Id do pagamento: " . $payment->id);
    }

    public function discountProfessionals($payment)
    {
        try {
            Verifications::verifyExistAccountAsaas($payment->user);
            $request = Asaas::createRequestP2P($payment->user, $payment);
            Asaas::validatorRequestP2P($request);
            Asaas::transferP2PAsaas($request, $payment, $payment->user);
            //code...
            Log::info("Desconto aplicado com sucesso");
        } catch (\Throwable $th) {
            //throw $th;
            $payment->payment_status_id = 5;
            $payment->save();
            Log::info("Erro discountProfessionals: " . $th->getMessage());
        }
        Log::info("-------------------------------------------------");
    }
}

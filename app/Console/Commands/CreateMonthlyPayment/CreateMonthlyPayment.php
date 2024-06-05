<?php

namespace App\Console\Commands\CreateMonthlyPayment;

use App\Console\Commands\CreateMonthlyPayment\utils\Asaas;
use App\Console\Commands\CreateMonthlyPayment\utils\Verifications;
use App\Http\Controllers\ProfessionalController;
use App\Models\Payment;
use App\Models\User;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CreateMonthlyPayment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'createMonthlyPayment:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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

        $error = [];
        Log::info("-------------------------------------------------");
        Log::info("iniciando cron de mensalidades");
        $users = User::where('status', 1)->where('role_id', 3)->has('professional')->whereNull('deleted_at')->get();
        foreach ($users as $key => $user) {
            // if ($user->id == 701333) {
                Log::info("Criando mensalidade para: " . $user->name . " Id: " . $user->id);
                $this->mensalityProfessionals($user);
            // }
        }
        Log::info("profissionais percorridas :" . $key);
        Log::info("fim cron mensalidades");
        Log::info("-------------------------------------------------");
    }

    public function mensalityProfessionals($user)
    {
        //executa as verificaçoes
        try {
            Verifications::verifyExistMonthlyPayment($user);
            //verifica see existe um customerAsaas se não cria e devolve o id do asaas
            $asaasCustomerId = Verifications::existCustomerUser($user);

            //cria o boleto e o crédito para o franchise
            $request = Asaas::createRequestCharge($user);
            Asaas::validatorRequestCharge($request);
            Asaas::createPaymentAsaas($request, $user, $asaasCustomerId);
            //fim cria o boleto e o crédito
            //salvar o registro de saida na tabela asaas billing
        } catch (\Throwable $th) {
            //throw $th;
            Log::info($th->getMessage());
        }
        Log::info("-------------------------------------------------");
    }
}

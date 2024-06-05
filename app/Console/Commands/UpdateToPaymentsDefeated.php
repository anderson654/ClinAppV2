<?php

namespace App\Console\Commands;

use App\Models\Asaas\AsaasBilling;
use App\Models\Payment;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

class UpdateToPaymentsDefeated extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:updateToPaymentsDefeated';

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

        $this->updatePayment();
        return 0;
    }

    //apenas pagamentos de clientes
    public function updatePayment()
    {
        //pega os pagamentos feitos pelo asaas com status = 1 Aguardando pagamento e due_date < now e diferent de nula
        $asaasPayments = AsaasBilling::has('payment_awaiting')->with('payment_awaiting');
        foreach ($asaasPayments->get() as $asaasPayment) {
            //altera o status dos pagamentos para vencido
            $asaasPayment->payment_awaiting->payment_status_id = 13;
            $asaasPayment->payment_awaiting->save();
        }
    }
}

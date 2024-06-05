<?php

namespace App\Console\Commands;

use App\Models\Payment;
use Illuminate\Console\Command;

class PaymentCreditProfessional extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'paymentCreditProfessional:cron {idPayment}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Realiza um pagamento de forma manual';

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
        //paga adicional
        $paymentCreditProfessional = new PaymentProfessionalsP2P();
        $payment = Payment::find($this->argument('idPayment'));
        if ($payment->payment_status_id === 1) {
            $paymentCreditProfessional->creditProfessional($payment);
        }
        return 0;
    }
}

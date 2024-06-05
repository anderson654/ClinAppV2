<?php

namespace App\Console\Commands;

use App\Models\AsaasTransfer;
use App\Models\Payment;
use App\Models\PaymentAccount;
use Illuminate\Console\Command;

class UpdatePaymentDateAndStatusDone extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'teste:updatePymentStatusAndPaymentDate';

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
        $transfers = AsaasTransfer::where('status', 'DONE')->get();
        foreach ($transfers as $key => $transfer) {
            # code...
            //pegar o pagamento
            $this->updatePayment($transfer);
        }
    }

    public function updatePayment($transfer)
    {
        $payment = Payment::find($transfer->payment_id);
        if (isset($payment)) {
            $accountId = PaymentAccount::where('user_id', $payment->user_id)->first()->id;


            $payment->payment_status_id = 2;
            $payment->payment_date = $transfer->effectiveDate;
            // $payment->due_date = $payment->created_at->toDateString();
            $payment->payment_gateway_id = 2;
            $payment->payment_account_id = $accountId;
            $payment->save();
        }
    }
}

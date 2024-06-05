<?php

namespace App\Console\Commands;

use App\Models\Payment;
use App\Models\PaymentAccount;
use Illuminate\Console\Command;

class UpdatePaymentsAccounts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'teste:updatePayments';

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
        $payments = Payment::where('payment_type','C')->where('payment_category',6)->with('user')->get();
        foreach ($payments as $payment) {
            # code...
            $paymentAccountId = PaymentAccount::where('user_id', $payment->user_id)->first()->id;
            $payment->payment_account_id = $paymentAccountId;
            $payment->save();
        }
    }
}

<?php

namespace App\Console\Commands;

use App\Models\Payment;
use Illuminate\Console\Command;

class UpdateDueDatePayments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'teste:scriptUpdateDueDatePayments {date} {newDate}';

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
        $date = $this->argument('date');
        $newDate = $this->argument('newDate');
        $payments = Payment::whereDate('due_date', $date)->get();
        foreach ($payments as $payment) {
            # code...
            $payment->due_date = NULL;
            $payment->save();
        }
        $payments = Payment::whereDate('due_date', $date)->get();
        dd($payments);
        dd($date, $newDate);
    }
}

<?php

namespace App\Console\Commands;

use App\Models\ProfessionalDiscount;
use Illuminate\Console\Command;

class UpdateDiscountCredits extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'updateDiscountCredits:cron';

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
        $professionalDiscounts = ProfessionalDiscount::with('payment')->get();
        $count = 0;
        foreach ($professionalDiscounts as $professionalDiscount) {
            $count++;
            # code...
            if($professionalDiscount->payment){
                if($professionalDiscount->payment->payment_status_id == 1){
                    $professionalDiscount->payment->payment_account_id = 1;
                    $professionalDiscount->payment->payment_type = "C";
                    $professionalDiscount->payment->save();
                } 
            }
        }
        
        return "FINALIZADO";
    }
}

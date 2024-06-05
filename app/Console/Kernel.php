<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Log;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\RenewSubscriptionsCron::class,
        Commands\PaymentProfessionalsP2P::class,
        Commands\ExternalPayment::class,
        Commands\UpdateTables\UpdatePaymentToAsaasTransfer::class,
        Commands\FinishService::class,
        Commands\SendWhatsServiceReview::class,
        Commands\CreateNewLogLaravel::class,
        Commands\CreateMonthlyPayment\CreateMonthlyPayment::class,
        Commands\CronJobCommands\CheckServicesPayment::class,
        Commands\Professionals\updateSignaturePayment::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command("app:send-avaliable-service")->everyMinute()->runInBackground();
        $schedule->command("app:close-conversations")->everyMinute()->runInBackground();
        $schedule->command("app:send-loop-messsages")->everyFiveMinutes()->runInBackground();
    }


    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}

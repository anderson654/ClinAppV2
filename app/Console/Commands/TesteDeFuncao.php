<?php

namespace App\Console\Commands;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfessionalController;
use App\Models\BootWhatsApp\Notification;
use App\Models\BootWhatsApp\NotificationToService;
use Illuminate\Console\Command;
use Illuminate\Http\Request;

class TesteDeFuncao extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'testeFuncao:teste';

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
        // $request = new Request();
        // $request->merge(['user_id' => 242424]);
        // $professionalController = new ProfessionalController($request); 
        // dd($professionalController->getPreferredDays());
        // $notification = new Notification();
        // $notification->user_id = 701333;
        // $notification->status_notifications_id = 1;
        // $notification->type_notifications_id = 1;
        // $notification->save();


        $notificationToService = new NotificationToService();
        $notificationToService->notification_id = 315653;
        $notificationToService->service_id = 213217;
        $notificationToService->save();


        // dd(Notification::get());
        dd('Hello');
    }
}

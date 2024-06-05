<?php

namespace App\Console\Commands;

use App\Http\Controllers\AuthController;
use Illuminate\Console\Command;
use Illuminate\Http\Request;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

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
        $newRegister = new AuthController();
        $newRequest = new Request();

        $newRequest->merge(["name" => "Anderson Barbosa", 
        "email" => "testeDeNovoLead@gmail.com", 
        "password" => "12345678", "phone" => "41989022440", 
        "cod_source" => 1, 
        "leadEmail" => "user698203@clin.com"]);

        $response = $newRegister->registerCostumer($newRequest);

        dd($response->content());
        return 0;
    }
}

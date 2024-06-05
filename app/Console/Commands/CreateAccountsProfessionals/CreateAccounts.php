<?php

namespace App\Console\Commands\CreateAccountsProfessionals;

use App\Http\Controllers\AsaasController;
use Illuminate\Console\Command;

class CreateAccounts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'createAccountsProfessionals:cron';

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
        $asaasController = new AsaasController();
        $asaasController->createAcountAllProfessionals();
        dd("end");
    }
}

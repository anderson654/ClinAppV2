<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class CreateNewLogLaravel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:createNewLogLaravel';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Este comando gera um novo arquivo de log.txt no laravel todos os dias.';

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
        $yesterday = now()->subDay()->format('Y-m-d');
        $logPath = storage_path('logs/laravel.log');
        $previousLogPath = storage_path("logs/laravel-{$yesterday}.log");

        if (file_exists($logPath)) {
            rename($logPath, $previousLogPath);
            touch($logPath); // Cria um novo arquivo de log vazio
            chmod($logPath, 0777); // Define as permissões como leitura, gravação e execução para o proprietário, grupo e outros usuários
        }

        Log::info("Data Log: " . now()->subDay()->format('Y-m-d'));
    }
}

<?php

namespace App\Console\Commands;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Console\Command;

class TesteVerifyFinishCleans extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'teste:testeVerifyFinishClen';

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
        $services = Service::where('status_id', 3)
            ->select('id', 'value', 'client_id', 'service_type_id')
            ->has('slots_contain_professionals')
            ->whereDate('start_time', '>=', '2022-06-30')
            ->whereDate('start_time', '<=', Carbon::now()->subDays(2)->toDateString())
            ->whereNull('deleted_at')
            ->pluck('id');
        dd(
            "-----------Data de inicio 2022-06-30 ---- Data Final " . Carbon::now()->subDays(2)->toDateString() .
                "\n Total de serviços não finalizados: " . $services->count() .
                "\n" . $services
        );
    }
}

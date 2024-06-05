<?php

namespace App\Console\Commands;

use App\Http\Controllers\Services\SubscriptionController;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RenewSubscriptionsCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'renewSubscriptions:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This cron job is used to renew automatically all the active subscriptions. :D';

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
        $now = Carbon::now()->format("d-m-Y H:i:s");
        Log::info("renewSubscriptions:cron started succesfully at  $now");


        $subscriptionsToRenew = SubscriptionController::subscriptionsAvailableRenew();

        if (count($subscriptionsToRenew) > 0) {

            Log::info("Foram encontradas: " . count($subscriptionsToRenew) . " assinaturas para serem renovadas");
            foreach ($subscriptionsToRenew as $subscription) {
                $request = new Request;
                $request->merge([
                    "subscription_id" => $subscription->id,
                    "user_id" => $subscription->client_id,
                    "cod_source" => 2
                ]);
                $renewSubscription = SubscriptionController::renewSubscription($request);

                if ($renewSubscription->getStatusCode() !== 200) {
                    Log::info("Erro ao renovar a assinatura $subscription->id");
                    // $subscription->update([
                    //     "status_id" => 5
                    // ]);
                } else {
                    Log::info("Assinatura $subscription->id renovada com sucesso!");
                }
            }
        } else {
            Log::info("Não foi encontrada nenhuma assinatura para renovar hoje");
        }

        Log::info("renewSubscriptions:cron finished succesfully at  $now");
    }
}

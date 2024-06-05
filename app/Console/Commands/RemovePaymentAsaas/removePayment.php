<?php

namespace App\Console\Commands\RemovePaymentAsaas;

use App\Models\Asaas\Asaas;
use App\Models\Asaas\AsaasBilling;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

class removePayment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'removePaymentAsaas:cron';

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
        $users = User::where('status', 1)
            ->where('role_id', 3)
            ->has('professional')
            ->has('asaas_customer')
            ->whereNull('deleted_at')
            ->get();
        $idsAsaasPayment = [];
        foreach ($users as $key => $user) {
            Log::info("Removendo pagamento de " . $user->name);
            $responseArray = $this->getPayment($user);
            $idsAsaasPayment = array_merge($idsAsaasPayment, $responseArray);
        }

        foreach ($idsAsaasPayment as $asaasId) {
            # code...
           $this->deletPaymentAsaas($asaasId);
        }
    }


    public function getPayment($user)
    {
        $asaasTokens = Asaas::tokens();
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'access_token' => $asaasTokens->access_token
        ])->get(config("routes.ASAAS") . 'payments?customer=' . $user->asaas_customer->customer_id);

        
        
        $ids = [];
        if ($response->successful()) {
            $jsonResponse = json_decode($response->getBody()->getContents());
            $collection = collect($jsonResponse->data);
 
            $paymentFilter = $collection->filter(function ($payment) {
                return $payment->value == 21 && $payment->dateCreated == '2022-11-07' && $payment->status == "PENDING";
            });
            
            
            //verifica se esse pagamento existe na tabela asaasBillings se não existir bota no array
            foreach ($paymentFilter as $payment) {
                # code...
                $existAsaasBilling = AsaasBilling::where('asaasPaymentId', $payment->id)->exists();
                if (!$existAsaasBilling) {
                    array_push($ids, $payment->id);
                }
            }
        }
        return $ids;
    }

    public function deletPaymentAsaas($idPayment){
        $asaasTokens = Asaas::tokens();
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'access_token' => $asaasTokens->access_token
        ])->delete(config("routes.ASAAS") . 'payments/' . $idPayment);
        if ($response->successful()) {
            Log::info('Pagamento excluido com sucesso: '.$idPayment);
        }
    }
}

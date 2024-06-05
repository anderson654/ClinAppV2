<?php

namespace App\Console\Commands\CronTestes\UpdateNotifications;

use App\Models\Asaas\AsaasCustomer;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class UpdateNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'teste:updateNotificationsCustomer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Este comando modifica o recebimento de email do customer asaas.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $response = Http::withHeaders([
        //     'Content-Type' => 'application/json',
        //     'access_token' => '5d05846688b9be4e17d46cf461311db3aad2a794434d4d3c6ce44362f0820c3e'
        // ])->get(
        //     'https://www.asaas.com/api/v3/customers/' . 'cus_000032794406' . '/notifications'
        // );

        // if ($response->successful()) {
        //     $jsonResponse = json_decode($response->getBody()->getContents());
        //     dd($jsonResponse);
        // }

        $customersid = AsaasCustomer::get()->pluck('customer_id')->toArray();
        foreach ($customersid as $key => $customerid) {
            # code...
            $this->disabledNotifications($customerid);
        }
        return Command::SUCCESS;
    }

    public function disabledNotifications($customer)
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'access_token' => '5d05846688b9be4e17d46cf461311db3aad2a794434d4d3c6ce44362f0820c3e'
        ])->post('https://www.asaas.com/api/v3/customers/' . $customer, [
            "notificationDisabled" => true
        ]);

        if ($response->successful()) {
            $jsonResponse = json_decode($response->getBody()->getContents());
        } else {
            Log::info('Erro ao desabilitar notificação: ' . $customer);
        }
    }
}

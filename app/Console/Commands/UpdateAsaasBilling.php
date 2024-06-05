<?php

namespace App\Console\Commands;

use App\Models\Asaas\AsaasBilling;
use App\Models\Payment;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class UpdateAsaasBilling extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'teste:updateAsaasBilling';

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
        $asaasBillings = AsaasBilling::get();
        $totalAsaasBilling = 0;
        foreach ($asaasBillings as $key => $asaasBilling) {
            $totalAsaasBilling++;
            # code...
            //$this->checkStatusAsaasBilling($asaasBilling);
            $this->updateStatusPaymentToAsaasBilling($asaasBilling);
        }
        Log::info('total de asaas billings: ' . $totalAsaasBilling);
    }

    public function checkStatusAsaasBilling($asaasBilling)
    {
        $response = Http::withoutVerifying()->withHeaders([
            'Content-Type' => 'application/json',
            'access_token' => '5d05846688b9be4e17d46cf461311db3aad2a794434d4d3c6ce44362f0820c3e'
        ])->get(config("routes.ASAAS") . 'payments/' . $asaasBilling->asaasPaymentId);

        if ($response->getStatusCode() == 200) {
            $responseObject = json_decode($response->getBody()->getContents());
            $asaasBilling->status = $responseObject->status;
            $asaasBilling->deleted = $responseObject->deleted == false ? 0 : 1;
            $asaasBilling->save();
        } else {
            Log::info($response);
        }
    }

    public function updateStatusPaymentToAsaasBilling($asaasBilling)
    {
        if ($asaasBilling->deleted) {
            return $this->updateStatusPayment($asaasBilling, 3);
        }
        switch ($asaasBilling->status) {
            case 'RECEIVED':
                # code...
                return $this->updateStatusPayment($asaasBilling, 12);
                break;
            case 'CONFIRMED':
                return $this->updateStatusPayment($asaasBilling, 2);
                # code...
                break;
            case 'PENDING':
                return $this->updateStatusPayment($asaasBilling, 1);
                # code...
                break;
            case 'OVERDUE':
                return $this->updateStatusPayment($asaasBilling, 13);
                # code...
                break;

            default:
                # code...
                break;
        }
    }

    public function updateStatusPayment($asaasBilling, $statusId)
    {
        $payment = Payment::find($asaasBilling->payment_id);
        if (isset($payment)) {
            $payment->payment_status_id = $statusId;
            $payment->save();
            return $payment;
        }
    }
}

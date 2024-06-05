<?php

namespace App\Http\Controllers;

use App\Models\Asaas\AsaasBilling;
use App\Models\Asaas\AsaasCustomer;
use App\Models\Juno_token;
use App\Models\Payment;
use App\Models\ServicesFeedbacks;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StudioDetailController extends Controller
{
    //
    public function index()
    {
        $comentarios = ServicesFeedbacks::whereNotNull('text')->whereNotNull('professional_user_id')->with('professional_user.professional', 'service.client_service:id,name')
            ->has('professional_user')
            ->whereBetween('evaluate', [4, 5])->latest('id')->take(10)->get();
        return view('clinDetail.clinDetail', compact('comentarios'));
    }

    public function checkOut($id)
    {
        $url = "https://www.asaas.com/api/v3/payments/$id";


        //regra para pegar o token certo
        $asaasBilling = AsaasBilling::where('asaasPaymentId', $id)->first();
        $customer = AsaasCustomer::where('customer_id', $asaasBilling->asaasCustomerId)->first();
        $franchiseId = $customer->franchise_id ?? 1;



        $accessToken = Juno_token::where('franchise_id', $franchiseId)->where('payment_gateway_id', 2)->first()['access_token'];

        //pega a fatura 
        try {
            $response = Http::withHeaders([
                'access_token' => $accessToken
            ])->get($url);

            // Verifique se a resposta foi bem-sucedida (código de status 2xx)
            if ($response->successful()) {
                $payment = $response->json(); // Obtém o corpo da resposta como um array JSON
            } else {
                // Lida com erros caso ocorram
                return "erro ao pegar a fatura" . $response->status();
            }
        } catch (Exception $e) {
            // Trata qualquer exceção que possa ocorrer
            return $e->getMessage();
        }


        //pega o dono da fatura
        $url = "https://www.asaas.com/api/v3/customers/" . $payment['customer'];
        try {
            $response = Http::withHeaders([
                'access_token' => $accessToken
            ])->get($url);

            // Verifique se a resposta foi bem-sucedida (código de status 2xx)
            if ($response->successful()) {
                $customer = $response->json(); // Obtém o corpo da resposta como um array JSON
            } else {
                // Lida com erros caso ocorram
                return "erro ao pegar o dono da fatura" . $response->status();
            }
        } catch (Exception $e) {
            // Trata qualquer exceção que possa ocorrer
            return $e->getMessage();
        }

        //pegar a ordem
        $asaasBilling = AsaasBilling::where('asaasPaymentId', $id)->first();
        if ($asaasBilling) {
            $paymentId = $asaasBilling['payment_id'];
            $orderId = Payment::find($paymentId)['order_id'];
        } else {
            $orderId = "0";
        }

        $qrCode = null;
        if ($payment['status'] === "PENDING" && in_array($payment['billingType'], ['PIX', 'UNDEFINED']) && $payment['deleted'] != true) {
            //obter o pix da cobrança caso a cobrança não tenha sido paga;
            $url = "https://www.asaas.com/api/v3/payments/$id/pixQrCode";
            try {
                $response = Http::withHeaders([
                    'access_token' => $accessToken
                ])->get($url);

                // Verifique se a resposta foi bem-sucedida (código de status 2xx)
                if ($response->successful()) {
                    $qrCode = $response->json(); // Obtém o corpo da resposta como um array JSON
                } else {
                    // Lida com erros caso ocorram
                    return "Erro ao obter pix" . $response->status();
                }
            } catch (Exception $e) {
                // Trata qualquer exceção que possa ocorrer
                return $e->getMessage();
            }
        }
        // dd($qrCode);

        return view('clinDetail.paymentPage.payment', compact('payment', 'customer', 'orderId', 'qrCode'));
    }
}

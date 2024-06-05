<?php

namespace App\Http\Controllers;

use App\Models\Juno_token;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class PaymentInvoice extends Controller
{
    //
    public function paymentInvoiceCard(Request $request, $id)
    {
        $url = "https://www.asaas.com/api/v3/payments/$id";
        $accessToken = Juno_token::where('franchise_id', 1)->where('payment_gateway_id', 2)->first()['access_token'];

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
                return $response->status();
            }
        } catch (Exception $e) {
            // Trata qualquer exceção que possa ocorrer
            return $e->getMessage();
        }

        $request->merge(["customer" => $payment['customer']]);

        //valida se todos os dados estão aqui para tokenizar o cartão.
        $validator = Validator::make($request->all(), [
            "creditCardCcv" => "required|string",
            "creditCardHolderName" => "required|string",
            "creditCardExpiryMonth" => "required|string",
            "creditCardNumber" => "required|string",
            "creditCardExpiryYear" => "required|string",
            "customer" => "required|string"
        ]);

        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()], 422);
        }

        //tokenizar o cartão
        try {
            //code...
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'access_token' => $accessToken
            ])->post('https://www.asaas.com/api/v3/creditCard/tokenizeCreditCard', $request->all());

            if ($response->successful()) {
                $tokenCard = $response->json(); // Obtém o corpo da resposta como um array JSON
            } else {
                // Lida com erros caso ocorram
                return $response->status();
            }
        } catch (\Throwable $th) {
            //throw $th;
            return $th->getMessage();
        }


        //pagar a fatura com o token gerado
        try {
            //code...
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'access_token' => $accessToken
            ])->post("https://www.asaas.com/api/v3/payments/$id/payWithCreditCard", [
                "creditCardToken" => $tokenCard['creditCardToken']
            ]);

            if ($response->successful()) {
                $statusPayment = $response->json(); // Obtém o corpo da resposta como um array JSON
            } else {
                // Lida com erros caso ocorram
                return $response->status();
            }
        } catch (\Throwable $th) {
            //throw $th;
            return $th->getMessage();
        }

        return response()->json($statusPayment);
    }

    public function template()
    {
        return  view('Mail.teste');
    }
    public function subscriptionEmail($id)
    {
        $user = User::find($id);
        $email = $user->email;
        $statusNotifyEmail = $user->notify_email !== 0;
        $userId = $user->id;
        return  view('Mail.subscriptionEmail', compact('email', 'statusNotifyEmail', 'userId'));
    }
}

<?php

namespace App\Models\Asaas;

use App\Models\Juno_token;
use App\Models\PaymentAccount;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asaas extends Model
{
    use HasFactory;

    public static function tokens($franchiseId = 1)
    {
        $junoToken = Juno_token::where('payment_gateway_id', 2)->first();
        if(env("APP_ENV") == "production"){
            if ($franchiseId) {
                $junoToken = Juno_token::where('payment_gateway_id', 2)->where('franchise_id', $franchiseId)->first();
            }
        }else{
            if ($franchiseId && $franchiseId == 1) {
                $junoToken->access_token = env("ASAAS_SANDBOX_ACCESS_TOKEN");
            } else {
                $junoToken->access_token = env("ASAAS_SANDBOX_ACCESS_TOKEN_CHILDREN");
            }
        }
        return $junoToken;
    }

    //ajustar wallet id para pegar o franquiado
    public static function walletId($userId)
    {
        //ajustar aqui para pegar o walletId da franquia
        $paymentAccount = PaymentAccount::first();

        if (env("APP_ENV") != "production") {
            $paymentAccount->walletId = env("ASAAS_SANDBOX_WALLET_ID");
        } else {
            $paymentAccount->walletId = "17ef2555-298f-4c59-9a36-7ca234599736";
        }

        return $paymentAccount;
    }

    public static function walletMaster()
    {
        //ajustar aqui para pegar o walletId da franquia
        $paymentAccount = PaymentAccount::first();

        if (env("APP_ENV") != "production") {
            $paymentAccount->walletId = env("ASAAS_SANDBOX_WALLET_ID");
        } else {
            $paymentAccount->walletId = "0d03c02f-2472-4bae-a8c0-5c0895f99025";
            //criar a outra conta asaas e colocar aqui
        }

        return $paymentAccount;
    }
}

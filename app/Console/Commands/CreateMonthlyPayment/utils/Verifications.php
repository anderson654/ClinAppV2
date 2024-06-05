<?php

namespace App\Console\Commands\CreateMonthlyPayment\utils;

use App\Models\Payment;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Log;

class Verifications
{
    public static function verifyExistMonthlyPayment($user)
    {
        //já existe uma mensalidade gerada esse mês?
        $payment = Payment::where('user_id', $user->id)->where('payment_category', 1)->whereYear('created_at', date('Y'))->whereMonth('created_at', '=', date('m'))->exists();
        if($payment) throw new Exception("Essa profissional já possui uma mensalidade verifyExistMonthlyPayment");
        return !$payment;
    }

    public static function isProfessional($user)
    {
        if(!$user->professional){
            throw new Exception("Não foi possivel associar esse user a uma profissional isProfessional");
            return false;
        }
        return true;
    }

    public static function existCustomerUser($user)
    {
        if(!$user->asaas_customer){
            //se não encontrar tenta criar um customer aqui se não conseguir retorna erro
            $request = Asaas::createRequestCustomer($user);
            Asaas::validateRequestCustomer($request);
            $asaasCustomer = Asaas::createNewCustomer($request);
        }
        $customerId = $user->asaas_customer->customer_id ?? $asaasCustomer->id;
        return $customerId;
    }
}

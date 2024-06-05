<?php

namespace App\Console\Commands\DiscountProfessional\utils;

use Exception;

class Verifications
{
    public static function verifyExistAccountAsaas($user)
    {
        //verifica se a profissional tem uma conta no asaas
        if (!$user->payment_account) {
            throw new Exception("Essa profissional não possui uma conta asaas");
            return false;
        }
        return true;
    }
}

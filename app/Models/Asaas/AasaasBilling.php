<?php

namespace App\Models\Asaas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsaasBilling extends Model
{

    use HasFactory;

    protected $fillable = ['asaasPaymentId', 'identificationField', "paymentLink"];
}

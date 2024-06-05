<?php

namespace App\Models\Asaas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsaasCustomer extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'customer_id'];
}

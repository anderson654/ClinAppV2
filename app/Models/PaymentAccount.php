<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentAccount extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'agency', 'accountNumber', 'user_id', 'franchise_id', 'walletId', 'apiKey', 'payment_gateway_id', 'pixKey','accountDigit'];
    protected $hidden = ['created_at', 'created_at'];

    public function professional()
    {
        return $this->hasOne(Professional::class, 'user_id', 'user_id')->whereNull('deleted_at');
    }
    public function count_transfer()
    {
        return $this->hasOne(CountTransfer::class, 'payment_account_id', 'id');
    }
}

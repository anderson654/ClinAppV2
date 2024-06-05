<?php

namespace App\Models\Cashback;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cashback extends Model
{
    use HasFactory;

    public function cashback_type()
    {
        return $this->hasOne(CashbackType::class, 'id', 'cashback_type_id');
    }
    public function payment()
    {
        return $this->hasOne(Payment::class, 'id', 'transaction_id');
    }
}

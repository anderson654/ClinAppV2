<?php

namespace App\Models\Cashback;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CashbackType extends Model
{
    use HasFactory;
    protected $appends = ['total_cashback'];

    public function getTotalCashbackAttribute()
    {
        $user_id = Auth::user()->id;
        $totalCashback = Cashback::where('user_id', $user_id)->where('cashback_type_id', '!=', $this->id)->get()->sum('amount');
        return $totalCashback ?? 0.00;
    }
}

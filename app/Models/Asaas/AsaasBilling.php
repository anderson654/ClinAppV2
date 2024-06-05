<?php

namespace App\Models\Asaas;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class AsaasBilling extends Model
{
    use HasFactory;
    protected $fillable = ['asaasPaymentId', 'identificationField', "paymentLink", "status"];

    public function payment_awaiting()
    {
        //aguardando pagamento
        return $this->hasOne(Payment::class, 'id', 'payment_id')->where('payment_status_id', 1)->whereDate('due_date', '<', Carbon::now()->toDateString());
    }
}

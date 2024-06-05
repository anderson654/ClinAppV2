<?php

namespace App\Models;

use App\Models\Asaas\AsaasBilling;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Payment
 *
 * @package App
 * @property string $title
 */
class Payment extends Model
{
    use SoftDeletes;

    protected $fillable = ['subscription_id', 'payment_status_id', 'payment_date', 'value', 'month', 'link_pagamento', 'code_boletofacil', 'link_boleto', 'payment_category', 'user_id', 'order_id', 'payment_type', 'reference_month', 'service_slot_id', 'payment_account_id',  'payment_method_id',  'due_date', 'franchise_id', 'service_id'];
    //protected $hidden = ["payment_status_id"];
    protected $appends = ['title_status_payment', 'services'];


    /**
     * Determine if the user is an administrator.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */

    protected function titleStatusPayment(): Attribute
    {
        return new Attribute(
            fn () => $this->hasOne(PaymentStatus::class, 'id', 'payment_status_id')->first()->title
        );
    }

    public function getServicesAttribute()
    {
        $payment = $this;
        if (isset($payment->order_id)) {
            $service = Service::where('order_id', $payment->order_id)->select('id', 'value', 'service_type_id')->get();
            return $service;
        }
        return [];
        // return $services =  $this->belongsTo(Service::class,'order_id','order_id')->select('value', 'service_type_id')->get()->makeHidden('service_type_id');
    }




    public function payment_status()
    {
        return $this->belongsTo(PaymentStatus::class, 'payment_status_id');
    }
    public function subscription()
    {
        return $this->belongsTo(Subscription::class, 'subscription_id')/*->where('role_id', 4)*/;
    }
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id')/*->where('role_id', 4)*/;
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')/*->where('role_id', 4)*/;
    }

    public function payment_method()
    {
        return $this->hasOne(PaymentMethods::class, "id", "payment_method_id");
    }

    public function payment_professional()
    {
        return $this->hasOne(Professional::class, 'user_id', 'user_id');
    }

    public function payment_paymentAccount()
    {
        return $this->hasOne(PaymentAccount::class, 'user_id', 'user_id');
    }

    public function slot_payment()
    {
        return $this->hasOne(ServiceSlot::class, 'id', 'service_slot_id');
    }

    public function franchise()
    {
        return $this->hasOne(Franchise::class, 'id', 'franchise_id');
    }
    public function active_user()
    {
        return $this->belongsTo(User::class, 'user_id')->where('status', 1);/*->where('role_id', 4)*/;
    }
    public function asaas_billings(){
        return $this->hasOne(AsaasBilling::class, 'payment_id', 'id');
    }
}

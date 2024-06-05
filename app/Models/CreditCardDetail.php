<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Credit_card_details
 *
 * @package App
 * @property string $title
 */
class CreditCardDetail extends Model
{
    protected $fillable = ['user_id', 'last4CardNumber', 'creditCardId', "expirationYear", "expirationMonth", "payment_gateway_id"];
    protected $hidden = ["created_at", "updated_at"];
}

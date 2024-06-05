<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PaymentStatus
 *
 * @package App
 * @property string $title
 */
class PaymentStatus extends Model
{
	protected $fillable = ['title'];
	protected $hidden = ["created_at", "updated_at", "laravel_through_key"];

	const AGUARDANDO_PAGAMENTO = 1;
	const PAGO = 2;
	const CANCELADO = 3;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PaymentStatus
 *
 * @package App
 * @property string $title
 */
class PaymentType extends Model
{
	protected $fillable = ['title'];
	protected $hidden = [];

	const BOLETO_BANCARIO = 0;
	const CARTAO_DE_CREDITO = 1;
	const PIX = 3;
}

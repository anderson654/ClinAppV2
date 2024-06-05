<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountCategory extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'base_price_id', 'time_less_than', 'time_bigger_than', 'factor_discount'];
    protected $hidden = [];
}

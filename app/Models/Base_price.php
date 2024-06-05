<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Base_price extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'base_price', 'price_hour', 'factor_products', 'city_id'];
    protected $hidden = [];


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_type_category_item_price extends Model
{
    use HasFactory;

    public function region()
    {
        return $this->hasOne(Region::class, 'id', 'region_id');
    }
}

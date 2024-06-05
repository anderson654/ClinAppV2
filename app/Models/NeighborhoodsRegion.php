<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NeighborhoodsRegion extends Model
{
    use HasFactory;

    public function region()
    {
        return $this->hasOne(Region::class, 'id', 'region_id');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Neighborhood extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'cidade_id', 'region_id', 'city_id'];

    protected $hidden = ["created_at", "updated_at"];


    public function region()
    {
        return $this->hasOne(Region::class, 'id', 'region_id');
    }
}

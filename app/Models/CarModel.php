<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    protected $fillable = ["id", "manufacturer_id", "title"];


    public function manufacturer()
    {
        return $this->hasOne(CarManufacturer::class, 'id', 'manufacturer_id');
    }
}

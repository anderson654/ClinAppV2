<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class CarsClient extends Model
{
    use HasFactory;

    protected $fillable = ['car_model_id', 'car_category_id', 'user_id', 'color', 'license_plate'];
    protected $hidden = ["created_at", "updated_at"];

    protected $appends = ['car_model_title', "car_manufacturer_title"];


    protected function carModelTitle(): Attribute
    {
        $model_title =  $this->with("car_model")->first()["car_model"]["title"];

        return new Attribute(
            fn ()
            => $model_title,
        );
    }

    protected function carManufacturerTitle(): Attribute
    {
        $manufacturer =  $this->with("car_model.manufacturer")->first()["car_model"]["manufacturer"]["title"];

        return new Attribute(
            fn ()
            => $manufacturer,
        );
    }

    public function car_model()
    {

        return $this->hasOne(CarModel::class, 'id', 'car_model_id');
    }

    function scopeInfo($query)
    {
        return $query->with([
            'car_model.manufacturer'
        ]);
    }
}

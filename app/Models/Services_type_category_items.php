<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services_type_category_items extends Model
{
    use HasFactory;




    public function value(){
        return $this->belongsTo(Service_type_category_item_price::class, 'id', 'service_type_category_item_id');
    }

    public function services_type_category_items(){

        return $this->hasMany(Services_type_category_items::class, 'service_type_category_id');
    }

    public function service_type_category_item_price(){

        return $this->hasMany(Service_type_category_item_price::class, 'service_type_category_item_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services_type_category extends Model
{
    use HasFactory;
    protected $fillable = ['services_type_id', 'title', 'icon'];
    protected $hidden = ["created_at", "updated_at"];

    public function service_type_category_items()
    {

        return $this->hasMany(Services_type_category_items::class, 'service_type_category_id');
    }
}

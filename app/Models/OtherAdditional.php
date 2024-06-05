<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherAdditional extends Model
{
    use HasFactory;

    protected $fillable = ['value', 'add_value_type_id', 'description'];

    protected $hidden = ['created_at', 'updated_at'];
}

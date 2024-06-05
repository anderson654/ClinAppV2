<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarManufacturer extends Model
{
    protected $fillable = ["id", "title"];
    protected $hidden = ["created_at", "updated_at"];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReasonType extends Model
{
    use HasFactory;

    protected $table = "reason_type";

    protected $hidden = ["created_at", "updated_at", "deleted_at"];
}

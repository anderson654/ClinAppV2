<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileDocument extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','front_of_document','back_of_document','selfie','proof_of_residence'];
}

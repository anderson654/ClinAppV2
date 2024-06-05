<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordPagclin extends Model
{
    use HasFactory;
    protected $table = 'password_pagclin';
    protected $fillable = ['password', 'user_id'];
}

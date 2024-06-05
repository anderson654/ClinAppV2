<?php

namespace App\Models\Aws;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporaryS3Url extends Model
{
    protected $fillable = ['file', 'temporary_url', 'validate'];

    use HasFactory;
}

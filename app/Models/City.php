<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    use HasFactory;

    protected $fillable = ['title', 'state_id', 'city'];

    public $timestamps = false;

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }
}

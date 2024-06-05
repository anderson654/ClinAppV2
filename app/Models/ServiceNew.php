<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceNew extends Model
{
    use HasFactory;
    protected $table = 'services';

    public function client()
    {
        return $this->hasOne(User::class, 'id', 'client_id');
    }
    public function client_address()
    {
        return $this->hasOne(Address::class, 'id', 'client_address_id');
    }
}

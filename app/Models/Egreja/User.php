<?php

namespace App\Models\Egreja;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $connection = 'egreja_db';

    protected $fillable = [
        'name',
        //'email',
        //'password',
        'costumer_id',
        'phone', // Adicione essa linha
        // ... outros atributos preenchíveis
    ];
}

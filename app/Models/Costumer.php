<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Costumer extends Model
{
    use HasFactory;
    protected $table = 'clients';

    use SoftDeletes;
    protected $fillable = ['user_id', 'name', 'cpf', 'birthdate', 'gender', 'deleted_at'];



    /**
     * Hash password
     * @param $input
     */


	public function city()
    {
        return $this->belongsTo(city::class, 'city_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
	public function contact()
    {
        return $this->belongsTo(Contact::class, 'client_id');
    }
	public function address()
    {
        return $this->belongsTo(Address::class, 'client_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;

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
        return $this->belongsTo(User::class, 'user_id');
    }
	public function contact()
    {
        return $this->belongsTo(Contact::class, 'user_id', 'user_id');
    }
	public function address()
    {
        return $this->belongsTo(Address::class, 'user_id', 'user_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $hidden = ["created_at", "updated_at"];

    public function franchise()
    {
        return $this->hasOne(Franchise::class, 'id', 'franchise_id');
    }

    public static function getRegion($client_address_id)
    {

        $client_address = Address::where('id', $client_address_id)->first();

        $neighborhood = Neighborhood::where('id', $client_address->neighborhood_id)->first();

        return Region::where('id', $neighborhood->region_id)->first();
    }
}

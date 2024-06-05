<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Franchise extends Model
{
    use HasFactory;

    public static function getFranchise($client_address_id)
    {


        $client_address = Address::where('id', $client_address_id)->first();

        $neighborhood = Neighborhood::where('id', $client_address->neighborhood_id)->first();

        $region = Region::where('id', $neighborhood->region_id)->first();

        return Franchise::where('id', $region->franchise_id)->first();
    }

    public function franchiseAsaasAccount()
    {
        return $this->hasOne(PaymentAccount::class, 'user_id', 'user_id');
    }
}

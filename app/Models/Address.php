<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Psr7\Message;
use GuzzleHttp\Client;

class Address extends Model
{
    use HasFactory;

    use Notifiable;
    protected $fillable = ['user_id', 'street', 'number', 'complement', 'zip', 'neighborhood', 'neighborhood_id', 'city_id', 'qt_bathrooms', 'qt_bedrooms', 'title_city', 'title'];

    protected $hidden = ['created_at', 'updated_at', "location_latitude", "location_longitude",  "address_type_id", "qt_bedrooms", "qt_bathrooms", "location_address", "address_type_id"];

    protected $appends = ["city_title", "region"];

    public function getCityTitleAttribute()
    {
        $city = City::where("id", $this->city_id)->first();
        if (isset($city)) {
            return $city->title;
        }
        return null;
    }

    public function getRegionAttribute()
    {
        $city = City::where("id", $this->city_id)->first();
        if (isset($city)) {
            $neighborhoods = Neighborhood::where('city_id', $city->id)->first();
            if (isset($neighborhoods)) {
                $region = Region::where('id', $neighborhoods->region_id)->first();
                return $region;
            }
            return null;
        }
        return null;
    }

    public function region()
    {
        return $this->hasOneThrough(Region::class, Neighborhood::class, "id", "id", "neighborhood_id", "region_id");
    }
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function getNeighborhood()
    {
        return $this->hasOne(Neighborhood::class, 'id', 'neighborhood_id');
    }


    public function neighborhoods()
    {
        return $this->hasOne(Neighborhood::class, 'id', 'neighborhood_id');
    }

    public static function apiCep($cep)
    {

        $app_key = env("API_CEP_APP_KEY");
        $app_secret = env("API_CEP_APP_SECRET_KEY");
        $webmania_token = env("API_WEBMANIA_TOKEN");

        try {
            $client = new Client(['headers' => ['Content-Type' => 'application/json']]);
            $res = $client->request('GET', "viacep.com.br/ws/$cep/json/");
            $content = $res->getBody()->getContents();
            $jsonCep = json_decode($content, true);


            return response()->json([
                "zip" => $jsonCep['cep'],
                "street" =>  $jsonCep['logradouro'],
                "complement" =>  $jsonCep['complemento'],
                "neighborhood" =>  $jsonCep['bairro'],
                "city" =>  $jsonCep['localidade'],
                "uf" =>  $jsonCep['uf']
            ], 200);
        } catch (ClientException $e) {
            $client = new Client(['headers' => ['X-Token' => $webmania_token, 'Content-Type' => 'application/json']]);
            $res = $client->request('GET', "https://webmaniabr.com/api/1/cep/$cep/?app_key=$app_key&app_secret=$app_secret");

            //Arrumar
            $content = $res->getBody()->getContents();
            $jsonCep = json_decode($content, true);


            return response()->json([
                "zip" => $jsonCep['cep'],
                "street" =>  $jsonCep['logradouro'],
                "complement" =>  $jsonCep['complemento'],
                "neighborhood" =>  $jsonCep['bairro'],
                "city" =>  $jsonCep['localidade'],
                "uf" =>  $jsonCep['uf']
            ], 200);
        }
    }

    public function setZipAttribute($value)
    {
        $this->attributes['zip'] = str_replace(['.', '-'], '', $value);
    }
}

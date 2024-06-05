<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\City;
use App\Models\Log_central;
use App\Models\Neighborhood;
use App\Models\Neighborhoods;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AddressController extends Controller
{
    public function checkNeighbourhood(string $neighborhood, int $city_id)
    {
        $neighbourhood = Neighborhood::where("title", $neighborhood)->where("city_id", $city_id)->first();

        // Se não existir esse bairro cadastrado no DB
        if (!$neighbourhood) {
            return false;
        }

        return $neighbourhood;
    }

    public function getAddress($id)
    {
        return Address::where('user_id', $id)->get();
    }

    public function getAddresses(Request $request)
    {
        return  Address::where('user_id', $request->user_id)
            ->where("deleted_at", null)
            ->get()->makeHidden("neighborhood_id", "deleted_at", "cidade_id");
    }

    public function updateAddress(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'zip' => "required|string",
            'street' => "required|string",
            'neighborhood' => "required|string",
            'number' => "required",
            'user_id' => "required",
            'city'  => "required",
            'uf' => "required"
        ]);

        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()], 422);
        };

        if (!preg_match('/^[0-9]{5}-[0-9]{3}$/', $request->zip)) {
            return response()->json(["message" => "Insira um cep válido."], 422);
        };

        $newZip = str_replace('-', '', $request->zip);

        $city = $this->isCityAvailableToBeServed($request->city, $request->uf);

        $neighbourhood = $this->checkNeighbourhood($request->neighborhood, $city->id);

        if (!$neighbourhood) {
            return response()->json(["message" => "Ainda não atendemos essa região."], 422);
        }

        $city = City::where('title', $request['city'])->first();

        if ($city) {
            $address = Address::where('id', $id)->first();
            $address->update([
                'title' => $request->title ? $request->title : null,
                'zip' => $newZip,
                'street' => $request->street,
                'neighborhood' => $request->neighborhood,
                'city_id' => $city->id,
                'complement' => $request->complement,
                'number' => $request->number
            ]);

            return response()->json($address);
        } else {
            return response()->json(["message" => "Cidade não encontrada, favor entrar em contato com o atendimento."], 422);
        }
    }

    public function deleteAddress($id)
    {

        Address::where('id', $id)->update(array('deleted_at' => Carbon::now()));

        return response()->json(['message' => 'success']);
    }

    public function createAddress(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'zip' => 'required',
            'street' => 'required|string|min:5',
            'neighborhood' => 'required',
            'number' => 'required',
            'user_id' => 'required',
            'title_city' => 'required',
            'cod_source' => 'required',
            'source_request' => 'required',
            'salesman_id' => 'required',
            'uf' => 'required'
        ]);
        if ($validator->fails()) {
            $messageError = $validator->errors();
            /*****************LOG CENTRAL*********************/
            Log_Central::Create([
                'user_id' => $request["user_id"] ? $request["user_id"] : null,
                'cod_source' => $request["cod_source"],
                'salesman_id' => $request['salesman_id'],
                'source' =>  "app/AddressController => function createAddress / Source_requester => " . ($request["source_request"] ?  $request["source_request"] : 0),
                'event_type' => "E",
                'log'      => 'ERRO => ' . $messageError,
            ]);
            /*****************FIM LOG CENTRAL*********************/

            return response()->json($messageError, 422);
        }

        if (!preg_match('/^[0-9]{5}-?[0-9]{3}$/', $request->zip)) {
            return response()->json(["message" => "Insira um cep válido."], 422);
        };

        //Verifica se atendemos a região
        $city = City::where('title', $request->title_city)->whereHas('state', function ($query) use ($request) {
            $query->where('uf', $request["uf"]);
        })->first();

        $city = $this->isCityAvailableToBeServed($request->title_city, $request["uf"]); // Verifica se existe um estado cadastrado em "states" que contem a cidade solicitada.

        if ($city != null) {
            $neighbourhood = $this->checkNeighbourhood($request->neighborhood, $city->id);
            if (!$neighbourhood) {
                return response()->json(["message" => "Ainda não atendemos a região de $request->title_city"], 422);
            }

            $address = Address::create([
                'title' => $request->title,
                'zip' => $request->zip,
                'street' => $request->street,
                'neighborhood' => $request->neighborhood,
                'neighborhood_id' => $neighbourhood->id,
                'city_id' => $city->id,
                'complement' => $request->complement,
                'number' => $request->number,
                'user_id' => $request->user_id
            ]);

            return response()->json($address);
        } else {

            $errorMessage = 'Não Atendemos a sua região';
            /*****************LOG CENTRAL*********************/
            Log_Central::Create([
                'user_id' => $request["user_id"] ?  $request["user_id"] : 0,
                'cod_source' => $request['cod_source'] ? $request['cod_source'] : 0,
                'salesman_id' => $request['salesman_id'],
                'source' =>  "app/AddressController => function createAddress / Source_requester => " . ($request["source_request"] ?  $request["source_request"] : 0),
                'event_type' => "E",
                'log'      => 'ERRO => ' . $errorMessage,

            ]);
            /*****************FIM LOG CENTRAL*********************/
            return response()->json($errorMessage, 422);
        }
    }

    public static function isCityAvailableToBeServed(string $city_title, string $city_uf) // $city_title recebe o nome da cidade, e $city_uf a sigla. 
    {
        $city = City::where('title', $city_title)->whereHas('state', function ($query) use ($city_uf) {
            $query->where('uf', $city_uf);
        })->first();

        if (isset($city)) {
            return $city;
        }

        return null;
    }

    public function changeCidadesToCities()
    {

        $cidades = \App\Models\Cidade::get();


        foreach ($cidades as $cidade) {
            $city = City::where('title', $cidade->cidade)->first();

            //Update Addresses
            // $addresses = Address::where('cidade_id', $cidade->id)
            //  ->update(['city_id' => $city->id]);

            //Update Neiborhoods
            $addresses = Neighborhood::where('cidade_id', $cidade->id)
                ->update(['city_id' => $city->id]);
        }

        return 'status ok';
    }

    public function completAddress(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|int',
            'address_id' => 'required|int',
            'number' => 'required|int'
        ]);
        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()], 422);
        };
        $address = Address::where('user_id', $request->user_id)->where('id', $request->address_id)->first();
        $address->update($request->only(['number', 'complement']));
        return response($address);
    }
}

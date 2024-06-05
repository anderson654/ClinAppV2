<?php

namespace App\Http\Controllers;

use App\Models\Additional;
use App\Models\Address;
use App\Models\CarsClient;
use App\Models\CarManufacturer;
use App\Models\CarModel;
use Illuminate\Support\Facades\Log;
use App\Models\Log_central;
use Illuminate\Http\Request;
use App\Models\Services_type_category;
use App\Models\Service_type_category_item_price;
use App\Models\Services_type_category_items;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

ini_set('max_execution_time', 3500);

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getAll(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'user_id' => 'required|int',
            'cod_source' => 'required',
            'source_request' => 'required'


        ]);
        if ($validator->fails()) {
            $messageError = $validator->errors();
            /*****************LOG CENTRAL*********************/
            Log_Central::Create([
                'user_id' => $request["user_id"] ? $request["user_id"] : null,
                'cod_source' => $request["cod_source"],
                'source' =>  "app/CarsController => function getAll / Source_requester => " . ($request["source_request"] ?  $request["source_request"] : 0),
                'event_type' => "E",
                'log'      => 'ERRO => ' . $messageError,
            ]);
            /*****************FIM LOG CENTRAL*********************/

            return response()->json($messageError, 422);
        }

        $user_logado = Auth::user();

        if ($user_logado->id == $request->user_id) {

            $carsClient = CarsClient::info()->where('user_id', $request->user_id)->get();
            return response()->json($carsClient);
        } else {
            $messageError = 'Usuário sem permissão para realizar esta ação';
            /*****************LOG CENTRAL*********************/
            Log_Central::Create([
                'user_id' => $request["user_id"] ? $request["user_id"] : null,
                'cod_source' => $request["cod_source"],
                'source' =>  "app/CarsController => function getAll / Source_requester => " . ($request["source_request"] ?  $request["source_request"] : 0),
                'event_type' => "E",
                'log'      => 'ERRO => ' . $messageError,
            ]);
            /*****************FIM LOG CENTRAL*********************/

            return response()->json($messageError, 422);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function clientCreateCars(Request $request)
    {
        Log::info($request);
        //Criar modelo de carro;
        //Validator
        $validator = Validator::make($request->all(), [
            'car_model_id' => 'required|int',
            'user_id' => 'required|int',
            'cod_source' => 'required',
            'source_request' => 'required',
            'license_plate' => 'required',
            'color' => 'required'

        ]);
        if ($validator->fails()) {
            $messageError = $validator->errors();
            /*****************LOG CENTRAL*********************/
            Log_Central::Create([
                'user_id' => $request["user_id"] ? $request["user_id"] : null,
                'cod_source' => $request["cod_source"],
                'source' =>  "app/CarsController => function clientCreateCars / Source_requester => " . ($request["source_request"] ?  $request["source_request"] : 0),
                'event_type' => "E",
                'log'      => 'ERRO => ' . $messageError,
            ]);
            /*****************FIM LOG CENTRAL*********************/

            return response()->json($messageError, 422);
        }
        if (Auth::User()->id == $request->user_id) {
            $carClient = CarsClient::Create([
                'car_model_id' => $request->car_model_id,
                'user_id' => $request->user_id,
                'color' => $request->color,
                'license_plate' => $request->license_plate
            ]);

            $messageError = 'Usuário sem permissão para realizar esta ação';
            /*****************LOG CENTRAL*********************/
            Log_Central::Create([
                'user_id' => $request["user_id"] ? $request["user_id"] : null,
                'cod_source' => $request["cod_source"],
                'source' =>  "app/CarsController => function clientCreateCars / Source_requester => " . ($request["source_request"] ?  $request["source_request"] : 0),
                'event_type' => "C",
                'log'      => 'User_id: ' . $request->user_id . 'Cadastrou um novo carro.',
            ]);
            /*****************FIM LOG CENTRAL*********************/
            return response()->json($carClient);
        } else {
            $messageError = 'Usuário sem permissão para realizar esta ação';
            /*****************LOG CENTRAL*********************/
            Log_Central::Create([
                'user_id' => $request["user_id"] ? $request["user_id"] : null,
                'cod_source' => $request["cod_source"],
                'source' =>  "app/CarsController => function clientCreateCars / Source_requester => " . ($request["source_request"] ?  $request["source_request"] : 0),
                'event_type' => "E",
                'log'      => 'ERRO => ' . $messageError,
            ]);
            /*****************FIM LOG CENTRAL*********************/

            return response()->json($messageError, 422);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarsClient  $carsClient
     * @return \Illuminate\Http\Response
     */
    public function show(CarsClient $carsClient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarsClient  $carsClient
     * @return \Illuminate\Http\Response
     */
    public function edit(CarsClient $carsClient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarsClient  $carsClient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarsClient $carsClient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarsClient  $carsClient
     * @return \Illuminate\Http\Response
     */
    public function deleteCarClient(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'car_client_id' => 'required|int'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $res = CarsClient::destroy($request->car_client_id);
        if ($res) {
            return response()->json([
                'message' => 'Carro excluido com sucesso.'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Não foi possivel excluir esse carro.'
            ], 400);
        }
    }

    public function getCarsPrices(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service_type_id' => 'required|int',
            'car_client' => 'required|int',
            'cod_source' => 'required|int',
            'client_address_id' => 'required|int',
        ]);

        if ($validator->fails()) {

            $messageError = $validator->errors();
            /*****************LOG CENTRAL*********************/
            Log_Central::Create([
                'user_id' => ($request->user_id ? $request->user_id : 0),
                'cod_source' => $request->cod_source,
                'source' =>  "Controller ServicesTypeCategories => function GetServicesTypeCategories / Source_requester => " . url()->current(),
                'event_type' => "E",
                'log'      => 'ERRO => ' . $messageError,

            ]);
            /*****************FIM LOG CENTRAL*********************/
            return response()->json($validator->errors(), 404);
        }

        $cars_clent = CarsClient::find($request->car_client);

        $address =  Address::where('id', $request->client_address_id)->first();



        $services_type_category = Services_type_category::with(['service_type_category_items' => function ($query) use ($cars_clent, $address) {
            $query->where('size', $cars_clent->car_model->car_category_id)
                ->with(['service_type_category_item_price' => function ($query) use ($address) {
                    $query->where('region_id', $address->region->id);
                }]);
        }])
        ->where('services_type_id', $request->service_type_id ?? 12)
        ->get()
        ->makeHidden('service_type_category_items', 'service_type_category_item_price')
        ->map(function ($element) {
            $element->value = $element->service_type_category_items[0]->service_type_category_item_price[0]->price ?? '0.00';
            $element->service_type_category_item_price_id = $element->service_type_category_items[0]->service_type_category_item_price[0]->id ?? '0';
            $element->car_category = $element->service_type_category_items[0]->title ?? 'N/A';
            return $element;
        });
        


        return response()->json($services_type_category);
    }

    public function createCarsTable()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.fipe.cenarioconsulta.com.br/marcas/1',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: SRVGROUP=common; route=51b548c76b6f0ce6303acb4b52fad317'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        $body = json_decode($response)->body;

        foreach ($body as $value) {
            CarManufacturer::create(["id" => $value->IdMarca, "title" => $value->Marca]);
            $this->createCarsModels($value->IdMarca);
        }

        return response()->json("Success");
    }

    public function createCarsModels($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.fipe.cenarioconsulta.com.br/modelos/$id",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: SRVGROUP=common; route=51b548c76b6f0ce6303acb4b52fad317'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $body = json_decode($response)->body;

        foreach ($body as $value) {
            CarModel::create(["id" => $value->IdModelo, "manufacturer_id" => $id, "title" => $value->ModeloResumido]);
        }

        return $body;
    }

    public function getAdditionals(){
        $Additionals = Additional::where('service_type_id', 12)->get();
        return response()->json($Additionals,200);
    }
}

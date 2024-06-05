<?php

namespace App\Http\Controllers\Services;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Log_central;
use App\Models\Address;
use App\Models\ServiceAdditionals;
use App\Models\Service;
use App\Models\Additional;
use App\Models\Neighborhood;
use App\Models\NeighborhoodsRegion;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CleanController extends Controller
{

	public function update_clean(Request $request, $id)
	{
		$user = Auth::user();
		$service = Service::where('id', $id)
			->where('client_id', $user->id)
			->first();

		if ($service) {
			$newStartTime = Carbon::parse($request->date)->format('Y-m-d H:i');
			$newEndTime = Carbon::parse($request->date)->addHours($service->total_time)->format('Y-m-d H:i');

			$service->start_time = $newStartTime;
			$service->end_time = $newEndTime;
			$service->save();

			return response()->json(['message' => 'ok', 'service' => $service]);
		}

		return response()->json(['message' => 'failed']);
	}

	public function get_price_clean(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'service_category_id' => 'required|int',
			'address_type_id' => 'required|int',
			'qt_bedrooms' => 'required|int',
			'products_included' => 'required|int',
			'service_type_id' => 'required|int',
			'client_address_id' => 'required',
			'source_request' => 'required|string',
			'salesman_id' => 'required|int',
			'totalTime' => 'required|numeric',
			'qt_employees' => 'required|int',
		]);

		if ($validator->fails()) {
			return response()->json($validator->errors(), 422);
		}
		$address =
			Address::where(
				"id",
				$request->client_address_id
			)->first();

		$clientRegion = NeighborhoodsRegion::find($address->neighborhood_id)->region;

		$city = $address->city_title;

		if ($city) {
			$city_id = $address['city_id'];

			if ($city_id) {

				if ($request->totalTime == 0 && $request->qt_employees == 0) {

					if ($request->additionals != NULL) {
						$request->additionals = explode(',', $request->additionals); //PEGA SEPARADO os valores de additionals

						$additionals_ids = Additional::whereIn('title', $request->additionals)->get()->pluck('id')->toArray();
					} else {
						$additionals_ids = '';
					}

					$dataGetTime  = array();
					$dataGetTime =
						[
							'service_type_id' => $request->service_type_id,
							'address_type_id' => $request->address_type_id,
							'qt_bedrooms' =>  $request->qt_bedrooms,
							'qt_bathrooms' => $request->qt_bathrooms,
							'additionals_ids' => $additionals_ids,
							'source_request' => $request->source_request,
							'salesman_id' => $request->salesman_id,
						];

					$totalTimeResponse = Service::getTotalTime($dataGetTime);

					$totalTimeContent = $totalTimeResponse->getContent();


					$totalTimeJson = json_decode($totalTimeContent, true);
					$request->totalTime = $totalTimeJson['totalTime'];
					$request->qt_employees = $totalTimeJson['qt_employees'];
				}

				if ($request->totalTime >= 1) {
					$dataGetPrice  = array();

					// Se a requisição enviar hora quebrada, arrendondará para cima.
					// Ex: 7 horas de serviço, 2 profissionais = 7/2 horas por profissional = 3.5. Então arredondará para 4.

					$totalTime = ceil($request->totalTime);

					$dataGetPrice =
						[
							'totalTime' => $totalTime,
							'service_category_id' => $request->service_category_id,
							'city_id' => $city_id,
							'products_included' => $request->products_included,
							'qt_employees' => $request->qt_employees,
							'source_request' => $request->source_request,
							'salesman_id' => $request->salesman_id,
							"client_region" => $clientRegion
						];

					$priceResponse = Service::getPriceClean($dataGetPrice);

					$price = $priceResponse->getContent();

					return response()->json([
						'totalTime' => $totalTime,
						'qt_employees' => $request->qt_employees,
						'price' => $price
					]);
				}
			} else { // Se cidade nÃ£o encontrada ou nÃ£o regiÃ£o nÃ£o atendida

				/*****************LOG CENTRAL*********************/
				$messageError = 'Cidade nao encontrada ou regiao nao atendida.';

				Log_Central::Create([
					'user_id' => $request["user_id"],
					'salesman_id' => $request["salesman_id"],
					'source' =>  "ClinApiController => function get_price_clean / Source_requester => " . $request["source_request"],
					'event_type' => "E",
					'log'	  => 'ERRO => ' . $messageError,

				]);
				/*****************FIM LOG CENTRAL*********************/

				// return an error
				return response()->json($messageError, 400);
			}
		} else { // Se CEP Invalido

			/*****************LOG CENTRAL*********************/
			$messageError = 'CEP invalido';

			Log_Central::Create([
				'user_id' => $request["salesman_id"],
				'source' =>  "ClinApiController => function get_price_clean / Source_requester => " . $request["source_request"],
				'event_type' => "E",
				'log'	  => 'ERRO => ' . $messageError,

			]);
			/*****************FIM LOG CENTRAL*********************/

			// return an error
			return response()->json($messageError, 400);
		}
	}

	public static function createClean(Request $request, $request_service)
	{

		$validator = Validator::make($request->all(), [
			'user_id' => 'required|int',
			'source' => 'required',
			'source_request' => 'required|string',
			'salesman_id' => 'required|int',
			'cod_source' => 'required|int',
			'order_id' => 'required|int',
		]);

		if ($validator->fails()) {
			$messageError = $validator->errors();
			/*****************LOG CENTRAL*********************/
			Log_Central::Create([
				'user_id' => $request["user_id"] ? $request["user_id"] : null,
				'cod_source' => $request["cod_source"],
				'salesman_id' => $request['salesman_id'],
				'source' =>  "Clean Controller => function createClean / Source_requester => " . $request["source_request"],
				'event_type' => "E",
				'log'	  => 'ERRO => ' . $messageError,

			]);
			/*****************FIM LOG CENTRAL*********************/

			return response()->json($messageError, 422);
		}
		$validator = Validator::make($request_service, [
			'service_category_id' => 'required|int',
			'products_included' => 'required|int',
			'additionals'  => 'required',
			'client_address_id' => 'required',
			'value_service' => 'required',
			'subscription_id' => 'required',
			'service_type_id' => 'required|int',
			'total_time'  => 'required',
			'start_time' => 'required',
			'qt_employees' => 'required|int'
		]);

		if ($validator->fails()) {
			$messageError = $validator->errors();
			/*****************LOG CENTRAL*********************/
			Log_Central::Create([
				'user_id' => $request["user_id"] ? $request["user_id"] : null,
				'cod_source' => $request["cod_source"],
				'salesman_id' => $request['salesman_id'],
				'source' =>  "CleanController => function createClean / Source_requester => " . $request["source_request"],
				'event_type' => "E",
				'log'	  => 'ERRO => ' . $messageError,

			]);
			/*****************FIM LOG CENTRAL*********************/

			return response()->json($messageError, 422);
		}

		if ($request_service['start_time'] == NULL) {

			$start_time = \Carbon\Carbon::now();
		}


		$clean = new Service;

		// dd($request_service);

		$franchise_id = Address::with("region")->where("id", $request_service['client_address_id'])->first()["region"]["franchise_id"];

		$clean->franchise_id = $franchise_id;

		$clean->value = $request_service["value_service"];
		$clean->total_time =  $request_service["total_time"];
		$clean->service_type_id =  $request_service["service_type_id"];
		$clean->client_id =  $request["user_id"];
		$clean->client_address_id =  $request_service["client_address_id"];
		$clean->service_category_id =  $request_service["service_category_id"];
		$clean->qt_employees =  $request_service["qt_employees"];
		$clean->products_included =  $request_service["products_included"];
		$clean->subscription_id =  $request_service["subscription_id"];
		$clean->start_time = \Carbon\Carbon::parse($request_service["start_time"]); //->format("d/m/Y H:i");
		$clean->end_time = \Carbon\Carbon::parse($request_service["start_time"])->addHours($request_service['total_time']);
		$clean->dayOfWeek = \Carbon\Carbon::parse($request_service["start_time"])->dayOfWeek;
		$clean->salesman_id =  $request["salesman_id"];
		$clean->order_id =  $request["order_id"];
		$clean->status_id =  6;
		$clean->pet_cautions = $request_service["comments"] ?? '';
		$clean->save();

		/*****************LOG CENTRAL*********************/
		Log_Central::Create([
			'service_id' => $clean->id,
			'cod_source' => $request['cod_source'],
			'salesman_id' => $request['salesman_id'],
			'source' 	 => "CleanController => function createClean / Source_requester => " . $request['source_request'],
			'event_type' => "C",
			'log'	  	 => 'USER->ID =  ' . $request['user_id'] . " Criou a Clean, atravÃ©s do " . $request['cod_source'],

		]);
		/*****************FIM LOG CENTRAL*********************/



		if ($request_service["additionals"] != NULL) {
			$additionals = explode(',', $request_service["additionals"]); //PEGA SEPARADO os valores de additionals
			$additionals_ids = Additional::whereIn('title', $additionals)->get()->pluck('id')->toArray();
		} else {
			$additional_id = null;
			$additionals_ids = '';
		}


		if ($additionals_ids != NULL) {
			$dataStoreAdditionals  = array();

			$dataStoreAdditionals =
				[
					'service_id' => $clean->id,
					'additionals_ids' => $additionals_ids


				];

			$storeAdditionalsResponse =  self::storeAdditionals($request, $dataStoreAdditionals);
			$storeAdditionalsStatusCode = $storeAdditionalsResponse->status();
			$price = $storeAdditionalsResponse->getContent();
		}

		return response()->json($clean);
	}


	public static function storeAdditionals(Request $request, $dataStoreAdditionals)
	{

		$validator = Validator::make($request->all(), [
			'user_id' => 'required|int',
			'source' => 'required',
			'source_request' => 'required|string',
			'salesman_id' => 'required|int',
			'cod_source' => 'required|int',

		]);

		if ($validator->fails()) {
			$messageError = $validator->errors();
			/*****************LOG CENTRAL*********************/
			Log_Central::Create([
				'user_id' => $request["user_id"] ? $request["user_id"] : null,
				'cod_source' => $request["cod_source"],
				'salesman_id' => $request['salesman_id'],
				'source' =>  "CleanController => function storeAdditionals / Source_requester => " . $request["source_request"],
				'event_type' => "E",
				'log'	  => 'ERRO => ' . $messageError,

			]);
			/*****************FIM LOG CENTRAL*********************/

			return response()->json($messageError, 422);
		}

		$validator = Validator::make($dataStoreAdditionals, [
			//mandatory parameters
			'service_id' => 'required|int',
			'additionals_ids' => 'required',
		]);

		if ($validator->fails()) {
			$messageError = $validator->errors();
			/*****************LOG CENTRAL*********************/
			Log_Central::Create([
				'user_id' => null,
				'cod_source' => $request['cod_source'],
				'salesman_id' => $request['salesman_id'],
				'source' =>  "CleanController => function storeAdditionals/ Source_requester => " . $request["source_request"],
				'event_type' => "E",
				'event_type' => "E",
				'log'	  => 'ERRO => ' . $messageError,

			]);
			/*****************FIM LOG CENTRAL*********************/

			return response()->json($messageError, 422);
		}


		$service = Service::where('id', $dataStoreAdditionals["service_id"])->first();

		$service_additionals = ServiceAdditionals::where('service_id', $service->id)->get();

		$additionalTime = 0;

		foreach ($service_additionals as $addttional) {

			$addttional->delete();
		}


		foreach ($dataStoreAdditionals["additionals_ids"] as $additional_id) {

			$additional = Additional::where('id', $additional_id)->first();

			$service_additional = ServiceAdditionals::Create();
			$service_additional->service_id = $service->id;
			$service_additional->additionals_id = $additional->id;

			if ($service_additional->save()) {
				/*****************LOG CENTRAL*********************/
				Log_Central::Create([
					'service_id' => $service->id,
					'cod_source' => $request['cod_source'] ?  $request['cod_source'] : 0,
					'salesman_id' => $request['salesman_id'] ? $request['salesman_id'] : 0,
					'source' 	 => "CleanController => function storeAdditionals/ Source_requester => " . $request['source_request'],
					'event_type' => "C",
					'log'	  	 => "service Additional salvo com sucesso => " . $service_additional,

				]);
				/*****************FIM LOG CENTRAL*********************/
			} else {

				/*****************LOG CENTRAL*********************/
				Log_Central::Create([
					'service_id' => $service->id,
					'cod_source' => $request['cod_source'],
					'salesman_id' => $request['salesman_id'],
					'source' 	 =>  "CleanController => function storeAdditionals/ Source_requester => " . $request['source_request'],
					'event_type' => "E",
					'log'	  	 =>  "  service Additional erro ao gravar" . $service_additional,
				]);
				/*****************FIM LOG CENTRAL*********************/
			}

			$additionalTime += $additional->time;
		}


		return response()->json($additionalTime);
	}
}

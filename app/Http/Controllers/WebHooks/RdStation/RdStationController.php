<?php

namespace App\Http\Controllers\WebHooks\RdStation;

use App\Http\Controllers\AddressController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LogCentralController;
use App\Http\Controllers\Services\CleanController;
use App\Http\Controllers\UserController;
use App\Models\Additional;
use App\Models\Address;
use App\Models\AddressType;
use App\Models\City;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RdStationController extends Controller
{
	public static function storeLead(Request $request)
	{

		try {
			$name = $request->leads[0]["name"];
			$email = $request->leads[0]["email"];
			$phone = $request->leads[0]["personal_phone"];
			$cep = $request->leads[0]["last_conversion"]["content"]["CEP"];
			$qt_bedrooms = $request->leads[0]["last_conversion"]["content"]["qt_bedrooms"];
			$qt_bathrooms = $request->leads[0]["last_conversion"]["content"]["qt_bathrooms"];
			$address_type = $request->leads[0]["last_conversion"]["content"]["address_type"];
			$additionals = $request->leads[0]["custom_fields"]["additionals"] ?? null;
		} catch (\Exception $e) {
			/*****************LOG CENTRAL*********************/
			$messageError = $content = $e->getMessage();
			$event_type = "E";
			$request->cod_source = 3;
			return LogCentralController::create($request, $messageError, $event_type);
			/*****************FIM LOG CENTRAL*********************/

			return response()->json($messageError, 422);
		}

		$request->merge(['name' => $name]);
		$request->merge(['email' => $email]);
		$request->merge(['cod_source' => 3]);
		$request->merge(['password' => AuthController::generatePassword()]);
		$request->merge(['phone' => $phone]);

		$authController = new AuthController();

		// Create a user
		$registerCustomer = $authController->registerCostumer($request);

		// If $customer return a 422 error code, probably the email is already registered. Then we set the customer as the own of email of DB
		if ($registerCustomer->getStatusCode() === 422 || $registerCustomer->getStatusCode() === 404 ||
            $registerCustomer->getStatusCode() === 401 || $registerCustomer->getStatusCode() === 400) {

            $formatedPhone = Contact::formatPhone($phone);

            $customer = User::where("phone", $formatedPhone)->first();

            Log::info(' ---- 1111 ---- ');
            Log::info($customer);
            Log::info(' ---- 1111 ---- ');

            if(!$customer){
                $customer = User::where("email", $email)->first();
                Log::info(' ---- 2222 ---- ');
                Log::info($customer);
                Log::info(' ---- 2222 ---- ');
            }
		} else {
			$customer = User::where("id", $registerCustomer->getData()->user_id)->first();
            Log::info(' ---- 3333 ---- ');
            Log::info($registerCustomer);
            Log::info(' ---- 3333 ---- ');
		}

		$address = Address::apiCep($cep);
		$addressContent = $address->getData();

		$addressController = new AddressController();

		$request->merge([
			'zip' => $cep,
			'street' => $addressContent->street,
			'neighborhood' => $addressContent->neighborhood,
			'number' => 0,
			'user_id' => $customer->id,
			'title_city' => $addressContent->city,
			'cod_source' => 3,
			'source_request' => 'RDStation',
			'salesman_id' => 3,
			'uf' => $addressContent->uf
		]);

		// Create a new address for the leading;
		$newAddress = $addressController->createAddress($request)->getData();

		$addressCreated = Address::find($newAddress->id);

		$franchise_id = $addressCreated->neighborhoods->region->franchise_id;

		$customer->franchise_id = $franchise_id;
		$customer->save();

		$addressCreated->number = null;
		$addressCreated->address_type_id = 1;
		$addressCreated->qt_bathrooms = $qt_bathrooms;
		$addressCreated->qt_bedrooms = $qt_bedrooms;
		$addressCreated->save();

		// Search for a client that already exists or create one.
		$client = Client::where("user_id", $customer->id)->first();

		if (!$client) {
			$client = new Client;
			$client->name = $request->name;
			$client->user_id = $customer->id;
			$client->cpf = null;
			$client->save();
		}

		$additionals = null;

		if ($additionals != NULL) {
			$additionals = explode(',', $additionals); //PEGA SEPARADO os valores de additionals

			$additionals_ids = Additional::whereIn('title', $additionals)->get()->pluck('id')->toArray();
		} else {
			$additional_id = null;
			$additionals_ids = '';
		}

		$dataGetTime =
			[
				'service_type_id' => 1,
				'address_type_id' => $address_type,
				'qt_bedrooms' =>  $qt_bedrooms,
				'qt_bathrooms' => $qt_bathrooms,
				'additionals_ids' => $additionals_ids,
				'source_request' => 'RDStation',
				'salesman_id' => 3,
			];

		$totalTimeResponse = Service::getTotalTime($dataGetTime);
		$totalTimeResponse = $totalTimeResponse->getData();
		/*
		{
    	"totalTime": 6,
    	"qt_employees": 1
		} */
		// return $totalTimeResponse;

		$request->merge([
			'totalTime' => $totalTimeResponse->totalTime,
			'products_included' => 0,
			'city_id' => $newAddress->city_id,
			'service_category_id' => 1,
			'qt_employees' => $totalTimeResponse->qt_employees,
			'salesman_id' => 3,
			"client_region" => [
				"id" => $addressCreated->neighborhoods->region->id
			],
			'qt_bedrooms' =>  $qt_bedrooms,
			'qt_bathrooms' => $qt_bathrooms,
			"service_type_id" => 1,
			"client_address_id" => $addressCreated->id,
			"address_type_id" => 1,
		]);


		// return AddressType::get();
		$cleanController =  new CleanController;

		$getPriceClean = $cleanController->get_price_clean($request)->getData();


		$leading = new Service;
		$leading->service_category_id = 1;
		$leading->products_included = 0;
		$leading->client_id = $customer->id;
		$leading->client_address_id = $newAddress->id;
		$leading->service_type_id = 1;
		$leading->status_id = 6;
		$leading->subscription_id = null;
		$leading->salesman_id = 3;
		$leading->franchise_id = $franchise_id;
		$leading->start_time = null;
		$leading->total_time = $getPriceClean->totalTime;
		$leading->value = $getPriceClean->price;
		$leading->qt_employees = $getPriceClean->qt_employees;

		$leading->save();
		return $getPriceClean;

		return response()->json([
			'message' => 'ok'
		]);
	}
}

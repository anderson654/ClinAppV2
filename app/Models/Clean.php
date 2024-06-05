<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Additional;

class Clean extends Model
{
	use HasFactory;

    protected $fillable = ['service_category_id', 'address_type_id', 'qt_bedrooms', 'qt_bathrooms', 'products_included', 'service_type_id', 'additionals', 'totalTime'. 'qt_employees', 'value', 'client_address_id', 'start_time', 'client_id'];


	public function address_type()
	{
		return $this->belongsTo(AddressType::class, 'address_type_id');
	}

	public function service_type()
	{
		return $this->belongsTo(ServiceType::class, 'service_type_id');
	}

	public function service_category()
	{
		return $this->belongsTo(ServiceCategory::class, 'service_category_id');
	}
	public function user()
	{
		return $this->belongsTo(User::class, 'client_id')/*->where('role_id', 4)*/;
	}
	public function client()
	{
		return $this->belongsTo(Client::class, 'client_id', 'user_id');
	}
	public function whoScheduled()
	{
		return $this->belongsTo(User::class, 'salesman_id');
	}
	public function corporateClient()
	{
		return $this->belongsTo(CorporateClient::class, 'client_id', 'user_id');
	}
	public function address()
	{
		return $this->belongsTo(Address::class, 'client_address_id', 'id');
	}
	public function contact()
	{
		return $this->belongsTo(Contact::class, 'client_id', 'user_id');
	}

	public function status()
	{
		return $this->belongsTo(ServiceStatus::class, 'status_id');
	}

	public function payment_status()
	{
		return $this->belongsTo(PaymentStatus::class, 'payment_status_id');
	}

	public function assigned_to()
	{
		return $this->belongsToMany(User::class, 'service_slots');
	}

	public function qt_assigned_to()
	{
		//return $this->belongsToMany('App\CleanUser', 'clean_user')->where('user_id', 0);
		return ServiceSlot::where('service_id', $this->id)->where('service_id', '!=', NULL)->count();
	}

	public function service_slots()
	{
		return $this->hasMany(ServiceSlot::class, 'service_id');
	}
	public function service_slot()
	{
		return $this->hasOne(ServiceSlot::class, 'service_id');
	}
	public function payment()
	{
		return $this->hasOne(Payment::class, 'service_id');
	}
	public function free_slots()
	{
		return $this->hasMany(ServiceSlot::class, 'service_id')->where('user_id', NULL);
	}

	public function qt_free_slots()
	{
		//return $this->belongsToMany('App\CleanUser', 'clean_user')->where('user_id', 0);
		return ServiceSlot::where('service_id', $this->id)->where('user_id', NULL)->count();
	}

	public static function getTotalTime($request)
	{
		//AddressType should preferably be integers
		//qt_bathrooms and qt_bedrooms must be integers
		//qt_ is the abbreviation for "QUANTIDADE" or "amount of" in English

		try {
			$service_type_id = $request["service_type_id"];
			$address_type_id = $request["address_type_id"];
			$qt_bedrooms = $request["qt_bedrooms"];
			$qt_bathrooms = $request["qt_bathrooms"];
			$source_request = $request["source_request"];
			$additionals_ids = $request["additionals_ids"];
			$salesman_id = $request["salesman_id"];
			//Espera-se um ARRAY de ids
			// array:2 [
			//   0 => 3
			//   1 => 1
			// ]

		} catch (\Exception $e) {
			$messageError = $content = $e->getMessage();
			/*****************LOG CENTRAL*********************/
			Log_Central::Create([
				'user_id' => $request["salesman_id"],
				'source' =>  "Model Clean => function getTotalTime / Source_requester => " . $request["source_request"],
				'event_type' => "E",
				'log'	  => 'ERRO => ' . $messageError,

			]);
			/*****************FIM LOG CENTRAL*********************/

			return response()->json($messageError, 422);
		}

		$baseTime = $qt_bedrooms + $qt_bathrooms;	//Soma no tempo base a 1 hora para cada quarto e cada banheiro

		if ($address_type_id == 'apto' || $address_type_id == 'apartamento' || $address_type_id == 1) {

			$baseTime += 1;
		} elseif ($address_type_id == 'casa' || $address_type_id == 'sobrado' || $address_type_id == 2) {

			$baseTime += 2;
		} elseif ($address_type_id == 'triplex' || $address_type_id == 3) {

			$baseTime += 3;
		}

		$additionalTime = 0;

		if ($additionals_ids != NULL) {
			foreach ($additionals_ids as $additional_id) {

				$additionalTime += Additional::where('id', $additional_id)->value('time');
			}
		}
		$totalTime = $baseTime;

		if ($service_type_id == 1 || $service_type_id == 4) { //SE FAXINA COMUM OU COMERCIAL
			$totalTime += $additionalTime;

			if ($totalTime <= 9) {
				$qt_employees = 1;
				$totalTime = ($totalTime / 1);
			} elseif ($totalTime > 9 && $totalTime <= 18) {
				$qt_employees = 2;
				$totalTime = ($totalTime / 2);
			} elseif ($totalTime > 18 && $totalTime <= 27) {
				$qt_employees = 3;
				$totalTime = ($totalTime / 3);
			} elseif ($totalTime > 28 && $totalTime <= 36) {
				$qt_employees = 4;
				$totalTime = ($totalTime / 4);
			}
		} elseif ($service_type_id == 2) { //SE FAXINA EXPRESS
			$totalTime += $additionalTime;

			if ($totalTime <= 9) {

				$qt_employees = 2;
				$totalTime = (($totalTime / 2));
			} elseif ($totalTime > 8 && $totalTime <= 16) {

				$qt_employees = 3;
				$totalTime = ($totalTime / 3);
			} elseif ($totalTime > 16 && $totalTime <= 24) {

				$qt_employees = 4;
				$totalTime = ($totalTime / 4);
			} elseif ($totalTime > 24 && $totalTime <= 32) {

				$qt_employees = 5;
				$totalTime = ($totalTime / 5);
			} elseif ($totalTime > 32 && $totalTime <= 40) {

				$qt_employees = 6;
				$totalTime = ($totalTime / 6);
			}
		} elseif ($service_type_id == 3) { //SE FAXINA PESADA
			$totalTime *= 2;
			$totalTime += $additionalTime;


			if ($totalTime <= 9) {
				$qt_employees = 1;
				$totalTime = ($totalTime / 1);
			} elseif ($totalTime > 9 && $totalTime <= 18) {

				$qt_employees = 2;
				$totalTime = ($totalTime / 2);
			} elseif ($totalTime > 18 && $totalTime <= 27) {
				$qt_employees = 3;
				$totalTime = ($totalTime / 3);
			} elseif ($totalTime > 28 && $totalTime <= 36) {
				$qt_employees = 4;
				$totalTime = ($totalTime / 4);
			} elseif ($totalTime > 37 && $totalTime <= 45) {

				$qt_employees = 5;
				$totalTime = ($totalTime / 5);
			} elseif ($totalTime > 46 && $totalTime <= 54) {
				$qt_employees = 6;
				$totalTime = $totalTime / 6;
			}
		}

		//Trata o arredondamento matematico, ou se 0,5 mantém.
		$int_time = (int)$totalTime;
		$decimal_time = $totalTime - $int_time;

		if ($decimal_time != 0.5) {
			$totalTime = round($totalTime, 0);
		}

		return response()->json([
			'totalTime' => $totalTime,
			'qt_employees' => $qt_employees
		]);
	}

	public static function getPriceClean($request)
	{

		try {
			$totalTime = $request["totalTime"];
			$products_included = $request["products_included"];
			$city_id = $request["city_id"];
			$service_category_id = $request["service_category_id"];
			$qt_employees = $request["qt_employees"];
			$source_request = $request["source_request"];
			$salesman_id = $request["salesman_id"];
		} catch (\Exception $e) {
			$messageError = $content = $e->getMessage();
			/*****************LOG CENTRAL*********************/
			Log_Central::Create([
				'user_id' => $request["salesman_id"],
				'source' =>  "Model Clean => function getPriceClean / Source_requester => " . $request["source_request"],
				'event_type' => "E",
				'event_type' => "E",
				'log'	  => 'ERRO => ' . $messageError,

			]);
			/*****************FIM LOG CENTRAL*********************/

			return response()->json($messageError, 422);
		}


		try {
			$base_price = Base_price::where('city_id', $city_id)->first();
			if($totalTime > 9){
				$totalTime *= $qt_employees;
				$qt_employees++;
				$totalTime /= $qt_employees;
			}

			$factor_discount = DiscountCategory::where('base_price_id', $base_price->id)
				->where('service_category_id', $service_category_id)
				->where('time_less_than', '>', $totalTime)
				->where('time_bigger_than', '<', $totalTime)
				->value('factor_discount');

			//is expected 0 for 'no' "não" and  1 for 'yes' "sim"
			$products_included = (int)$products_included;

			$price = ((((float)$base_price->base_price + ((float)$base_price->price_hour * $totalTime)) * $qt_employees) * (float)$factor_discount);
			if($products_included == 1){
				$price = round((float)$price * (float)$base_price->factor_products);
			}
		} catch (\Throwable $th) {
			return response()->json(
				['message' => 'Erro ao calcular valor',
				'error' => $th],
				400
			);
		}

		return response()->json(
			['price' => ceil($price),
			'totalTime' => ceil($totalTime),
			'qt_employees' => $qt_employees],
			200
		);
	}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Additional;
use App\Models\Asaas\AsaasBilling;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Log;

class Service extends Model
{
	use HasFactory;

	protected $table = 'services';
	protected $hidden = ['created_at', 'updated_at'];
	protected $fillable = ['service_category_id', 'address_type_id', 'products_included', 'service_type_id', 'additionals', 'total_time', 'qt_employees', 'value', 'client_address_id', 'start_time', 'end_time', 'client_id', "car_client_id", "status_id", "comments", 'other_additionals_id'];

	protected $appends = ["service_status_title", "title_service", "payment_status_title", "service_type_categorie_title", "payment_method_title", "title_address_client", "client"];

	public function getPaymentMethodTitleAttribute()
	{
		$payment = Payment::where("id", $this->payment_id)->first();
		if (isset($payment)) {
			$paymentMethod = PaymentMethods::where("id", $payment->payment_method_id)->first();
			if (!$paymentMethod) {
				return "N/A";
			}
			return PaymentMethods::where("id", $payment->payment_method_id)->first()->title;
		}
		return null;
	}

	public function getServiceTypeCategorieTitleAttribute()
	{
		$service_type_categorie = Services_type_category::where("id", $this->service_type_category_id)->first();
		if (isset($service_type_categorie)) {
			return $service_type_categorie->title;
		}
		return null;
	}

	public function getPaymentStatusTitleAttribute()
	{
		$payment = Payment::where("id", $this->payment_id)->first();
		if (isset($payment)) {
			$payment_status = PaymentStatus::where("id", $payment->payment_status_id)->first();
			if (isset($payment_status)) {
				return $payment_status->title;
			}
		}

		return null;
	}

	public function getTitleServiceAttribute()
	{
		$service = $this;
		return ServiceType::where('id', $service->service_type_id)->first()->title;
	}

	public function getServiceStatusTitleAttribute()
	{
		$service = Service::find($this->id);
		if ($service) {
			$serviceStatus = ServiceStatus::find($service["status_id"]);
		}

		return $serviceStatus->title ?? null;
	}
	public function getTitleAddressClientAttribute()
	{
		$address = null;
		if ($this->client_address_id) {
			$address = Address::find($this->client_address_id);
		}
		return $address;
	}
	public function getClientAttribute()
	{
		$client = null;
		if ($this->client_id) {
			$client = User::find($this->client_id);
		}
		return $client;
	}

	public function payment_method()
	{
		$paymentName = $this->hasOneThrough(PaymentMethods::class, Payment::class, "id", "id", "payment_id", "payment_method_id");

		return $paymentName;
	}

	public function service_type_categorie()
	{
		$service_type_categorie = $this->hasOne(Services_type_category::class, "id", "service_type_category_id");

		return $service_type_categorie;
	}

	public function professionals()
	{
		return $this->hasManyThrough(Professional::class, ServiceSlot::class, "service_id", "user_id", "id", "user_id");
	}

	public function car_client()
	{
		return $this->hasOne(CarsClient::class, "id", "car_client_id");
	}

	public function payment_status()
	{
		return $this->hasOneThrough(PaymentStatus::class, Payment::class, "id", "id", "payment_id", "payment_status_id");
	}

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
		return $this->belongsTo(User::class, 'service_id')/*->where('role_id', 4)*/;
	}
	public function client()
	{
		return $this->belongsTo(Client::class, 'service_id', 'user_id');
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
	public function feedback()
	{
		return $this->belongsTo(ServicesFeedbacks::class, 'id', 'service_id');
	}
	public function service_status()
	{
		return $this->belongsTo(ServiceStatus::class, 'status_id');
	}

	public function assigned_to()
	{
		return $this->belongsToMany(User::class, 'service_slots');
	}

	public function qt_assigned_to()
	{
		//return $this->belongsToMany('App\CleanUser', 'clean_user')->where('user_id', 0);
		return ServiceSlot::where('service_id', $this->id)->where('user_id', '!=', NULL)->count();
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
		return $this->hasOne(Payment::class, 'id', 'payment_id');
	}
	public function free_slots()
	{
		return $this->hasMany(ServiceSlot::class, 'service_id')->where('user_id', NULL);
	}

	public function servicePayment()
	{
		return $this->hasOne(Payment::class, "id", "payment_id");
	}

	public function qt_free_slots()
	{
		//return $this->belongsToMany('App\serviceUser', 'service_user')->where('user_id', 0);
		return ServiceSlot::where('service_id', $this->id)->where('user_id', NULL)->count();
	}

	public function discount_coupon()
	{
		return $this->hasOne(DiscountCoupon::class, "id", "discount_coupon_id");
	}

	public function additional_value()
	{
		return $this->hasOne(OtherAdditional::class, "id", "other_additionals_id");
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
				'source' =>  "Model Service => function getTotalTime / Source_requester => " . $request["source_request"],
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
				'source' =>  "Model Service => function getPriceClean / Source_requester => " . $request["source_request"],
				'event_type' => "E",
				'event_type' => "E",
				'log'	  => 'ERRO => ' . $messageError,

			]);
			/*****************FIM LOG CENTRAL*********************/

			return response()->json($messageError, 422);
		}

		$base_price = Base_price::where('region_id', $request["client_region"]["id"])->first();

		$factor_discount = DiscountCategory::where('base_price_id', $base_price->id)
			->where('service_category_id', $service_category_id)
			->where('time_less_than', '>', $totalTime)
			->where('time_bigger_than', '<', $totalTime)
			->value('factor_discount');

		//is expected 0 for 'no' "não" and  1 for 'yes' "sim"
		$products_included = (int)$products_included;

		$price = ((((float)$base_price->base_price + ((float)$base_price->price_hour * $totalTime)) * $qt_employees) * (float)$factor_discount);

		if ($products_included == 1) {
			$price = round((float)$price * (float)$base_price->factor_products);

			return response()->json((int)$price);
		}
		if ($products_included == 0) {
			$price = round($price);

			return response()->json((int)$price);
		}

		$messageError = "erro ao calcular preço";
		/*****************LOG CENTRAL*********************/
		Log_Central::Create([
			'user_id' => $request["salesman_id"],
			'source' =>  "Model Service => function getPriceClean / Source_requester => " . $source_request,
			'event_type' => "E",
			'log'	  => 'ERRO => ' . $messageError,

		]);
		/*****************FIM LOG CENTRAL*********************/

		return response()->json(
			['erro' => $messageError],
			401
		);
	}
	public function slots()
	{
		return $this->hasMany(ServiceSlot::class, 'service_id', 'id');
	}

	public function slots_contain_professionals()
	{
		return $this->hasMany(ServiceSlot::class, 'service_id', 'id')->whereNotNull('user_id');
	}

	public function payment_to_service()
	{
		return $this->hasOne(Payment::class, 'id', 'payment_id')->whereNull('deleted_at');
	}

	public function client_service()
	{
		return $this->hasOne(User::class, 'id', 'client_id');
	}
	public function additionals_to_service()
	{
		return $this->hasMany(ServiceAdditionals::class, 'service_id');
	}
	public function asaas_billing_pending()
	{
		return $this->hasOne(AsaasBilling::class, 'payment_id', 'payment_id')->where('status', '!=', 'RECEIVED');
	}
	public function payment_gateway()
	{
		return $this->hasOne(PaymentGateway::class, 'id', 'payment_gateway_id');
	}
}

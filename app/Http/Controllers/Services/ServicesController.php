<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Services\CleanController;
use App\Http\Controllers\Finance\ChargeController;
use App\Http\Controllers\Mail\MailerSenderController;
use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\ServiceType;
use App\Models\Services_type_category_items;
use App\Models\Service_type_category_item_price;
use App\Models\Services_type_category;
use App\Models\Additional;
use App\Models\Franchise;
use App\Http\Controllers\FranchiseController;
use App\Models\Clean;
use App\Models\Address as ClientAddress;
use App\Models\Service;
use App\Models\ServicesType;
use App\Models\Region;
use App\Http\Controllers\Services\SubscriptionController;
use App\Models\Order;
use App\Models\User;
use App\Models\Service_intermediation_fee;
use App\Models\Client;
use App\Http\Controllers\LogCentralController;
use App\Models\AddValueType;
use App\Models\CarsClient;
use App\Models\CorporateClient;
use Illuminate\Support\Facades\Validator;
use App\Models\Log_central;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Jetimob\Juno\Facades\Juno;
use Jetimob\Juno\Lib\Http\Charge\ChargeCreationRequest;
use Jetimob\Juno\Lib\Model\Billing;
use Jetimob\Juno\Lib\Model\Charge;
use Jetimob\Juno\Lib\Http\Document\DocumentListRequest;
use Jetimob\Juno\Lib\Http\Authorization\AuthorizationRequest;
use Jetimob\Juno\Lib\Http\ExtraData\ExtraCompanyTypesRequest;
use App\Models\Juno_token;
use App\Models\OtherAdditional;
use App\Models\Payment;
use App\Models\ServiceAdditionals;
use App\Models\ServiceCategory;
use App\Models\ServiceSlot;
use App\Models\ServiceStatus;
use App\Models\Subscription;
use Aws\Exception\AwsException;
use Aws\S3\S3Client;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Log;
use PhpParser\ErrorHandler\Collecting;
use PhpParser\Node\Expr\Cast\Array_;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Str;

class ServicesController extends Controller
{
    public function get_services(Request $request)
    {
        $user = Auth::user();

        $now = Carbon::now()->isoFormat("YYYY-MM-DD");
        $lastServices = [];
        $nextServices = [];

        $validator = Validator::make($request->all(), [
            "service_type_id" => "required|int",
        ]);

        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()], 401);
        }

        $service_type = $request->service_type_id === 1 ? [1, 2, 3] : [$request->service_type_id];

        try {
            $nextServices = Service::with(
                'service_slots',
                'service_slots.professional',
                'address',
            )
                ->join("service_categories as sc", "services.service_category_id", "sc.id")
                ->join("service_types as st", "services.service_type_id", 'st.id')
                ->join("service_statuses as ss", "services.status_id", "ss.id")
                ->where('client_id', $user->id)  // apenas os serviços do usuário
                ->whereIn("service_type_id", $service_type) // Onde os serviços sao do tipo solicitado: 1, 2, 3 sao faxinas, 12 automotivo, etc...
                ->whereNotIn('status_id', [5, 6, 7, 8]) // não exibir os serviços de: cancelado, lead, visualizado e problema ao abrir vaga
                ->whereDate("start_time", ">=", $now) // filtrar os próximos serviços (não exibe os que são anteriores ao momento atual)
                ->select("services.*", "sc.title as service_category_title", 'st.title as service_type_title', 'ss.title as status_service_title')
                ->orderBy('start_time', 'ASC')->get(); // ordendando por horário de início.


            // A mesma lógica do anterior, porém filtrando os serviços que já foram finalizados
            $lastServices = Service::with(
                'service_slots',
                'service_slots.professional',
                'service_slots.professional.rating',
                'address',
                'payment'
            )
                ->join("service_categories as sc", "services.service_category_id", "sc.id")
                ->join("service_types as st", "services.service_type_id", 'st.id')
                ->join("service_statuses as ss", "services.status_id", "ss.id")
                ->where('client_id', $user->id)
                ->whereNotIn('status_id', [6, 7, 8])
                ->whereIn("service_type_id", $service_type)
                ->whereDate("start_time", ">", Carbon::now()->subMonths(3)) // Entre 3 meses atrás
                ->whereDate("start_time", "<", $now)                        // Até hoje
                ->select("services.*", "sc.title as service_category_title", 'st.title as service_type_title', 'ss.title as status_service_title')
                ->orderBy('start_time', 'DESC')->get();
        } catch (\Exception $e) {
            Log::info($e->getMessage());
        }

        if (!isset($lastServices)) {
            $lastServices = [];
        }
        if (!isset($nextServices)) {
            $nextServices = [];
        }

        return response()->json(["nextServices" => $nextServices, "lastServices" => $lastServices]);
    }

    public function getProfessionalsService(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service_id' => 'required',
            'cod_source' => 'required'
        ]);

        if ($validator->fails()) {
            $messageError = $validator->errors();
            $event_type = "E";
            return LogCentralController::create($request, $messageError, $event_type);
        }

        $service = Service::where('id', $request->service_id)->first();

        if ($service) {

            return $userids = ServiceSlot::where('service_id', $service->id)
                ->select('user_id')->get();
        } else {
            /*****************LOG CENTRAL*********************/
            $errorMessage = "Serviço não encontrado.";
            $event_type = "E";
            return LogCentralController::create($request, $errorMessage, $event_type);
            /*****************FIM LOG CENTRAL*********************/
        }
    }

    public function storeServices(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'cod_source' => 'required',
            'order_id' => 'required',
            'franchise_id' => 'int'
        ]);

        if ($validator->fails()) {
            $messageError = $validator->errors();
            $event_type = "E";
            return LogCentralController::create($request, $messageError, $event_type);
        }


        /*****************LOG CENTRAL*********************/
        $messageError = 'Criou a Order';
        $event_type = "C";
        LogCentralController::create($request, $messageError, $event_type);
        /*****************FIM LOG CENTRAL*********************/

        $client = Client::where('user_id', $request['user_id'])->first();

        if (!$client) {
            $client = CorporateClient::where("user_id", $request['user_id'])->first();
        }

        if (!$client) {
            /*****************LOG CENTRAL*********************/
            $errorMessage = "Cliente não encontrado.";
            $event_type = "E";
            return LogCentralController::create($request, $errorMessage, $event_type);
            /*****************FIM LOG CENTRAL*********************/
        }

        $services = array(); // Thiago Silva

        foreach ($request['services'] as $request_service) {
            $client_adrress = ClientAddress::find($request_service['client_address_id']);


            if (!$client_adrress) {
                /*****************LOG CENTRAL*********************/
                $errorMessage = "Endereco nao encontrado.";
                $event_type = "E";
                return LogCentralController::create($request, $errorMessage, $event_type);
                /*****************FIM LOG CENTRAL*********************/
            }


            if ($client_adrress->user_id != $request['user_id'] &&  !in_array(Auth::user()->role_id, [0, 1, 2, 6, 7])) {
                /*****************LOG CENTRAL*********************/
                $errorMessage = "Endereco nao pertence a este cliente.";
                $event_type = "E";
                return LogCentralController::create($request, $errorMessage, $event_type);
                /*****************FIM LOG CENTRAL*********************/
            }

            //erro aqui ajustar;;;;;;;;;
            $client_region = $client_adrress->region;

            if (!$client_region) {
                /*****************LOG CENTRAL*********************/
                $errorMessage = "Região não encontrada.";
                $event_type = "E";
                return LogCentralController::create($request, $errorMessage, $event_type);
                /*****************FIM LOG CENTRAL*********************/
            }


            // Todo serviço obrigatoriamente precisa estar associado a uma order, queve ser enviada em caso de alteração.
            $order = Order::firstOrCreate([
                'id' => $request["order_id"],
                'franchise_id' => $request->franchise_id ?? $client_region->franchise_id, // Cria com o franquieado da região do endereço do serviço :D
            ]);

            $request['order_id'] = $order->id; // atualiza o order_id dentro da request
            $request['franchise_id'] = $request->franchise_id ?? $order->franchise_id; // atualiza o franchise_id dentro da request


            if (isset($request_service["service_type_id"])) {
                if (
                    // Se o serviço for uma faxina
                    $request_service["service_type_id"] == 1 || $request_service["service_type_id"] == 2 || $request_service["service_type_id"] == 3 ||
                    $request_service["service_type_id"] == 4 || $request_service["service_type_id"] == 5 || $request_service["service_type_id"] == 6 || $request_service["service_type_id"] == 7
                ) {
                    //Tipo Faxina Residencial
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
                        $event_type = "E";
                        return LogCentralController::create($request, $messageError, $event_type);
                    }

                    //Chama a função que gera a cleans
                    $services = $this->createClean($request, $request_service, $services, $client);
                }
            } else {
                $serviceTypeCategoriesItemPrice = Service_type_category_item_price::find($request_service['service_type_category_item_price_id']);

                $serviceTypeCategoryItem = Services_type_category_items::find($serviceTypeCategoriesItemPrice["service_type_category_item_id"]);

                $serviceTypeCategory = Services_type_category::find($serviceTypeCategoryItem["service_type_category_id"]);

                $request_service["service_type_category_item_id"] = $serviceTypeCategoryItem->id;
                $request_service["service_type_category_id"] = $serviceTypeCategory->id;
                $request_service["service_category_id"] = 1; //avulsa
                $request_service["service_type_id"] = $serviceTypeCategory->services_type_id;

                if (
                    $request_service["service_type_id"] == 7 || $request_service["service_type_id"] == 8 ||
                    $request_service["service_type_id"] == 9  || $request_service["service_type_id"] == 10 ||
                    $request_service["service_type_id"] == 12
                ) {
                    // Service Type Carro e sofá
                    $validator = Validator::make($request_service, [
                        'service_category_id' => 'required|int',
                        'service_type_id' => 'required|int',
                        'service_type_category_id' => 'required|int',
                        'service_type_category_item_id' => 'required|int',
                        'client_address_id' => 'required',
                        'start_time' => 'required',
                        'value_service' => 'required',
                    ]);
                    if ($validator->fails()) {
                        $messageError = $validator->errors();
                        $event_type = "E";
                        return LogCentralController::create($request, $messageError, $event_type);
                    }

                    // Se for requisição de store car, então ser obrigatório informar o id do carro do cliente
                    if ($request_service["service_type_id"] === 12 && !isset($request_service["car_client_id"])) {
                        return response()->json(["message" => "O campo 'car_client_id' é obrigatório."], 422);
                    }

                    // Se a requisição mandar o id do carro do cliente, então verificar se o carro existe no banco de dados
                    if (isset($request_service["car_client_id"])) {
                        $clientCar = CarsClient::where('id', $request_service["car_client_id"])->first();

                        // Se o carro não existir, retornar erro
                        if (!isset($clientCar)) {
                            return response()->json(["message" => "Veículo não encontrado."], 422);
                        }
                    }

                    //Chama a função que gera os services
                    $services = $this->storeService($request, $request_service, $services, $client, $order);
                }
            }
        }

        if (!isset($services) || count($services) === 0) {
            return response()->json(["message" => "Não foi possível efetuar a requisição "], 422);
        }


        return $services;
    }

    private  function storeService(Request $request, $request_service, $services, $client, $order)
    {
        // 3 condiçoes para chamar a store services
        // users admin
        // user client
        // lead
        if (Auth::user() && isset(Auth::user()->franchise_id)) {
            $franchiseAdmin = Auth::user()->franchise_id;
        }

        $franchise_id = Address::with("region")->where("id", $request_service["client_address_id"])->first()["region"]["franchise_id"];

        if (!isset($franchise_id)) {
            return response()->json(["message" => "Ainda não atendemos a sua região"], 422);
        }

        // Se for requisição de higienização e imper, verifica se já existe uma order para o pedido
        //Para Não criar um novo serviço, mas adcionar novos itens como adcional.

        if ($request_service["service_type_id"] == 9 || $request_service["service_type_id"] == 10) {

            $service = Service::where('order_id', $order->id)->whereIn('service_type_id', [9, 10])
                ->where('status_id', 6)->first();

            if ($service) {

                $additional = new ServiceAdditionals;
                $additional->service_id = $service->id;
                $additional->service_type_category_item_id = $request_service["service_type_category_item_id"];
                $additional->save();

                $service->value = $service->value + (float)$request_service["value_service"];
                $service->pet_cautions = $request_service["observation"] ?? '';
                $service->save();
            } else {
                //Se não encontrado nennhum serviço de Higie 7 Imper, aí  cria um novo e entra no fluxo normal.
                // Se for requisição de lavagem de carro, salvar o carro do usuario
                $service = new Service;

                $service->franchise_id = $request->franchise_id ?? $franchiseAdmin ?? $franchise_id;
                $service->client_id = $request["user_id"];
                $service->service_category_id = $request_service["service_category_id"];
                $service->service_type_id = $request_service["service_type_id"];
                $service->service_type_category_id = $request_service["service_type_category_id"];
                $service->service_type_category_item_id = $request_service["service_type_category_item_id"];
                $service->client_address_id = $request_service["client_address_id"];
                $service->start_time = $request_service["start_time"];
                $service->order_id = $request["order_id"];
                $service->value = $request_service["value_service"];
                $service->salesman_id = $request["cod_source"];
                if (isset($request_service["car_client_id"])) {
                    $service->car_client_id = $request_service["car_client_id"];
                }
                $service->status_id = 6;
                $service->service_type_category_item_price_id = $request_service["service_type_category_item_price_id"];
                $service->save();

                $additional = new ServiceAdditionals;
                $additional->service_id = $service->id;
                $additional->service_type_category_item_id = $request_service["service_type_category_item_id"];
                $service->pet_cautions = $request_service["observation"] ?? '';
                $additional->save();

                array_push($services, $service);
            }
        } else { // Se service_type diferente de Higie e Imper
            $service = new Service;

            $service->franchise_id = $request->franchise_id ?? $franchiseAdmin ?? $franchise_id;
            $service->client_id = $request["user_id"];
            $service->service_category_id = $request_service["service_category_id"];
            $service->service_type_id = $request_service["service_type_id"];
            $service->service_type_category_id = $request_service["service_type_category_id"];
            $service->service_type_category_item_id = $request_service["service_type_category_item_id"];
            $service->client_address_id = $request_service["client_address_id"];
            $service->start_time = $request_service["start_time"];
            $service->order_id = $request["order_id"];
            $service->value = $request_service["value_service"];
            $service->salesman_id = $request["cod_source"];
            $service->status_id = 6;
            if (isset($request_service["car_client_id"])) {
                $service->car_client_id = $request_service["car_client_id"];
            }
            $service->service_type_category_item_price_id = $request_service["service_type_category_item_price_id"];
            $service->pet_cautions = $request_service["observation"] ?? '';
            $service->save();

            array_push($services, $service);
        }
        return $services;
    }

    public function createClean(Request $request, $request_service, $services, $client)
    {
        if ($request_service["service_category_id"] == 1) {
            $createClean1Response = CleanController::createClean($request, $request_service);
            $cleanStatusCode = $createClean1Response->status();
            $clean1Json = $createClean1Response->getContent();
            $clean1 = json_decode($clean1Json, true);
            if ($createClean1Response->status() == 422) {
                return response()->json($clean1, 422);
            }

            array_push($services, $clean1);

            return $services;
        } elseif ($request_service["service_category_id"] == 2) {

            $responseSubscription  = SubscriptionController::store($request, $request_service);
            $subscriptionJson = $responseSubscription->getContent();
            $subscription = json_decode($subscriptionJson, true);
            $request_service['subscription_id'] = $subscription['id']; // atualiza o subscription_id dentro da request


            //Create first cleaan
            $createClean1Response = CleanController::createClean($request, $request_service);
            $cleanStatusCode = $createClean1Response->status();
            $clean1Json = $createClean1Response->getContent();
            $clean1 = json_decode($clean1Json, true);
            if ($createClean1Response->status() == 422) {
                return response()->json($clean1, 422);
            }

            //Create second cleaan
            $request_service["start_time"] = Carbon::parse($clean1["start_time"])->addDays(14);
            $createClean2Response = CleanController::createClean($request, $request_service);
            $cleanStatusCode = $createClean2Response->status();
            $clean2Json = $createClean2Response->getContent();
            $clean2 = json_decode($clean2Json, true);
            if ($createClean1Response->status() == 422) {
                return response()->json($clean2, 422);
            }

            array_push($services, $clean1, $clean2);
            return $services;
        } elseif ($request_service["service_category_id"] == 3) {

            $responseSubscription  = SubscriptionController::store($request, $request_service);
            // dd($responseSubscription);
            $subscriptionJson = $responseSubscription->getContent();
            $subscription = json_decode($subscriptionJson, true);
            if ($responseSubscription->status() == 422) {
                return response()->json($subscription, 422);
            }
            $request_service['subscription_id'] = $subscription['id']; // atualiza o subscription_id dentro da request

            //Create first cleaan
            $createClean1Response = CleanController::createClean($request, $request_service);
            $clean1StatusCode = $createClean1Response->status();
            $clean1Json = $createClean1Response->getContent();
            $clean1 = json_decode($clean1Json, true);

            if ($createClean1Response->status() == 422) {
                return response()->json($clean1, 422);
            }

            //Create second cleaan
            $request_service["start_time"] = Carbon::parse($clean1["start_time"])->addDays(7);
            $createClean2Response = CleanController::createClean($request, $request_service);
            $clean2StatusCode = $createClean2Response->status();
            $clean2Json = $createClean2Response->getContent();
            $clean2 = json_decode($clean2Json, true);
            if ($createClean2Response->status() == 422) {
                return response()->json($clean2, 422);
            }

            //Create third cleaan
            $request_service["start_time"] = Carbon::parse($clean2["start_time"])->addDays(7);
            $createClean3Response = CleanController::createClean($request, $request_service);
            $clean3StatusCode = $createClean3Response->status();
            $clean3Json = $createClean3Response->getContent();
            $clean3 = json_decode($clean3Json, true);
            if ($createClean3Response->status() == 422) {
                return response()->json($clean3, 422);
            }

            //Create third cleaan
            $request_service["start_time"] = Carbon::parse($clean3["start_time"])->addDays(7);
            $createClean4Response = CleanController::createClean($request, $request_service);
            $clean4StatusCode = $createClean4Response->status();
            $clean4Json = $createClean4Response->getContent();
            $clean4 = json_decode($clean4Json, true);
            if ($createClean4Response->status() == 422) {
                return response()->json($clean4, 422);
            }

            array_push($services, $clean1, $clean2, $clean3, $clean4);
            return $services;
        }
    }

    public function nextServices(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'source_request' => 'required|string',
            'cod_source' => 'required|int',
            'salesman_id' => 'required|int',
            'user_id' => 'required|int'
        ]);

        if ($validator->fails()) {
            $messageError = $validator->errors();
            $event_type = "E";
            return LogCentralController::create($request, $messageError, $event_type);
        }

        $now = Carbon::today();
        $user = Auth::user();

        $services = Service::join('service_categories', 'services.service_category_id', 'service_categories.id')
            ->join("service_types", 'services.service_type_id', "service_types.id")
            ->join("service_statuses", "services.status_id", "service_statuses.id")
            ->with(
                'service_slots',
                'service_slots.professional:user_id',
            )
            ->whereNotIn('status_id', [1, 5, 6, 7, 8]) // não exibir os serviços de: cancelado, lead, visualizado e problema ao abrir vaga
            ->where('client_id', $user->id)
            ->where('start_time', '>', $now)
            ->whereNull('deleted_at')
            ->select('services.*', 'service_categories.title as service_title', 'service_types.title as service_type_title', "service_statuses.title as status_title")
            ->orderBy('start_time', 'ASC')->get()->take(2);

        return response()->json($services);
    }

    public function getServicesTypes(Request $request)
    {
        return ServiceType::all();
    }


    public static function toAprove(Request $request, $payment)
    {
        $validator = Validator::make($request->all(), [
            'cod_source' => 'required|int',
            'user_id' => 'required|int'
        ]);

        if ($validator->fails()) {
            /*****************LOG CENTRAL*********************/
            $messageError =  'ERRO => ' . $validator->errors();
            $event_type = "E";
            return LogCentralController::create($request, $messageError, $event_type);
            /*****************FIM LOG CENTRAL*********************/
        }

        $services = Service::where('order_id', $request->order_id)
            ->where('client_id', $request->user_id)
            ->where('payment_id', $payment->id)
            ->where('status_id', 1)
            ->get();

        if (count($services) > 0) {
            foreach ($services as $service) {
                $serviceAddress = ClientAddress::with('getNeighborhood.region.franchise')->find($services[0]->client_address_id);

                $franchise =  $serviceAddress->getNeighborhood->region->franchise;

                $intermediation_fee = Service_intermediation_fee::where('franchise_id', $franchise->id)
                    ->where('service_type_id', $service->service_type_id)
                    ->where('service_category_id', $service->service_category_id)
                    ->value('intermediation_fee');

                $serviceSlot = ServiceSlot::where('service_id', $service->id)
                    ->whereIn('status_id', [1, 2, 3, 4]) //Busca Se já existe um service Slot para este service
                    ->first();

                if ($serviceSlot) { //Se já existe um slot para este service
                    Service::where('order_id', $request->order_id)
                        ->where('client_id', $request->user_id)
                        ->where('payment_id', $payment->id)
                        ->where('status_id', 1)
                        ->update(['status_id' => 8]);

                    $messageError = 'Erro ao criar vagas para este servico, favor entrar em contato com o Atendimento da Clin';
                    $event_type = "E";

                    return LogCentralController::create($request, $messageError, $event_type);
                }

                $serviceSlot = new ServiceSlot;
                $serviceSlot->service_id = $service->id;
                $serviceSlot->value = (float)$service->value - ((float)$service->value * $intermediation_fee);
                $serviceSlot->status_id = 1;
                $serviceSlot->save();

                $service->status_id = 3;
                $service->save();
            }


            $services = Service::where('order_id', $request->order_id)
                ->where('client_id', $request->user_id)
                ->where('payment_id', $payment->id)
                ->where('status_id', 3)
                ->get();

            return response()->json($services);
        } else {
            $messageError = 'Erro: Nenhum servico encontrado, favor entrar em contato com o Atendimento da Clin';
            $event_type = "E";
            return LogCentralController::create($request, $messageError, $event_type);
        }
    }


    public function GetServicesTypeCategoriesItems(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'service_type_category_id' => 'required|int',
            'cod_source' => 'required|int',
            'client_address_id' => 'required',

        ]);
        if ($validator->fails()) {
            /*****************LOG CENTRAL*********************/
            $messageError =  'ERRO => ' . $validator->errors();
            $event_type = "E";
            return LogCentralController::create($request, $messageError, $event_type);
            /*****************FIM LOG CENTRAL*********************/
        }

        $regionUser = Region::getRegion($request->client_address_id);

        return Services_type_category_items::with('value')
            ->whereHas(
                'service_type_category_item_price.region',
                function ($query) use ($regionUser) {
                    return $query->where('id', $regionUser->id);
                }
            )
            ->where('service_type_category_id', $request->service_type_category_id)->get();
    }

    public function GetServicesTypeCategories(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'services_type_id' => 'required|int',
            'cod_source' => 'required|int',

        ]);
        if ($validator->fails()) {
            /*****************LOG CENTRAL*********************/
            $messageError =  'ERRO => ' . $validator->errors();
            $event_type = "E";
            return LogCentralController::create($request, $messageError, $event_type);
            /*****************FIM LOG CENTRAL*********************/
        }

        return Services_type_category::where('services_type_id', $request->services_type_id)->get();
    }

    public function getCleanScheduled(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "service_id" => "required|int"
        ]);

        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()], 422);
        }

        $service = Service::with("address")
            ->with(
                "payment_method",
                "service_status",
                "service_slots",
                "professionals",
                "payment_status",
            )
            ->join("service_types as st", "services.service_type_id", "st.id")
            ->join("service_statuses as ss", "services.status_id", "ss.id")
            ->select("services.*", "st.title as service_type_title", 'ss.title as service_status_title')
            ->whereIn("service_type_id", [1, 2, 3])
            ->where("services.id", $request->service_id)
            ->first();

        if ($service) {
            $service->makeHidden(["deleted_at", "service_type_category_id", "service_type_category_item_id", "service_type_category_item_price_id", "salesman_id"]);
            return $service;
        }

        return [];
    }

    public function getCarWashScheduled(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "service_id" => "required|int"
        ]);

        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()], 422);
        }

        $carWashScheduled = Service::with("address", "car_client", "service_slots")
            ->where("id", $request->service_id)
            ->whereNotIn("status_id", ["6"]) // Leading nao tem payment_id.
            ->whereNotNull("payment_id")
            ->first();

        if (isset($carWashScheduled)) {
            return $carWashScheduled;
        } else {
            return response()->json(["message" => "Não foi possível encontrar o serviço especificado."], 422);
        }
    }

    public function getSanitationScheduled(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "service_id" => "required|int"
        ]);

        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()], 422);
        }

        $sanitationScheduled = Service::with("address", "payment_method", "service_type_categorie", "service_slots")
            ->where("id", $request->service_id)
            ->whereNotIn("status_id", ["6"]) // Leading nao tem payment_id.
            ->whereNotNull("payment_id")
            ->first();

        return $sanitationScheduled;
    }

    public static function aproveServices(Payment $payment): Collection
    {
        // aprova serviços
        $services = Service::where('order_id', $payment->order_id)->where('status_id', 1)->get();
        foreach ($services as $service) {
            # code...
            $service->status_id = 2;
            $service->payment_status_id = 2;
            $service->save();
            $isSignature =  SubscriptionController::isSignature($payment);
            $serviceControler = new ServicesController;
            if ($isSignature) {
                for ($i = 0; $i < (int)$service->qt_employees; $i++) {
                    # code...
                    // $serviceControler->createNewSlotService($service, 25);
                }
            } else {
                for ($i = 0; $i < (int)$service->qt_employees; $i++) {
                    # code...
                    // $serviceControler->createNewSlotService($service, 28);
                }
            }
        }
        //deu tudo certo tenta enviar o email
        $client = User::find($services[0]->client_id);
        $mailSender = new MailerSenderController();
        // if ($client->email === 'andersong.salvador@gmail.com') {
        $mailSender->sendEmailConfirmationService($client, $services[0]);
        // }
        return $services;
    }

    public function createNewSlotService($service, $percentage)
    {

        $slot = new ServiceSlot();
        $slot->value = (((float)$service->value) - (((float)$service->value / 100) * $percentage)) / (int)$service->qt_employees;
        $slot->service_id = $service->id;
        $slot->save();
    }

    public static function calculateTotalServices(array $arrayOfServices)
    {
        $subTotal = 0;
        $discount = 0;
        $additional = 0;
        foreach ($arrayOfServices as $service) {
            $subTotal += $service['value'];
            // dd($service);

            if (!empty($service['additional_value'])) {
                $additional = (float)$service['additional_value']['value'];
            }
            if (!empty($service['discount_coupon'])) {
                $discount += $service['discount'];
            }
        }

        return [
            "discounts" => number_format((float)$discount, 2, '.', ''),
            "subTotal" =>   number_format((float)$subTotal + (float)$additional, 2, '.', ''),
            "total" =>  number_format((float)$subTotal - $discount + (float)$additional, 2, '.', ''),
            "additional" => number_format((float)$additional, 2, '.', '')
        ];
    }

    public static function getServicesByOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "order_id" => "required"
        ]);

        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()], 422);
        }

        $services = Service::where("order_id", $request->order_id)
            ->with("discount_coupon")
            ->with("additional_value")
            ->where("client_id", $request->user_id)
            ->get();


        if (count($services) > 0) {
            $total = Self::calculateTotalServices($services->toArray());
            return response()->json(["services" => $services, "total" => $total], 200);
        }

        return response()->json(["message" => "Não foram encontrados serviços para essa order."], 422);
    }

    public function createOtherAdditionalsToService(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "order_id" => "required|int",
            "value" => "required|numeric",
            "description" => "required|string",
            "add_value_type_id" => "required|int"
        ]);

        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()], 422);
        }

        if (!AddValueType::find($request->add_value_type_id)) {
            return response()->json(["message" => "Não foi possivel encontrar um motivo na tabela addValueType com esse id"], 422);
        }

        try {
            DB::beginTransaction();
            $newOtherAdditional = new OtherAdditional;
            $newOtherAdditional->value = $request->value;
            $newOtherAdditional->add_value_type_id = $request->add_value_type_id;
            $newOtherAdditional->description = $request->description;
            $newOtherAdditional->save();

            if (!Service::where('order_id', $request->order_id)->exists()) {
                return response()->json(["message" => "Nenhum serviço encontrado para essa ordem"], 422);
            }
            $services = Service::where('order_id', $request->order_id)->get();
            $subscription = Subscription::where('id', $services[0]->subscription_id)->first();
            if ($subscription) {
                $subscription->update(['other_additionals_id' => $newOtherAdditional->id]);
            }
            foreach ($services as  $service) {
                # code...
                $service->update(['other_additionals_id' => $newOtherAdditional->id]);
            }
            DB::commit();
            return response($services);
            //code...
        } catch (\Throwable $th) {
            DB::rollBack();
            return response(["message" => $th->getMessage(), "controller" => basename(__FILE__), "method" => basename(__METHOD__), "url" => url()->current()], 422);
        }
    }


    public function deleteServiceLead(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "service_id" => "required|int"
        ]);
        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()], 422);
        }

        try {
            //code...
            $service = Service::find($request->service_id);
            if ($service->status_id == 6) {
                $service->delete();
            } else {
                return response()->json(["message" => "Você esta tentando excluir um serviço que não é um lead"], 422);
            }
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(["message" => "não foi possivel excluir o serviço $th"], 422);
        }
        return response()->json(["message" => "serviço excluido com sucesso"], 200);
    }



    public function getOfferNewService(Request $request)
    {
        //     $validator = Validator::make($request->all(), [
        //         "source_id" => "required|int",
        //         "service_type_title" => "required|int"
        //     ]);
        //     if ($validator->fails()) {
        //         return response()->json(["message" => $validator->errors()], 422);
        //     }

        $service_type = ServiceType::where('title', 'LIKE', '%' . $request->service_type_title . '%')->first();

        if ($service_type->id == 1 || $service_type->id == 2 || $service_type->id == 3 || $service_type->id == 4) {

            return response()->json([
                "service_type_title" => "Higienização de estofados",
                "coupon" => '#ClinHigienizacao',

                "percent_discount" => "7"
            ]);
        } elseif ($service_type->id == 9 || $service_type->id == 10) {

            return response()->json([
                "service_type_title" => "EcoLavagem Automotiva Delivery",
                "coupon" => '#EcoLavagemClin',
                "percent_discount" => "10"
            ]);
        } else {
            return response()->json([
                "service_type_title" => "Faxina Residencial",
                "coupon" => '#MinhaCasaClin',
                "percent_discount" => "10"
            ]);
        }
    }

    public function testBucket(Request $request)
    {

        // use Aws\S3\S3Client;
        $AWS_ACCESS_KEY_S3 = env('AWS_ACCESS_KEY_S3');
        $region = env('AWS_REGION');
        $AWS_SECRET_ACCESS_S3 = env('AWS_SECRET_ACCESS_S3');
        // Nome do bucket e chave do objeto
        $bucket = env('AWS_BUCKET');

        // Criar uma instância do cliente do Amazon S3
        $client = new S3Client([
            'region' => $region,
            'version' => 'latest',
            'credentials' => [
                'key' => $AWS_ACCESS_KEY_S3,
                'secret' => $AWS_SECRET_ACCESS_S3,
            ],
        ]);


        $key = 'clinpro/perfil/Imagem do WhatsApp de 2023-05-11 à(s) 07.39.30.png';

        // Executar a operação HeadObject
        $result = $client->headObject([
            'Bucket' => $bucket,
            'Key' => $key,
        ]);
        // Gerar a URL assinada com tempo de expiração (por exemplo, 1 hora)
        $expiration = '+20 minutes';

        // Gera a URL assinada
        $command = $client->getCommand('GetObject', [
            'Bucket' => $bucket,
            'Key' => $key
        ]);

        $signedUrl = $client->createPresignedRequest($command, $expiration)->getUri();

        // Retornar a URL assinada para o aplicativo React Native
        return response()->json(['signedUrl' => $signedUrl]);

        // return $url;
        // Obter as informações do objeto
        // $metadata = $result['Metadata'];
        // $size = $result['ContentLength'];
        // $contentType = $result['ContentType'];

        // Exemplo de impressão das informações
        // echo "Metadados: " . print_r($metadata, true) . PHP_EOL;
        // echo "Tamanho: " . $size . " bytes" . PHP_EOL;
        // echo "Tipo de conteúdo: " . $contentType . PHP_EOL;

    }


    public function sendTestEmail(Request $request)
    {

        $user = User::find($request->user_id);

        $service = Service::where('client_id', $user->id)->where('status', 4)->firt();

        $payment = Payment::where('order_id', $service->order_id)->firt();

        $clientEmail = 'thiagoa.santos@yahoo.com.br';

        $sendEmail = new MailerSenderController;

        return $sendEmail->sendEmailServiceFinish($user, $service, $payment);


        return response()->json([
            'message' => 'Email enviado com sucesso.',
        ], 200);
    }

    public function uploadImage(Request $request)
    {
        // $image_path would look something like this: './images/abc.png'
        $image_path = 'c:/imagem.jpg';

        // Verifica se o arquivo foi enviado
        // if ($request->hasFile('image')) {
        if (file_exists($image_path)) {
            // $image = $request->file('image');
            $image = response()->file($image_path);

            // Create an instance of UploadedFile using the image path
            $uploadedFile = new \Symfony\Component\HttpFoundation\File\UploadedFile($image_path, basename($image_path));
            // Gera um nome único para a imagem
            $filename = Str::uuid() . '.' . $uploadedFile->getClientOriginalExtension();



            // Cria uma instância do S3Client com as credenciais do Amazon S3
            $s3 = new S3Client([
                'region' =>  env('AWS_REGION'),
                'version' => 'latest',
                'credentials' => [
                    'key' => env('AWS_ACCESS_KEY_S3'),
                    'secret' => env('AWS_SECRET_ACCESS_S3'),
                ],
            ]);

            // Define os parâmetros para o upload da imagem
            $params = [
                'Bucket' => env('AWS_BUCKET'),
                'Key' => 'clinpro/perfil/' . $filename,
                'Body' => fopen($uploadedFile->getPathname(), 'rb'),
                'ACL' => 'private',
            ];

            try {
                // Faz o upload da imagem para o Amazon S3
                $result = $s3->putObject($params);

                // Retorna a URL da imagem
                $url = $result['ObjectURL'];

                return response()->json([
                    'url' => $url,
                ], 200);
            } catch (AwsException $e) {
                return response()->json([
                    'message' => 'Erro ao fazer upload da imagem.',
                ], 500);
            }
        }

        return response()->json([
            'message' => 'Nenhuma imagem enviada.',
        ], 400);
    }

    public function finishService(Request $request)
    {
        //se o usuario não for o cron não deixar criar pagamento;
        $userId = Auth::user()->id;
        if ($userId != 5) {
            return response()->json(['Message' => 'Este usuario não pode realizar esta operação'], 401);
        }

        $service = Service::find($request->service_id);

        //apenas solots que não existem pagamentos;
        $slotsProfessionals = ServiceSlot::where("service_id", $request->service_id)->has('user')->with('user')->doesnthave('payment_professional')->whereNull('deleted_at')->whereNull('fine')->get();

        if ($slotsProfessionals) {
            $this->createDebitFranchise($service, $slotsProfessionals);
        }
        return response()->json($request);
    }

    public function testeAws(Request $request)
    {
        Log::info($request);
    }
}

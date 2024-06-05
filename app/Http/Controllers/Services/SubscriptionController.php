<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Finance\PaymentsController;
use App\Models\Subscription;
use App\Models\Subscription_preferred_professional;
use App\Models\ServiceAdditionals;
use App\Models\Log_central;
use App\Models\SubscriptionPreferred_professional;
use App\Models\SubscriptionDayweek;
use App\Models\Additional;
use App\Models\CorporateClient;
use Illuminate\Support\Facades\Validator;
use App\Models\Costumer;
use App\Models\CreditCardDetail;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Service;
use Carbon\Carbon;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;
use phpDocumentor\Reflection\Types\Boolean;

class SubscriptionController extends Controller
{


    public static function store(Request $request, $request_service)
    {

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|int',
            'source' => 'required',
            'source_request' => 'required|string',
            'salesman_id' => 'required|int',
            'cod_source' => 'required|int',
            'order_id' => 'required|int',
            'franchise_id' => 'required|int'
        ]);

        if ($validator->fails()) {
            $messageError = $validator->errors();
            /*****************LOG CENTRAL*********************/
            Log_Central::Create([
                'user_id' => $request["user_id"] ? $request["user_id"] : null,
                'cod_source' => $request["cod_source"],
                'salesman_id' => $request['salesman_id'],
                'source' =>  "Model Subscription => function Store / Source_requester => " . $request["source_request"],
                'event_type' => "E",
                'log'      => 'ERRO => ' . $messageError,

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
                'source' =>   "Model Subscription => function Store / Source_requester => " . $request["source_request"],
                'event_type' => "E",
                'log'      => 'ERRO => ' . $messageError,

            ]);
            /*****************FIM LOG CENTRAL*********************/

            return response()->json($messageError, 422);
        }

        $costumer = Costumer::where('user_id', $request->user_id)->first();
        if (!$costumer) {
            $costumer = CorporateClient::where("user_id", $request->user_id)->first();
        }

        if ($costumer) {
            //Verifica se o cliente já tem alguma assinatura ativa
            $subscription = Subscription::where('client_id', $request["user_id"])
                ->where('service_category_id', $request_service["service_category_id"])
                ->where("service_type_id", $request_service["service_type_id"])
                ->where("client_address_id", $request_service["client_address_id"])
                ->where("status_id", "!=", 2)
                ->first();

            if ($subscription) {
                if (in_array($subscription->status_id, [1, 3, 4, 5])) {
                    $subscription->status_id = 4;
                    $subscription->client_id =  $request["user_id"]; //Esta tabela utiliza  o $user->id;
                    $subscription->client_address_id = $request_service["client_address_id"];
                    $subscription->salesman_id = $request["salesman_id"];
                    $subscription->service_type_id = $request_service["service_type_id"];
                    $subscription->products_included = $request_service["products_included"];
                    $subscription->service_category_id = $request_service["service_category_id"];
                    $subscription->value_service = $request_service["value_service"];
                    $subscription->total_time = $request_service["total_time"];
                    $subscription->qt_employees = $request_service["qt_employees"];
                    $subscription->startTime = \Carbon\Carbon::createFromFormat("Y-m-d H:i:s", $request_service["start_time"])->format("H:i");
                    $subscription->startDay = \Carbon\Carbon::createFromFormat("Y-m-d H:i:s", $request_service["start_time"])->format("d");
                    $subscription->franchise_id = $request->franchise_id;

                    $subscription->save();

                    $request_service['subscription_id'] = $subscription->id; // atualiza o subscription_id dentro da request
                    /*****************LOG CENTRAL*********************/
                    Log_Central::Create([
                        'user_id' => $request["user_id"],
                        'cod_source' => $request['cod_source'],
                        'salesman_id' => $request['salesman_id'],
                        'source' =>  "app/SubscriptionController => function store / Source_requester => " . $request["source_request"],
                        'event_type' => "A",
                        'log'      => 'Ao gerar nova Assinatura, foi encontrada uma na mesma categoria e for editada',

                    ]);
                    /*****************FIM LOG CENTRAL*********************/

                    // dd("oba");
                    self::storeAdditionals($request, $request_service);


                    self::SubscriptionDayweek($request, $request_service);


                    return response()->json($subscription);
                }
                // }else if($subscription->status_id == 4){

            } else {

                /*****************LOG CENTRAL*********************/
                Log_Central::Create([
                    'user_id' => $request["user_id"],
                    'cod_source' => $request['cod_source'],
                    'salesman_id' => $request['salesman_id'],
                    'source' =>  "app/SubscriptionController => function store / Source_requester => " . $request["source_request"],
                    'event_type' => "C",
                    'log'      => 'Assinatura Criada',

                ]);
                /*****************FIM LOG CENTRAL*********************/

                $subscription = new Subscription;
                $subscription->status_id = 4;
                $subscription->client_id = $request["user_id"]; //Esta tabela utiliza realmente o $client->id e não o user_id;
                $subscription->client_address_id = $request_service["client_address_id"];
                $subscription->salesman_id = $request["salesman_id"];
                $subscription->service_type_id = $request_service["service_type_id"];
                $subscription->products_included = $request_service["products_included"];
                $subscription->service_category_id = $request_service["service_category_id"];
                $subscription->value_service = $request_service["value_service"];
                $subscription->total_time = $request_service["total_time"];
                $subscription->qt_employees = $request_service["qt_employees"];
                $subscription->startTime = \Carbon\Carbon::createFromFormat("Y-m-d H:i:s", $request_service["start_time"])->format("H:i");
                $subscription->startDay = \Carbon\Carbon::createFromFormat("Y-m-d H:i:s", $request_service["start_time"])->format("d");
                $subscription->franchise_id = $request->franchise_id;

                $subscription->save();

                /*****************LOG CENTRAL*********************/
                Log_Central::Create([
                    'user_id' => $request["user_id"],
                    'cod_source' => $request['cod_source'],
                    'salesman_id' => $request['salesman_id'],
                    'source' =>  "app/SubscriptionController => function store / Source_requester => " . $request["source_request"],
                    'event_type' => "C",
                    'log'      => 'USER->ID ' . $request["user_id"] . 'Criou a Assinatura Criada, através do ' .  $request["source_request"],

                ]);
                /*****************FIM LOG CENTRAL*********************/


                $request_service['subscription_id'] = $subscription->id; // atualiza o subscription_id dentro da request

                self::storeAdditionals($request, $request_service);

                self::SubscriptionDayweek($request, $request_service);

                return response()->json($subscription);
            }
        } else {
            /*****************LOG CENTRAL*********************/
            $messageError = 'ERRO => Cliente não encontrado';
            Log_Central::Create([
                'user_id' => $request["user_id"],
                'cod_source' => $request['cod_source'],
                'subscription_id' => null,
                'source' =>  "app/SubscriptionController => function store / Source_requester => " . $request["source_request"],
                'event_type' => "E",
                'log'      => $messageError,

            ]);
            /*****************FIM LOG CENTRAL*********************/
            return response()->json($messageError, 401);
        }
    }

    public static function storeAdditionals(Request $request, $request_service)
    {
        $validator = Validator::make($request->all(), [
            //mandatory parameters
            'cod_source' => 'required',
            'source_request' =>  'required',
            'salesman_id' =>  'required|int'

        ]);

        if ($validator->fails()) {

            $messageError = $content = $validator->errors();
            /*****************LOG CENTRAL*********************/
            Log_Central::Create([
                'user_id' => null,
                'cod_source' => $request['cod_source'],
                'salesman_id' => $request['salesman_id'],
                'source' =>  "Subscription Controller => function storeAdditionals / Source_requester => " . $request["source_request"],
                'event_type' => "E",
                'log'      => 'ERRO => ' . $messageError,

            ]);
            /*****************FIM LOG CENTRAL*********************/

            return response()->json($messageError, 422);
        }

        $validator = Validator::make($request_service, [
            //mandatory parameters
            'subscription_id' => 'required|int',
            'additionals' =>  'required',
        ]);

        if ($validator->fails()) {
            $messageError = $validator->errors();
            /*****************LOG CENTRAL*********************/
            Log_Central::Create([
                'user_id' => $request["user_id"] ? $request["user_id"] : null,
                'cod_source' => $request["cod_source"],
                'salesman_id' => $request['salesman_id'],
                'source' =>  "Subscription Controller => function storeAdditionals /  Source_requester => " . $request["source_request"],
                'event_type' => "E",
                'log'      => 'ERRO => ' . $messageError,

            ]);
            /*****************FIM LOG CENTRAL*********************/

            return response()->json($messageError, 422);
        }

        if ($request_service["additionals"] != NULL) {
            $additionals = explode(',', $request_service["additionals"]); //PEGA SEPARADO os valores de additionals
            $additionals_ids = Additional::whereIn('title', $additionals)->get()->pluck('id')->toArray();


            $subscription = Subscription::where('id', $request_service['subscription_id'])->first();

            $subscription_additionals = ServiceAdditionals::where('subscription_id', $subscription->id)->get();

            foreach ($subscription_additionals as $addttional) {

                $addttional->delete();
            }

            //Cria os Itens Adicionais da Service para a Assinatura
            foreach ($additionals_ids as $additional_id) {

                $additional = ServiceAdditionals::where('id', $additional_id)->first();

                $subscription_additional = ServiceAdditionals::Create();
                $subscription_additional->subscription_id = $subscription->id;
                $subscription_additional->additionals_id = $additional->id;

                if ($subscription_additional->save()) {
                    /*****************LOG CENTRAL*********************/
                    Log_Central::Create([
                        'subscription_id' => $subscription->id,
                        'cod_source' => $request["cod_source"],
                        'salesman_id' => $request["salesman_id"],
                        'source'      => "Subscription Controller => function storeAdditionals/ Source_requester => " . $request->source_request,
                        'event_type' => "C",
                        'log'           => "Subscription Additional salvo com sucesso => " . $subscription_additional,

                    ]);
                    /*****************FIM LOG CENTRAL*********************/
                    return response()->json(200);
                } else {
                    $errorMessage = "Subscription Additional erro ao gravar" . $subscription_additional;
                    /*****************LOG CENTRAL*********************/
                    Log_Central::Create([
                        'subscription_id' => $subscription->id,
                        'cod_source' => $request["cod_source"],
                        'salesman_id' => $request["salesman_id"],
                        'source'      =>  "Subscription Controller => function storeAdditionals/ Source_requester => " .  $request->source_request,
                        'event_type' => "E",
                        'log'           =>  $errorMessage,
                    ]);
                    /*****************FIM LOG CENTRAL*********************/

                    return response()->json($errorMessage, 422);
                }
            }
        } else {
            return response()->json(200);
        }
    }
    public function getSubscriptions(Request $request)
    {

        $validator = Validator::make($request->all(), [
            //mandatory parameters
            'cod_source' => 'required',
            'user_id' => 'required',
            'source_request' => 'required'

        ]);

        if ($validator->fails()) {

            $messageError = $content = $validator->errors();
            /*****************LOG CENTRAL*********************/
            Log_Central::Create([
                'user_id' => null,
                'cod_source' => $request['cod_source'],
                'salesman_id' => $request['salesman_id'],
                'source' =>  "Subscription Controller => function getPreferredProfessional/ Source_requester => " . $request["source_request"],
                'event_type' => "E",
                'log'      => 'ERRO => ' . $messageError,

            ]);
            /*****************FIM LOG CENTRAL*********************/

            return response()->json($messageError, 422);
        }

        if (Auth::user()->id == $request->user_id) {

            return Subscription::where('client_id', $request->user_id)->whereNotIn("status_id", [2])->orderBy('id', 'desc')->get()->makeHidden(['client_address_id', 'salesman_id', 'corpotate_client_id', 'address_type_id', 'cancel_reason', 'date_last_renewal', 'client_id', 'service_category_id', 'service_type_id', 'status_id']);
        } else {
            $messageError = 'Esta Assinatura não pertence a este cliente.';
            return response()->json($messageError, 422);
        }
    }
    public function getPreferredProfessionals(Request $request)
    {
        $validator = Validator::make($request->all(), [
            //mandatory parameters
            'cod_source' => 'required',
            'user_id' => 'required',
            'subscription_id' => 'required'

        ]);

        if ($validator->fails()) {

            $messageError = $content = $validator->errors();
            /*****************LOG CENTRAL*********************/
            Log_Central::Create([
                'user_id' => null,
                'cod_source' => $request['cod_source'],
                'salesman_id' => $request['salesman_id'],
                'source' =>  "Subscription Controller => function getPreferredProfessional/ Source_requester => " . $request["source_request"],
                'event_type' => "E",
                'log'      => 'ERRO => ' . $messageError,

            ]);
            /*****************FIM LOG CENTRAL*********************/

            return response()->json($messageError, 422);
        }

        if (Auth::user()->id == $request->user_id) {
            $preferedProfessionals = SubscriptionPreferred_professional::where('subscription_id', $request->subscription_id)->get();
            return response()->json($preferedProfessionals, 200);
        } else {
            $messageError = 'Esta Assinatura não pertence a este cliente.';
            return response()->json($messageError, 422);
        }
    }

    public static function SubscriptionDayweek(Request $request, $request_service)
    {
        $validator = Validator::make($request->all(), [
            //mandatory parameters
            'cod_source' => 'required',
            'source_request' =>  'required',
            'salesman_id' =>  'required|int'

        ]);

        if ($validator->fails()) {

            $messageError = $content = $validator->errors();
            /*****************LOG CENTRAL*********************/
            Log_Central::Create([
                'user_id' => null,
                'cod_source' => $request['cod_source'],
                'salesman_id' => $request['salesman_id'],
                'source' =>  "Subscription Controller => function storeAdditionals/ Source_requester => " . $request["source_request"],
                'event_type' => "E",
                'log'      => 'ERRO => ' . $messageError,

            ]);
            /*****************FIM LOG CENTRAL*********************/

            return response()->json($messageError, 422);
        }

        $validator = Validator::make($request_service, [
            //mandatory parameters
            'subscription_id' => 'required|int',
            'additionals' =>  'required',
        ]);

        if ($validator->fails()) {
            $messageError = $validator->errors();
            /*****************LOG CENTRAL*********************/
            Log_Central::Create([
                'user_id' => $request["user_id"] ? $request["user_id"] : null,
                'cod_source' => $request["cod_source"],
                'salesman_id' => $request['salesman_id'],
                'source' =>  "SubscriptionController => function SubscriptionDayweek / Source_requester => " . $request["source_request"],
                'event_type' => "E",
                'log'      => 'ERRO => ' . $messageError,

            ]);
            /*****************FIM LOG CENTRAL*********************/

            return response()->json($messageError, 422);
        }



        $subscription = Subscription::where('id', $request_service['subscription_id'])->first();

        if ($subscription) {
            //Cria uma SubscriptionDayweek para a quantidade de vagas da Assinatura Semanal
            $contador = 0;
            while ($contador < $subscription->qt_employees) {
                //Cria a tabela de profissional Preferrencial para o SubscriptionDayweek
                // $subscription_preferred_professional = new SubscriptionPreferred_professional;
                // $subscription_preferred_professional->subscription_id = $subscription->id;
                // $subscription_preferred_professional->save();
                /*****************LOG CENTRAL*********************/
                Log_Central::Create([
                    'user_id' => $subscription->user_id,
                    'cod_source' => $request["cod_source"],
                    'salesman_id' => $request["salesman_id"],
                    'source' =>  "Subscription Controller => function SubscriptionDayweek/ Source_requester => " . $request["source_request"],

                    'event_type' => "C",
                    'log'      => 'SubscriptionPreferred_professional Criada com sucesso',

                ]);
                /*****************FIM LOG CENTRAL*********************/

                $subscriptionDayWeek = SubscriptionDayweek::where("subscription_id", $subscription->id)->get();

                if (count($subscriptionDayWeek)) {
                    // dd($subscriptionDayWeek[0]['dayWeek']);
                    $isTheSameDayWeek = $subscriptionDayWeek[0]['dayWeek'] === \Carbon\Carbon::parse($request_service['start_time'])->dayOfWeek;

                    if (!$isTheSameDayWeek) {
                        SubscriptionDayweek::where("subscription_id", $subscription->id)->delete();
                        $Subscription_dayWeek = new SubscriptionDayweek;
                        $Subscription_dayWeek->subscription_id = $subscription->id;
                        $Subscription_dayWeek->dayWeek = \Carbon\Carbon::parse($request_service['start_time'])->dayOfWeek;
                        $Subscription_dayWeek->save();
                    }
                } else {
                    $Subscription_dayWeek = new SubscriptionDayweek;
                    $Subscription_dayWeek->subscription_id = $subscription->id;
                    $Subscription_dayWeek->dayWeek = \Carbon\Carbon::parse($request_service['start_time'])->dayOfWeek;
                    $Subscription_dayWeek->save();
                }

                /*****************LOG CENTRAL*********************/
                Log_Central::Create([
                    'user_id' => $subscription->user_id,
                    'cod_source' => $request["cod_source"],
                    'salesman_id' => $request["salesman_id"],
                    'source' =>  "Subscription Controller => function SubscriptionDayweek/ Source_requester => " . $request["source_request"],

                    'event_type' => "C",
                    'log'      => 'SubscriptionDayweek Criada com sucesso',

                ]);
                /*****************FIM LOG CENTRAL*********************/

                $contador += 1;
            }

            return response()->json(200);
        } else {
            $messageError = 'Subscription Não encontrada';
            /*****************LOG CENTRAL*********************/
            Log_Central::Create([
                'user_id' => null,
                'cod_source' => $request["cod_source"],
                'salesman_id' => $request["salesman_id"],
                'source' =>  "Subscription Controller => function storeAdditionals/ Source_requester => " . $request["source_request"],

                'event_type' => "E",
                'log'      => 'ERRO => ' . $messageError,

            ]);
            /*****************FIM LOG CENTRAL*********************/

            return response()->json($messageError, 422);
        }
    }

    public static function isSignature(Payment $payment): bool
    {
        //checa atraves do order_is do pagamento se é uma assinatura
        $services = Service::where('order_id', $payment->order_id)->get();
        return $services->first()->service_category_id  != 1 ? true : false;
    }

    public static function aproveSubscription(Payment $payment): Subscription
    {

        $subscription = Subscription::find($payment->subscription_id);
        $subscription->status_id = 1;
        $subscription->save();
        return $subscription;
    }
    public static function renewSubscription(Request $request)
    {
        $subscriptions = Subscription::where('id', $request->subscription_id)
            ->where('status_id', 1);

        // Se não for a renovação automática, apenas renovar se o usuário logado for da mesma franquia, mas caso seja o Cron então renove todas :D
        if ($request->cod_source != 2) {
            $subscriptions = $subscriptions->where('franchise_id', Auth::user()->franchise_id);
        }

        $subscriptions = $subscriptions->get();


        if (count($subscriptions) > 0) {
            $message = Self::renewSubscriptions($request, $subscriptions);

            if ($message == 'ok') {
                return response("Assinatura renovada com sucesso!", 200);
            } else {
                return response("Houve um erro ao renovar a assinatura", 422);
            }
        } else {
            return response(["message" => "Essa assinatura não pode ser renovada."], 422);
        }
    }

    public static function renewSubscriptions($request, $subscriptions)
    {
        foreach ($subscriptions as $subscription) {
            $subscriptionDayweeks = Self::subscriptionDayweeks($subscription);
            $countSubscriptionDayweek = 0;
            $countServices = 0;
            $firstDayWeek = 0;
            $serviceDates = array();

            //Recupera a order do serviço ou cria, todo service deve estar obrigatóriamente associado a uma order
            $order = new Order;
            $order->franchise_id = $subscription->franchise_id;
            $order->save();

            $request->merge([
                "order_id" => $order->id
            ]);

            foreach ($subscriptionDayweeks as $subscriptionDayweek) {

                if ($countSubscriptionDayweek == 0) { //registra o primeiro dayWeek				
                    $firstDayWeek = $subscriptionDayweek->dayWeek;
                } elseif ($firstDayWeek == $subscriptionDayweek->dayWeek) // Controla se já passou todos os dayweek
                {
                    break;
                } //se contador maior que zero e primeiro dayweek = subscriptionDayweek	-> Encerra o Laço. 				


                $today = Carbon::now()->format("Y-m-d") . ' ' . $subscription->startTime;

                if ($subscription->service_category_id == 2) { //Se quinzenal
                    if (Self::daysLastService($subscription) > 14) {
                        $startDatesRenew = Carbon::createFromFormat("Y-m-d H:i:s", $today)->addDays(1);
                    } else {
                        $startDatesRenew = Carbon::createFromFormat("Y-m-d H:i:s", Self::startTimeLastService($subscription))->addDays(12);
                    }
                } elseif ($subscription->service_category_id == 3) { //Se semanal ou Multipla							
                    if (Self::daysLastService($subscription) > 5) { //Se a ultima Service encontrada, tiver mais de 7 dias, será considerado a data de hoje.					
                        $startDatesRenew = Carbon::createFromFormat("Y-m-d H:i:s", $today)->addDays(1);
                    } else { //Se tem menos de 7 dias
                        $startDatesRenew = Carbon::createFromFormat("Y-m-d H:i:s", Self::startTimeLastService($subscription))->addDays(1);
                        if ($today > $startDatesRenew) {
                            $startDatesRenew = Carbon::createFromFormat("Y-m-d H:i:s", $today)->addDays(1);
                        }
                    }
                } else { //Se semanal ou Multipla							
                    if (Self::daysLastService($subscription) > 2) { //Se a ultima Service encontrada, tiver mais de 2 dias, será considerado a data de hoje.					
                        $startDatesRenew = Carbon::createFromFormat("Y-m-d H:i:s", $today)->addDays(1);
                    } else { //Se tem menos de 7 dias			
                        $startDatesRenew = Carbon::createFromFormat("Y-m-d H:i:s", Self::startTimeLastService($subscription))->addDays(1);
                        if ($today > $startDatesRenew) {
                            $startDatesRenew = Carbon::createFromFormat("Y-m-d H:i:s", $today)->addDays(1);
                        }
                    }
                }

                $data = Self::iterationLoopSignatures($subscription, $subscriptionDayweek, $startDatesRenew, $order);
                foreach ($data as $d) {
                    array_push($serviceDates, $d);
                }
                $countSubscriptionDayweek += 1;
            }

            //Conta quantas Services foram criadas a partir do array retornado
            $countServices = count($serviceDates);

            //Após criar todas as services, chama a Função que cria o pogamento. 
            $message = Self::createPaymentStatus($request, $subscription, $countServices, $serviceDates, $order);
            return $message;
        }
    }



    public static function subscriptionDayweeks($subscription)
    {
        return SubscriptionDayweek::where('subscription_id', $subscription->id)->get();
    }

    public static function daysLastService($subscription)
    {
        //Se StartDatesRenew for data futura, será considerada a data futura para renovação.			
        if (Self::startTimeLastService($subscription) == NULL) {
            return 99;    // Retorna valor alto, para que a data de renovação seja a partir do dia certo do cadastro na assinatura.				
        } else {
            return \Carbon\Carbon::today()->diffInDays(Self::startTimeLastService($subscription)); //Encontra a diferenca em dias da data da ultima Service realizada
        }
    }

    public static function startTimeLastService($subscription)
    {

        $startTimeLastService = Service::where('client_id', $subscription->client_id)
            ->whereIn('status_id', [2, 3, 4])
            ->where('service_category_id', $subscription->service_category_id)
            ->where('service_type_id', $subscription->service_type_id)
            ->latest('start_time')->value('start_time');
        if ($startTimeLastService) {
            return $startTimeLastService;
        } else {
            return NULL;
        }
    }


    public static function iterationLoopSignatures($subscription, $subscriptionDayweek, $startDatesRenew, $order)
    {
        $serviceDates = [];

        while (Self::endDatesRenew($subscription) > $startDatesRenew) {
            if ($subscriptionDayweek->dayWeek  == $startDatesRenew->dayOfWeek) {
                $from = $startDatesRenew->format('Y-m-d') . ' ' . "00:00:01";
                $to = $startDatesRenew->format('Y-m-d') . ' ' . "23:59:59";



                $serviceExists = Service::where("subscription_id", $subscription->id)->where("client_id", $subscription->client_id)->whereBetween("start_time",  [$from, $to])->first();

                // Se já existe um serviço dessa assinatura nesse dia ele não irá criar outra.

                if (!$serviceExists) {
                    if ($subscription->service_category_id == 2) { // Se quinzenal

                        array_push($serviceDates, Self::createServiceRenew($subscription, $startDatesRenew, $order));
                        $startDatesRenew->addDays(13); //Cria a segunda Service da quinzenal					
                    } elseif ($subscription->service_category_id == 3 || $subscription->service_category_id == 4) { // Se semanal ou multipla
                        array_push($serviceDates, Self::createServiceRenew($subscription, $startDatesRenew, $order)); //Cria a 2ª Service da assinatura semanal
                        $startDatesRenew->addDays(1);
                    }
                } else {
                    if ($subscription->service_category_id == 2) {
                        $startDatesRenew->addDays(13);
                    } elseif ($subscription->service_category_id == 3 || $subscription->service_category_id == 4) {
                        $startDatesRenew->addDays(1);
                    }
                }
            } else {
                $startDatesRenew->addDays(1);
            }
        }

        return $serviceDates;
    }

    public static function endDatesRenew($subscription)
    {

        $startDay = Carbon::today()->firstOfMonth()->addDays($subscription->startDay)->addDays(1);

        if ($startDay < Carbon::today()) {
            $startDay->addMonth(1);
            if (Carbon::today()->diffInDays($startDay) >= 15) {
                return $startDay->subDays(1);
            } else {
                return $startDay->addMonth(1)->subDays(1);
            }
        } else {
            if (Carbon::today()->diffInDays($startDay) >= 15) {
                return $startDay->subDays(1);
            } else {
                return $startDay->addMonth(1)->subDays(1);
            }
        }
    }

    public static function createServiceRenew($subscription, $date, $order)
    {

        $service = new Service;
        $service->value = $subscription->value_service;
        $service->total_time = $subscription->total_time;
        $service->service_type_id = $subscription->service_type_id;
        $service->client_id = $subscription->client_id;
        $service->service_category_id = $subscription->service_category_id;
        $service->qt_employees = $subscription->qt_employees;
        $service->products_included = $subscription->products_included;
        $service->subscription_id = $subscription->id;
        $service->franchise_id = $subscription->franchise_id;
        $service->client_address_id = $subscription->client_address_id;

        $service->start_time = \Carbon\Carbon::createFromFormat("Y-m-d H:i:s", $date)->format("Y-m-d H:i:s");
        $service->end_time = \Carbon\Carbon::createFromFormat("Y-m-d H:i:s", $date)->addHours($subscription->total_time)->format("Y-m-d H:i:s");
        $service->dayOfWeek = $date->dayOfWeek;
        $service->salesman_id = Auth::user()->id ?? 2; // Salva com sendo id do operador logado ou 2 no caso do cron
        $service->status_id = 1;
        $service->order_id = $order->id;

        $service->save();
        return $service->start_time;
    }



    public static function createPaymentStatus($request, $subscription, $countServices, $serviceDates, $order)
    {

        $creditCard = CreditCardDetail::where('user_id', $subscription->client_id)->first();
        if ($creditCard) { //Se o cliente um cartão de crédito cadastro o sistema i´ra priorizar pagamento em cartão. 
            $paymentMethod = "CREDIT_CARD";
            $payment_method_id = 1;
        } else {
            $paymentMethod = "BOLETO";
            $payment_method_id = 0;
        }

        $dueDate = $subscription->service_category_id === 1 ? 1 : 5;

        $request->merge([
            "payment_method_id" => $payment_method_id,
            "daysPayment" => $dueDate,
        ]);

        try {
            $payment_subscription = PaymentsController::createServicePayment($request); // Return a json, because App use this route.

            if ($payment_subscription->getStatusCode() === 200) {
                Log::info("Payment_subscription created successfully: $payment_subscription");
                $subscription->status_id = 4; // Se o pagamento foi criado, então setar a assinatura para aguardando aprovação.
                $subscription->save();

                $services = Service::where('subscription_id', $subscription->id)
                    ->where('status_id', 1)
                    ->where('order_id', $order->id)
                    ->get();
                $payment_subscription = $payment_subscription->getData();
                foreach ($services as $service) {
                    $service->payment_id = $payment_subscription->id;
                    $service->save();
                }
                return "ok";
            } else {
                $subscription->status_id = 1;
                $subscription->save();

                $services = Service::where('subscription_id', $subscription->id)
                    ->where('status_id', 1)
                    ->where('order_id', $order->id)
                    ->get();

                foreach ($services as $service) {
                    $service->delete();
                }
                Log::info("Falha ao gerar pagamento para a assinatura $subscription->id , não foram gerados serviços para a assinatura.");
            }
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = json_decode($response->getBody()->getContents());
            Log::info($responseBodyAsString->message);
            return $responseBodyAsString->message;
        } catch (\Throwable $th) {
            $errorMessage = "Erro ao criar pagamento para a order $order->id";
            if (isset($th->getMessage)) {
                $errorMessage = $th->getMessage();
            }
            Log::info([
                "message" => $th->getMessage(),
                "file" => pathinfo(__FILE__, PATHINFO_FILENAME),
                "function" => __FUNCTION__
            ]);
        }
    }


    public static function subscriptionsAvailableRenew()
    {
        $operador_logado = Auth::user();

        $subscriptions = Subscription::where('startDay', Self::availabilityDateStart())
            ->where('status_id', 1)
            ->whereNotIn('id', Self::subscriptionsCannotRenew());

        if (!empty($operador_logado->franchise_id)) {
            $subscriptions->where('franchise_id', $operador_logado->franchise_id);
        }

        return  $subscriptions->get();
    }

    public static function availabilityDateStart()
    {
        return Carbon::now()->addDays(10)->format('d');
    }

    public static function subscriptionsCannotRenew()
    {
        return Payment::where('reference_month', Self::currentMonth())->where('payment_status_id', 1)->whereNotNull('subscription_id')->get()->pluck('subscription_id')->toArray();
    }

    public static function currentMonth()
    {
        return Carbon::now()->format("m-Y");
    }
}

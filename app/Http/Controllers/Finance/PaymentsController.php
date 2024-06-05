<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Asaas\AsaasBillingController;
use App\Http\Controllers\AsaasController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LogCentralController;
use App\Http\Controllers\Mail\MailerSenderController;
use App\Http\Controllers\Services\ServicesController;
use App\Mail\ScheduledService;
use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Models\Asaas\Asaas;
use App\Models\Asaas\AsaasBilling;
use App\Models\CreditCardDetail;
use App\Models\Log_central;
use App\Models\Order;
use App\Models\Payment;
use App\Models\PaymentAccount;
use App\Models\ServiceIntermediationFranchiseRate;
use App\Models\Services_type_category_items;
use App\Models\User;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class PaymentsController extends Controller
{

    public static function createServicePayment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|int',
            'cod_source' => 'required|int',
            'order_id' => 'required|int',
            'daysPayment' => 'required',
            'payment_method_id' => 'required'
        ]);

        //condição para não aceitar token de fora nesta requisição
        if ($request->access_token) {
            return response()->json(["error" => "parametro inválido"], 422);
        }

        //verifica se é um admin agendando ou o cron
        $userLogued = Auth::user();
        if (!$userLogued) {
            //pegar as informaçoes do cron caso não tenha usuario
            $userLogued = User::find(5);
        }
        if (in_array($userLogued->role_id, [0, 1, 2])) {
            //pega as variaveis a serem utilizadas
            $asaas = new Asaas();
            $service = Service::where('order_id', $request->order_id)->first();

            //seta o token do asaas da franquia que em que o serviço foi agendado
            $paymentAccount = $asaas->tokens($service->franchise_id);
            $request->merge(["access_token" => $paymentAccount->access_token, "franchise_id" => $service->franchise_id]);

            //taxa franchise
            $txService = ServiceIntermediationFranchiseRate::where('franchise_id', $service->franchise_id)->where('service_type_id', $service->service_type_id)->first();

            //verifica se esse admin pertence a matriz.
            if ($userLogued->franchise_id == 1) {
                //verifica se esta agendando para a matriz,caso não
                if ($service->franchise_id != 1) {
                    //aplicar taxa de serviço

                    $splitService = ["walletId" => $asaas->walletMaster()->walletId, "percentualValue" => ($service->value * $txService->royalty_rate)]; //a porcentagem deve ser pega de acordo com o serviço
                    // $splitGender = ["walletId" => $asaas->walletMaster()->walletId, "percentualValue" => 0.1];
                    $split = ["split" => [$splitService]];
                    $request->merge($split);
                }
            } else {
                //aplicar taxa de serviço
                $splitService = ["walletId" => $asaas->walletMaster()->walletId, "percentualValue" => ($service->value * $txService->royalty_rate)]; //a porcentagem deve ser pega de acordo com o serviço
                $split = ["split" => [$splitService]];
                $request->merge($split);
            }
        }
        Log::info($request);
        //fim novo código

        if ($validator->fails()) {
            $messageError = $validator->errors();
            $event_type = "E";
            return $validator->errors(); // LogCentralController::create($request, $messageError, $event_type);
        }

        DB::beginTransaction(); //😡😡😡😡😡😡 Ou cria tudo ou nao cria nada 😡😡😡😡😡😡

        try {
            //Recupera a order do serviço ou cria, todo service deve estar obrigatóriamente associado a uma order
            $service = Service::where('order_id', $request->order_id)->first();
            $order = Order::firstOrCreate([
                'id' => $request->order_id
            ]);
            //Atualiza a Franquia do Cliente na Request
            $request->merge([
                "order_id" => $order->id,
                "payment_gateway_id" => 2
            ]);

            $request->franchise_id = $service->franchise_id ?? $order->franchise_id;

            $services = Service::where('order_id', $request['order_id'])
                ->whereIn('status_id',  [1, 6])
                ->with("discount_coupon")
                ->with("additional_value")
                ->where('client_id', $request['user_id'])
                ->orderBy("start_time", "ASC")
                ->get();

            if (count($services) > 0) {
                $totalValue = ServicesController::calculateTotalServices($services->toArray());
                $request->totalValue = $totalValue["total"];

                /* Remove o pagamento anterior para fazer um novo */
                $paymentToDelete = Self::deletePayment($request->order_id);
                // return $totalValue;

                //trata os dados faltantes
                $newDate = Carbon::now();
                $newDate = $newDate->addDays(5)->toDateString();
                $request->merge(["due_date" => $newDate, "payment_category" => 3]);

                //pegar a conta da franquia
                $franchiseAccount = PaymentAccount::where('franchise_id', $service->franchise_id)->first();
                $request->merge(["payment_account_id" => isset($franchiseAccount) ? $franchiseAccount->id : 1]);
                $payment = Self::create($request, $request->totalValue, $order); // A primeira ação e obrigatória é criar a tabela de payments
                //se franchise_id for diferente de 1 criar outro crédito com o valor do split
                if (isset($request->split)) {
                    //calcular o valor
                    $taxaRecebida = ($request->totalValue * $txService->royalty_rate);
                    $request->merge(["payment_account_id" => 1]);
                    $payment = Self::create($request, $taxaRecebida, $order);
                    $payment->franchise_id = 1;
                    $payment->save();
                    // return response()->json(["messsage" => "Hello kkkkk"], 422);
                }

                $request->merge([
                    "dueDate" => Self::getDueDate($request, $services),
                    "payment_id" => $payment->id
                ]);

                if ($request->payment_method_id == 1) {
                    if ($request->creditCardId) {
                        $request->merge([
                            "billingType" => 'CREDIT_CARD',
                        ]);
                        if (isset($request->paymentHash)) {
                            $creditCardToken = CreditCardDetail::find($request->creditCardId);
                            $request->merge(["creditCardToken" => $creditCardToken->creditCardId]);
                        }
                    } else {
                        $request->merge([
                            "billingType" => 'UNDEFINED',
                        ]);
                    }
                }
                if ($request->payment_method_id == 3 || $request->payment_method_id == 0) {
                    $request->merge([
                        "billingType" => 'BOLETO',
                    ]);
                }
                if ($request->payment_method_id == 2) {
                    $request->merge([
                        "billingType" => 'UNDEFINED',
                    ]);
                }

                if($request->payment_method_id == 4){
                    $request->merge([
                        "billingType" => 'PIX',
                    ]);
                }

                if (in_array($services[0]->service_type_id, [9, 10])) {
                    $paymentDescription = Self::getDescriptionServicesTypeTwo($services, $totalValue);
                } else {
                    $paymentDescription = Self::getBilletDescriptionFromServices($services, $totalValue);
                }

                // dd($services[0]);

                $request->description_payment = $paymentDescription;




                if ($request->payment_method_id === 4) {


                    Service::where('order_id', $request['order_id'])
                        ->where('client_id', $request['user_id'])
                        ->whereIn('status_id', [1, 6, 8]) //se status = 1 , será atualizado com um novo boleto ou pago com cartão de crédito, =6 é lead e 8 = se houve falha no pagamento e será um retentativa.
                        ->update([
                            'payment_id' => $payment->id,
                            'status_id'  => 1,
                            "payment_status_id" => 1,
                            "salesman_id" => $request['salesman_id']
                        ]);

                    DB::commit();

                    return response()->json(['message' => $payment->id]);
                }

                $asaasCreateCharge = AsaasBillingController::create($request);

                if ($asaasCreateCharge) {
                    //Após a geração do Boleto e da tabela de payments, é atualizado os serviços com o Payment_id e Status_id
                    Service::where('order_id', $request['order_id'])
                        ->where('client_id', $request['user_id'])
                        ->whereIn('status_id', [1, 6, 8]) //se status = 1 , será atualizado com um novo boleto ou pago com cartão de crédito, =6 é lead e 8 = se houve falha no pagamento e será um retentativa.
                        ->update([
                            'payment_id' => $payment->id,
                            'status_id'  => 1,
                            "payment_status_id" => 1,
                            "salesman_id" => $request['salesman_id']
                        ]);

                    DB::commit();

                    //deu tudo certo tenta enviar o email
                    $client = User::find($services[0]->client_id);
                    $mailSender = new MailerSenderController();

                    // if ($client->email === 'gabrielbarbosa@gmail.com') {
                        Mail::to($client->email)->send(new ScheduledService($client, $services[0], $totalValue, $paymentDescription, $asaasCreateCharge));
                    // $mailSender->sendEmailFinishScheduled($client, $services[0], $totalValue, $paymentDescription, $asaasCreateCharge);
                    // }

                    return response()->json($asaasCreateCharge);
                } else {
                    Log::info("Erro ao gerar pagamento para a order:  $order->id em createServicePayment.");
                    $payment->payment_status_id = 5;
                    $payment->save();

                    //Após a geração do Boleto e da tabela de payments, é atualizado os serviços com o Payment_id e Status_id
                    Service::where('order_id', $request['order_id'])
                        ->where('client_id', $request['user_id'])
                        ->whereIn('status_id', [1, 6, 8])
                        ->update([
                            'payment_id' => $payment->id,
                            'status_id'  => 8
                        ]);


                    throw new Exception("Erro ao gerar pagamento para a order $order->id em createServicePayment");

                    return response()->json($asaasCreateCharge, 422); //Aqui retornamos objeto sem tratar e sem LOG, porque essas ações já foram realizadas em chageController
                }
            } else {
                $messageError =  'Nenhum servico encontrado ';
                $event_type = "E";

                throw new Exception("Nenhum serviço encontrado");
                return LogCentralController::create($request, $messageError, $event_type);
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            $message = $th->getMessage();
            return response()->json("Erro ao criar pagamento $message", 422);
        }
    }

    public static function deletePayment($order_id)
    {
        try {
            $paymentToDelete = Payment::where("order_id", $order_id)->first();
            if (!$paymentToDelete) {
                return;
            }

            $asaasBillingToDelete = AsaasBilling::where("payment_id", $paymentToDelete->id)->first();
            if (!isset($asaasBillingToDelete->asaasPaymentId)) {
                return;
            }

            //deleta o pagamento no sistema
            $paymentToDelete->delete();

            $asaasTokens = Asaas::tokens();

            //checa se existe esse pagamento para ser excluido no asaas
            $payment = Http::withoutVerifying()->withHeaders([
                'Content-Type' => 'application/json',
                'access_token' => $asaasTokens->access_token
            ])->get(config("routes.ASAAS") . 'payments/' . $asaasBillingToDelete->asaasPaymentId);

            if ($payment->failed()) {
                return;
            }

            $client = Http::withoutVerifying()->withHeaders([
                'Content-Type' => 'application/json',
                'access_token' => $asaasTokens->access_token
            ])->delete(config("routes.ASAAS") . 'payments/' . $asaasBillingToDelete->asaasPaymentId);

            $data = json_decode($client, true);

            if (!$data['deleted']) {
                Log::info("teste");
                throw new Exception("Erro ao excluir pagamanto anterior");
            }
        } catch (Exception $e) {
            throw new Exception("Erro ao excluir pagamento anterior" . $e);
        }
    }

    public function deletServicesByOrder(Request $request)
    {
        $orderId = $request->order_id;
        try {
            //code...
            $services = Service::where('order_id', $orderId)->get();
            foreach ($services as $service) {
                # code...
                $service->delete();
            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(["message" => $th->getMessage()], 422);
            //throw $th;
        }
        return response()->json(["message" => "serviços excluidos com sucesso"], 200);
    }

    public static function getDescriptionServicesTypeTwo($services, $totalValue)
    {
        $descricao = "";
        switch ($services[0]->service_type_id) {

            case 9:
                $descricao .= "- Higienização" . "\n";
                break;
            case 10:
                $descricao .= "- Impermeabilização" . "\n";
                break;
        }
        $newArrayIdsServices = [];
        foreach ($services as $service) {
            # code...
            array_push($newArrayIdsServices, $service->service_type_category_item_id);
        }
        $newArrayIdsServices = array_count_values($newArrayIdsServices);
        $arrayKeys = array_keys($newArrayIdsServices);
        foreach ($arrayKeys as $key => $item) {
            # code...
            $descricao .= Services_type_category_items::where('id', $item)->first()->title . " X " . $newArrayIdsServices[$item] . "\n" ?? '';
        }
        $descricao .= "Total: " . "R$ " . $totalValue["total"];

        return $descricao;
    }

    public static function getBilletDescriptionFromServices($services, $totalValue): string
    {
        $descricao = "";
        // Recorrencia
        switch ($services[0]->service_category_id) {
            case 2:
                $descricao .= "- Assinatura quinzenal" . "\n";
                break;
            case 3:
                $descricao .= "- Assinatura semanal" . "\n";
                break;
            case 4:
                $descricao .= "- Assinatura multipla" . "\n";
                break;
        }
        switch ($services[0]->service_type_id) {

            case 1:
                $descricao .= "- Faxina Residencial Comum" . "\n";
                break;
            case 2:
                $descricao .= "- Faxina Residencial Express" . "\n";
                break;

            case 3:
                $descricao .= "-  Faxina Residencial Alto Brilho" . "\n";
                break;
            case 4:
                $descricao .= "- Faxina Comercial" . "\n";
                break;
            case 7:
                $descricao .= "- Passadoria de roupa" . "\n";
                break;
        }

        if ($services[0]->service_category_id == 1) {
            $descricao .= " - Avulsa";
        }

        if ($services[0]->products_included == 1) {

            $descricao .= " - Com todos os produtos inclusos";
        } else {
            $descricao .= " - Sem produtos inclusos";
        }

        $descricao .= "\nConforme a(s) data(s): \n";

        foreach ($services as $service) {
            $date = Carbon::parse($service->start_time)->format('d/m/Y');
            $start_time = Carbon::parse($service->start_time)->format('H:i');
            $end_time = Carbon::parse($service->end_time)->format('H:i');
            $descricao .= " - $date das $start_time" . "h às $end_time" . "h" . "\n";
        }


        $discountsFormatted = str_replace('.', ',', $totalValue["discounts"]);
        $subTotalFormatted = str_replace('.', ',', $totalValue["subTotal"]);
        $totalFormatted = str_replace('.', ',', $totalValue["total"]);

        $descricao .= "\n Subtotal: R$ " . $subTotalFormatted;
        $descricao .= "\n Descontos: R$ " . $discountsFormatted;
        $descricao .= "\n Total: R$ " . $totalFormatted;

        return $descricao;
    }

    public static function create(Request $request, $totalValue, $order)
    {
        //se o pagamento tiver um split criar um crédito com o id da matriz;


        //aqui
        $payment = new Payment;
        $payment->user_id = $request->user_id;
        $payment->order_id = $request->order_id ? $request->order_id : null;
        $payment->reference_month = Carbon::now()->format('m-Y');
        $payment->value = $totalValue;
        $payment->payment_type = isset($request->payment_type) ? $request->payment_type : "C"; // Crédito / Entrando na conta
        $payment->payment_method_id = $request->payment_method_id;
        $payment->payment_status_id = isset($request->payment_status_id) ? $request->payment_status_id : 1; // Aguardando pagamento
        $payment->franchising_fee = isset($request->franchising_fee) ? $request->franchising_fee : (float)$totalValue * 0.04;
        $payment->subscription_id = Service::where("order_id", $request->order_id)->first() ? Service::where("order_id", $request->order_id)->first()["subscription_id"] : null;
        $payment->payment_category = $request->payment_category ?? null;
        $payment->due_date = $request->due_date;
        $payment->payment_category = $request->payment_category;
        $payment->payment_gateway_id = $request->payment_gateway_id ?? null;
        $payment->franchise_id = $request->franchise_id ?? null;
        $payment->payment_account_id = $request->payment_account_id ?? 1;
        if (!$payment->save()) {
            throw new Exception("Erro ao salvar pagamento no banco de dados");
        }
        return $payment;
    }

    public static function update(Request $request, $payment, $order, $charge, $creditCardPayment)
    {


        if ($payment->payment_method_id == 1) {
            if ($creditCardPayment) {
                if ($creditCardPayment['payments'][0]['status'] == 'AUTHORIZED' || $creditCardPayment['payments'][0]['status'] == 'CONFIRMED') {
                    $payment->payment_status_id = 2;
                    $payment->payment_fee = $creditCardPayment['payments'][0]['fee'];
                    $payment->payment_date = $creditCardPayment['payments'][0]['date'];
                    $payment->chargeId = $creditCardPayment['payments'][0]['chargeId'];
                    $payment->payment_amount = $creditCardPayment['payments'][0]['amount'];
                    $payment->statusJuno = $creditCardPayment['payments'][0]['status'];
                    $payment->transactionId =  $creditCardPayment['transactionId'];
                    $payment->save();

                    return response()->json($payment);
                }
            }
        }

        if ($charge) {
            $payment->checkoutUrl = $charge->checkoutUrl;
            $payment->link_boleto = $charge->installmentLink;
            $payment->barcodeNumber = $charge->billetDetails->barcodeNumber;
            //$payment->statusJuno = $charge->status;
            $payment->chargeId = $charge->id;
            $payment->code_boletofacil = $charge->code;
            $payment->save();
            return response()->json($payment);
        }
    }

    public static function getDueDate($request, $services)
    {
        // Regra atual: Se o serviço for uma assinatura: Vencimento para 5 dias, caso seja avulsa: 1 dia.
        $service = $services->first();
        if ($service->service_category_id === 1) {
            return 1;
        }
        return 5;
    }

    public static function aprovePayment(AsaasBilling $asaasBilling): Payment
    {
        //mudar o status do pagamento
        $payment = Payment::find($asaasBilling->payment_id);
        if (!$payment) {
            return null;
        }
        $payment->payment_status_id = 2; //pagamento confirmado
        $payment->save();
        return $payment;
    }


    public static function createNewPayment(Request $request)
    {
        //user_id para quem vai ser criado o pagamento
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|int',
            'value' => 'required|numeric',
            'payment_type' => 'required|string',
            'payment_method_id' => 'int',
            'payment_status_id' => 'required|int',
            'subscription_id' => 'int',
            'payment_category' => 'int',
            'due_date' => 'string',
            'aproved' => 'int',
            'franchising_fee' => 'numeric',
            'service_slot_id' => 'int',
            'payment_account_id' => 'int',
            'franchise_id' => 'int',
            'service_id' => 'int'
        ]);


        try {
            if ($validator->fails()) {
                $jsonString = json_encode((object)["errors" => $validator->errors()]);
                throw new Exception($jsonString);
            };

            $payment = Payment::create([
                'user_id' => $request->user_id,
                'value' => $request->value,
                'payment_status_id' => isset($request->payment_status_id) ? $request->payment_status_id : 1,
                'subscription_id' => isset($request->subscription_id) ? $request->subscription_id : null,
                'payment_category' =>  isset($request->payment_category) ? $request->payment_category : null,
                'order_id' => isset($request->order_id) ? $request->order_id : null,
                'payment_type' => isset($request->payment_type) ? $request->payment_type : null,
                'reference_month' => Carbon::now()->format('m-Y'),
                'aproved' => isset($request->aproved) ? $request->aproved : null,
                'payment_method_id' => isset($request->payment_method_id) ? $request->payment_method_id : null,
                'franchising_fee' => isset($request->franchising_fee) ? $request->franchising_fee : null,
                'service_slot_id' => isset($request->service_slot_id) ? $request->service_slot_id : null,
                'payment_account_id' => isset($request->payment_account_id) ? $request->payment_account_id : null,
                'due_date' => isset($request->due_date) ? $request->due_date : Carbon::now()->addDays(5),
                'franchise_id' => isset($request->franchise_id) ? $request->franchise_id : null,
                'service_id' => isset($request->service_id) ? $request->service_id : null
            ]);

            return response()->json($payment);
        } catch (\Throwable $th) {
            Log::info($th->getMessage());
            //throw $th;
            //receba os erros em formato json
            // Storage::put("PaymentsController/" . "userId " . $request->user_id . " randomNumber" . rand(1, 500000) . ".txt", $th->getMessage());
            Log_central::Create([
                'user_id' => ($request->user_id ? $request->user_id : 0),
                'cod_source' => $request->cod_source ?? 6,
                'source' =>  "Controller PaymentsController => function createNewPayment / Source_requester => " . url()->current(),
                'event_type' => "C",
                'log'      => 'ERRO => ' . $th,
            ]);
            /*****************FIM LOG CENTRAL*********************/
            return response(["message" => json_decode($th->getMessage()) ?? $th->getMessage(), "controller" => basename(__FILE__), "method" => basename(__METHOD__), "url" => url()->current()], 422);
        }
    }


    public function createPixPayment(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'order_id' => 'required',
        ]);

        if ($validator->fails()) {
            // Lida com a falha na validação
            return response()->json($validator->errors(), 422);
        }
        //pega o pagamento desta ordem
        $orderId = $request->order_id;
        $services = Service::where('order_id', $orderId)->get();
        $paymentId = $services[0]->payment_id;


        //pega a instituição de pagamento;
        $paymentGateway = $services[0]->payment_gateway->title ?? 'ASAAS';

        switch ($paymentGateway) {
            case 'ASAAS':
                # code...
                $response = $this->getPixToAsaas($paymentId);
                return response()->json($response);
            default:
                # code...
                break;
        }
    }

    public function getPixToAsaas($paymentId)
    {
        //pega o id do boleto do asaas
        $asaasBilling = AsaasBilling::where('payment_id', $paymentId)->first();
        $asaasBillingId = $asaasBilling->asaasPaymentId;

        //pega o qr code
        $asaasController = new AsaasController();
        $response = $asaasController->getPixCharge($asaasBillingId);
        return $response;
    }
}

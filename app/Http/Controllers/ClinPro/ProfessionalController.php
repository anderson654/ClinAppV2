<?php

namespace App\Http\Controllers\ClinPro;

use App\Console\Commands\PaymentDiscountProfessional;
use App\Console\Commands\PaymentProfessionalsP2P;
use App\Console\Commands\PaymentService;
use App\Http\Controllers\Asaas\AsaasBillingController;
use App\Http\Controllers\Asaas\CustomerController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Finance\PaymentsController;
use App\Http\Controllers\Utils\Util;
use App\Http\Middleware\ProfessionalPlan;
use App\Mail\ServiceAccepted;
use App\Models\Professional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SubscriptionDayweek;
use Illuminate\Support\Facades\Validator;
use App\Models\SubscriptionPreferred_professional;
use App\Models\Address;
use App\Models\Asaas\Asaas;
use App\Models\Asaas\AsaasBilling;
use App\Models\Asaas\AsaasCustomer;
use App\Models\CompletedTraining;
use Illuminate\Support\Carbon;
use App\Models\Subscription;
use App\Models\User;
use App\Models\Log_central;
use App\Models\Order;
use App\Models\Payment;
use Exception;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use Spatie\Ray\Payloads\CustomPayload;
use App\Models\Dayofweek;
use App\Models\Juno_token;
use App\Models\PasswordPagclin;
use App\Models\PaymentAccount;
use App\Models\ProfessionalsPlan;
use App\Models\ProfessionalSubscriptionPlan;
use App\Models\Service;
use App\Models\ServicesFeedbacks;
use App\Models\ServiceSlot;
use App\Models\ServiceStatus;
use App\Models\SurveyResponse;
use App\Models\SurveyTraining;
use App\Models\Training;
use App\Models\TrainingCategory;
use App\Models\TrainingsFeedback;
use Facade\FlareClient\Http\Response;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use NumberFormatter;
use PhpParser\Node\Stmt\Return_;

use function PHPUnit\Framework\returnSelf;

class ProfessionalController extends Controller
{
    private $user;

    public function __construct()
    {
        //verifica a legitimidade do user;
        //tratar
        // $this->user = User::where('id', $request->user_id)->first();

        // $this->middleware(function ($request, $next) {
        //     Auth::user();
        //     if ($this->user->id != Auth::user()->id) {
        //         return response()->json([
        //             'message' => 'Não autorizado.'
        //         ], 403);
        //     }
        //     return $next($request);
        // });
    }
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        $professional = Professional::updateOrCreate(
            ['user_id' => $user->id],
            ['name' => $user->name, 'user_id' => $user->id, 'cpf' => $user->cpf ?? null]
        );
        Log::info($professional);
        return $professional;
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
     * @param  \App\Models\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function show(Professional $professional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function edit(Professional $professional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professional $professional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professional $professional)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function getProfessional(Request $request)
    {
        return Professional::calculeStarsProfessional($request->professional_user_id);
    }
    //Comparar tabela cliente e profissional o region regin id;
    //da cliente
    //addres->neigbord_id->region_id

    public function getAllProfessionals(Request $request)
    {
        //filtros não obrigatorios.
        if (!$request->subscription_id) {
            $professionals = Professional::take(5)->get();
        } else {
            //pega a subscription enviada
            $subscription = Subscription::with('subscriptionDayWeeks')->where('id', $request->subscription_id)->first();

            //Pega produtos inclusos
            $productsIncluded = $subscription->products_included ?? null;
            //pega a região do usuario com base no endereço cadastrado na subscription
            Log::info($request->subscription_id);
            // return $subscription->client_address_id;
            $addres = Address::where('id', $subscription->client_address_id)
                ->where('user_id', Auth::user()->id)->first();

            //pegar o dia da semana em numero;
            $dayOfweekSubscription = $subscription->subscriptionDayWeeks[0]->dayWeek;

            //pega o titulo desse dia
            $titleDayOfWeekSubscription = $this->getTitleDate($dayOfweekSubscription);
            // return  $titleDayOfWeekSubscription;


            //inicio da assinatura do cliente
            $startTimeClient = Carbon::parse($subscription->startTime)->subHours(1);
            $endTimeClient = Carbon::parse($subscription->startTime)->addHours($subscription->total_time)->addHour(1);
            $totalTimeClient = Carbon::parse($subscription->startTime)->addHour(2);

            //pega as profisionais com o mesmo region_id do endereço da faxina
            $professionals = Professional::whereHas('user', function ($query) use ($addres) {
                return $query->where('users.status', 1)->where('users.franchise_id', $addres->region->franchise_id);
            })->whereHas('dayofweek', function ($query) use ($titleDayOfWeekSubscription) {
                return $query->where('dayofweek.' . $titleDayOfWeekSubscription, true); //filtra o dayofweek da profissional(verifica se ela é ativa naquele dia)
            })->with('subscriptionPreferedProfessional.subscriptionDayWeeks', function ($query) use ($dayOfweekSubscription) {
                return $query->where('subscription_dayweeks.dayWeek', $dayOfweekSubscription); //verifica se ela tem uma assinatura nesse dia ex(toda a quarta);
            })->where('has_products', $productsIncluded)->get();

            // ->with('activeUserProffessional.address_id.neighborhoods', function ($query) use ($regionUser) {
            //     return $query->where('neighborhoods.id', $regionUser->neighborhood_id); //filtra por region a mesma do cliente
            // })->whereHas('dayofweek', function ($query) use ($titleDayOfWeekSubscription) {
            //     return $query->where('dayofweek.' . $titleDayOfWeekSubscription, true); //filtra o dayofweek da profissional(verifica se ela é ativa naquele dia)
            // })->with('subscriptionPreferedProfessional.subscriptionDayWeeks', function ($query) use ($dayOfweekSubscription) {
            //     return $query->where('subscription_dayweeks.dayWeek', $dayOfweekSubscription); //verifica se ela tem uma assinatura nesse dia ex(toda a quarta);
            // })->where('has_products', $productsIncluded)->get();

            foreach ($professionals as $key => $professional) {
                //ela possui uma subscription?;
                if ($professional->subscriptionPreferedProfessional->count() != 0) {
                    //existe
                    $subscriptionsProfessional = $professional->subscriptionPreferedProfessional; //subscriptions da professional
                    foreach ($subscriptionsProfessional as $subscriptionProfessional) {
                        //informaçoes da subscription da profissional
                        $dataSubscription = Subscription::where('id', $subscriptionProfessional->subscription_id)->first();
                        $startTimeProfessional = Carbon::parse($dataSubscription->startTime)->subHours(1);
                        $endTimeProfessional = Carbon::parse($dataSubscription->startTime)->addHours($dataSubscription->total_time)->addHour(1);
                        $totalTimeProfessional = Carbon::parse($dataSubscription->startTime)->addHour(2);
                        //fim informaçoes da subscription da profissional
                        if ($totalTimeProfessional > $totalTimeClient) {
                            //remove a profissional da lista casso esteja em uma faxina no mesmo horario
                            if (
                                $this->isDataInInterval($startTimeClient, $startTimeProfessional, $endTimeProfessional)
                                || $this->isDataInInterval($endTimeClient, $startTimeProfessional, $endTimeProfessional)
                            ) {
                                unset($professionals[$key]);
                            }
                        } else {
                            if (
                                $this->isDataInInterval($startTimeProfessional, $startTimeClient, $endTimeClient)
                                || $this->isDataInInterval($endTimeProfessional, $startTimeClient, $endTimeClient)
                            ) {
                                //remove a profissional da lista casso esteja em uma faxina no mesmo horario
                                unset($professionals[$key]);
                            }
                        }
                    }
                }
            }
        }
        return $professionals->makeHidden(['subscriptionPreferedProfessional']);
    }

    //Busca as profissionais de um serviço

    public function getProfessionalsService(Request $request)
    {
        $professional1 = User::where('id', '10')->first();
        $qt_employees = 1;

        return response()->json([
            'qt_employees' => $qt_employees,
            'professional1' => $professional1->name
        ], 200);
    }

    public function getTitleDate($dayofweek)
    {
        $title = '';
        switch ($dayofweek) {
            case 0:
                $title = 'domingo';
                break;
            case 1:
                $title = 'segunda';
                break;
            case 2:
                $title = 'terca';
                break;
            case 3:
                $title = 'quarta';
                break;
            case 4:
                $title = 'quinta';
                break;
            case 5:
                $title = 'sexta';
                break;
            case 6:
                $title = 'sabado';
                break;
            default:
                $title = null;
                break;
        }
        return $title;
    }

    function isDataInInterval($time, $startTime, $endTime)
    {
        if ($time > $startTime && $time < $endTime) {
            return true;
        } else {
            return false;
        }
    }

    public function deletPreferedProfessional(Request $request)
    {
        //colocar day week aqui quando estiver mais de um dia na assinatura;
        $validator = Validator::make($request->all(), [
            'subscription_id' => 'required|int',
            'subscription_preferred_professional_id' => 'required|int',
            'match' => 'required|boolean'
        ]);
        if ($validator->fails()) {
            $messageError = $validator->errors();
            return response()->json($messageError, 422);
        }
        //ou subscription_preferred_professional_id
        if ($request->match) {
            try {
                //code...
                $subscriptionDayWeek = SubscriptionDayweek::where('subscription_id', $request->subscription_id)->where('preferred_professional_id', $request->subscription_preferred_professional_id)->firstOrFail();
                SubscriptionPreferred_professional::where('id', $subscriptionDayWeek->preferred_professional_id)->delete();
                $subscriptionDayWeek->update([
                    "preferred_professional_id" => null
                ]);
                return response()->json([
                    'message' => 'Profissional preferencial excluida com sucesso.'
                ], 200);
            } catch (\Throwable $th) {
                //throw $th;
                return response()->json([
                    'message' => 'Erro ao excluir professional.'
                ], 400);
            }
        } else {
            try {
                $preferedProfessional = SubscriptionPreferred_professional::where('id', $request->subscription_preferred_professional_id)->delete();
                if ($preferedProfessional) {
                    return response()->json([
                        'message' => 'Profissional preferencial excluida com sucesso.'
                    ], 200);
                } else {
                    return response()->json([
                        'message' => 'Profissional não pode ser excluida.'
                    ], 400);
                }
            } catch (\Throwable $th) {
                /*****************LOG CENTRAL*********************/
                Log_Central::Create([
                    'user_id' => ($request->user_id ? $request->user_id : 0),
                    'cod_source' => $request->cod_source,
                    'source' =>  "Controller ServicesTypeCategories => function GetServicesTypeCategories / Source_requester => " . url()->current(),
                    'event_type' => "E",
                    'log'      => 'ERRO => ' . $th,

                ]);
                /*****************FIM LOG CENTRAL*********************/
                return response()->json([
                    'message' => $th
                ], 422);
            }
        }
    }

    public function appendPreferedProfessional(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'subscription_id' => 'required|int',
            'professional_id' => 'required|int',
            'match' => 'required|boolean'
        ]);

        if ($validator->fails()) {
            $messageError = $validator->errors();
            return response()->json($messageError, 422);
        }

        try {
            if ($request->match) {
                $prefered = SubscriptionPreferred_professional::create([
                    'subscription_id' => $request->subscription_id,
                    'professional_id' => $request->professional_id
                ]);
                $subscriptionDayWeek = SubscriptionDayweek::where('subscription_id', $request->subscription_id)->whereNull('preferred_professional_id')->first();
                if ($subscriptionDayWeek) {
                    try {
                        //code...
                        SubscriptionDayweek::where('id', $subscriptionDayWeek->id)->update([
                            'subscription_id' => $request->subscription_id,
                            'preferred_professional_id' => $prefered->id
                        ]);
                        return response()->json([
                            'message' => 'Salvo com sucesso'
                        ], 200);
                    } catch (\Throwable $th) {
                        //throw $th;
                        $prefered->forceDelete();
                        return response()->json([
                            'message' => 'Erro ao salvar profissional'
                        ], 400);
                    }
                } else {
                    $prefered->forceDelete();
                    return response()->json([
                        'message' => 'Não há subscription_dayweeks disponiveis'
                    ], 400);
                }
            } else {
                try {
                    //code...
                    $prefered = SubscriptionPreferred_professional::create([
                        'subscription_id' => $request->subscription_id,
                        'professional_id' => $request->professional_id
                    ]);
                    return response()->json([
                        'message' => 'Salvo com sucesso.'
                    ], 200);
                } catch (\Throwable $th) {
                    //throw $th;
                    return response()->json([
                        'message' => 'Erro ao salvar profissional'
                    ], 400);
                }
            }
        } catch (\Throwable $th) {
            /*****************LOG CENTRAL*********************/
            Log_Central::Create([
                'user_id' => ($request->user_id ? $request->user_id : 0),
                'cod_source' => $request->cod_source,
                'source' =>  "Controller ServicesTypeCategories => function GetServicesTypeCategories / Source_requester => " . url()->current(),
                'event_type' => "E",
                'log'      => 'ERRO => ' . $th,

            ]);
            /*****************FIM LOG CENTRAL*********************/
            return response()->json([
                'th' => $th,
                'message' => 'Erro na requisição'
            ], 422);
        }
    }

    public function createMonthlyPayment(Request $request)
    {
        $validator  = Validator::make($request->all(), [
            'user_id' => 'required|int',
            'value' => 'required|numeric',
            'cod_source' => 'int'
        ]);

        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()], 422);
        }

        $user = User::find($request->user_id);
        if (!$user->professional) return response()->json(["message" => "Profissional não encontrado"], 422);

        //verifica se esse profissional tem um customer no asaas e se não tiver criar um customer
        if (!$user->asaas_customer) {
            $customer = CustomerController::create($request);
            if (!$customer->customer_id) return response()->json(["message" => "Falha ao criar um customer para esse usuario"], 422);
            $user = User::with('professional', 'asaas_customer')->find($request->user_id);
        };

        //se tiver verificar se as informaçoes batem com as do asaas
        $customerController = new CustomerController();
        $checkCustumer = $customerController->checkCustomer($user->cpf, $user->asaas_customer->customer_id);
        if (!$checkCustumer) return response()->json(["message" => "as informaçoes do profissional divergem com a plataforma asaas por favor verifique os dados do usuario"], 422);

        //criar créditos para a clin
        $franchiseId = Auth::user()->id;
        $franchise = User::with('payment_account_franchise')->find($franchiseId);
        $order = new Order();
        $order->franchise_id = $franchise->franchise_id;
        $order->save();

        $request->merge(["description_payment" => "Mensalidade referente ao acesso a plataforma Clin - mês " . date('m') . '/' . date('Y')]);
        $paymentsAsaas = $this->createAsaasPayment($request, $user->asaas_customer->customer_id, $order->id);

        $this->createCreditFranchise($request, $paymentsAsaas->value, $paymentsAsaas->dueDate, $order->id, $paymentsAsaas);

        return $paymentsAsaas;
    }

    public static function createCreditPayment(Request $request)
    {
        try {
            DB::beginTransaction();
            //code...
            //caso precise criar regras antes de criar o pagamento colocar aqui
            //colocar algumas regras a mais

            $request->merge(['payment_type' => 'C', 'payment_status_id' => 1, 'payment_method_id' => 2]);
            $response = PaymentsController::createNewPayment($request);
            if ($response->status() != 200) {
                $reponseObject = json_decode($response->getContent());
                throw new Exception(json_encode($reponseObject->message));
            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            $th = json_decode($th->getMessage());
            if (gettype($th) == 'string') {
                $th = (object)['errors' => (object)['erroMysql' => [$th]]];
            }
            //throw $th;
            return response(["message" => $th, "controller" => basename(__FILE__), "method" => basename(__METHOD__), "url" => url()->current()], 422);
        }
        return response()->json(json_decode($response->getContent()), 200);
    }

    public function transferP2P(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'payment_id' => 'required|int',
        ]);

        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()], 422);
        }

        $payment = Payment::find($request->payment_id);
        if (in_array($payment->payment_category, [6, 11])) {
            if (isset($payment)) {
                if ($payment->payment_status_id == 2) {
                    return response(["message" => 'pagamento já realizado'], 422);
                }
            } else {
                return response(["message" => 'id do pagamento é invalido'], 422);
            }
            $paymentProfessionalP2P = new PaymentService();
            $responseP2P = $paymentProfessionalP2P->cronP2P($payment);
        }

        return response(["message" => $responseP2P->getContent()], $responseP2P->getStatusCode());
    }

    public function externalPayments()
    {
        try {
            //code...
            if (Artisan::call('discountProfessional:cron')) {
                Artisan::call('externalPayment:cron');
            }
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(["message" => "CRON ExternalPayment: Erro ao executar cron" . $th->getMessage()], 422);
        }
        return response()->json(["message" => "CRON ExternalPayment: Finalizado com sucecsso"], 200);
    }

    public function discountProfessional(Request $request)
    {
        $discountProfessional = new PaymentDiscountProfessional();
        $payment = Payment::find($request->payment_id);

        if (!$payment) {
            return response()->json(["message" => "pagamento não encontrado"], 422);
        }
        if ($payment->payment_status_id != 1) {
            return response()->json(["message" => "O pagamento ja foi realizado por favor verifique no banco de dados"], 422);
        }

        $response = $discountProfessional->cronP2P($payment);

        if ($response->status() != 200) {
            return response()->json(["Erro ao descontar da profissional"], 422);
        }
        return response()->json(["message" => "Desconto aplicado com sucesso"], 200);
    }

    public function createCreditFranchise($request, $value, $dueDate, $orderId, $asaasBilling)
    {
        $franchiseId = Auth::user()->id;
        $franchise = User::with('payment_account_franchise')->find($franchiseId);
        $referenceMonth = new Carbon($dueDate);
        $referenceMonth = $referenceMonth->format('m-Y');
        $newRequest = new Request();
        $newRequest->merge([
            'user_id' => $franchiseId,
            'value' => $value,
            'payment_type' => "C",
            'payment_method_id' => 5,
            'payment_status_id' => 1,
            'payment_category' => 1,
            'due_date' => $dueDate,
            'payment_account_id' => $franchise->payment_account_franchise->id ?? 1,
            'franchise_id' => $franchise->franchise_id ?? 1,
            'reference_month' => $referenceMonth,
            'orderId' => $orderId ?? null
        ]);
        $newPayment = $this->savePayment($newRequest);
        $paymentId = $newPayment->id;
        $this->saveAsaasBilling($asaasBilling, $paymentId);
    }

    public function createDebitProfessional($request, $value, $dueDate, $orderId)
    {
        $userId = $request->user_id;
        $user = User::with('payment_account')->find($userId);
        $referenceMonth = new Carbon($dueDate);
        $referenceMonth = $referenceMonth->format('m-Y');
        $newRequest = new Request();
        $newRequest->merge([
            'user_id' => $request->user_id,
            'value' => $value,
            'payment_type' => "D",
            'payment_method_id' => 5,
            'payment_status_id' => 1,
            'payment_category' => 1,
            'due_date' => $dueDate,
            'payment_account_id' => $user->payment_account->id,
            'franchise_id' => NULL,
            'reference_month' => $referenceMonth,
            'orderId' => $orderId
        ]);
        $this->savePayment($newRequest);
    }

    public function createAsaasPayment($request, $customerId, $orderId)
    {
        $asaasTokens = Asaas::tokens();
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'access_token' => $asaasTokens->access_token
        ])->post(config("routes.ASAAS") . 'payments', [
            "customer" => $customerId,
            "billingType" => "BOLETO",
            "value" => $request->value,
            "dueDate" => Carbon::now()->addDays(5)->toDateString(),
            "externalReference" => $orderId,
            "description" => $request->description_payment
        ]);
        $responseObject = json_decode($response->getBody()->getContents());
        return $responseObject;
    }

    public function savePayment($payment)
    {
        $newPayment = new Payment();
        $newPayment->user_id = $payment->user_id;
        $newPayment->value = $payment->value;
        $newPayment->payment_type = $payment->payment_type;
        $newPayment->payment_method_id = $payment->payment_method_id;
        $newPayment->payment_status_id = $payment->payment_status_id;
        $newPayment->payment_category = $payment->payment_category;
        $newPayment->due_date = $payment->due_date;
        $newPayment->payment_account_id = $payment->payment_account_id;
        $newPayment->franchise_id = $payment->franchise_id;
        $newPayment->reference_month = $payment->reference_month;
        $newPayment->order_id = $payment->orderId;

        $newPayment->save();

        return $newPayment;
    }

    public function saveAsaasBilling($asaasBilling, $paymentId)
    {
        $newAsaasBilling = new AsaasBilling();
        $newAsaasBilling->asaasPaymentId = $asaasBilling->id;
        $newAsaasBilling->dateCreated = $asaasBilling->dateCreated;
        $newAsaasBilling->asaasCustomerId = $asaasBilling->customer;
        $newAsaasBilling->paymentLink = $asaasBilling->paymentLink;
        $newAsaasBilling->asaasSubscriptionId = NULL;
        $newAsaasBilling->installment = NULL;
        $newAsaasBilling->dueDate = $asaasBilling->dueDate;
        $newAsaasBilling->valueBilling = $asaasBilling->value;
        $newAsaasBilling->netValue = $asaasBilling->netValue;
        $newAsaasBilling->discountValue = $asaasBilling->discount->value;
        $newAsaasBilling->discountType = $asaasBilling->discount->type;
        $newAsaasBilling->fineValue = $asaasBilling->fine->value;
        $newAsaasBilling->billingType = $asaasBilling->billingType;
        $newAsaasBilling->status = $asaasBilling->status;
        $newAsaasBilling->pixTransaction = NULL;
        $newAsaasBilling->externalReference = $asaasBilling->externalReference;
        $newAsaasBilling->originalDueDate = $asaasBilling->originalDueDate;
        $newAsaasBilling->originalValue = $asaasBilling->originalValue;
        $newAsaasBilling->confirmedDate = NULL;
        $newAsaasBilling->paymentDate = NULL;
        $newAsaasBilling->clientPaymentDate = NULL;
        $newAsaasBilling->invoiceUrl = $asaasBilling->invoiceUrl;
        $newAsaasBilling->bankSlipUrl = $asaasBilling->bankSlipUrl;
        $newAsaasBilling->transactionReceiptUrl = NULL;
        $newAsaasBilling->invoiceNumber = $asaasBilling->invoiceNumber;
        $newAsaasBilling->deleted = $asaasBilling->deleted;
        $newAsaasBilling->postalService = $asaasBilling->postalService;
        $newAsaasBilling->anticipated = NULL;
        $newAsaasBilling->splitWalletId = NULL;
        $newAsaasBilling->splitFixedValue = NULL;
        $newAsaasBilling->splitPercentualValue = NULL;
        $newAsaasBilling->chargebackStatus = NULL;
        $newAsaasBilling->chargebackReason = NULL;
        $newAsaasBilling->refundsDateCreated = NULL;
        $newAsaasBilling->refundsStatus = NULL;
        $newAsaasBilling->refundsValue = NULL;
        $newAsaasBilling->refundsDescription = NULL;
        $newAsaasBilling->refundsTransactionReceiptUrl = NULL;
        $newAsaasBilling->payment_id = $paymentId;
        $newAsaasBilling->identificationField = $asaasBilling->identificationField ?? null;

        $newAsaasBilling->save();
    }

    public function getPreferredDays()
    {
        $user = Auth::user();
        $user = User::find($user->id);
        if (!isset($user->dayofweek)) {
            return response()->json(["message" => "Não foi possivel encontrar os dias disponíveis"], 422);
        }
        return response()->json($user->dayofweek, 200);
    }
    public function setPreferredDays(Request $request)
    {

        try {
            //code...
            $dayofweek = Dayofweek::updateOrCreate(
                ['user_id' => $request->user_id],
                [
                    'id' => 0,
                    'user_id' => $request->user_id,
                    'domingo' => $request->domingo ?? 0,
                    'segunda' => $request->segunda ?? 0,
                    'terca' => $request->terca ?? 0,
                    'quarta' => $request->quarta ?? 0,
                    'quinta' => $request->quinta ?? 0,
                    'sexta' => $request->sexta ?? 0,
                    'sabado' => $request->sabado ?? 0,
                ]
            );
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 422);
        }
        return response()->json($dayofweek, 200);
    }

    public function getMonthlyPayment()
    {
        $user = Auth::user();
        $user = User::where('id', $user->id)->with('monthly_payment.asaas_billings')->first();

        if (count($user->monthly_payment) <= 0) {
            return response()->json("Não possui débitos referente a mensalidade de profissionais.", 422);
        }
        $mensality = array_reverse($user->monthly_payment->toArray());
        return response()->json($mensality, 200);
    }

    public function feedBack()
    {
        $user = Auth::user();
        $user = User::find($user->id);
        $feedbacks = ServicesFeedbacks::where('professional_user_id', $user->id)->with('service.client_service')->get();
        return response()->json($feedbacks, 200);
    }

    public function updateProfessional(Request $request)
    {
        $user = Auth::user();
        $user = User::find($user->id);

        if ($request->name) {
            $checkRequestName = count(explode(" ", $request->name)) >= 2 ? true : false;
            if (!$checkRequestName) {
                return response()->json(["message", "Por favor digite nome e sobre nome"]);
            }
            $user->name = $request->name;
        }
        if ($request->email) {
            $user->email = $request->email;
        }
        if (!$user->save()) {
            return response()->json(["message", "Erro ao salvar"], 422);
        }
        return response()->json($user, 200);
    }

    public function getProfessionalUser(Request $request)
    {
        $user = Auth::user();
        $professional = Professional::where('user_id', $user->id)->first();

        //verifica se a profissional tem um plano se não cria o basico
        $professionalPlans  = ProfessionalsPlan::where('user_id', $user->id)->exists();
        if (!$professionalPlans) {
            $professionalPlans = new ProfessionalsPlan();
            $professionalPlans->professional_subscription_plan_id = 1;
            $professionalPlans->status_id = 1;
            $professionalPlans->last_renew = Carbon::now();
            $professionalPlans->user_id = $user->id;
            $professionalPlans->save();
        }
        if (!$professional) {
            return response()->json(["message" => "Não foi possivel localizar a profissional na tabela Professionals"], 422);
        }

        $professional->passwordPagClin = PasswordPagclin::where('user_id', $user->id)->exists();
        $professional->accountPagClin = PaymentAccount::where('user_id', $user->id)->exists();
        return response()->json($professional, 200);
    }

    public function getBalance()
    {
        $user = Auth::user();
        $user = User::where('id', $user->id)->first();

        $apiKey = $user->payment_account->apiKey;

        try {
            //code...
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'access_token' => $apiKey
            ])->get(config("routes.ASAAS") . "finance/balance");
            if ($response->failed()) {
                return response()->json("Não foi possivel obter o saldo da conta", 422);
            }
            $newValue = new NumberFormatter('de_DE', NumberFormatter::PATTERN_DECIMAL, "* #####.00;(* #####.00)");
            $value = json_decode($response->getBody()->getContents());
            $value = str_replace(" ", "", $newValue->format($value->balance));

            return response()->json(['balance' => $value], 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json($th->getMessage(), 422);
        }
    }

    public function extratoAsaas()
    {
        $user = Auth::user();
        $user = User::where('id', $user->id)->first();
        $newValue = new NumberFormatter('de_DE', NumberFormatter::PATTERN_DECIMAL, "* #####.00;(* #####.00)");

        $apiKey = $user->payment_account->apiKey;

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'access_token' => $apiKey
        ])->get(config("routes.ASAAS") . "financialTransactions");
        if ($response->failed()) {
            return response()->json("Não foi possivel obter o extrato", 422);
        }
        $data = collect($response->json()['data'])->map(function ($obj) use ($newValue) {
            $obj['value'] = number_format($obj['value'], 2, ',', '.');
            return $obj;
        });

        // $data = $response->json()['data'];
        // Log::info($data);
        return response()->json(['data' => $data], 200);
    }

    public function extratoClin()
    {
        try {
            //code...
            //8474
            $user = Auth::user();
            $user = User::where('id', $user->id)->first();
            $paymentAccountId = $user->payment_account->id;
            $payments = Payment::where('user_id', $user->id)->where('payment_account_id', $paymentAccountId)->with('slot_payment.service.client_service')->orderBy("created_at", "DESC")->take(5)->get();
            if (!$payments) {
                return response()->json(["message" => "Não possui tranferencias"], 422);
            }
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(["message" => $th->getMessage()], 422);
        }
        $newValue = new NumberFormatter('de_DE', NumberFormatter::PATTERN_DECIMAL, "* #####.00;(* #####.00)");

        $payments = $payments->map(function ($obj, $key) use ($newValue) {
            return [
                "due_date" => Carbon::parse($obj->due_date)->locale('pt_BR')->isoFormat("DD/MM/Y"),
                "client_name" => isset($obj->slot_payment) ? $obj->slot_payment->service->client_service->name : "N/A",
                "payment_type" => $obj->payment_type,
                "value" => "R$ " . str_replace(" ", "", $newValue->format($obj->value))
            ];
        });
        return response()->json($payments, 200);
    }

    public function deletMyAccount()
    {
        DB::beginTransaction();
        $user = Auth::user();
        $user = User::where('id', $user->id)->first();
        $professional = Professional::where('user_id', $user->id)->first();
        try {
            //code...
            $user->delete();
            $professional->delete();
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(["message" => $th->getMessage()], 422);
        }

        return response()->json(["message" => "Conta excluida com sucesso."], 200);
    }

    public function myServices()
    {
        //8474
        $user = Auth::user();
        $user = User::where('id', $user->id)->first();
        $slots = ServiceSlot::where('user_id', $user->id)->with('service.client_service', 'service.service_category')->orderBy('id', 'DESC')->take(5)->get();
        $newValue = new NumberFormatter('de_DE', NumberFormatter::DECIMAL);
        $filter = $slots->map(function ($obj, $key) use ($newValue) {

            $service = Service::find($obj->service_id);

            return [
                "service_id" => $obj->service_id,
                "professional_name" => $obj->professional_name,
                "value" => "R$ " . $newValue->format($obj->value),
                "start_time" => Carbon::parse($obj->service->start_time)->locale('pt_BR')->isoFormat("DD/MM/Y HH:mm"),
                "service_category_title" => $obj->service->service_category->title,
                "client" => $obj->service->client_service->name,
                "additionals" => $obj->service->additionals ?? "N/A",
                "products_included" => $obj->service->products_included ? 'Com produtos' : 'Sem produtos',
                "total_time" => $obj->service->total_time,
                "status_service" => $obj->service->service_status_title,
                "title_service" => $obj->service->title_service,
                "address" => $service->title_address_client
            ];
        });

        return response()->json($filter, 200);
    }

    public function getUserProfessional(Request $request)
    {
        $user = User::with(
            'professional',
            'address'
        )->where('id', $request->user()->id)->first();
        if (!$user) {
            return response()->json(["message" => "Erro ao buscar usuário"]);
        }
        $user = collect([$user]);
        $user = $user->map(function ($obj, $key) {
            return [
                "id" => $obj->id,
                "cpf" => Util::FormatCpf($obj->cpf),
                "created_at" => Carbon::parse($obj->created_at)->locale('pt_BR')->isoFormat("DD/MM/Y HH:mm"),
                "email" => $obj->email,
                "name" => Util::CamelCaseString($obj->name),
                "phone" => Util::FormatCelPhone($obj->phone),
                "avatar" => $obj->professional->avatar ?? null,
                "gender" => $obj->professional->gender ?? null,
                "total_stars" => $obj->professional->total_stars ?? null,
                "total_raitings" => $obj->professional->total_raitings ?? null,
                "address" => $obj->address[0] ?? null
            ];
        });
        return response()->json($user[0], 200);
    }

    public function getVideoTrainings(Request $request)
    {
        $user = Auth::user();

        $trainings = TrainingCategory::with('trainings')->get();
        $recommended = collect([(object)[
            "id" => 0,
            "title" => "Recomendados",
            "trainings" => Training::orderBy('release_order')->get()
        ]]);

        Log::info($recommended);

        $newColection = $recommended->merge($trainings);

        $trainings = $newColection->map(function ($obj, $key) use ($user) {
            $title = $obj->title;
            return [
                "id" => $obj->id,
                "title" => $obj->title,
                "totalTrainings" => count($obj->trainings),
                "playList" => $obj->trainings->map(function ($obj) use ($user, $title) {
                    return [
                        "id" => $obj->id,
                        "author" => User::where('id', $obj->author_user_id)->first()->name,
                        "description" => $obj->description,
                        "created_at" => Carbon::parse($obj->created_at)->locale('pt_BR')->isoFormat("DD/MM/Y HH:mm"),
                        "totalTime" => Carbon::parse("0000-00-00T00:00:00")->addSeconds($obj->duration)->locale('pt_BR')->isoFormat("HH:mm:ss"),
                        "title" => $obj->name,
                        "prerequisite_training_id" => $obj->prerequisite_training_id,
                        "thumbnail_url" => $obj->thumbnail_url,
                        "release_order" => $obj->release_order,
                        "titleSection" => $title,
                        "videoId" => $obj->video_id,
                        "statusTraining" => CompletedTraining::where('training_id', $obj->id)->where('professional_id', $user->id)->first()["status_id"] ?? null,
                        "totalRate" => TrainingsFeedback::where('training_id', $obj->id)->get()->count(),
                        "totalLikes" => TrainingsFeedback::where('training_id', $obj->id)->where('rate', 1)->get()->count(),
                        "totalViews" => CompletedTraining::where('training_id', $obj->id)->where("status_id", 3)->get()->count(),
                        "trainingQuestions" => SurveyTraining::where('training_id', $obj->id)->get()->map(function ($obj) {
                            return [
                                "survey_id" => $obj->id,
                                "question" => $obj->question,
                                "alternatives" => [
                                    [
                                        "title" => $obj->answer_a,
                                    ],
                                    [
                                        "title" => $obj->answer_b,
                                    ],
                                    [
                                        "title" => $obj->answer_c,
                                    ],
                                    [
                                        "title" => $obj->answer_d
                                    ]
                                ]
                            ];
                        }) ?? null
                    ];
                }) ?? null
            ];
        });
        return response()->json($trainings, 200);
    }

    public function saveSurveyResponse(Request $request)
    {
        DB::beginTransaction();

        $userId = Auth::user()->id;
        $validator = Validator::make($request->all(), [
            'responses' => 'required|array'
        ]);
        if ($validator->fails()) {
            $messageError = $validator->errors();
            return response()->json($messageError, 422);
        }

        foreach ($request->responses as $obj) {
            # code...
            $obj = (object)$obj;
            $surveyResponse = SurveyResponse::updateOrCreate(
                ['survey_id' => $obj->survey_id, 'user_id' => $userId],
                [
                    'survey_id' => $obj->survey_id,
                    'user_id' => $userId,
                    'answer' => $obj->answer
                ]
            );
            if (!$surveyResponse->save()) {
                DB::rollBack();
                return response()->json(["message" => "Falha ao salvar respostas"], 422);
            }
        }
        DB::commit();
        return response()->json(["message" => "Respostas salvas com secesso"], 200);
    }

    public function checkStatusQuestions(Request $request)
    {
        $userId = Auth::user()->id;
        $trainings = Training::find($request->training_id);
        $surveyTrainings = $trainings->survey_trainings;
        $surveyTrainings = $surveyTrainings->pluck('id');

        $surveyResponse = SurveyResponse::where('user_id', $userId)->whereIn('survey_id', $surveyTrainings)->get();

        $surveyResponse = $surveyResponse->map(function ($obj, $key) {
            $surveyTraining = SurveyTraining::where('id', $obj->survey_id)->first();
            // SurveyTraining::where('id', $obj->survey_id)->first()
            return [
                "question" => $surveyTraining->question,
                "status" => [
                    "select" => $surveyTraining["answer_" . $obj->answer],
                    "selected_letter" => $obj->answer,
                    "correct" => $surveyTraining->right_answer == strtolower($obj->answer),
                    "correctQuestion" => $surveyTraining["answer_" . $surveyTraining->right_answer],
                    "correctLetterSelect" => $surveyTraining->right_answer
                ]
            ];
        });

        $response = [
            "responses" => $surveyResponse,
            "statusTest" => [
                "totalCorrectQuestions" => $surveyResponse->reduce(function ($sum, $obj) {
                    return $obj['status']['correct'] ? $sum + 1 : $sum;
                }, 0),
                "percentageHit" => ($surveyResponse->reduce(function ($sum, $obj) {
                    return $obj['status']['correct'] ? $sum + 1 : $sum;
                })) * 5,
                "totalQuestions" => count($surveyResponse)
            ]
        ];
        //excluir timeDovideo caso não tenha passado
        $checkStatus = $surveyResponse->reduce(function ($sum, $obj) {
            return $obj['status']['correct'] ? $sum + 1 : $sum;
        }, 0);
        if ($checkStatus <= 3) {
            $statusVideoTraining = CompletedTraining::where("training_id", $request->training_id)->where("professional_id", $userId)->first();
            $statusVideoTraining->delete();
        } else {
            $statusVideoTraining = CompletedTraining::where("training_id", $request->training_id)->where("professional_id", $userId)->first();
            $statusVideoTraining->status_id = 3;
            $statusVideoTraining->save();
        }

        return response()->json($response, 200);
    }

    public function saveOrUpdateStatusTraining(Request $request)
    {
        $userId = Auth::user()->id;
        $statusVideo = 0;
        $statusTraining = CompletedTraining::where('professional_id', $userId)->where('training_id', $request->training_id)->first();
        if ($statusTraining) {
            $statusTraining->status_id != 3 ? $statusVideo = $request->status_id : $statusVideo = 3;
        }

        try {
            //code...
            $completTrainings = CompletedTraining::updateOrCreate(
                ["professional_id" => $userId, "training_id" => $request->training_id],
                [
                    "professional_id" => $userId,
                    "expiration_date" => "2022-10-11",
                    "training_id" => $request->training_id,
                    "time_stopped" => $request->time_stopped,
                    "status_id" => $statusVideo,
                    "hits" => 2,
                    "release_order" => 1
                ]
            );
            if (!$completTrainings) {
                return response()->json(["message" => "Não foi possivel salvar o status do video"], 422);
            }
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json($th->getMessage(), 422);
        }

        return response()->json($completTrainings, 200);
    }

    public function checkStatusVideo(Request $request)
    {
        $userId = Auth::user()->id;
        $completeTrainings = CompletedTraining::where('training_id', $request->training_id)->where('professional_id', $userId)->first();
        return response()->json($completeTrainings ?? false, 200);
    }

    public function saveFeedBackTraining(Request $request)
    {
        $userId = Auth::user()->id;
        try {
            //code...
            $trainingFeedback = TrainingsFeedback::updateOrCreate(
                ["user_id" => $userId, "training_id" => $request->training_id],
                [
                    "user_id" => $userId,
                    "training_id" => $request->training_id,
                    "rate" => $request->rate
                ]
            );
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json($th->getMessage(), 422);
        }
        return response()->json($trainingFeedback, 200);
    }


    public function schedule()
    {
        //6597
        $user = Auth::user();
        $slots = ServiceSlot::where('user_id', $user->id)->orderBy('id', 'DESC')->with('service.address.city', 'service.client_service', 'service.service_category')->whereYear('created_at', Carbon::now()->year)->get();
        $newValue = new NumberFormatter('de_DE', NumberFormatter::DECIMAL);
        $arrayDays = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];
        //primeiro fazer um map
        $mapSlotServices = $slots->map(function ($serviceSlot) use ($newValue, $arrayDays) {
            return (object)[
                "service_id" => $serviceSlot->service_id,
                "recurrence" => isset($serviceSlot->service->service_category) ? $serviceSlot->service->service_category->title : "N/A",
                "products_included" => $serviceSlot->service->products_included ? "Inclusos" : "Não inclusos",
                "start_time" => Carbon::parse($serviceSlot->service->start_time)->locale('pt_BR')->isoFormat("DD/MM/Y HH:mm"),
                "end_time" => Carbon::parse($serviceSlot->service->end_time)->locale('pt_BR')->isoFormat("DD/MM/Y HH:mm"),
                "date" => Carbon::parse($serviceSlot->service->end_time)->locale('pt_BR')->isoFormat("DD/MM/Y"),
                "total_time" => $serviceSlot->service->total_time,
                "time" => Carbon::parse($serviceSlot->service->start_time)->locale('pt_BR')->isoFormat("HH:mm") . " ás " . Carbon::parse($serviceSlot->service->end_time)->locale('pt_BR')->isoFormat("HH:mm"),
                "address" => isset($serviceSlot->service->address) ?
                    $serviceSlot->service->address->street .
                    ",Número: " . $serviceSlot->service->address->number .
                    ",Bairro: " . $serviceSlot->service->address->neighborhood .
                    ",Cidade: " . (isset($serviceSlot->service->address->city) ? $serviceSlot->service->address->city->title : "N/A") : "N/A",
                "value" => "R$ " . str_replace(" ", "", $newValue->format($serviceSlot->value)),
                "client" => isset($serviceSlot->service->client_service) ? $serviceSlot->service->client_service->name : "N/A",
                "dayOfWeek" => $arrayDays[Carbon::parse($serviceSlot->service->end_time)->locale('pt_BR')->dayOfWeek],
                "offsetDayOfWeek" => Carbon::parse($serviceSlot->service->end_time)->locale('pt_BR')->dayOfWeek,
                "service_type" => $serviceSlot->service->title_service,
                "status_id" => $serviceSlot->service->status_id,
                "service_status_title" => $serviceSlot->service->service_status_title,
                "original_values" => (object)[
                    "start_time" => $serviceSlot->service->start_time,
                    "day" => Carbon::create($serviceSlot->service->start_time)->day,
                    "month" => Carbon::create($serviceSlot->service->start_time)->month,
                ]
            ];
        });

        // $confirmedServices = $mapSlotServices->filter(function ($service, $days) use ($today) {
        //     if ($service->status_id == 3) {
        //         Log::info($today->toDateString() < Carbon::create($service->original_values->start_time)->toDateString());
        //         return true;
        //     }
        // })->values();

        $today = Carbon::now("America/Sao_Paulo")->locale('pt_BR');
        $nextService = (object)[];
        $mostRecentDate = null;
        foreach ($mapSlotServices as $service) {
            $dateServiceCarbon = Carbon::create($service->original_values->start_time);
            //verifica se a data do serviço é maior ou igual a hoje e esta confirmado
            if ($service->status_id == 3 && $dateServiceCarbon->toDateString() >= $today->toDateString()) {
                //se a data e hora do serviço na interação atual for maior que a do anterior seta a data do anterior e da um replace na variavel
                if (!$mostRecentDate) {
                    $mostRecentDate = $dateServiceCarbon;
                    $nextService = $service;
                }
                if ($mostRecentDate > $dateServiceCarbon) {
                    $mostRecentDate = $dateServiceCarbon;
                    $nextService = $service;
                }
            }
        }

        $servicesDay = $mapSlotServices->filter(function ($service) use ($today) {
            if ($service->status_id == 3 && Carbon::create($service->original_values->start_time)->toDateString() === $today->toDateString()) {
                return true;
            }
        })->values();

        $nextDay = $today->addDay(1);
        $servicesNextDay = $mapSlotServices->filter(function ($service) use ($nextDay) {
            if ($service->status_id == 3 && Carbon::create($service->original_values->start_time)->toDateString() === $nextDay->toDateString()) {
                return true;
            }
        })->values();

        $servicesYear = $mapSlotServices->filter(function ($service) {
            if (Carbon::create($service->original_values->start_time)->year === Carbon::now()->year) {
                return true;
            }
        })->values();


        return response()->json(["nextService" => $nextService, "servicesDay" => $servicesDay, "servicesNextDay" => $servicesNextDay, "servicesYear" => $servicesYear], 200);
    }

    public function avaliableServices()
    {
        $professional = Auth::user();
        $daysOfWeek = Dayofweek::where('user_id', $professional->id)->first();
        if (!$daysOfWeek) {
            return response()->json(["message" => "Você não possuí nenhum dia disponivel habilitado. Entre no seu perfil e escolha os dias em que você quer trabalhar."], 422);
        }
        // 6597
        $daysAvailables = Self::daysAvailable($professional->id);

        $datesServicesAvailables = \Carbon\Carbon::now()->addHour(96); //Libera as Services Avulsa com 3 dias de antecedencia
        $datesSubscriptionsAvailables = \Carbon\Carbon::now()->addHour(96); // Libera assinaturas com 4 dias de antecedencia

        $status_open = ServiceStatus::where('title', 'Aberto')->first()->id;

        //recupera todas as Services que a profissional já aceitou
        $myService = Service::where('start_time', '>=', \Carbon\Carbon::now())->whereHas(
            'service_slots',
            function ($query) {
                $query->where('user_id', Auth::user()->id);
            }
        )->with(['client'])->get();

        //Busca as Faxinas avulsas
        $services =  $this->getSingleServiceAvailables($professional, $status_open, $daysAvailables, $datesServicesAvailables, $myService);

        //Retorna Primeiro se tem alguma Service de Assinatura, onde ele ? Profissional Preferrencial do Dia da Semana (DayWeek)
        $subscription = $this->getServicesSubscriptionsAvailables($professional, $status_open, $daysAvailables, $datesSubscriptionsAvailables, $myService);


        return response()->json(["services" => $services, "subscriptions" => $subscription], 200);
    }

    public static  function daysAvailable($user_id)
    {
        $professional = User::where('id', $user_id)->first();
        $professionalDayweeks = Dayofweek::where('user_id', $professional->id)->first()->makeHidden(['id', 'user_id']);

        if ($professional->status != 1) return;

        $daysAvailables = collect($professionalDayweeks)->map(function ($value) {
            return $value;
        })->values()->map(function ($value, $key) {
            return (object)[
                "day" => $key,
                "status" => $value,
            ];
        })->filter(function ($value) {
            return $value->status != 0;
        })->values()->map(function ($values) {
            return $values->day;
        });

        return $daysAvailables ?? null;
    }


    private function getSingleServiceAvailables($professional, $status_open, $daysAvailables, $datesServicesAvailables, $myService)
    {

        // $user_id = $professional->id;
        // $products = $professional->has_products; //Recupera se a profissional tem produtos
        // $city_id = $professional->address->city_id;    // Recupera a city da profissional


        //Recupera as subscriptions que ainda n?o possuem Profissional Preferrencial Cadastrada
        $subscriptionsWithOutPP_ids = Subscription::whereNotIn('status_id', [2, 3])
            ->doesntHave('preferred_professionals')
            //->has('preferred_professionals_SlotNull')
            ->has('free_subscriptionDayWeeks')
            ->pluck('id')->toArray();


        if ($subscriptionsWithOutPP_ids) { // Se encontrar Alguma nova Assinatura, Sem profissional Preferrencial cadastrada

            $services = Service::with(['user', 'service_slots', 'service_category', 'additionals_to_service'])->has('free_slots')
                ->whereDoesntHave(
                    'service_slots',
                    function ($query) { // Verificar se a profissional ja aceitou essa vaga (quando a service tem mais de uma vaga)
                        $query->where('user_id', Auth::user()->id);
                    }
                )
                ->whereHas(
                    'service_slots',
                    function ($query) use ($myService) { //Recupera somente Services que n?o tenha conflito com a agenda da profissional (Com as Services que ela j? vai atender)
                        foreach ($myService as $c) {
                            $start_time = Carbon::createFromFormat('Y-m-d H:i:s', $c->start_time)->subMinutes(59);
                            $end_time = Carbon::createFromFormat('Y-m-d H:i:s', $c->end_time)->addMinutes(59);

                            $query->WhereNotBetween('start_time', [$start_time, $end_time])
                                ->WhereNotBetween('end_time', [$start_time, $end_time])
                                ->WhereRaw('? NOT BETWEEN start_time and end_time', [$start_time])
                                ->WhereRaw('? NOT BETWEEN start_time and end_time', [$end_time]);
                        }
                    }
                )
                ->where('franchise_id', $professional->franchise_id)
                ->whereIn('dayofweek', $daysAvailables) //Se profissional Com agenda disponivel para esta dia
                ->whereIn('products_included', [$professional->has_products, 0])
                ->where('start_time', '<=', $datesServicesAvailables) // Recupera somente as Services Avulsa com 3 dias de antecedencia
                ->where('status_id', $status_open)
                ->whereIn('subscription_id', $subscriptionsWithOutPP_ids) //Recupera services de Assinaturas Sem Profissional Cadastrada
                ->where('service_category_id', '!=', 1)
                ->get();

            if (count($services) > 0) { //Se tem alguma nova assinatura dentro dos crit?rios de exibi??o

                return $services;
            } else { //Se tem novas assinaturas, mas ainda n?o est?o dispon?veis para exibi??o, exibe as avulsa.

                $services = Service::with(['user', 'service_slots', 'service_category', 'additionals_to_service'])->has('free_slots')
                    ->whereDoesntHave(
                        'service_slots',
                        function ($query) { // Verificar se a profissional ja aceitou essa vaga (quando a service tem mais de uma vaga)
                            $query->where('user_id', Auth::user()->id);
                        }
                    )
                    ->whereHas(
                        'service_slots',
                        function ($query) use ($myService) { //Recupera somente Services que n?o tenha conflito com a agenda da profissional (Com as Services que ela j? vai atender)
                            foreach ($myService as $c) {
                                $start_time = Carbon::createFromFormat('Y-m-d H:i:s', $c->start_time)->subMinutes(59);
                                $end_time = Carbon::createFromFormat('Y-m-d H:i:s', $c->end_time)->addMinutes(59);

                                $query->WhereNotBetween('start_time', [$start_time, $end_time])
                                    ->WhereNotBetween('end_time', [$start_time, $end_time])
                                    ->WhereRaw('? NOT BETWEEN start_time and end_time', [$start_time])
                                    ->WhereRaw('? NOT BETWEEN start_time and end_time', [$end_time]);
                            }
                        }
                    )
                    ->where('franchise_id', $professional->franchise_id)
                    ->whereIn('dayofweek', $daysAvailables) //Se profissional Com agenda disponivel para esta dia
                    ->whereIn('products_included', [$professional->has_products, 0])
                    ->where('start_time', '<=', $datesServicesAvailables) // Recupera somente as Services Avulsa com 3 dias de antecedencia
                    ->where('status_id', $status_open)
                    ->where('service_category_id', 1) //Recupera Services que n?o tem Subscriptions (Avulsas)
                    ->get();

                return $services;
            }
        } else { //Se n?o existe nenhuma nova assinatura dispon?vel, exibi as avulsa.
            $services = Service::with(['user', 'service_slots', 'service_category', 'additionals_to_service'])->has('free_slots')
                ->whereDoesntHave(
                    'service_slots',
                    function ($query) { // Verificar se a profissional ja aceitou essa vaga (quando a service tem mais de uma vaga)
                        $query->where('user_id', Auth::user()->id);
                    }
                )
                ->whereHas(
                    'service_slots',
                    function ($query) use ($myService) { //Recupera somente Services que n?o tenha conflito com a agenda da profissional (Com as Services que ela j? vai atender)
                        foreach ($myService as $c) {
                            $start_time = Carbon::createFromFormat('Y-m-d H:i:s', $c->start_time)->subMinutes(59);
                            $end_time = Carbon::createFromFormat('Y-m-d H:i:s', $c->end_time)->addMinutes(59);

                            $query->WhereNotBetween('start_time', [$start_time, $end_time])
                                ->WhereNotBetween('end_time', [$start_time, $end_time])
                                ->WhereRaw('? NOT BETWEEN start_time and end_time', [$start_time])
                                ->WhereRaw('? NOT BETWEEN start_time and end_time', [$end_time]);
                        }
                    }
                )
                ->where('franchise_id', $professional->franchise_id)
                ->whereIn('dayofweek', $daysAvailables) //Se profissional Com agenda disponivel para esta dia
                ->whereIn('products_included', [$professional->has_products, 0])
                ->where('start_time', '<=', $datesServicesAvailables) // Recupera somente as Services Avulsa com 3 dias de antecedencia
                ->where('status_id', $status_open)
                ->Where('subscription_id', NULL) //Recupera Services que n?o tem Subscriptions (Avulsas)
                ->get();

            return $services;
        }
    }

    private function getServicesSubscriptionsAvailables($professional, $status_open, $daysAvailables, $datesSubscriptionsAvailables, $myService)
    {

        $user_id = $professional->id;
        // $products = $professional->has_products;
        // $city_id = Auth::user()->address->city_id;


        //Recupera as subscriptions que aprofissional logda é  Profissional Preferrencial Cadastrada
        $subscription_preferred_professional_ids = Subscription::whereNotIn('status_id', [2, 3])
            ->whereHas(
                'preferred_professionals',
                function ($query) use ($user_id) {
                    $query->where('professional_id', $user_id);
                }
            )
            ->pluck('id')->toArray();
        //Recupera as Subscriptions_Preferred_professional em que a profissional esta associada
        $preferred_professional_ids = SubscriptionPreferred_professional::where('professional_id', $user_id)
            ->whereIn('subscription_id', $subscription_preferred_professional_ids)
            ->get()->pluck('id')->toArray();


        //Se a Profissional Logada est? cadastrada como preferr?ncial em alguma assinatura
        if ($preferred_professional_ids) {

            $subscriptionDayWeek_WithPP = SubscriptionDayweek::whereIn('preferred_professional_id', $preferred_professional_ids)->whereNull('deleted_at')->get()->pluck('dayWeek')->toArray();
            $subscriptionDayWeek_WithOutPP = SubscriptionDayweek::whereIn('subscription_id', $subscription_preferred_professional_ids)->whereNull('deleted_at')->where('preferred_professional_id', NULL)->get()->pluck('dayWeek')->toArray();
            $subscriptionDayWeek = SubscriptionDayweek::whereIn('subscription_id', $subscription_preferred_professional_ids)->whereNull('deleted_at')->get()->pluck('dayWeek')->toArray();



            //Match Total
            if ($subscriptionDayWeek_WithPP) { //Se a profissional Logada ? preferrencial em algum DayWeek de uma Subscription (Significa prioridade maior).

                $subscription = Service::with(['user', 'client', 'service_slots', 'service_category', 'service_type', 'additionals_to_service'])->has('free_slots')
                    ->whereDoesntHave(
                        'service_slots',
                        function ($query) { // Verificar se a profissional ja aceitou essa vaga (quando a service tem mais de uma vaga)
                            $query->where('user_id', Auth::user()->id);
                        }
                    )
                    ->whereHas(
                        'service_slots',
                        function ($query) use ($myService) {

                            foreach ($myService as $c) {

                                $start_time = Carbon::createFromFormat('Y-m-d H:i:s', $c->start_time)->subMinutes(59);
                                $end_time = Carbon::createFromFormat('Y-m-d H:i:s', $c->end_time)->addMinutes(59);

                                $query->WhereNotBetween('start_time', [$start_time, $end_time])
                                    ->WhereNotBetween('end_time', [$start_time, $end_time])
                                    ->WhereRaw('? NOT BETWEEN start_time and end_time', [$start_time])
                                    ->WhereRaw('? NOT BETWEEN start_time and end_time', [$end_time]);
                            }
                        }
                    )
                    ->where('franchise_id', $professional->franchise_id)
                    ->where('service_category_id', '!=', 1)
                    ->whereIn('subscription_id', $subscription_preferred_professional_ids)
                    ->whereIn('dayofweek', $subscriptionDayWeek_WithPP)
                    ->whereIn('dayofweek', $daysAvailables) //Se profissional Com agenda disponivel para esta dia
                    ->whereIn('products_included', [$professional->has_products, 0])
                    ->where('start_time', '<=', $datesSubscriptionsAvailables) //Libera as Subscription com 4 dias
                    ->where('status_id', $status_open)
                    ->oldest('start_time')->first();
                return $subscription;
            } elseif ($subscriptionDayWeek_WithOutPP) {    //Se a profissional esta cadastrada como preferrencial generica para uma subscription sem um dia especifico

                $subscription = Service::with(['user', 'client', 'service_slots', 'service_category', 'service_type', 'additionals_to_service'])->has('free_slots')
                    ->whereDoesntHave(
                        'service_slots',
                        function ($query) { // Verificar se a profissional ja aceitou essa vaga (quando a service tem mais de uma vaga)
                            $query->where('user_id', Auth::user()->id);
                        }
                    )
                    ->whereHas(
                        'service_slots',
                        function ($query) use ($myService) {

                            foreach ($myService as $c) {

                                $start_time = Carbon::createFromFormat('Y-m-d H:i:s', $c->start_time)->subMinutes(59);
                                $end_time = Carbon::createFromFormat('Y-m-d H:i:s', $c->end_time)->addMinutes(59);

                                $query->WhereNotBetween('start_time', [$start_time, $end_time])
                                    ->WhereNotBetween('end_time', [$start_time, $end_time])
                                    ->WhereRaw('? NOT BETWEEN start_time and end_time', [$start_time])
                                    ->WhereRaw('? NOT BETWEEN start_time and end_time', [$end_time]);
                            }
                        }
                    )
                    ->where('service_category_id', '!=', 1)
                    ->whereIn('subscription_id', $subscription_preferred_professional_ids)
                    ->where('franchise_id', $professional->franchise_id)
                    ->whereIn('dayofweek', $daysAvailables) //Se profissional Com agenda disponivel para esta dia
                    ->whereIn('products_included', [$professional->has_products, 0])
                    ->where('start_time', '<', $datesSubscriptionsAvailables) //Libera as Subscription com 4 dias
                    ->where('status_id', $status_open)
                    ->oldest('start_time')->first();

                return $subscription;
            } else {


                $subscription = Service::with(['user', 'client', 'service_slots', 'service_category', 'service_type', 'additionals_to_service'])->has('free_slots')
                    ->whereDoesntHave(
                        'service_slots',
                        function ($query) { // Verificar se a profissional ja aceitou essa vaga (quando a service tem mais de uma vaga)
                            $query->where('user_id', Auth::user()->id);
                        }
                    )
                    ->whereHas(
                        'service_slots',
                        function ($query) use ($myService) {

                            foreach ($myService as $c) {

                                $start_time = Carbon::createFromFormat('Y-m-d H:i:s', $c->start_time)->subMinutes(59);
                                $end_time = Carbon::createFromFormat('Y-m-d H:i:s', $c->end_time)->addMinutes(59);

                                $query->WhereNotBetween('start_time', [$start_time, $end_time])
                                    ->WhereNotBetween('end_time', [$start_time, $end_time])
                                    ->WhereRaw('? NOT BETWEEN start_time and end_time', [$start_time])
                                    ->WhereRaw('? NOT BETWEEN start_time and end_time', [$end_time]);
                            }
                        }
                    )
                    ->where('franchise_id', $professional->franchise_id)
                    ->where('service_category_id', '!=', 1)
                    ->whereIn('subscription_id', $subscription_preferred_professional_ids)
                    ->whereNotIn('dayofweek', [2, 4])
                    ->whereIn('dayofweek', $daysAvailables) //Se profissional Com agenda disponivel para esta dia
                    ->whereIn('products_included', [$professional->has_products, 0])
                    ->where('start_time', '<', $datesSubscriptionsAvailables) //Libera as Subscription com 4 dias
                    ->where('status_id', $status_open)
                    ->oldest('start_time')->first();

                return $subscription;
            }
        }
    }


    public function assign($id)
    {

        $user = Auth::user();
        $now = \Carbon\Carbon::now();
        $slots = ServiceSlot::where('user_id', $user->id)->get();

        $slot = ServiceSlot::findOrFail($id);

        // verifica se a vaga possui usuÃ¡rio atribuido
        if ($slot->user_id !== NULL) {

            /*****************LOG CENTRAL*********************/
            Log_Central::Create([
                'user_id' => NULL,
                'cod_source'      => Auth::user()->id,
                'service_id'      =>  $slot->service_id,
                'source'      =>  URL::previous(), //
                'event_type' => "E",
                'log'           => 'Usuario => profissional tentou aceitar uma faxina ja aceita ',

            ]);
            /*****************FIM LOG CENTRAL*********************/

            return redirect()->route('admin.home')->withErrors(['Erro!', 'Essa vaga jÃ¡ foi preenchida por outra profissional. Por favor, escolha outro serviÃ§o.']);
        }

        $service = Service::findOrFail($slot->service_id);

        // verifica se faxina possui status aberto, se foi configurada e se nÃ£o atingiu o nÃºmero mÃ¡ximo de profissionais designadas
        $status_open = ServiceStatus::where('title', 'Aberto')->first()->id;
        if ($service->status_id !== $status_open) {
            //return abort(403);
            /*****************LOG CENTRAL*********************/
            Log_Central::Create([
                'user_id' => NULL,
                'cod_source'      => Auth::user()->id,
                'service_id'      =>  $service->service_id,
                'source'      =>  URL::previous(), //
                'event_type' => "E",
                'log'           => 'Usuario => profissional tentou aceitar serviÃ§o nao aberto ',

            ]);
            /*****************FIM LOG CENTRAL*********************/
            return redirect()->route('professional.home')->withErrors(['Erro!', 'O serviÃ§o escolhido nÃ£o estÃ¡ disponÃ­vel. Por favor, escolha outro serviÃ§o.']);
        } else if ($service->qt_employees === NULL || $service->qt_assigned_to() == $service->qt_employees) {
            /*****************LOG CENTRAL*********************/
            Log_Central::Create([
                'user_id' => NULL,
                'cod_source'      => Auth::user()->id,
                'service_id'      =>  $service->service_id,
                'source'      =>  URL::previous(), //
                'event_type' => "E",
                'log'           => 'Usuario => profissional tentou aceitar servico com lotacao maxima ',

            ]);
            /*****************FIM LOG CENTRAL*********************/

            return redirect()->route('professional.home')->withErrors(['Erro!', 'O serviÃ§o escolhido nÃ£o estÃ¡ mais disponÃ­vel. Por favor, escolha outro serviÃ§o.']);
        }

        // atribui o usuÃ¡rio Ã  vaga
        $slot->user_id = $user->id;

        $cliente = User::findOrFail($service->client_id);
        $profissional = Auth::user();

        $slot->save();

        // verifica se a faxina jÃ¡ atingiu a quantidade de funcionÃ¡rios configurada
        if ($service->qt_assigned_to() == $service->qt_employees) {
            // mudar status para confirmada
            $status_ok = ServiceStatus::where('title', 'Confirmado')->first()->id;

            $service->status_id = $status_ok;
            $service->save();
        }

        $slots = ServiceSlot::where('service_id', $service->id)->where('user_id', '!=', NULL)->pluck('user_id');
        $listProfessional = User::with('professional')->whereIn('id', $slots)->get()->toArray();

        if (count($listProfessional) > 0) {



            Mail::to($cliente, $service, $profissional)
                ->send(new ServiceAccepted($cliente, $service, $listProfessional));
            /*****************LOG CENTRAL*********************/
            Log_Central::Create([
                'user_id' => NULL,
                'cod_source'      => Auth::user()->id,
                'service_id'      =>  $service->service_id,
                'source'      =>  URL::previous(), //
                'event_type' => "V",
                'log'           => 'Faxina com vaga completas, email enviado ao cliente.',

            ]);
            /*****************FIM LOG CENTRAL*********************/
        }


        return redirect()->route('professional.myServices')->with('success', 'Sua participaÃ§Ã£o na faxina foi confirmada com sucesso.'/*'AtribuiÃ§Ã£o da faxina realizada com sucesso.'*/);
    }

    public function checkSendPix(Request $request)
    {
        //modificado
        $user = Auth::user();
        $user = User::with('payment_account')->find($user->id);
        // $asaasTokens = Asaas::tokens();
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'access_token' => $user->payment_account->apiKey
        ])->post(config("routes.ASAAS") . 'transfers', [
            "value" => 0.1,
            "pixAddressKey" => $request->pix_address,
            "pixAddressKeyType" => $request->pix_address_key_type,
            "description" => "check user transfer",
            "scheduleDate" => Carbon::now()->addDays(20)->toDateString()
        ]);

        if ($response->status() != 200) {
            return response()->json(["message" => "Falha ao realizar solicitação."], 422);
        }
        $date = json_decode($response->getBody()->getContents());
        return response()->json($date->bankAccount, 200);
    }


    public function sendPix(Request $request)
    {
        $user = Auth::user();
        $apiKey = PaymentAccount::where('user_id', $user->id)->first()->apiKey;

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'access_token' => $apiKey
        ])->post(config("routes.ASAAS") . 'transfers', [
            "value" => $request->value,
            "pixAddressKey" => $request->pix_address,
            "pixAddressKeyType" => $request->pix_address_key_type,
            "description" => "teste de transferencia",
            "scheduleDate" => null
        ]);

        if ($response->status() != 200) {
            return response()->json(["message" => "Falha ao realizar solicitação."], 422);
        }
        $date = json_decode($response->getBody()->getContents());
        return response()->json($date, 200);
        // return response()->json($user, 200);
    }


    public function gerateKeyPix()
    {
        $user = Auth::user();
        $apiKey = PaymentAccount::where('user_id', $user->id)->first()->apiKey;

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'access_token' => $apiKey
        ])->post(config("routes.ASAAS") . 'pix/addressKeys', [
            "type" => "EVP"
        ]);
        if ($response->status() != 200) {
            return response()->json(["message" => "Falha ao realizar solicitação."], 422);
        }
        $date = json_decode($response->getBody()->getContents());
        return response()->json($date, 200);
    }

    public function getKeysPix()
    {
        $user = Auth::user();
        $apiKey = PaymentAccount::where('user_id', $user->id)->first()->apiKey;

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'access_token' => $apiKey
        ])->get(config("routes.ASAAS") . 'pix/addressKeys?status=ACTIVE');
        if ($response->status() != 200) {
            return response()->json(["message" => "Falha ao realizar solicitação."], 422);
        }
        $date = json_decode($response->getBody()->getContents());
        return response()->json($date, 200);
    }

    public function deletPixKey(Request $request)
    {
        //modificado
        $user = Auth::user();
        $apiKey = PaymentAccount::where('user_id', $user->id)->first();
        $pixKeyId = $request->pix_key_id;

        $user = User::with('payment_account')->find($user->id);

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'access_token' => $user->payment_account->apiKey
        ])->delete(config("routes.ASAAS") . 'pix/addressKeys/' . $pixKeyId);
        if ($response->status() != 200) {
            return response()->json(["message" => "Falha ao realizar solicitação."], 422);
        }
        $date = json_decode($response->getBody()->getContents());
        return response()->json($date, 200);
    }
    public function myPlan(Request $request)
    {
        $user = Auth::user();
        $myPlan = ProfessionalsPlan::where('user_id', $user->id)->first();
        return response()->json(['myPlan' => $myPlan ?? null], 200);
    }
    public function savePlan(Request $request)
    {
        $user = Auth::user();
        $myPlan = ProfessionalsPlan::updateOrCreate(
            ['user_id' => $user->id],
            [
                'professional_subscription_plan_id' => $request->subscription_plan_id,
                'status_id' => 0,
                'last_renew' => Carbon::now()
            ]
        );
        return response()->json(['myPlan' => $myPlan], 200);
    }


    public function geratePixQrCodePlan(Request $request)
    {
        $user = Auth::user();
        $tokenAsaas = Juno_token::find(3)->access_token;
        //pegar o plano selecionado
        $plan = ProfessionalSubscriptionPlan::find($request->plan);
        $valuePlan =  $plan->value;

        //cria um asaas customer
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'access_token' => $tokenAsaas
        ])->post(config("routes.ASAAS") . 'customers', [
            "name" => $user->name ?? $request->name,
            "cpfCnpj" => $request->cpfCnpj
        ]);
        if ($response->status() != 200) {
            return response()->json(["message" => "Falha ao realizar solicitação1."], 422);
        }
        $date = json_decode($response->getBody()->getContents());
        $asaasCustomer = AsaasCustomer::updateOrCreate(
            ['user_id' => $user->id],
            ['customer_id' => $date->id]
        );
        if (!$asaasCustomer) {
            return response()->json(["message" => "Erro ao gerar customer id"], 422);
        }

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'access_token' => $tokenAsaas
        ])->post(config("routes.ASAAS") . 'payments', [
            "customer" => $date->id,
            "billingType" => $request->typePayment,
            "value" => $valuePlan,
            "dueDate" => Carbon::now()->addDays()->toDateString(),
            "description" => "primeiro boleto de assinatura profissional $user->id",
            "postalService" => false
        ]);

        if ($response->status() != 200) {
            return response()->json($response->getBody(), $response->status());
        }


        $date = json_decode($response->getBody()->getContents());
        try {
            //code...
            $this->createCreditFranchise($request, $valuePlan, Carbon::now()->addDays(5), 0, $date);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json($th->getMessage(), 422);
        }

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'access_token' => $tokenAsaas
        ])->get(config("routes.ASAAS") . "payments/$date->id/pixQrCode");

        if ($response->status() != 200) {
            return response()->json($response->getBody(), $response->status());
        }

        $myPlan = ProfessionalsPlan::updateOrCreate(
            ['user_id' => $user->id],
            [
                'professional_subscription_plan_id' => $plan->id,
                'status_id' => 4,
                'last_renew' => Carbon::now()
            ]
        );

        if (!$myPlan) {
            return response()->json(['message' => 'Erro ao criar plano'], 422);
        }

        $date = json_decode($response->getBody()->getContents());
        return response()->json($date, 200);
    }

    public function acceptService(Request $request)
    {
        DB::beginTransaction();
        //verifi
        $user = Auth::user();
        $service = Service::find($request->service_id);

        //verifica se a faxina esta aberta
        $status_open = ServiceStatus::where('title', 'Aberto')->first()->id;
        if ($service->status_id != $status_open) {
            return response()->json(["message" => "Este serviço não esta mais disponivel"], 422);
        }
        //verifica se o usuario já esta alocado na faxina;
        $isAllocated = ServiceSlot::where('service_id', $request->service_id)->where('user_id', $user->id)->exists();
        if ($isAllocated) {
            return response()->json(["message" => "Você já aceitou essa faxina"], 422);
        }
        //verifica se as vagas foram criadas
        $totalSlots = ServiceSlot::where('service_id', $request->service_id)->get()->count();
        if ($totalSlots === 0) {
            return response()->json(["message" => "Não existe vagas criadas para essa faxina por favor entre em contato com o atendimento"], 422);
        }
        //verifica se ainda tem vaga disponivel
        $slotsNull = ServiceSlot::where('service_id', $request->service_id)->whereNull('user_id')->exists();
        if (!$slotsNull) {
            return response()->json(["message" => "Não existe mais vagas disponiveis"], 422);
        }

        //atribui o usuario a uma das vagas
        $slot = ServiceSlot::where('service_id', $request->service_id)->whereNull('user_id')->first();
        $slot->user_id = $user->id;


        //verifica se é a ultima vaga disponivel
        $totalSlots = ServiceSlot::where('service_id', $request->service_id)->whereNull('user_id')->get()->count();
        if ($totalSlots === 1) {
            $confirmService = ServiceStatus::where('title', 'Confirmada')->first()->id;
            $service->status_id = $confirmService;
            if (!$slot->save() || !$service->save()) {
                DB::rollBack();
                return response()->json(["message" => "Erro ao aceitar faxina por favor entre en contato com o atendimento"], 422);
            }
        } else {
            if (!$slot->save()) {
                DB::rollBack();
                return response()->json(["message" => "Erro ao aceitar faxina por favor entre en contato com o atendimento"], 422);
            }
        }
        DB::commit();
        return response()->json(["message" => "Serviço aceito com sucesso"], 200);
    }

    public function loginPagClin(Request $request)
    {
        $user = Auth::user();
        $hashPassword = PasswordPagclin::where('user_id', $user->id)->first()->password;

        if (!Hash::check($request->password, $hashPassword)) {
            return response()->json(['message' => "Senha incorreta, tente novamente"], 422);
        };

        return response()->json(['message' => 'success'], 200);
    }

    public function savePasswordPagClin(Request $request)
    {
        $user = Auth::user();
        $newPasswordPagClin = PasswordPagclin::updateOrCreate(
            ['user_id' => $user->id],
            ['password' => Hash::make($request->password)]
        );

        if (!$newPasswordPagClin) {
            return response()->json(['message' => "Falha ao salvar senha"], 422);
        }

        return response()->json(['message' => 'senha salva com sucesso.'], 200);
    }

    public function getPlans()
    {
        $plans = ProfessionalSubscriptionPlan::skip(0)->take(4)->get();
        if (!$plans) {
            return response()->json(['message' => "Nenhum plano encontrado"], 422);
        }

        $newPlans = $plans->map(function ($obj) {
            return [
                'value' =>  "R$" . number_format($obj->value, 2, ',', '.'),
                'title' => $obj->title,
                'id' => $obj->id
            ];
        });

        return response()->json(['plans' => $newPlans], 200);
    }

    public function getAllVideoTrainings()
    {
        $user = Auth::user();
        $recommendations = Training::whereDoesntHave('completed_training', function ($query) use ($user) {
            $query->where('professional_id', $user->id)->where('status_id', 3);
        })->orderBy('release_order')->select('id', 'name', 'duration', 'video_id', 'thumbnail_url', 'description', 'training_category_id')->get();
        $categories = TrainingCategory::with('trainings')->select('title', 'id')->get();
        return response()->json(["categories" => $categories, "recommendations" => $recommendations], 200);
    }
}

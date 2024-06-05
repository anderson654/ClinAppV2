<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Asaas\AsaasBillingController;
use App\Http\Controllers\ClinPro\ProfessionalController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Services\ServicesController;
use App\Http\Controllers\Services\SubscriptionController;
use App\Models\Asaas\AsaasBilling;
use App\Models\AsaasTransfer;
use App\Models\Payment;
use App\Models\ProfessionalsPlan;
use App\Models\Service;
use App\Models\Subscription;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Stmt\Return_;

class WebhooksController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

    public function webHookCharge(Request $request)
    {
        Log::info($request->payment['id']);
        DB::beginTransaction();
        //ajustar pagamento
        switch ($request->event) {
            case 'PAYMENT_RECEIVED': //pagamento recebido
                try {
                    //code...
                    $asaasBilling = AsaasBillingController::aproveAsaasBilling($request);
                    if (!isset($asaasBilling)) {
                        Log::info(["message" => "Pagamento não encontrado na tabela asaas billing"]);
                        return response()->json(["message" => "Pagamento não encontrado na tabela asaas billing"], 200);
                    }
                    $payment = PaymentsController::aprovePayment($asaasBilling);
                    if (!isset($payment)) {
                        Log::info(["message" => "Não existe um pagamento para ser atualizado"]);
                        return response()->json(["message" => "Não existe um pagamento para ser atualizado"], 200);
                    }

                    //verificar o tipo de pagamento aqui.
                    if ($payment->payment_category == 1) {
                        $existUser = isset($payment->user_id);
                        if (!$existUser) {
                            Log::info("erro webHookCharge:profissional não encontrada no pagamento");
                            return response()->json(["message" => "Usuario não encontrado no payment"], 422);
                        }

                        $plans = ProfessionalsPlan::where('user_id', $payment->user_id)->latest('id')->first();

                        // Log::info($plans);

                        if (!$plans) {
                            return response()->json(["message" => "nenhum plano encontrado para renovação"], 422);
                        }


                        $plans->status_id = 1;
                        $plans->save();

                        $deletPlans = ProfessionalsPlan::where('user_id', $plans->user_id)->where('id', '!=', $plans->id)->delete();
                        Log::info($deletPlans);

                        $professionalController = new ProfessionalController();
                        $professionalController->create(User::find($payment->user_id));

                        Log::info("Acabei de receber um pagamento de profissional.");
                    } else {
                        $isSignature =  SubscriptionController::isSignature($payment);
                        if ($isSignature) {
                            SubscriptionController::aproveSubscription($payment);
                            ServicesController::aproveServices($payment);
                        } else {
                            ServicesController::aproveServices($payment);
                        }
                    }

                    DB::commit();
                } catch (\Throwable $th) {
                    Log::info($th->getMessage());
                    DB::rollBack();
                    return response()->json(["data" => $th->getMessage()], 200);
                }
                break;

            case 'PAYMENT_DELETED':
                Log::info('Pagamento removido');

                try {
                    $asaasBilling = AsaasBillingController::deleteBilling($request);
                    DB::commit();
                } catch (\Throwable $th) {
                    DB::rollback();
                    return response()->json($th->getMessage(), 200);
                }
                break;
            default:
                # code...
                break;
        }
    }

    public function paymentProfessional(Request $request)
    {
        try {
            //code...
            $existTransfer = AsaasTransfer::where('transfer_id', $request->transfer["id"])->exists();
            if ($existTransfer) {
                $asaasTransaction = AsaasTransfer::where('transfer_id', $request->transfer["id"])->first();
            } else {
                $asaasTransaction = new AsaasTransfer();
            }
            $asaasTransaction->transfer_id = $request->transfer["id"];
            $asaasTransaction->status = $request->transfer["status"];
            $asaasTransaction->dateCreated = $request->transfer["dateCreated"];
            $asaasTransaction->effectiveDate = $request->transfer["effectiveDate"];
            $asaasTransaction->event = $request->event;
            $asaasTransaction->object = $request->transfer["object"];
            $asaasTransaction->endToEndIdentifier = $request->transfer["endToEndIdentifier"];
            $asaasTransaction->type = $request->transfer["type"];
            $asaasTransaction->value = $request->transfer["value"];
            $asaasTransaction->netValue = $request->transfer["netValue"];
            $asaasTransaction->transferFee = $request->transfer["transferFee"];
            $asaasTransaction->scheduleDate = $request->transfer["scheduleDate"];
            $asaasTransaction->authorized = $request->transfer["authorized"];
            $asaasTransaction->confirmedDate = $request->transfer["confirmedDate"];
            $asaasTransaction->failReason = $request->transfer["failReason"];
            $asaasTransaction->bank_code = $request->transfer["bankAccount"]["bank"]["code"];
            $asaasTransaction->bank_name = $request->transfer["bankAccount"]["bank"]["name"];
            $asaasTransaction->bank_accountName = $request->transfer["bankAccount"]["accountName"];
            $asaasTransaction->bank_ownerName = $request->transfer["bankAccount"]["ownerName"];
            $asaasTransaction->bank_cpfCnpj = $request->transfer["bankAccount"]["cpfCnpj"];
            $asaasTransaction->bank_agency = $request->transfer["bankAccount"]["agency"];
            $asaasTransaction->bank_agencyDigit = $request->transfer["bankAccount"]["agencyDigit"];
            $asaasTransaction->bank_account = $request->transfer["bankAccount"]["account"];
            $asaasTransaction->bank_accountDigit = $request->transfer["bankAccount"]["accountDigit"];
            $asaasTransaction->bank_pixAddressKey = $request->transfer["bankAccount"]["pixAddressKey"];
            $asaasTransaction->transactionReceiptUrl = $request->transfer["transactionReceiptUrl"];
            $asaasTransaction->operationType = $request->transfer["operationType"];
            $asaasTransaction->description = $request->transfer["description"];
            $asaasTransaction->save();

            if ($request->transfer["status"] == 'DONE') {
                //pago == 2
                $this->modifyStatusPayment($request->transfer["id"], 2);
            }

            Log::info("Transferencia salva com sucesso");
            return response($asaasTransaction, 200);
        } catch (\Throwable $th) {
            //throw $th;
            Log::info($th->getMessage());
            return response($th->getMessage(), 422);
        }
    }

    public function modifyStatusPayment($transferId, $idStatus)
    {
        $existTransfer = AsaasTransfer::where('transfer_id', $transferId)->exists();
        if ($existTransfer) {
            $asaasTransaction = AsaasTransfer::where('transfer_id', $transferId)->first();
            if (isset($asaasTransaction->payment_id)) {
                $payment = Payment::find($asaasTransaction->payment_id);
                $payment->payment_status_id = $idStatus;
                $payment->payment_date = Carbon::now()->toDateString();
                $payment->save();
            }
        }
    }

    public function cancelScheduledPix(Request $request)
    {
        $date = $request;
        $event = $date->event === 'TRANSFER_CREATED';
        $operationType = $date->transfer['operationType'] === 'PIX';

        if ($event && $operationType) {
            $searchSchedules = $this->searchIdPixScheduled();
            $existSchedules = $searchSchedules->totalCount >= 1;
            if ($existSchedules) {
                foreach ($searchSchedules->data as $obj) {
                    # code...
                    $this->cancelSchedule($obj->id);
                }
            }
        }
        return response()->json($date, 200);
    }

    public function searchIdPixScheduled()
    {
        //modificado
        $user = Auth::user();
        $user = User::with('payment_account')->find($user->id);
        
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'access_token' => $user->payment_account->apiKey
        ])->get('https://www.asaas.com/api/v3/' . 'pix/transactions?status=SCHEDULED&limit=100');

        if ($response->failed()) {
            Log::info($response->getBody()->getContents());
        }
        $responseObject = json_decode($response->getBody()->getContents());
        return $responseObject;
    }

    public function cancelSchedule($idTransactionPix)
    {
        //modificado
        $user = Auth::user();
        $user = User::with('payment_account')->find($user->id);

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'access_token' => $user->payment_account->apiKey
        ])->post('https://www.asaas.com/api/v3/' . 'pix/transactions/' . $idTransactionPix . '/cancel');
    }

    public function actionTypePyment()
    {
    }
}

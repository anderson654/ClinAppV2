<?php

namespace App\Http\Controllers;

use App\Exceptions\CustomException;
use App\Models\Asaas\Asaas;
use App\Models\Asaas\AsaasBilling;
use App\Models\Asaas\AsaasCustomer;
use App\Models\Log_central;
use App\Models\PaymentAccount;
use App\Models\Professional;
use App\Models\Contact;
use App\Models\Juno_token;
use App\Models\Order;
use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\AssignOp\Concat;
use Throwable;

class AsaasController extends Controller
{
    public function createAcountAllProfessionals()
    {
        //formata o cpf
        // $professionas = Professional::get();
        // foreach ($professionas as $professional) {
        //     $newCpf = str_replace(["-", ".", " "], "", $professional->cpf);
        //     $pro = Professional::find($professional->id);
        //     $pro->cpf = $newCpf;
        //     $pro->save();
        // }

        // //formatar o número
        // $phones = Contact::get();
        // foreach ($phones as $phone) {
        //     $newPhone = str_replace(["-", ".", " ", "(", ")"], "", $phone->phone);
        //     $pro = Contact::find($phone->id);
        //     $pro->phone = $newPhone;
        //     $pro->save();
        // }

        // return 0;
        //cria conta para as profissionais que não tem
        //estão ativas
        $professionals = Professional::doesntHave('payment_account')->whereIn('user_id', [701742, 701787, 697526, 700647, 701977])->with(['user.address', 'user.contact'])->whereNull('deleted_at')->get();
        // dd($professionals->count());
        foreach ($professionals as $professional) {
            try {
                $requestCreateDaughterAccount = new Request();
                $requestCreateDaughterAccount->merge([
                    'name' => $professional->name ?? '',
                    'email' => $professional->user->email ?? '',
                    'cpfCnpj' => $professional->cpf ?? '',
                    'mobilePhone' => $professional->user->contact->phone ?? '',
                    'address'  => isset($professional->user->address[0]->street) ?  $professional->user->address[0]->street : '',
                    'addressNumber' => isset($professional->user->address[0]->street) ? (string) $professional->user->address[0]->number : '',
                    'province'  => isset($professional->user->address[0]->street) ? $professional->user->address[0]->neighborhood : '',
                    'postalCode' => isset($professional->user->address[0]->street) ? $professional->user->address[0]->zip : '',
                    // 'companyType' => "MEI", se for em sandbox esse parametro é obrigatorio
                    'user_id' => $professional->user->id,
                ]);
            } catch (\Throwable $th) {
                //throw $th;
                Storage::put("createAcountAllProfessionals/" . $professional->name . "/" . $professional->user->id . " " . $professional->user->email . rand(1, 500000) . ".txt", $th);
                throw new Exception("Erro ao criar conta filha/ " . "Asaas Error: " . $th);
            }
            # code...
            $this->createDaughterAccount($requestCreateDaughterAccount);
        }
        //total de profissionais ativas
        $totalProfessionals = Professional::whereHas('user', function ($query) {
            $query->where('status', 1)->whereNull('deleted_at');
        })->whereNull('deleted_at')->get();
        //total de profissionais que não possuem contas
        $total = Professional::doesntHave('payment_account')->whereHas('user', function ($query) {
            $query->where('status', 1)->whereNull('deleted_at');
        })->with(['user.address', 'user.contact'])->whereNull('deleted_at')->get();
        return response()->json(["message" => ["profissionais ativas" => $totalProfessionals->count(), "total de profissionais sem conta no asaas" => $total->count()]], 422);
    }
    //criar uma conta filha asaas
    //apenas administradores podem criar contas filhas (isUserOrAdmin)
    public function createDaughterAccount(Request $request)
    {
        //começar da tabela users
        //realizar um replace no cpf para tirar . - 
        $validator = Validator::make($request->all(), [
            'name' => "required|string",
            'email' => "required|string",
            'cpfCnpj' => "required|string",
            'mobilePhone' => "required",
            'address'  => "required|string",
            'addressNumber' => "required",
            'province'  => "required|string",
            'postalCode' => "required|string",
            'birthDate' =>  "required|string"
        ]);

        Log::info(json_encode($request->all()));
        
        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()], 422);
        };
        Log::info(json_encode($request->all()));
        
        $asaasTokens = Asaas::tokens();
        try {
            $response = Http::withoutVerifying()->withHeaders([
                'Content-Type' => 'application/json',
                'access_token' => $asaasTokens->access_token
            ])->post(config("routes.ASAAS") . 'accounts', [
                'name' => $request->name,
                'email' => $request->email,
                'cpfCnpj' => $request->cpfCnpj,
                'phone' => $request->phone ?? null,
                'mobilePhone' => $request->mobilePhone . "",
                'address' => $request->address,
                'addressNumber' => $request->addressNumber . "",
                'complement' => $request->complement ?? '',
                'province' => $request->province,
                'postalCode' => $request->postalCode . "",
                'birthDate' => $request->birthDate
            ]);

            Log::info("Resposta da request");

            if ($response->getStatusCode() == 401) {
                throw new Exception("Asaas Error: Erro de autenticação asaas");
            }

            if ($response->failed()) {
                $errors = $response->object()->errors;
                $errors = $errors[0]->description;
                throw new Exception("Erro ao criar conta filha/ " . "Asaas Error: " . $errors);
            };

            if ($response->getStatusCode() == 200) {
                Log::info($response->getBody()->getContents());
            }

            $responseJson = $response->getBody();
            $responseObject = json_decode($responseJson);

            $newRequestCreatePaymentAccount = $this->createNewRequestPaymentAccount($responseObject, $request->user_id);
            $responsePaymentAccount = PaymentAccountController::create($newRequestCreatePaymentAccount);
            if ($responsePaymentAccount->getStatusCode() == 200) {
                return $responsePaymentAccount;
            }
            // dd($responsePaymentAccount->status() == 200);

            // return response($response);
        } catch (Exception $th) {
            Log_Central::Create([
                'user_id' => ($request->user_id ? $request->user_id : 0),
                'cod_source' => $request->cod_source ?? 6,
                'source' =>  "Controller AsaasController => function createDaughterAccount / Source_requester => " . url()->current(),
                'event_type' => "C",
                'log'      => 'ERRO => ' . $th,
            ]);
            /*****************FIM LOG CENTRAL*********************/
            return response(["message" => $th->getMessage(), "controller" => basename(__FILE__), "method" => basename(__METHOD__), "url" => url()->current()], 422);
        }
    }


    public function createNewRequestPaymentAccount($responseAsaasAccounts, $userId)
    {
        $requestCreatePaymentAccount = new Request();
        $requestCreatePaymentAccount->merge([
            'title' => $responseAsaasAccounts->name,
            'agency' => $responseAsaasAccounts->accountNumber->agency,
            'accountNumber' => $responseAsaasAccounts->accountNumber->account,
            'accountDigit' => $responseAsaasAccounts->accountNumber->accountDigit,
            'user_id'  => $userId,
            'walletId'  => $responseAsaasAccounts->walletId,
            'apiKey' => $responseAsaasAccounts->apiKey,
            'payment_gateway_id' => 2
        ]);
        return $requestCreatePaymentAccount;
    }


    public function transfersP2P(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'value' => "required|numeric",
            'walletId' => "required|string",
            'access_token' => "required|string"
        ]);
        try {
            if ($validator->fails()) {
                $jsonString = json_encode((object)["errors" => $validator->errors()]);
                throw new Exception($jsonString);
            };
            //code...
            $response = Http::withoutVerifying()->withHeaders([
                'Content-Type' => 'application/json',
                'access_token' => $request->access_token
            ])->post(config("routes.ASAAS") . 'transfers', [
                "value" => $request->value,
                "walletId" => $request->walletId
            ]);

            Log::info("Verificando Erro" . $response->getBody()->getContents());

            if ($response->getStatusCode() == 401) {
                $jsonString = json_encode((object)["errors" => "Asaas Error: Erro de autenticação asaas"]);
                throw new Exception($jsonString);
            }

            if ($response->failed()) {
                $jsonString = $response->getBody()->getContents();
                throw new Exception($jsonString);
            };

            if ($response->status() == 200) {
                return response(["message" => $response->getBody()->getContents()], 200);
            }
        } catch (\Throwable $th) {
            //throw $th;
            //receba os erros em formato json
            // Storage::put("transferP2P/" . "walletId " . $request->walletId . " randomNumber" . rand(1, 500000) . ".txt", $th->getMessage());
            Log::info($th->getMessage());
            Log_Central::Create([
                'user_id' => ($request->user_id ? $request->user_id : 0),
                'cod_source' => $request->cod_source ?? 6,
                'source' =>  "Controller AsaasController => function transfersP2P / Source_requester => " . url()->current(),
                'event_type' => "C",
                'log'      => 'ERRO => ' . $th,
            ]);
            /*****************FIM LOG CENTRAL*********************/
            return response(["message" => json_decode($th->getMessage()), "controller" => basename(__FILE__), "method" => basename(__METHOD__), "url" => url()->current()], 422);
        }
    }

    public function createPixProfessionals(Request $request)
    {
        try {
            //code...
            $paymentAccounts = PaymentAccount::whereNull(['franchise_id', 'pixKey'])->get();
            foreach ($paymentAccounts as $paymentAccount) {
                # code...
                $response = Http::withoutVerifying()->withHeaders([
                    'Content-Type' => 'application/json',
                    'access_token' => $paymentAccount->apiKey
                ])->post(config("routes.ASAAS") . 'pix/addressKeys', [
                    "type" => "EVP"
                ]);
                if ($response->getStatusCode() != 200) {
                    throw new Exception("Erro asaas ao tentar salvar a chave pix para payment_account $paymentAccount->id" . " Asaas" . $response->getBody()->getContents());
                }
            }
        } catch (\Throwable $th) {
            //throw $th
            // Storage::put("pixProfessionals/" . "Erro ao criar pix" . rand(1, 500000) . ".txt", $th->getMessage());
            Log::info($th->getMessage());
            Log_Central::Create([
                'user_id' => ($request->user_id ? $request->user_id : 0),
                'cod_source' => $request->cod_source ?? 6,
                'source' =>  "Controller AsaasController => function transfersP2P / Source_requester => " . url()->current(),
                'event_type' => "C",
                'log'      => 'ERRO => ' . $th,
            ]);
            /*****************FIM LOG CENTRAL*********************/
            return response(["message" => $th->getMessage(), "controller" => basename(__FILE__), "method" => basename(__METHOD__), "url" => url()->current()], 422);
        }
    }

    public function transferExternalAccount(Request $request)
    {
        //esse token tem que ser da profissional
        $response = Http::withoutVerifying()->withHeaders([
            'Content-Type' => 'application/json',
            'access_token' => $request->apiKey
        ])->post(config("routes.ASAAS") . 'transfers', [
            "value" => $request->value,
            "bankAccount" => [
                "bank" => [
                    "code" => $request->bank_cod_id
                ],
                "ownerName" => $request->name,
                "cpfCnpj" => $request->cpf,
                "agency" => $request->agencia,
                "account" => $request->conta,
                "accountDigit" => $request->digito,
                "bankAccountType" => $request->type_account,
            ],
            "operationType" => "TED"
        ]);
        if ($response->status() == 401) {
            throw new Exception("Token asaas invalido Error asaas: 401 sem autenticação");
        }

        if ($response->getStatusCode() == 200) {
            return response($response->getBody()->getContents(), 200);
        } else {
            Log::info('erro ao realizar transferencia');
            Log::info($response->getBody()->getContents());
        }
        return response($response->getBody()->getContents(), $response->getStatusCode());
    }

    public function createWeebHookTransfer(Request $request)
    {
        try {
            //code...
            $response = Http::withoutVerifying()->withHeaders([
                'Content-Type' => 'application/json',
                'access_token' => $request->apiKey
            ])->post(config("routes.ASAAS") . 'webhook/transfer', [
                "url" => "https://clin.app.br/api/webhooks/paymentProfessional",
                "email" => "financeiro@clin.com.br",
                "interrupted" => false,
                "enabled" => true,
                "apiVersion" => 3,
                "authToken" => "securitClin2022"
            ]);
            if ($response->getStatusCode() == 200) {
                Log::info($response->getBody()->getContents());
                return response("Criado com sucesso" . $response->getBody()->getContents(), $response->getStatusCode());
            } else {
                Log::info("Erro ao criar" . $response->getBody()->getContents());
                return response("Erro ao criar" . $response->getBody()->getContents(), $response->getStatusCode());
            }
        } catch (\Throwable $th) {
            //throw $th;
            Log::info($th);
            return response("Falha ao criar weebHoock" .  $th->getMessage(), 422);
        }
    }

    public function newCharge($customer, $billingType, $value, $dueDate, $description)
    {
        //se criar um pagamento la no asaas tem que criar um pagamento aqui no nosso sistema
        $tokenAsaas = Juno_token::find(3)->access_token;
        try {
            //code...
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'access_token' => $tokenAsaas
            ])->post(config("routes.ASAAS") . 'payments', [
                "customer" => $customer->id,
                "billingType" => $billingType,
                "value" => $value,
                "dueDate" => $dueDate,
                "description" => $description,
                "postalService" => false
            ]);
            // "dueDate" => Carbon::now()->addDays()->toDateString(),

            if ($response->status() != 200) {
                throw new Exception($response->getBody()->getContents(), 422);
            }
            return json_decode($response->getBody()->getContents());
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json($th->getMessage(), 422);
        }
    }

    public function getPixCharge($paymentId)
    {
        $tokenAsaas = Juno_token::find(3)->access_token;
        try {
            //code...
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'access_token' => $tokenAsaas
            ])->get(config("routes.ASAAS") . "payments/$paymentId/pixQrCode");
            if ($response->status() != 200) {
                throw new Exception($response->getBody(), $response->status());
            }
            return json_decode($response->getBody()->getContents());
        } catch (\Throwable $th) {
            //throw $th;
            throw new Exception($th->getMessage());
        }
    }

    public function deletPayment($paymentId)
    {
        DB::beginTransaction();
        $tokenAsaas = Juno_token::find(3)->access_token;

        //deletar pagamento
        $payment = Payment::find($paymentId);
        //deletar ordem
        $order = Order::find($payment->order_id);
        //deletar asaasBilling
        $asaasBilling = AsaasBilling::where('payment_id', $paymentId)->first();

        try {
            //code...
            $payment->delete();
            $order->delete();
            $asaasBilling->delete();
            DB::commit();
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            throw new Exception($th->getMessage(), 422);
        }

        //deletar no sistema asaas;
        try {
            //code...
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'access_token' => $tokenAsaas
            ])->delete(config("routes.ASAAS") . 'payments/' . $asaasBilling->asaasPaymentId);

            if ($response->status() != 200) {
                throw new Exception($response->getBody()->getContents(), 422);
            }

            return json_decode($response->getBody()->getContents());
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json($th->getMessage(), 422);
        }
    }
}

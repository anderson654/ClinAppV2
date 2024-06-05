<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Finance\PaymentsController;
use App\Models\Address;
use App\Models\Franchise;
use Illuminate\Http\Request;
use App\Models\Region;
use Illuminate\Support\Facades\Auth;
use App\Models\Neighborhood;
use App\Models\PaymentAccount;
use App\Models\Service;
use App\Models\ServiceSlot;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class FranchiseController extends Controller
{
    public static function createDebitPayment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service_slot_id' => 'required|int',
            'payment_category' => 'required|int'
        ]);
        try {
            DB::beginTransaction();
            if ($validator->fails()) {
                $jsonString = json_encode((object)["errors" => $validator->errors()]);
                throw new Exception($jsonString);
            };
            //pega o serviço existente e verifica as informaçoes
            $serviceSlot = ServiceSlot::find($request->service_slot_id);
            if ($serviceSlot) {
                // $checkServiceSlot = FranchiseController::verifyServiceSlot($serviceSlot);
                // if ($checkServiceSlot !== true) throw new Exception(json_encode($checkServiceSlot));
            } else {
                throw new Exception(json_encode(['errors' => 'Serviço não encontrado']));
            }
            $service = Service::find($serviceSlot->service_id);
            if ($service) {
                // implementar mais tarde caso queira saber de qual franchise_id vai sair o dinheiro
                if ($service->franchise_id) {
                    $paymentAccount = PaymentAccount::find($service->franchise_id);
                    if (!isset($paymentAccount)) {
                        throw new Exception(json_encode("O serviço de id $service->id esta com o franchise_id vazio"));
                    }
                } else {
                    throw new Exception(json_encode("O serviço de id $service->id esta com o franchise_id vazio"));
                }

                // if ($serviceSlot->user_id) {
                //     $paymentAccount = PaymentAccount::where('user_id', $serviceSlot->user_id)->first();
                //     if (!isset($paymentAccount)) {
                //         throw new Exception(json_encode("Não foi possivel encontrar uma conta asaas para esse profissional(a) $serviceSlot->user_id"));
                //     }
                // } else {
                //     throw new Exception(json_encode("O slot não possui um user_id valido"));
                // }
            }

            $request->merge(['payment_type' => 'D', 'payment_status_id' => 1, 'payment_account_id' => $paymentAccount->id]);
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

    public static function verifyServiceSlot($serviceSlot)
    {
        $serviceSlotArray = $serviceSlot->getAttributes();
        $keysObject = array_keys($serviceSlot->getAttributes());
        $validator = true;
        foreach ($keysObject as $keyObject) {
            if (!in_array($keyObject, ["deleted__at"])) {
                if (!isset($serviceSlotArray[$keyObject])) {
                    $validator = "O campo $keyObject na tabela service slots não pode estar vazio";
                    break;
                }
            }
        }
        return $validator;
    }
}

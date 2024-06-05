<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Weni\ApiWeniController;
use App\Models\Contact;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class LeadsController extends Controller
{
    //
    public function createContact(Request $request)
    {
        $newPhone = str_replace(["-", ".", " ", "(", ")"], "", $request->contact);
        $request->merge(['contact' => $newPhone]);

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|int',
            'contact' => 'required|string|min:11',
            'hash' => 'required|string'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $contact = Contact::where('phone', $request->contact)->first();

        if ($contact) { //Se já exist um user com este telefone
            return response()->json($contact, 200);
        }
        try {
            DB::beginTransaction();
            //code...
            //md5 hash
            if ($request->hash != "bb5e32e0174844fa16953579a3ebb8fd") {
                throw new Exception("Falha ao criar telefone");
            }
            //cria ou da um update no contato
            $contact = Contact::updateOrCreate(
                ['user_id' => $request->user_id],
                ['user_id' => $request->user_id, 'phone' => $request->contact]
            );
            DB::commit();
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return response()->json(["message" => $th->getMessage()], 422);
        }
        return response()->json($contact, 200);
    }

    public function generateCodePhone(Request $request)
    {
        $newPhone = str_replace(["-", ".", " ", "(", ")"], "", $request->contact);
        $request->merge(['contact' => $newPhone]);

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|int',
            'contact' => 'required|string|min:11',
            'hash' => 'required|string'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        if (!User::where('id', $request->user_id)->exists()) {
            return response()->json(["message" => "Não foi possivel encontrar o usuario logado"], 422);
        }
        $existUser = User::where('phone', $newPhone)->exists();
        if ($existUser) {
            return response()->json(["message" => "Login"], 422);
        }
        $this->getCodeWhats($request->contact, $request->user_id);
        return response()->json(["message" => "success"], 200);

        // $contact = Contact::where('phone', $request->contact)->first();

        // if ($contact) { //Se já exist um user com este telefone
        //     return response()->json($contact, 200);
        // }
        // try {
        //     DB::beginTransaction();
        //     //code...
        //     //md5 hash
        //     if ($request->hash != "bb5e32e0174844fa16953579a3ebb8fd") {
        //         throw new Exception("Falha ao criar telefone");
        //     }
        //     //cria ou da um update no contato
        //     $contact = Contact::updateOrCreate(
        //         ['user_id' => $request->user_id],
        //         ['user_id' => $request->user_id, 'phone' => $request->contact]
        //     );
        //     DB::commit();
        // } catch (\Throwable $th) {
        //     //throw $th;
        //     DB::rollBack();
        //     return response()->json(["message" => $th->getMessage()], 422);
        // }
        // return response()->json($contact, 200);
    }

    public function getCodeWhats($phone, $userId)
    {
        $waneController = new ApiWeniController();
        $request = new Request();
        $request->merge(["phone" => $phone]);
        $response = $waneController->sendCodeVerification($request);

        //salvar no user o código
        if ($response->status() != 200) {
            return response()->json(["message" => "erro ao gerar código de verificação por favor tente novamente mais tarde ou entre em contato com o atendimento"], $response->status());
        }
        $responseJson = json_decode($response->content());
        $user = User::where('id', $userId)->first();
        Log::info($userId);
        $user->verification_code = $responseJson->verification_code;
        if (!$user->save()) {
            return response()->json(["message" => "Erro ao enviar código de verificação"], 422);
        }
        return response()->json(["message" => "Sucess"]);
    }
}

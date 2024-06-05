<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Models\Address;
use App\Models\Client;
use App\Models\Log_central;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Costumer;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Exception;
use Illuminate\Support\Facades\Log;

use function PHPUnit\Framework\returnSelf;

class UserController extends Controller
{
    public static function storeContact(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'phone' => 'required|string|min:10',
        ]);

        if ($validator->fails()) {

            $messageError = $validator->errors();
            /*****************LOG CENTRAL*********************/
            Log_Central::Create([
                'user_id' => ($request->user_id ? $request->user_id : 0),
                'source' =>  "Controller User => function storeContact / Source_requester => " . url()->current(),
                'event_type' => "E",
                'log'      => 'ERRO => ' . $messageError,

            ]);
            /*****************FIM LOG CENTRAL*********************/
            return response()->json($validator->errors(), 404);
        }

        $formatedPhone = Contact::formatPhone($request->phone);
        // dd( $request->user_id);
        $contact = Contact::create([
            'phone' => $formatedPhone,
            'user_id' => $request->user_id,
        ]);

        return response()->json([
            $contact
        ]);
    }

    public static function updateUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:5',
            'cod_source' => 'required',
            'email' => 'required|string|email|max:255',
        ]);

        if ($validator->fails()) {
            /*****************LOG CENTRAL*********************/
            $messageError = $validator->errors();
            $event_type = "E";
            return LogCentralController::create($request, $messageError, $event_type);
            /*****************FIM LOG CENTRAL*********************/
        }

        $loggedUser = Auth::user();


        $oldName = $loggedUser->name;
        $loggedUser->name = $request->name;


        if ($loggedUser->save()) {
            /*****************LOG CENTRAL*********************/
            $messageError = 'Alterou o nome; de:' . $oldName . ' para: ' . $request->name;
            $event_type = "E";
            LogCentralController::create($request, $messageError, $event_type);
            /*****************FIM LOG CENTRAL*********************/
        } else {
            /*****************LOG CENTRAL*********************/
            $messageError = 'Probleams ao tentar salvar o nome';
            $event_type = "E";
            return LogCentralController::create($request, $messageError, $event_type);
            /*****************FIM LOG CENTRAL*********************/
        }

        $oldEmail = $loggedUser->email; //Salva o email antigo

        if ($oldEmail != $request->email) { // Verica se o email antigo é diferente do novo

            $uniqueEmail = User::where('email', $request->email)->first();  //Se email diferente, não pode exitir na base o mesmo email para outro usuario

        } else {

            $uniqueEmail = null;
        }

        if (!$uniqueEmail) { //Se não encontrado o mesmo email na base, autorizado a alteração.

            $loggedUser->email = $request->email;

            if ($loggedUser->save()) {
                /*****************LOG CENTRAL*********************/
                $messageError = 'Alterou o email; de:' . $oldEmail . ' para: ' . $request->email;
                $event_type = "A";
                LogCentralController::create($request, $messageError, $event_type);
                /*****************FIM LOG CENTRAL*********************/
            } else {
                /*****************LOG CENTRAL*********************/
                $messageError = 'Erro ao salvar o email';
                $event_type = "E";
                return LogCentralController::create($request, $messageError, $event_type);
                /*****************FIM LOG CENTRAL*********************/
            }
        } else {
            /*****************LOG CENTRAL*********************/
            $messageError = 'Erro ao salvar email, já existe na base';
            $event_type = "E";
            return LogCentralController::create($request, $messageError, $event_type);
            /*****************FIM LOG CENTRAL*********************/
        }

        $userController = new UserController();
        if ($loggedUser->cpf != $request->cpf) { // Verica se o cpf antigo é diferente do novo

            $response = $userController->cpfValidator($request->cpf);

            if ($response->getStatusCode() == 200) { //Verificar se o CPF é válido

                $response = $userController->checkCpfExist($request);

                if ($response->getStatusCode() == 200) { //Se CPF diferente, não pode exitir na base o mesmo email para outro usuario

                    $oldCPF =  $loggedUser->cpf;
                    $loggedUser->cpf = $request->cpf;

                    if ($loggedUser->save()) {
                        /*****************LOG CENTRAL*********************/
                        $messageError = 'Alterou o cpf; de:' . $oldCPF . ' para: ' . $request->email;
                        $event_type = "A";
                        LogCentralController::create($request, $messageError, $event_type);
                        /*****************FIM LOG CENTRAL*********************/
                    } else {
                        /*****************LOG CENTRAL*********************/
                        $messageError = 'Erro ao salvar o cpf, favor contactar o suporte';
                        $event_type = "E";
                        return LogCentralController::create($request, $messageError, $event_type);
                        /*****************FIM LOG CENTRAL*********************/
                    }
                } else {
                    /*****************LOG CENTRAL*********************/
                    $messageError = 'Erro ao salvar cpf, favor contactar o suporte';
                    $event_type = "E";
                    return LogCentralController::create($request, $messageError, $event_type);
                    /*****************FIM LOG CENTRAL*********************/
                }
            } else {
                /*****************LOG CENTRAL*********************/
                $messageError = 'Erro ao atualizar dados, CPF inválido';
                $event_type = "E";
                return LogCentralController::create($request, $messageError, $event_type);
                /*****************FIM LOG CENTRAL*********************/
            }
        }

        //se der tudo certo cria o client
        $client = new Client();
        $client->name = $request->name;
        $client->cpf = $request->cpf;
        $client->user_id = $loggedUser->id;

        if (!$client->save()) {
            return response()->json(["message" => "Falha ao gerar cliente"], 422);
        }

        return response()->json([
            'message' => 'Dados atualizados com sucesso.'
        ], 200);
    }

    public function updatePhone(Request $request)
    {

        // Antes de fazer a Chamada desta função, é necessário realizar o envio do verification_code via whatsApp
        $validator = Validator::make($request->all(), [
            'cod_source' => 'required',
            'phone' => 'required|string|min:10',
        ]);

        if ($validator->fails()) {
            /*****************LOG CENTRAL*********************/
            $messageError = $validator->errors();
            $event_type = "A";
            return LogCentralController::create($request, $messageError, $event_type);
            /*****************FIM LOG CENTRAL*********************/
        }

        $loggedUser = Auth::user();

        $oldPhone = $loggedUser->phone;
        $formatedPhone = Contact::formatPhone($request->phone);

        if ($oldPhone != $request->phone) { // Vericia se o email antigo é diferente do novo
            $uniquePhone =  User::where('phone', $formatedPhone)->first();  //Se phone diferente, não pode exitir na base o mesmo email para outro usuario
        } else {
            $uniquePhone = null;
        }

        if (!$uniquePhone) { //Se não encontrado o mesmo phone na base, autorizado a alteração.
            $loggedUser->phone = $formatedPhone;
            // Se o usuário existir mas não passar na autenticação

            if ($loggedUser || !Hash::check($request->password, $loggedUser->password)) {
                if ($loggedUser->save()) {
                    /*****************LOG CENTRAL*********************/
                    $messageError = 'Alterou o telefone; de:' . $oldPhone . ' para: ' . $formatedPhone;
                    $event_type = "A";
                    LogCentralController::create($request, $messageError, $event_type);
                    /*****************FIM LOG CENTRAL*********************/
                } else {
                    /*****************LOG CENTRAL*********************/
                    $messageError = 'Erro ao salvar telefone';
                    $event_type = "E";
                    return LogCentralController::create($request, $messageError, $event_type);
                    /*****************FIM LOG CENTRAL*********************/
                }
            }
        } else {
            /*****************LOG CENTRAL*********************/
            $messageError = 'Este telefone já esta em uso, favor entrar em contato com o suporte';
            $event_type = "E";
            return LogCentralController::create($request, $messageError, $event_type);
            /*****************FIM LOG CENTRAL*********************/
        }


        return response()->json([
            'message' => 'Telefone atualizado com sucesso.'
        ], 200);
    }

    //se o usuario existe na tabela costumer == clientes cria um cpf;
    public static function createCpf(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'cpf' => 'required|string|min:11',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $cpf = str_replace(array(".", "-"), "", $request->cpf);
        $costumerCpf = Costumer::where('user_id', $request->user_id)->value('cpf');
        //verifica se o proprio usuario já registrou um cpf
        if ($costumerCpf != null) {
            return response()->json(['typeError' => 0, 'mensage' => 'Você já registrou um cpf por favor entre em contato com o atendimento'], 400);
        }
        //verifica se o cpf ja foi registrado em outra conta
        if (Costumer::where('cpf', $cpf)->value('cpf')) {
            return response()->json(['typeError' => 0, 'mensage' => 'Cpf já registrado, tente novamente'], 400);
        }
        $updateCostumer = Costumer::where('user_id', $request->user_id)->update(['cpf' => $cpf]);
        return response()->json(['mensage' => 'Cpf registrado com sucesso'], 200);
    }



    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
            'code' => 'required|int|min:6'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 404);
        }
        $user = User::where('email', $request->email)->where('verification_code', $request->code)->first();
        if ($user) {
            try {
                $newPassword = Hash::make($request->password);
                $user->update(['password' => $newPassword]);
                return response()->json([
                    'status' => true,
                ], 200);
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'message' => $th
                ], 400);
            }
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Email não encontrado.'
            ], 400);
        }
    }

    public function verifyStatusAccount(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 404);
        }
        //ajustar essa logica confusa
        $user = User::withTrashed()->select('status')->where('email', $request->email)->first();
        if (isset($user->status)) {
            return response()->json([
                'status' => $user->status,
            ], 200);
        } else {
            return response()->json([
                'message' => 'Email não encontrado.'
            ], 400);
        }
    }

    public function listPayments(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        if ($request->user_id == Auth::user()->id) {
            try {
                //code...
                $awaitingPayment = Payment::where('user_id', $request->user_id)
                    ->whereIn('payment_status_id', [1, 2, 3, 5])
                    ->orderBy('created_at', 'desc')
                    ->select('value', 'payment_status_id', 'link_boleto', 'order_id')
                    ->orderBy('created_at', 'desc')
                    ->take(20)
                    ->get();
                // $paidOut = Payment::where('user_id', $request->user_id)->where('payment_status_id', 2)->orderBy('created_at', 'desc')->select('id', 'value', 'payment_status_id', 'link_boleto', 'order_id')->take(5)->get();
                // $called = Payment::where('user_id', $request->user_id)->where('payment_status_id', 3)->orderBy('created_at', 'desc')->select('id', 'value', 'payment_status_id', 'link_boleto', 'order_id')->take(5)->get();
                // $failed = Payment::where('user_id', $request->user_id)->where('payment_status_id', 5)->orderBy('created_at', 'desc')->select('id', 'value', 'payment_status_id', 'link_boleto', 'order_id')->take(5)->get();
            } catch (\Throwable $th) {
                //throw $th;
                return response()->json('UserController', $th);
            }
            return response()->json(['awaitingPayment' => $awaitingPayment]);
        } else {
            return response()->json('UserController: Forbidden', 403);
        }
    }

    //remover apos aimplementação na v1 feito para testes
    //https://clin.app.br/api/weebhookJunoDIGITAL_ACCOUNT_CREATED
    public function weebhookJunoDIGITAL_ACCOUNT_CREATED(Request $request)
    {
        //verificar os dados da api para salvar no banco;
        $random =  rand(0, 99999);
        Storage::disk('local')->put('Contas' . $random . '.txt', $request);
    }


    public function updateUserSite(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|int',
            'cpf' => 'string'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $user = User::find($request->user_id);
        $clientUser = Client::where('user_id', $user->id)->first();

        $cpf = str_replace(['.', ',', '-'], '', $request->cpf);


        //verifica se o cpf é valido;
        // Extrai somente os números
        $cpf = preg_replace('/[^0-9]/is', '', $cpf);

        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return response()->json("Cpf inválido", 422);
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return response()->json("Cpf inválido", 422);
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return response()->json("Cpf inválido", 422);
            }
        }

        //verifica o cpf
        if (strlen($cpf) != 11) {
            return response()->json("Cpf inválido", 422);
        }

        //verifica se existe algum cpf na base
        if ($request->cpf) {
            if (
                User::where('cpf', $request->cpf)->exists()
                || Client::where('cpf', $request->cpf)->exists()
                || User::where('cpf', $cpf)->exists()
                || Client::where('cpf', $cpf)->exists()
            ) {
                return response()->json("Cpf já esta em uso", 422);
            }
        }

        //tente dar um update em user caso o cpf não se encontre no banco de dados
        try {
            // $clientUser->update($request->only(['cpf']));
            $clientUser->update(['cpf' => $cpf]);
        } catch (\Throwable $th) {
            return response(["message" => $th->getMessage(), "controller" => basename(__FILE__), "method" => basename(__METHOD__), "url" => url()->current()], 422);
        }
        return $clientUser;
    }

    public function cpfValidator($cpf)
    {
        //verifica se o cpf é valido;
        // Extrai somente os números
        $cpf = preg_replace('/[^0-9]/is', '', $cpf);

        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return response()->json("Cpf inválido", 422);
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return response()->json("Cpf inválido", 422);
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return response()->json("Cpf inválido", 422);
            }
        }


        return response()->json("Cpf válido", 200);
    }

    public function deleteClient(Request $request)
    {
        try {
            //code...
            $userDelete = User::find($request->user_id);
            if ($userDelete) {
                $userDelete->tokens()->delete();
                $userDelete->delete();
            } else {
                return response(["message" => false], 422);
            }
            return response(["message" => true], 200);
        } catch (\Throwable $th) {
            return response(["message" => $th->getMessage()], 422);
        }
    }

    public function checkCpfExist(Request $request)
    {
        $cpf = str_replace(['-', '.', ' '], '', $request->cpf);
        $request->merge(["cpf" => $cpf]);
        $validator = Validator::make($request->all(), [
            'cpf' => 'string|cpf'
        ]);

        $userLogged = User::find($request->userId);
        $user = User::where('cpf', $request->cpf)->first();

        if ($user) {
            //checa se o usuario logado é dono do email
            if ($userLogged->id != $user->id) {
                return response()->json(["message" => "O cpf já pertence a outro usuário"], 422);
            }
        }

        if ($validator->fails()) {

            return response()->json(["message" => False], 422);
        }

        return response()->json(["message" => True], 200);
    }

    public function checkEmailExist(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'string|email'
        ]);

        $userLogged = User::find($request->userId);
        $user = User::where('email', $request->email)->first();

        if ($user) {
            //checa se o usuario logado é dono do email
            if ($userLogged->id != $user->id) {
                return response()->json(["message" => "O email já pertence a outro usuário"], 422);
            }
        }

        if ($validator->fails()) {
            return response()->json(["message" => False], 422);
        }
        return response()->json(["message" => True], 200);
    }

    public function setNotificationEmail(Request $request)
    {
        Validator::make($request->all(), [
            'user_id' => 'required|int',
            'notify' => 'required|bool',
        ])->validate();

        $user = User::find($request->user_id);
        $user->notify_email = $request->notify ? 1 : 0;

        if (!$user->save()) {
            return response()->json(['message' => 'Erro ao setar notificação'], 422);
        }
        return response()->json('Success');
    }

    public function newUpdateUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'string',
            'email' => 'string|email'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $updateUser = User::where('id', $request->user_id)->update($request->except(['user_id']));
        if (!$updateUser) {
            return response()->json(["message" => "erro ao salvar usuario."]);
        }
        return response()->json(["message" => "success"]);
    }
}

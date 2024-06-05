<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use App\Models\Costumer;
use App\Models\City;
use App\Models\Log_central;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Psr7\Message;
use GuzzleHttp\Client as GuzzleHttp;
use App\Models\Client;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Weni\ApiWeniController;
use App\Http\Controllers\ZApi\ZApiController;
use App\Models\ControlOtp;
use App\Models\Professional;
use App\Models\TestAccount;
use App\Models\User;
use App\Models\UserUuid;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;
use phpseclib3\Crypt\RSA;
use phpseclib3\Crypt;


ini_set('max_execution_time', 100000000);

class AuthController extends Controller
{
    public function registerCostumer(Request $request,  $user = null)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'string|email|max:255',
            'password' => 'required|string|min:8',
            'phone' => 'required|min:10',
            'cod_source' => 'required|int',
        ]);


        if ($validator->fails()) {
            /*****************LOG CENTRAL*********************/
            $messageError = $validator->errors();
            $event_type = "E";
            return LogCentralController::create($request, $messageError, $event_type);
            /*****************FIM LOG CENTRAL*********************/
        }

        $validator_email = Validator::make($request->all(), [
            'email' => 'string|email|max:255|unique:users,email,NULL,id,status,1,deleted_at,NULL'
        ]);

        if ($validator_email->fails()) {
            /*****************LOG CENTRAL*********************/
            $messageError = 'Email já esta em uso.';
            $event_type = "E";
            return LogCentralController::create($request, $messageError, $event_type);
            /*****************FIM LOG CENTRAL*********************/
        }

        if ($request->cod_source == 1) {
            $password = Hash::make(Str::random(8));
        } else {
            $password = Hash::make($request->password);
        }


        if ($this->alreadyBeenACustomer($request->email)) {


            $formatedPhone = Contact::formatPhone($request->phone);

            $uniquePhone =  User::where('phone', $formatedPhone)->first();  //Se phone diferente, não pode exitir na base o mesmo phone para outro usuario

            if (!$uniquePhone) { //Se não encontrado o mesmo phone na base, autorizado a alteração.                $formatedPhone = Contact::formatPhone($request->phone);
                //se o cliente ja existir e estiver excluido restaurar com os novos dados
                $user = User::where('email', $request->email)->onlyTrashed()->first();
                $user->name = $request->name;
                $user->email = strtolower($request->email);
                $user->password = $password;
                $user->phone = $formatedPhone;
                $user->role_id = 4;
                $user->cod_source = $request->cod_source;
                $user->status = 0;
                $user->save();


                $client = Costumer::where('user_id', $user->id)->first();
                $client->name = $request->name;
                $client->save();
            } else {
                /*****************LOG CENTRAL*********************/
                $messageError = 'Este telefone já esta em uso, favor entrar em contato com o suporte';
                $event_type = "E";
                return LogCentralController::create($request, $messageError, $event_type);
                /*****************FIM LOG CENTRAL*********************/
            }


            $user->restore();
        } else if (isset($request->leadEmail)) {


            $formatedPhone = Contact::formatPhone($request->phone);

            $uniquePhone =  User::where('phone', $formatedPhone)->first();  //Se phone diferente, não pode exitir na base o mesmo phone para outro usuario

            if (!$uniquePhone) { //Se não encontrado o mesmo phone na base, autorizado a alteração.                $formatedPhone = Contact::formatPhone($request->phone);
                //se o cliente ja existir e estiver excluido restaurar com os novos dados

                $user = User::where('email', $request->leadEmail)->where('leads', 1)->where('status', 1)->where('role_id', 4);

                if ($user->exists()) {
                    $user->with('client', 'contactUser');
                    $user = $user->first();
                } else {
                    return response()->json(["message" => "Falha ao atualizar a conta"], 422);
                }
                $user->name = $request->name;
                $user->password = $password;
                $user->email = $request->email;
                $user->phone = $formatedPhone;
                $user->leads = 0;
                $user->status = 0;

                $user->client->name = $request->name;
                $user->client->cpf = NULL;


                $user->client->save();
                $user->save();

                $token = $user->createToken('auth_token')->plainTextToken;

                return response()->json([
                    'access_token' => $token,
                    'token_type' => 'Bearer',
                    'user_id' => $user->id
                ]);
            } else {
                /*****************LOG CENTRAL*********************/
                $messageError = 'Este telefone já esta em uso, favor entrar em contato com o suporte';
                $event_type = "E";
                return LogCentralController::create($request, $messageError, $event_type);
                /*****************FIM LOG CENTRAL*********************/
            }
        } else {

            $formatedPhone = Contact::formatPhone($request->phone);

            $uniquePhone =  User::where('phone', $formatedPhone)->first();  //Se phone diferente, não pode exitir na base o mesmo phone para outro usuario

            if (!$uniquePhone) { //Se não encontrado o mesmo phone na base, autorizado a alteração.                $formatedPhone = Contact::formatPhone($request->phone);

                $user = new User;
                $user->name = $request->name;
                $user->password = $password;
                $user->email = strtolower($request->email);
                $user->role_id = $request->typeCostumer ? $request->typeCostumer : 4;
                $user->phone = $formatedPhone;
                $user->leads = 0;
                $user->status = 0;
                $user->cod_source = $request->cod_source;
                $user->save();


                /*****************LOG CENTRAL*********************/
                Log_Central::Create([
                    'user_id' => $user->id,
                    'cod_source' => $request->cod_source,
                    'source' =>  "Controller User => function register / Source_requester => " . url()->current(),
                    'event_type' => "C",
                    'log'      => 'User ' . $user->id . 'Created',

                ]);
                /*****************FIM LOG CENTRAL*********************/

                $costumer = Costumer::create([
                    'name' => $request->name,
                    'user_id' => $user->id,
                    'cpf' => ($request->cpf ? $request->cpf : NULL),

                ]);
            } else {

                $messageError = 'Este telefone já esta em uso, favor entrar em contato com o suporte';
                /*****************LOG CENTRAL*********************/
                Log_Central::Create([
                    'user_id' => ($request->user_id ? $request->user_id : 0),
                    'cod_source' => $request->cod_source,
                    'source' =>  "UserController => updateUser / Source_requester => " . url()->current(),
                    'event_type' => "E",
                    'log'      => $messageError,

                ]);
                /*****************FIM LOG CENTRAL*********************/
                return response()->json([
                    'message' => $messageError
                ], 422);
            }
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user_id' => $user->id
        ]);
    }

    public function alreadyBeenACustomer($email)
    {
        $user = User::where('email', $email)->onlyTrashed();
        return $user->exists();
    }

    public function phoneMigration()
    {
        $contacts = Contact::all();

        foreach ($contacts as $key => $value) {

            try {

                $user = User::where('id', $value->user_id)->whereNull('phone')->first();
                $formatedPhone = Contact::formatPhone($value->phone);

                $user->phone = $formatedPhone;
                $user->save();
            } catch (\Exception $e) {

                continue;
            }
        }

        return 'ok';
    }


    public function login(Request $request)
    {
        $user = User::where('email', $request['email'])->first();

        // Se o email nao existir
        if (!$user) {
            return response()->json(['message' => 'Email ou senha inválidos'], 422);
        }

        // Se o usuário existir mas a conta não está verificada
        if ($user && !$user->status && $request->cod_source != 4) {
            return response()->json([
                'message' => 'Unverified account'
            ], 401);
        }

        // Se o usuário existir mas não passar na autenticação
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Email ou senha inválidos'
            ], 401);
        }

        $user->tokens()->delete(); // deleta todos os tokens salvos antes de criar um novo, assim o usuário só terá 1 token

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }


    public function sendCodeVerification(Request $request)
    {
        $phone = str_replace(["(", ")", " ", "-"], "", $request->phone);
        $request->merge([
            'phone' => $phone
        ]);

        $validator = Validator::make($request->all(), [
            'phone' => 'required|string|min:11',
            'cod_source' => 'required|int',
        ], [
            'phone.required' => "O telefone é requerido",
            'phone.max' => "O telefone deve possuir no maximo 11 digitos",
            'phone.min' => "O telefone deve possuir no minimo 11 digitos",
            'cod_source.required' => 'cod_source é obrigatório',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::where('phone', $request->phone)->first();

        if (!$user) {
            $user = new User;
            $user->phone = $request->phone;
            if ($request->cod_source == 6) {
                $user->role_id = 4;
            }

            if ($request->cod_source == 8) {
                $user->role_id = 5;
            }

            $user->password = Hash::make($this->generatePassword());
            $user->cod_source = $request->cod_source;
            $user->status = 1;

            if ($user->save()) {
                $professional = new Professional();
                $professional->user_id = $user->id;
                $professional->save();
            }
        }

        $verification_code = $this->getVerificationCode($user);

        $request->merge([
            'verification_code' => $verification_code
        ]);
        // $sendCodeWhats = new ApiWeniController();
        // $sendCodeWhats->sendCodeVerification($request);
        
        $zapiController = new ZApiController();
        $zapiController->sendMessage("55" . $phone, "Este é o seu código de verificação clin:" . "\n\n" . $verification_code);
        

        //tratar erro
        return response()->json([
            'message' => 'Código enviado com sucesso'
        ], 200);
    }

    public function loginWhats(Request $request)
    {
        $phone = str_replace(["(", ")", " ", "-"], "", $request->phone);
        $request->merge([
            'phone' => $phone
        ]);

        $validator = Validator::make($request->all(), [
            'phone' => 'required|string|max:11|min:11',
            'password' => 'string|max:6|min:6'
        ], [
            'phone.required' => "O telefone é requerido",
            'phone.max' => "O telefone deve possuir no maximo 6 digitos",
            'phone.min' => "O telefone deve possuir no minimo 6 digitos",
            'password.required' => "O campo :attribute é obrigatorio"
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $password = $request->header('password') ?? $request->password;



        $user = User::where('phone', $request->phone)->first();

        if (!$user) {
            return response()->json(["message" => "Telefone não encontrado, entre em contato com o suporte"], 422);
        }

        $control_otp = ControlOtp::where('user_id', hash_hmac('sha256', $user->password, $user->created_at))
            ->where('created_at', '>=', \Carbon\Carbon::now()->subSeconds(600))
            ->first();


        if (!$control_otp || !Hash::check($password, $control_otp->code)) {
            return response()->json([
                'message' => 'Código de verificação inválido'
            ], 401);
        }


        $user->tokens()->delete(); // deleta todos os tokens salvos antes de criar um novo, assim o usuário só terá 1 token

        $token = $user->createToken('auth_token')->plainTextToken;

        if ($user->phone_verified_at === NULL) {

            $userId_hash = hash_hmac('sha256', $user->created_at, $user->phone);

            $user_uuid = UserUuid::where('user_id', $userId_hash)->first();

            if ($user_uuid) {
                $user_uuid->delete();
                $user_uuid->save();
            }
            $user_uuid = new UserUuid;
            $uuid = Str::uuid();
            $hashHmac = hash_hmac('sha256', $uuid, $user->id);
            $user_uuid->user_id = $userId_hash;
            $user_uuid->uuid = $hashHmac;
            $user_uuid->save();

            $user->phone_verified_at = \Carbon\Carbon::now();
            $user->save();
            // $control_otp->delete();

            return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
                'clientSecret' => $uuid
            ]);
        } else {


            $user->phone_verified_at = \Carbon\Carbon::now();
            $user->save();
            // $control_otp->delete();
            return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
            ]);
        }
    }





    public function checkCostumer(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'phone' => 'required|min:10|max:16',
            'cod_source' => 'required|int',
        ]);


        if ($validator->fails()) {
            $messageError = $validator->errors();
            /*****************LOG CENTRAL*********************/
            Log_Central::Create([
                'user_id' => ($request->user_id ? $request->user_id : 0),
                'source' =>  "Controller User => function checkCostumer / Source_requester => " . url()->current(),
                'event_type' => "E",
                'log'      => $messageError,

            ]);
            /*****************FIM LOG CENTRAL*********************/
            return response()->json($messageError, 404);
        }

        $formatedPhone = Contact::formatPhone($request->phone);

        $user = User::where('phone', $formatedPhone)->first();


        if ($user) {

            if ($user) {

                if ($user->role_id == 4 || $user->role_id == 0 || $user->role_id == 1) {
                    return response()->json([
                        'costumer_type' => 4,
                        'name' => $user->name
                    ]);
                } elseif ($user->role_id == 3) {
                    return response()->json([
                        'costumer_type' => 3,
                        'name' => $user->name
                    ]);
                } elseif ($user->role_id == 5) {
                    return response()->json([
                        'costumer_type' => 5,
                        'name' => $user->name
                    ]);
                }
            } else {
                return response()->json([
                    'message' => 'Usuário não encontrado'
                ], 401);
            }
        } else {
            return response()->json([
                'message' => 'Usuário não encontrado'
            ], 401);
        }
    }

    public function signout()
    {
        Auth::user()->tokens()->delete();
        return [
            'message' => 'Tokens Revoked'
        ];
    }
    public function testDecryptToken(Request $request)
    {
        $payload = $request->input();
        $payloadString = json_encode($payload);
        $xSignature = $request->header('x-signature');
        $user = User::where('id', $request->user_id)->first();

        if (!$user) {
            return response()->json([
                'message' => 'Usuário não encontrado'
            ]);
        }


        $clientSecretUUID = UserUuid::where('user_id', hash_hmac('sha256', $user->password, $user->created_at))
            ->pluck('uuid');

        if (!$clientSecretUUID) {
            return response()->json([
                'message' => 'UUID não encontrado'
            ]);
        }

        $findXSignature = hash_hmac('sha256', $clientSecretUUID, $payloadString);



        if ($xSignature != $findXSignature) {
            return response()->json([
                'message' => 'Falha na validação'
            ]);
        }


        return response()->json([
            'message' => 'Validação realizada com sucesso'
        ]);
    }
    public function testGenerateToken(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();

        if (!$user) {
            return response()->json([
                'message' => 'Usuário não encontrado'
            ]);
        }

        $payload = $request->input();
        $payloadString = json_encode($payload);

        $clientSecretUUID = UserUuid::where('user_id', hash_hmac('sha256', $user->password, $user->created_at))
            ->pluck('uuid');

        $xSignature = hash_hmac('sha256', $clientSecretUUID, $payloadString);

        return $xSignature;
    }
    public function testGeneratePublicKey(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();

        // gerar um novo par de chaves
        $key = RSA::generateKey(2048);

        // obter a chave privada
        $privateKey = $key->getPrivateKey();

        // obter a chave pública
        $publicKey = $key->getPublicKey();

        // exibir as chaves geradas

        return response()->json([
            'privateKey' => $privateKey,
            'publicKey' => $publicKey
        ], 200);
    }

    public function meWeni(Request $request)
    {
        $user = User::with(
            'contact',
            function ($query) use ($request) {
                return $query->where('phone', $request->phone);
            }
        )->first();

        return $user;
    }

    public function getVerificationCode($user)
    {
        $hash_user_id = hash_hmac('sha256', $user->password, $user->created_at);

        //deleta todos os criados anteriormente
        $control_otp = ControlOtp::where('user_id', $hash_user_id)
            ->delete();

        $chaveSecreta = $user->password;
        $timestamp = \Carbon\Carbon::now();
        $intervaloTempo = 60;
        $valorCombinado = $chaveSecreta . $timestamp . $intervaloTempo;

        $valorHash = hash('sha256', $valorCombinado);
        $valorTruncado = hexdec(substr($valorHash, 0, 8)) % 1000000;

        $otp_code = str_pad($valorTruncado, 6, '0', STR_PAD_LEFT);

        $testAccounts = TestAccount::get()->pluck('contact')->toArray();

        if (in_array($user->phone, $testAccounts)) {
            $otp_code = '123456';
        }

        $control_otp = new ControlOtp;
        $control_otp->user_id = $hash_user_id;
        $user->otp = $otp_code;
        $user->save();
        $control_otp->code = Hash::make($otp_code);

        $control_otp->save();

        return  $otp_code;
    }



    public function me(Request $request)
    {
        $user = User::with(
            // 'contact',
            'client_user',
        )->where('id', $request->user()->id)->first();

        return $user;
    }

    public function verifyCode(Request $request)
    {
        $user = User::where('phone', $request->phone)->first(['verification_code', 'status']);
        $verification_code = $user->verification_code;

        // Extrair os primeiros 6 dígitos do hash para criar o código OTP
        $otp_code = substr($verification_code, 0, 6);
        $status = $user->status;
        if ($otp_code && $otp_code == $request->code) {
            if ($status) {
                return response()->json([
                    'status' => true,
                ], 200);
            } else {
                User::where('phone', $request->phone)->update(
                    ['status' => 1],
                    ['phone_verified_at' => \Carbon\Carbon::now()]
                );
                return response()->json([
                    'status' => true,
                ], 200);
            }
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Pin inválido'
            ], 400);
        }
    }

    public static function generatePassword($qtyCaraceters = 8)
    {
        //Letras minúsculas embaralhadas
        $smallLetters = str_shuffle('abcdefghijklmnopqrstuvwxyz');

        //Letras maiúsculas embaralhadas
        $capitalLetters = str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ');

        //Números aleatórios
        $numbers = (((date('Ymd') / 12) * 24) + mt_rand(800, 9999));
        $numbers .= 1234567890;

        //Caracteres Especiais
        $specialCharacters = str_shuffle('!@#$%*-');

        //Junta tudo
        $characters = $capitalLetters . $smallLetters . $numbers . $specialCharacters;

        //Embaralha e pega apenas a quantidade de caracteres informada no parâmetro
        $password = substr(str_shuffle($characters), 0, $qtyCaraceters);

        //Retorna a senha
        return $password;
    }

    public function registerCostumerLead(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'hash' => 'required|string|max:255'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 404);
        }
        if ('b7606879b7023b24bcb25d5bddf677a4' != $request->hash) {
            return response()->json('Erro ao validar o hash', 404);
        }
        $user = $this->createUser();
        $this->createClient($user);
        return response()->json($user, 200);
    }

    public function createUser()
    {
        $lastId = User::get()->last()->id;
        $lastId = (int)$lastId + 1;
        $user = new User;
        $user->name = 'user' . $lastId;
        $user->email = 'user' . $lastId . '@clin.com';
        $user->password = Hash::make(123456);
        $user->leads = 1;
        $user->cod_source = 0;
        $user->role_id = 4;
        $user->status = 1;
        $user->save();
        return $user;
    }

    public function createClient($user)
    {
        Costumer::create([
            'name' => $user->name,
            'user_id' => $user->id,
            'cpf' => '00000000000',
        ]);
    }

    public function checkMessage(Request $request)
    {
        return response()->json(['message' => 'Hello'], 200);
    }

    public function isLogued()
    {
        return response()->json(['message' => 'Success'], 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\PaymentAccount;
use App\Models\Professional;
use App\Models\ProfileDocument;
use App\Models\RegistrationProfessional;
use App\Models\State;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ClinBlueController extends Controller
{
    //
    public function saveDocuments(Request $request)
    {
        //tabela User
        $userId = Auth::user()->id;

        //ajustar campos para as outras tabelas
        $request->merge(['general_register_number_RG' => $request->rg, "street" => $request->rua, "neighborhood" => $request->bairro, "zip" => $request->cep]);

        if ($request->issuerDate) {
            $request->merge(["birthdate" => $request->issuerDate]);
        }
        //formata as datas
        User::updateOrCreate(
            ['id' => $userId],
            $request->all()
        );

        //step one
        // $user->name = $request->name;
        Professional::updateOrCreate(
            ['user_id' => $userId],
            $request->all()
        );

        RegistrationProfessional::updateOrCreate(
            ['user_id' => $userId],
            $request->all()
        );

        Address::updateOrCreate(
            ['user_id' => $userId],
            $request->all()
        );

        ////////////////////////////////////////////////////////////////////////////////////////
        //step two
        //ajustar aqui
        // $user->cpf = $request->cpf; ok

        //step tree
        //ajustar aqui 

        // //ajustar aqui
        // $dateExpeditionValue = implode('-', array_reverse(explode("/", $request->date_expedition)));
        // $birthdateValue = implode('-', array_reverse(explode("/", $request->date_expedition)));

        // //ajustar aqui
        // $dateExpeditionValue = Carbon::createFromFormat('Y-m-d', $dateExpeditionValue, 'UTC');
        // $birthdateValue = Carbon::createFromFormat('Y-m-d', $birthdateValue, 'UTC');
        // ////////////////////////////////////////////////////////////////////////////////////////

        // RegistrationProfessional::updateOrCreate(
        //     ['user_id' => $user->id],
        //     [
        //         'rg' => $request->rg,
        //         'state' => $request->state,
        //         'om_document' => $request->om,
        //         'date_expeditioin' => $dateExpeditionValue->toDateString(),
        //         'birthdate' => $birthdateValue->toDateString(),
        //         'name' => $request->name,
        //         'name_mother' => $request->name_mother
        //     ]
        // );

        // Address::updateOrCreate(
        //     ['user_id' => $user->id],
        //     [
        //         'street' => $request->street,
        //         'neighborhood' => $request->neighborhood,
        //         'number' => $request->number,
        //         'complement' => $request->complement ?? '',
        //         'zip' => $request->zip
        //     ]
        // );

        // $user->save();
        // $user->professional->save();

        return response()->json("success", 200);
    }


    public function getStates()
    {
        $states = State::get();
        return response()->json($states, 200);
    }

    public function saveImageDocuments(Request $request)
    {
        $imageController = new ImageController();
        $url = $imageController->saveImage($request, "clinpro/documents/");
        if ($url) {
            switch ($request->description_document) {
                case 'FRONT_OF_DOCUMENT':
                    $this->saveUrlDocument(['front_of_document' => $url]);
                    # code...
                    break;
                case 'BACK_OF_DOCUMENT':
                    $this->saveUrlDocument(['back_of_document' => $url]);
                    # code...
                    break;
                case 'SELFIE':
                    $this->saveUrlDocument(['selfie' => $url]);
                    # code...
                    break;
                case 'PROOF_OF_RESIDENCE':
                    $this->saveUrlDocument(['proof_of_residence' => $url]);
                    # code...
                    break;
                default:
                    # code...
                    break;
            }
        }
        return response()->json($url, 200);
    }

    public function saveUrlDocument($arrayAtributs)
    {
        ProfileDocument::updateOrCreate(
            ['user_id' => Auth::user()->id],
            $arrayAtributs
        );
    }


    public function sendDocumentToAsaas(Request $request)
    {
        //variaveis
        //procurar documento
        $profileDocument = ProfileDocument::find($request->document_id);

        $user = User::find($profileDocument->user_id);
        $apiKey = PaymentAccount::where("user_id", $user->id)->first()->apiKey;
        $accessToken = $apiKey;

        //trazer os documentos que faltão
        $response = Http::withHeaders([
            'access_token' => $accessToken
        ])->get(config("routes.ASAAS") . 'myAccount/documents');

        $data = $response->json();

        $collection = collect($data['data']);


        $responses = [];
        $status = 200;
        foreach ($collection as $key => $document) {
            # code...
            # id status type
            if ($document["status"] !== "APPROVED") {
                $sendDocumentSuccess = $this->senTypeForDocument($document["id"], $document["type"], $accessToken, $profileDocument);
                if (!$sendDocumentSuccess->successful()) {
                    array_push($responses, $sendDocumentSuccess->json());
                    $status = 422;
                } else {
                    array_push($responses, $sendDocumentSuccess->json());
                }
            }
        }

        return response()->json($responses, $status);
    }

    public function senTypeForDocument($idDocument, $typeDocument, $accessToken, $profileDocument)
    {

        switch ($typeDocument) {
            case 'IDENTIFICATION':
                # code...
                $response = $this->senRgOrCnh($idDocument, $accessToken, $profileDocument);
                return $response;
            default:
                # code...
                break;
        }
    }

    public function senRgOrCnh($idDocument, $accessToken, $profileDocument)
    {

        $clinBlue = new ImageController();
        //url
        $path1 = parse_url($profileDocument->front_of_document, PHP_URL_PATH);
        $path2 = parse_url($profileDocument->back_of_document, PHP_URL_PATH);

        // Remove a barra inicial do caminho, se necessário
        $path1 = ltrim($path1, '/');
        $path2 = ltrim($path2, '/');

        //front_rg
        $file1 = $clinBlue->dowloadImage($path1);
        //back_rg
        $file2 = $clinBlue->dowloadImage($path2);

        $url = "https://www.asaas.com/api/v3/myAccount/documents/$idDocument";

        $type = 'IDENTIFICATION';
        //code...

        $response = Http::withHeaders([
            'access_token' => $accessToken
        ])
            ->attach('documentFile', $file1, basename($path1))
            ->post($url, [
                'type' => $type,
            ]);

        $response = Http::withHeaders([
            'access_token' => $accessToken
        ])
            ->attach('documentFile', $file2, basename($path2))
            ->post($url, [
                'type' => $type,
            ]);

        return $response;
    }
}

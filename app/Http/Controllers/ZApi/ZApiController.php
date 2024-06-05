<?php

namespace App\Http\Controllers\ZApi;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ZApiController extends Controller
{
    private $zapiClient;

    public function __construct()
    {
        $this->zapiClient = new Client([
            'verify' => false, // Desativa a verificação do certificado temporariamente
        ]); // Crie um cliente Guzzle para as solicitações HTTP
    }

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
        //
    }

    public function sendMessage($phone, $message)
    {

        $ZAPI_API_KEY = env('ZAPI_API_KEY');
        $ZAPI_SECRET_KEY = env('ZAPI_SECRET_KEY');

        // Construa o corpo da solicitação
        $body = [
            'phone' => $phone,
            'message' => $message,
        ];

        // Use a instância $zapi para enviar mensagens WhatsApp
        // Faça a solicitação POST para a API Z-API
        try {
            $response = $this->zapiClient->post("https://api.z-api.io/instances/$ZAPI_API_KEY/token/$ZAPI_SECRET_KEY/send-text", [
                'json' => $body,
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
            ]);

            $data = json_decode($response->getBody());

            // Você pode processar a resposta da API aqui, por exemplo, retornar um JSON de sucesso
            return response()->json([
                'zaapId' => $data->zaapId,
                'messageId' => $data->messageId,
                'id' => $data->id,
            ]);
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            // Lidar com erros, por exemplo, retornar um JSON de erro
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }



    public function sendDocument($phone, $document, $titleDocument)
    {

        $ZAPI_API_KEY = env('ZAPI_API_KEY');
        $ZAPI_SECRET_KEY = env('ZAPI_SECRET_KEY');

        // Construa o corpo da solicitação
        $body = [
            'phone' => $phone,
            'document' => $document,
            'fileName' => $titleDocument,
        ];

        // Use a instância $zapi para enviar mensagens WhatsApp
        // Faça a solicitação POST para a API Z-API
        try {
            $response = $this->zapiClient->post("https://api.z-api.io/instances/$ZAPI_API_KEY/token/$ZAPI_SECRET_KEY/send-document/csv", [
                'json' => $body,
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
            ]);

            $data = json_decode($response->getBody());

            // Você pode processar a resposta da API aqui, por exemplo, retornar um JSON de sucesso
            return response()->json([
                'zaapId' => $data->zaapId,
                'messageId' => $data->messageId,
                'id' => $data->id,
            ]);
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            // Lidar com erros, por exemplo, retornar um JSON de erro
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}

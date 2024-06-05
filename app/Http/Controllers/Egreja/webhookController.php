<?php

namespace App\Http\Controllers\Egreja;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Egreja\Egreja;
use App\Models\Egreja\User;
use App\Models\Egreja\HelpRequest;
use App\Models\Egreja\ShiftAssignment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Throwable;

class webhookController extends Controller
{
    public function needHelp(Request $request){

        $client = User::firstOrCreate(
            ['phone' => $request->phone],
            ['name' => $request->name, 'costumer_id' => $request->costumer_id ]
        );

        $help_request = New HelpRequest;
        $help_request->client_id = $client->id;

        $help_request->save();

        $shift_assignments = ShiftAssignment::where('start_time', ">=", Carbon::now())
                                            ->where('end_time', "<=", Carbon::now())->first();



       $helper = $this->sendHelpRequest($help_request);

         // Aguardar 3 minutos (30 segundos).
         sleep(10);
       $this->atributeHelperToRequest($help_request, $helper);

        return response()->json($this->sendHelpRequest($client));
    }

    public function sendHelpRequest($help_request){

        $now = Carbon::now()->format('Y-m-d H:i:s');

        $shift_assignments = ShiftAssignment::where('start_time', "<=", $now)
                    ->where('end_time', ">=", $now)->first();


        $helper = User::where('id', $shift_assignments->user_id)->first();


        $access_token = 'Token 10c5ff26977bd64afe95fa34e7b0e47810175f0d';
        $link = 'https://api.landbot.io/v1/customers/';


        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => $access_token

            ])->post($link.$helper->costumer_id.'/send_template/', [
                "template_id" => 4917,
                "template_params" => [
                    "body" => [
                        "params" => [$helper->name, "AJUDAR EM ORAÇÂO"]
                    ]
                ]

            ]);

        } catch (Throwable $th) {
            return response()->json(["message" => $th->getMessage()], 422);
        }
        if ($response->successful()) {
            return $helper;
        }
        // Determine if the status code is >= 400...
        if ($response->failed()) {
            return response()->json($response, 422);
        }
        // Determine if the response has a 400 level status code...
        if ($response->clientError()) {
            return response()->json($response, 422);
        }
        // Determine if the response has a 500 level status code...
        if ($response->serverError()) {
            return response()->json($response, 422);
        }

    }
    public function sendDataRequester(Request $request){

        return response()->json([
            'name' => 'Scarlet Kortez Fortunato',
            'phone' => '554396763408'
        ]);
    }

    public function atributeHelperToRequest($help_request, $helper){

        $help_request->helper_id = $helper->id;
        $help_request->status_id = 2;
        $help_request->save();

        $access_token = 'Token 10c5ff26977bd64afe95fa34e7b0e47810175f0d';
        $link = 'https://api.landbot.io/v1/customers/';

        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => $access_token

            ])->post($link.$helper->costumer_id.'/send_text/', [
                "message" => "Você concordou em atender a esse pedido de oração. Sua tarefa é entrar em contato com Gbariel Lorenzo Bortolini, cujo número de telefone é 554188731736. Lembre-se de ser breve, oferecendo uma oração para ela. O acompanhamento posterior será conduzido pelo pastor responsável."
            ]);

        } catch (Throwable $th) {
            return response()->json(["message" => $th->getMessage()], 422);
        }
        if ($response->successful()) {
            return $helper;
        }
        // Determine if the status code is >= 400...
        if ($response->failed()) {
            return response()->json($response, 422);
        }
        // Determine if the response has a 400 level status code...
        if ($response->clientError()) {
            return response()->json($response, 422);
        }
        // Determine if the response has a 500 level status code...
        if ($response->serverError()) {
            return response()->json($response, 422);
        }

        return response()->json();
    }

    public function testSendFlux(Request $request){
        log::info($request);
    }

}

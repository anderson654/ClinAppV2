<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log_central;

class LogCentralController extends Controller
{
    public static function create($request, $message, $event_type)
    {
        try {
            $request->source =  request()->route()->getActionName(); //Recupera a source da operação para utilização na log central.
        } catch (\Throwable $th) {
            $request->source =  'not found'; //Recupera a source da operação para utilização na log central.
        }

        if (!$request->code) {
            if ($event_type == 'E') {
                $request->code = 422;
            } else {
                $request->code = 200;
            }
        }

        if ($event_type == 'E') {
            $request->code = 422;
        }

        /*****************LOG CENTRAL*********************/
        Log_Central::Create([
            'user_id' => $request['user_id'] ?? 0,
            'service_id' => $request['service_id'] ?? 0,
            'cod_source' => $request->cod_source,
            'source' =>  $request->source,
            'event_type' => $event_type,
            'log'      => $message,

        ]);
        /*****************FIM LOG CENTRAL*********************/

        $data = array(
            'code'      => $request->code,
            'message'   => $message,

        );

        return response()->json($data, $request->code);
    }

    public function reportLogCentral($userId, $serviceId, $codSource, $source, $eventType, $message)
    {
        Log_central::create([
            'user_id' => $userId ?? 0,
            'service_id' => $serviceId ?? 0,
            'cod_source' => $codSource,
            'source' =>  $source,
            'event_type' => $eventType,
            'log'      => $message,
        ]);
    }
}

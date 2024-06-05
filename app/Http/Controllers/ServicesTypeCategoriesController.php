<?php

namespace App\Http\Controllers;


use App\Models\Services_type_category;
use App\Models\Log_central;

use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ServicesTypeCategoriesController extends Controller
{

    public function GetServicesTypeCategories(Request $request){

        $validator = Validator::make($request->all(), [
            'services_type_id' => 'required|int',
            'cod_source' => 'required|int',

        ]);

        if ($validator->fails()) {

            $messageError = $validator->errors();
            /*****************LOG CENTRAL*********************/
            Log_Central::Create([
                'user_id' => ($request->user_id ? $request->user_id : 0),
                'cod_source' => $request->cod_source,
                'source' =>  "Controller ServicesTypeCategories => function GetServicesTypeCategories / Source_requester => " . url()->current(),
                'event_type' => "E",
                'log'      => 'ERRO => ' . $messageError,

            ]);
            /*****************FIM LOG CENTRAL*********************/
            return response()->json($validator->errors(), 404);
        }


        $services_type_category = Services_type_category::where('services_type_id', $request->services_type_id)->get();

        return response()->json($services_type_category);
    }
}

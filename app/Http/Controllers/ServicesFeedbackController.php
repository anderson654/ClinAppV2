<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServicesFeedbacks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ServicesFeedbackController extends Controller
{
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
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => "int",
            'service_id' => "int",
            'professionals' => "array"
        ]);
        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()], 422);
        }
        if($request->cod_source = 1){
            $service = Service::where('id', $request->service_id)->first();
            if($service){
                if ($request->user_id != $service->client_id) {
                    return response()->json(["message" => 'not authorized'], 403);
                }
            }

        }else{
            if ($request->user_id != Auth::user()->id) {
                return response()->json(["message" => 'not authorized'], 403);
            }
        }

        //validate feedback
        $newValueStars = (int)$request->evaluate + 1;
        try {
            foreach ($request->professionals as $professional) {
                # code..
                if($professional["id"] != NULL){
                    ServicesFeedbacks::create([
                        'service_id' => $request->service_id,
                        'evaluate' => $newValueStars,
                        'reason' => isset($request->reason) ? $request->reason : null,
                        'text' => $request->text,
                        'professional_user_id' => $professional["id"]
                    ]);
                }

            }
            return response()->json(["message" => 'salvo com sucesso'], 200);
        } catch (\Throwable $th) {
            return response()->json(["message" => 'falha ao salvar no banco de dados, '. $th], 400);
        }
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
     * @param  \App\Models\ServicesFeedback  $servicesFeedback
     * @return \Illuminate\Http\Response
     */
    public function show(ServicesFeedbacks $servicesFeedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicesFeedback  $servicesFeedback
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicesFeedbacks $servicesFeedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServicesFeedback  $servicesFeedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServicesFeedbacks $servicesFeedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicesFeedback  $servicesFeedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicesFeedbacks $servicesFeedback)
    {
        //
    }

    public function checkProfessionalAvaliable(Request $request)
    {
        //recebe um array de professionals
        //receber id do serviço e id da professional
        $validator = Validator::make($request->all(), [
            'user_id' => "required|int",
            'service_id' => "required|int",
            'professionals' => "required|array"
        ]);
        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()], 422);
        }

        $newArrayProfessionals = [];
        foreach ($request->professionals as $key => $professional) {
            if (!ServicesFeedbacks::where('professional_user_id', $professional["id"])
                ->where('service_id', $request->service_id)->exists()) {
                //adicionar a lista;
                array_push($newArrayProfessionals, $professional);
            }
        }
        //retorna uma lista com apenas as que não foram avaliadas;
        return $newArrayProfessionals;
    }
}

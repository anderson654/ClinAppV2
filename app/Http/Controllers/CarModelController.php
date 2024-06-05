<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarModelController extends Controller
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
    public function getCarsModel(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "id_car_manufacturer" => "required|int"
        ]);

        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()], 422);
        }

        $carModel =
            CarModel::select('id', 'title', 'car_category_id')->where('manufacturer_id', $request->id_car_manufacturer)
            ->where('verified', 1)
            ->where('status', 1)
            ->get();

        if (count($carModel) > 0) {
            return $carModel;
        }

        return response()->json(["message" => "Não foi encontrado um modelo da fabricante especificada."], 422);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //Criar modelo de carro;
        //Validator
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'manufacturer_id' => 'required|int',
            'car_category_id' => 'required|int',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $models = CarModel::Create([
            'manufacturer_id' => $request->manufacturer_id,
            'title' => $request->title,
            'car_category_id' => $request->car_category_id,
            'CodFipe' => '',
            'ModeloResumido' => '',
            'status' => 0
        ]);
        if ($models) {
            return response()->json([
                'message' => 'Carro cadastrado com sucesso.'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Erro ao cadastrar veìculo.'
            ], 400);
        }
        return response()->json($models);
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
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function show(CarModel $carModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CarModel $carModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarModel $carModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarModel $carModel)
    {
        //
    }
}

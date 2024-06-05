<?php

namespace App\Http\Controllers;

use App\Models\CarManufacturer;
use Illuminate\Http\Request;

class CarManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        return CarManufacturer::select('id','title')->where('status',1)->get();
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
     * @param  \App\Models\CarManufacturer  $carManufacturer
     * @return \Illuminate\Http\Response
     */
    public function show(CarManufacturer $carManufacturer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarManufacturer  $carManufacturer
     * @return \Illuminate\Http\Response
     */
    public function edit(CarManufacturer $carManufacturer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarManufacturer  $carManufacturer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarManufacturer $carManufacturer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarManufacturer  $carManufacturer
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarManufacturer $carManufacturer)
    {
        //
    }
}

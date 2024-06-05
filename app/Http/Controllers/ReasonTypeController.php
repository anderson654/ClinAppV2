<?php

namespace App\Http\Controllers;

use App\Models\ReasonType;
use Illuminate\Http\Request;

class ReasonTypeController extends Controller
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
        //mostar todas as reasons
        return ReasonType::get();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReasonType  $reasonType
     * @return \Illuminate\Http\Response
     */
    public function show(ReasonType $reasonType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReasonType  $reasonType
     * @return \Illuminate\Http\Response
     */
    public function edit(ReasonType $reasonType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReasonType  $reasonType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReasonType $reasonType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReasonType  $reasonType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReasonType $reasonType)
    {
        //
    }
}

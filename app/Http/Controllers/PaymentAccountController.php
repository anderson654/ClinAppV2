<?php

namespace App\Http\Controllers;

use App\Models\PaymentAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PaymentAccountController extends Controller
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
    public static function create(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'title' => "required|string",
            'agency' => "required|string",
            'accountNumber' => "required|string",
            'accountDigit' => "required|string",
            'user_id'  => "required|int",
            'walletId'  => "required|string",
            'apiKey' => "required|string",
            'payment_gateway_id' => "required|int"
        ]);

        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()], 422);
        };

        try {
            DB::beginTransaction();
            //code...
            $paymentAccount = new PaymentAccount;
            $paymentAccount->title = $request->title;
            $paymentAccount->agency = $request->agency;
            $paymentAccount->accountNumber = $request->accountNumber;
            $paymentAccount->accountDigit = $request->accountDigit;
            $paymentAccount->user_id = $request->user_id;
            $paymentAccount->franchise_id = $request->franchise_id;
            $paymentAccount->walletId = $request->walletId;
            $paymentAccount->apiKey = $request->apiKey;
            $paymentAccount->payment_gateway_id = $request->payment_gateway_id;
            $paymentAccount->pixKey = $request->pixKey;
            $paymentAccount->save();

            DB::commit();
            return response()->json(
                $paymentAccount,
                200
            );
        } catch (\Throwable $th) {
            DB::rollBack();
            //throw $th;
            return response(["message" => $th->getMessage(), "controller" => basename(__FILE__), "method" => basename(__METHOD__), "url" => url()->current()], 422);
        }

        // PaymentAccount::get();
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
     * @param  \App\Models\PaymentAccount  $paymentAccount
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentAccount $paymentAccount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentAccount  $paymentAccount
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentAccount $paymentAccount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaymentAccount  $paymentAccount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentAccount $paymentAccount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentAccount  $paymentAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentAccount $paymentAccount)
    {
        //
    }
}

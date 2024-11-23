<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Order;
use App\Models\Payment;
use App\Enums\OrderStatus;
use App\Enums\PaymentStatus;
use Illuminate\Http\Request;
use Knox\Pesapal\Facades\Pesapal;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;

class PaymentController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    private function formatKenyanPhoneNumber($phone)
    {
        // Remove spaces and non-numeric characters
        $phone = preg_replace('/\D/', '', $phone);

        // Handle different cases
        if (str_starts_with($phone, '0')) {
            // Replace leading 0 with 254
            $phone = '254' . substr($phone, 1);
        } elseif (str_starts_with($phone, '+')) {
            // Remove the + symbol
            $phone = substr($phone, 1);
        }

        return $phone;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentRequest $request, Order $order)
    {
        //
        $user = User::findOrFail(Auth::user()->id);

        $user->update([
            'country' => $request->input('country'),
            'address' => $request->input('address'),
            'apartment' => $request->input('apartment'),
            'town' => $request->input('town'),
        ]);

        $payment = Payment::create([
            'user_id' => Auth::user()->id,
            'order_id' => $order->id,
            'method' => 'Pesapal',
            'amount' => $order->total_amount,
            'status' => PaymentStatus::PENDING
        ]);

        $phone = $this->formatKenyanPhoneNumber($user->phone);

        $mpesa= new \Safaricom\Mpesa\Mpesa();

        $BusinessShortCode = '174379';
        $LipaNaMpesaPasskey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
        $TransactionType = 'CustomerPayBillOnline';
        $Amount = '1';
        $PartyA = $phone;
        $PartyB = '174379';
        $PhoneNumber = $phone;
        $CallBackURL = 'https://goshen.co.ke/mpesa/confirmation';
        $AccountReference = 'AccountReference';
        $TransactionDesc = 'TransactionDesc';
        $Remarks = 'Remarks';

        $stkPushSimulation=$mpesa->STKPushSimulation(
            $BusinessShortCode,
            $LipaNaMpesaPasskey,
            $TransactionType,
            $Amount,
            $PartyA,
            $PartyB,
            $PhoneNumber,
            $CallBackURL,
            $AccountReference,
            $TransactionDesc,
            $Remarks
        );

        dd($stkPushSimulation);

    }

    public function callback(Request $request)
    {

    }


    public function mpesa_confirmation()
    {

    }

    public function FunctionName()
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}

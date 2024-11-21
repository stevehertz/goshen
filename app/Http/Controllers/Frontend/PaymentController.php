<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Order;
use App\Models\Payment;
use App\Enums\OrderStatus;
use App\Enums\PaymentStatus;
use Illuminate\Http\Request;
use Knox\Pesapal\Facades\Pesapal;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;

class PaymentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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

        // Payment details
        $details = [
            'amount' => $order->total_amount,
            'description' => "Order #{$order->id}",
            'type' => 'MERCHANT',
            'reference' => $payment->id, // Unique reference
            'first_name' => auth()->user()->first_name,
            'last_name' => auth()->user()->last_name,
            'email' => auth()->user()->email,
        ];

        // Generate payment URL
        $iframeSrc = Pesapal::makePayment($details, route('shop.payments.callback'));

        return view('frontend.shop.pesapal', compact('iframeSrc'));
    }

    public function callback(Request $request)
    {
        $paymentId = $request->input('pesapal_transaction_tracking_id');
        $reference = $request->input('pesapal_merchant_reference');
        // Get payment status
        $status = Pesapal::getTransactionStatus($paymentId);
        // Find the payment record
        $payment = Payment::find($reference);

        if (!$payment) {
            return redirect()->route('shop.checkout.index')->withErrors('Invalid payment reference.');
        }

        // Update payment and order status
        if ($status['status'] === 'COMPLETED') {
            $payment->update([
                'status' => PaymentStatus::PAID,
            ]);

            $payment->order->update([
                'status' => OrderStatus::COMPLETE,
            ]);

            return redirect()->route('shop')->with('success', 'Payment successful!');
        } else {
            $payment->update([
                'status' => PaymentStatus::FAILED,
            ]);

            return redirect()->route('shop.checkout.index')->withErrors('Payment failed.');
        }
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

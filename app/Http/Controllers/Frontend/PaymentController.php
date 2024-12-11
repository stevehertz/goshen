<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\OrderStatus;
use App\Enums\PaymentStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\Order;
use App\Models\Payment;
use App\Models\User;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use App\Services\DarajaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Knox\Pesapal\Facades\Pesapal;
use Safaricom\Mpesa\Mpesa;


class PaymentController extends Controller
{
    private $darajaService;
    private $categoryRepository, $productRepository;
    public function __construct(DarajaService $darajaService, CategoryRepository $categoryRepository, ProductRepository $productRepository)
    {
        $this->darajaService = $darajaService;
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
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

        $phone = $this->formatKenyanPhoneNumber($request->input('phone'));
        // $amount = intval($payment->amount);
        $amount = 1;
        $shortcode = env('MPESA_SHORTCODE');
        $lipaNaMpesaPasskey = env('MPESA_PASSKEY');

        $response = $this->darajaService->stkPush(
            $phone,
            $amount,
            'Goshen Farm Exporters LTD',
            'Payment for goods'
        );

        $responseBody = json_decode($response->getBody()->getContents(), true);

        if (isset($responseBody['ResponseCode']) && $responseBody['ResponseCode'] === '0') {
            // STK Push was successfully sent
            return redirect()->route('payments.waiting', ['order' => $order->id]);
        }
        // STK Push failed
        return redirect()
            ->route('shop.checkout.index', $order->id)
            ->with('error', 'Payment initiation failed. Please try again.');
    }


    public function waiting(Order $order)
    {
        return view('frontend.shop.wait', [
            'order' => $order
        ]);
    }


    public function success(Order $order)
    {
        $categories = $this->categoryRepository->getAllActiveCategories();
        $products = $this->productRepository->getAllActiveProducts();
        return view('frontend.shop.success', [
            'order' => $order,
            'categories' => $categories,
            'products' => $products,
        ]);
    }

    public function callback(Request $request) {}


    public function mpesa_confirmation(Request $request)
    {
        $data = $request->all();
        // Log incoming reques

        // Log incoming request (optional)
        Log::info('M-Pesa Confirmation: ', $data);

        $transactionId = $data['TransID'] ?? null;
        $paymentId = $data['BillRefNumber'] ?? null; // Use a unique identifier passed during STK Push
        $amount = $data['TransAmount'] ?? null;
        $resultCode = $data['ResultCode'] ?? null;

        if ($transactionId && $paymentId)
        {
            $payment = Payment::find($paymentId);

            if ($payment) {
                if ($resultCode === '0') {
                    // Payment was successful
                    $payment->update([
                        'status' => PaymentStatus::PAID,
                    ]);

                    $payment->order->update([
                        'status' => OrderStatus::COMPLETE,
                    ]);

                    return redirect()->route('shop.checkout.success', ['order' => $payment->order_id]);
                } else {
                    // Payment failed
                    $payment->update([
                        'status' => PaymentStatus::FAILED,
                    ]);

                    return redirect()
                        ->route('shop.checkout.index', $payment->order_id)
                        ->with('error', 'Payment failed. Please try again.');
                }
            }
        }

        return response()->json(['error' => 'Invalid payment confirmation'], 400);
    }

    public function registerMpesaUrls(Request $request) {

        try {
            // Use the DarajaService to register the URLs
            $response = $this->darajaService->registerUrl();

            // Return the response for API testing with Postman
            return response()->json([
                'success' => true,
                'message' => 'URLs registered successfully.',
                'data' => $response
            ], 200);

        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Error registering M-Pesa URLs: ', ['error' => $e->getMessage()]);

            // Return a failure response
            return response()->json([
                'success' => false,
                'message' => 'Failed to register URLs.',
                'error' => $e->getMessage()
            ], 500);
        }

    }

    public function mpesa_validation()
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

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Repositories\OrderRepository;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    private $orderRepository;
    public function __construct(OrderRepository $orderRepository)
    {
        $this->middleware('auth');
        $this->orderRepository = $orderRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = $this->orderRepository->getAllOrders();
        return view('backend.orders.index', [
            'data' => $data
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return response()->json([
            'status' => true,
            'data' => $this->orderRepository->showOrder($id)
        ]);
    }


    /**
     * View the specified resource.
     */

    public function view($id)
    {
        $data = $this->orderRepository->showOrder($id);
        return view('backend.orders.view', [
            'data' => $data
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
        $order = $this->orderRepository->destroyOrder($order);
        if($order)
        {
            return response()->json([
                'status' => true,
                'message' => 'Order has been successfully removed'
            ]);
        }
    }
}

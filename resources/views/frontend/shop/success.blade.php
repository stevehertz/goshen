@extends('frontend.layouts.shop.app')

@section('content')
    <!-- Breadcrumb Section Begin -->
    @include('frontend.includes.shop.breadcrumb')
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <h1>Payment Successful</h1>
                        <p>Thank you for your payment. Your order #{{ $order->id }} has been processed.</p>
                        <a href="{{ route('shop') }}" class="btn btn-primary">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('frontend.layouts.shop.app')

@section('content')
    <!-- Breadcrumb Section Begin -->
    @include('frontend.includes.shop.breadcrumb')
    <!-- Breadcrumb Section End -->
    <!-- Shoping Cart Section Begin -->

    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $cart)
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <img src="{{ asset($cart->product->image) }}" alt="">
                                            <h5>{{ $cart->product->title }}</h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                            Kshs{{ $cart->product->price }}
                                        </td>
                                        <td class="shoping__cart__quantity">
                                            {{-- <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text"
                                                    class="quantity-input"
                                                    data-product-price="{{ $cart->product->price }}"
                                                    data-cart-id="{{ $cart->id }}"
                                                    value="{{ $cart->quantity }}">
                                                </div>
                                            </div> --}}
                                            {{ $cart->quantity }}
                                        </td>
                                        <td class="shoping__cart__total">
                                            Kshs{{ $cart->total_price }}
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <a href="javascript:void(0)" data-id="{{ $cart->id }}" class="removeCartBtn">
                                                <i class="fas fa-close"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No products added to cart!</td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="{{ route('shop') }}" class="primary-btn cart-btn">
                            CONTINUE SHOPPING
                        </a>
                        {{-- <a href="#" class="primary-btn cart-btn cart-btn-right">
                            <span class="icon_loading"></span> Upadate Cart
                        </a> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        {{-- <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span>Kshs{{ $grandTotal }}</span></li>
                            <li>Total <span>Kshs{{ $grandTotal }}</span></li>
                        </ul>
                        <a href="javascript:void(0)" class="primary-btn proceedToCheckoutBtn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shoping Cart Section End -->
@endsection

@push('scripts')
    @include('frontend.shop.scripts')
@endpush

@extends('frontend.layouts.shop.app')

@section('content')
    <!-- Breadcrumb Section Begin -->
    @include('frontend.includes.shop.breadcrumb')
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <form action="{{ route('shop.payments.checkout', $order->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Fist Name<span>*</span></p>
                                        <input type="text" name="first_name" value="{{ Auth::user()->first_name }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input type="text" value="{{ Auth::user()->last_name }}" name="last_name">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="checkout__input">
                                        <p>Country<span>*</span></p>
                                        <select name="country" class="form-control" style="width: 100%;">
                                            <option disabled selected>Select Country</option>
                                            @foreach ($countries as $key => $country)
                                                <option value="{{ $key }}"
                                                    @if (Auth::user()->country == $key) selected @endif>
                                                    {{ $country }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="checkout__input">
                                        <p>Address<span>*</span></p>
                                        <input type="text" value="{{ Auth::user()->address }}" name="address"
                                            placeholder="Street Address" class="checkout__input__add">
                                        <input type="text" value="{{ Auth::user()->apartment }}" name="apartment"
                                            placeholder="Apartment, suite, unite ect (optinal)">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="checkout__input">
                                        <p>Town/City<span>*</span></p>
                                        <input type="text" name="town" value="{{ Auth::user()->town }}"
                                            placeholder="Town/City">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" name="phone" value="{{ Auth::user()->phone }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="email" value="{{ Auth::user()->email }}" name="email">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul>
                                    @foreach ($orderItems as $item)
                                        <li>
                                            {{ $item->product->title }} <span>Kshs.{{ $item->product->price }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="checkout__order__subtotal">Subtotal
                                    <span>Kshs.{{ $order->total_amount }}</span>
                                </div>
                                <div class="checkout__order__total">
                                    Total <span>Kshs.{{ $order->total_amount }}</span>
                                </div>

                                {{-- <div class="checkout__input__checkbox">
                                    <label for="card">
                                        Credit Card
                                        <input type="radio" name="payment_method" value="credit_card" id="card">
                                        <span class="checkmark"></span>
                                    </label>
                                </div> --}}

                                {{-- <div class="checkout__input__checkbox">
                                    <label for="mpesa">
                                        M-Pesa
                                        <input type="radio" name="payment_method" value="mpesa" id="mpesa">
                                        <span class="checkmark"></span>
                                    </label>
                                </div> --}}
                                <button type="submit" class="site-btn">
                                    PLACE ORDER
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
@endsection

@push('scripts')

@endpush

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
                                    <th class="shoping__product">Order #</th>
                                    <th>Order Status</th>
                                    <th>Total Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $order)
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <h5>
                                                Order # {{ $order->id }}
                                            </h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                            {{ \OrderStatus::getName($order->status) }}
                                        </td>
                                        <td class="shoping__cart__quantity">
                                            Kshs.{{ $order->total_amount }}
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            @if ($order->status == \OrderStatus::PENDING)
                                                <a href="{{ route('shop.checkout.index', $order->id) }}"
                                                    class="btn btn-primary">
                                                    COMPLETE ORDER
                                                </a>
                                            @else
                                                <span>
                                                    ORDER COMPLETED
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">No new order placed!</td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
@endsection

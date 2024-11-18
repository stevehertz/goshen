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
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($wishlist as $list)
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <img src="{{ asset($list->product->image) }}" alt="{{ $list->product->title  }}">
                                            <h5>{{ $list->product->title }}</h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                            Kshs{{ $list->product->price }}
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <a href="javascript:void(0)" data-id="{{ $list->id }}" class="removeProductBtn">
                                                <span class="icon_close">
                                                    <i class="fas fa-close"></i>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No products added to wishlist yet!</td>
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
                        <a href="{{ route('shop') }}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
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

@extends('frontend.layouts.shop.app')

@section('content')

    <!-- Categories Section Begin -->
    {{-- @include('frontend.includes.shop.categories') --}}
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    @include('frontend.includes.shop.featured')
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    {{-- @include('frontend.includes.shop.banner') --}}
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    {{-- @include('frontend.includes.shop.products') --}}
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    {{-- @include('frontend.includes.shop.blog') --}}
    <!-- Blog Section End -->
@endsection

@extends('frontend.layouts.safari.app')

@section('title', 'Home - '.config('app.name'))

@section('content')

    <!-- About Start -->
    @include('frontend.includes.safari.about')
    <!-- About End -->

    <!-- Sustainability Start -->
    @include('frontend.includes.safari.sustainability')
    <!-- Feature End -->

    <!-- Product Start -->
    @include('frontend.includes.safari.products')
    <!-- Product End -->

    <!-- Firm Visit Start -->
    @include('frontend.includes.safari.call-to-action')
    <!-- Firm Visit End -->

    <!-- Testimonial Start -->
    @include('frontend.includes.safari.testimonial')
    <!-- Testimonial End -->

    <!-- Blog Start -->
    @include('frontend.includes.safari.blog')
    <!-- Blog End -->
@endsection

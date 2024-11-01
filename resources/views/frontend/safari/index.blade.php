@extends('frontend.layouts.safari.app')

@section('title', 'Home - ' . config('app.name'))

@section('content')
    <!-- About Start -->
    @include('frontend.includes.safari.about')
    <!-- About End -->

    <!-- Services Start -->
    @include('frontend.includes.safari.products')
    <!-- Services End -->

    <!-- Features Start -->
    {{-- @include('frontend.includes.safari.feature') --}}
    <!-- Features End -->

    <!-- Offer Start -->
    {{-- @include('frontend.includes.safari.offer') --}}
    <!-- Offer End -->

    <!-- Blog Start -->
    @include('frontend.includes.safari.blog')
    <!-- Blog End -->

    <!-- FAQs Start -->
    {{-- @include('frontend.includes.safari.faqs') --}}
    <!-- FAQs End -->

    <!-- Team Start -->
    {{-- @include('frontend.includes.safari.team') --}}
    <!-- Team End -->

    <!-- Testimonial Start -->
    {{-- @include('frontend.includes.safari.testimonial') --}}
    <!-- Testimonial End -->
@endsection

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="{{ asset(config('app.favicon')) }}" rel="icon">


    <title>{{ config('app.name') }} | Shop</title>

    @include('frontend.components.shop.styles')
</head>

<body>

    @include('frontend.includes.shop.topbar')

    <!-- Header Section Begin -->
    @include('frontend.includes.shop.header')
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    @include('frontend.includes.shop.hero')
    <!-- Hero Section End -->

    @yield('content')

    <!-- Footer Section Begin -->
    @include('frontend.includes.shop.footer')
    <!-- Footer Section End -->

    @include('frontend.components.shop.scripts')

    @stack('scripts')
</body>

</html>

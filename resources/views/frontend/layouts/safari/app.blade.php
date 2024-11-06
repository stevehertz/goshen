<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset(config('app.favicon')) }}" rel="icon">

    @include('frontend.components.safari.styles')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        @include('frontend.includes.safari.top-bar')

        @include('frontend.includes.safari.navbar')
    </div>
    <!-- Navbar End -->

    @if (Route::is('safari'))
        <!-- Carousel Start -->
        @include('frontend.includes.safari.hero')
        <!-- Carousel End -->
    @else
        <!-- Page Header Start -->
        @include('frontend.includes.safari.breadcrumb')
        <!-- Page Header End -->
    @endif

    @yield('content')


    <!-- Footer Start -->
    @include('frontend.includes.safari.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    @include('frontend.components.safari.scripts')

    @stack('scripts')
</body>

</html>

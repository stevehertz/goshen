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
    @include('frontend.components.safari.styles')
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    @include('frontend.includes.safari.top-bar')
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        @include('frontend.includes.safari.navbar')

        @if (Route::is('safari'))
            <!-- Carousel Start -->
            @include('frontend.includes.safari.hero')
            <!-- Carousel End -->
        @else
            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">
                        {{ \App\Helper\Helper::getPageTitle() }}
                    </h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item">
                            <a href="{{ route('safari') }}">
                                Home
                            </a>
                        </li>
                        @php
                            $breadcrumbs = \App\Helper\Helper::generateBreadcrumb(request());
                        @endphp
                        @foreach ($breadcrumbs as $breadcrumb)
                            @if (!$loop->last)
                                <li class="breadcrumb-item">
                                    <a href="{{ $breadcrumb['url'] }}">
                                        {{ $breadcrumb['label'] }}
                                    </a>
                                </li>
                            @else
                                <li class="breadcrumb-item active text-primary">
                                    {{ $breadcrumb['label'] }}
                                </li>
                            @endif
                        @endforeach

                    </ol>
                </div>
            </div>
            <!-- Header End -->
        @endif


    </div>
    <!-- Navbar & Hero End -->

    @yield('content')

    @include('frontend.includes.safari.footer')

    @include('frontend.components.safari.scripts')

</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Home - {{ config('app.name') }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Google Fonts (you can choose similar to the design) -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="shortcut icon" href="{{ asset(config('app.favicon')) }}" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="left-side">
            <div class="content">
                <div class="text-container">
                    <h1>Lets Do <span>Business</span></h1>
                    <p>Take an adventure</p>
                    <a href="{{ route('safari') }}" class="button">Safari Time</a>
                </div>
                <div class="image-container">
                    <img src="{{ asset('img/corporate.png') }}" alt="Mango Image" class="product-image">
                </div>
            </div>
        </div>
        <div class="right-side">
            <div class="content">
                <div class="image-container">
                    <img src="{{ asset('img/frontend.png') }}" alt="Product Image" class="product-image">
                </div>
                <div class="text-container">
                    <h1>Visit Our<span> Market place</span></h1>
                    <p>Find out about our products</p>
                    <a href="{{ route('coming') }}" class="button">
                        Shop
                    </a>
                </div>
            </div>

        </div>
        <div class="logo">
            <a href="" class="custom-logo-link">
                <img src="{{ asset(config('app.logo')) }}" alt="{{ config('app.name') }}">
            </a>
        </div>
    </div>

    <footer>
        <div class="social-icons">
            <a href="{{ config('app.facebook') }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="{{ config('app.x') }}"><i class="fab fa-twitter"></i></a>
            <a href="{{ config('app.linkedin') }}"><i class="fab fa-linkedin"></i></a>
            <a href="{{ config('app.youtube') }}"><i class="fas fa-youtube"></i></a>
        </div>
        <div class="captcha">
            <p>Privacy - Terms</p>
        </div>
    </footer>
</body>

</html>

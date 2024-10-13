<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - {{ config('app.name') }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Google Fonts (you can choose similar to the design) -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">    
</head>

<body>
    <div class="container">
        <div class="left-side">
            <div class="content">
                <h1>Lets Do <span>Business</span></h1>
                <p>Discover our adventurers us</p>
                <a href="{{ route('safari') }}" class="button">Take a safari</a>
            </div>
            <img src="{{ asset('img/corporate.png') }}" alt="Mango Image" class="product-image">
        </div>
        <div class="right-side">
            <div class="content">
                <h1>Visit Our<span> Market place</span></h1>
                <p>Find out about our products</p>
                <a href="#" class="button">Explore</a>
            </div>
            <img src="{{ asset('img/frontend.png') }}" alt="Product Image" class="product-image">
        </div>
        <div class="logo">
            <a href="" class="custom-logo-link">
                <img src="{{ asset('img/logo/goshen-logo.png') }}" alt="Blue Skies Logo">
            </a>
        </div>
    </div>

    <footer>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fas fa-envelope"></i></a>
            <a href="#"><i class="fas fa-share-alt"></i></a>
        </div>
        <div class="captcha">
            <p>Privacy - Terms</p>
        </div>
    </footer>
</body>

</html>

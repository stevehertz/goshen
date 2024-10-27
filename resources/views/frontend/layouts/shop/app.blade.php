<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
</body>

</html>

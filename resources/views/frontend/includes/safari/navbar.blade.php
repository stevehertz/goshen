<nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="{{ route('home') }}" class="navbar-brand ms-4 ms-lg-0">
        <img src="{{ asset(config('app.logo')) }}" alt="" width="200">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('safari') }}" class="nav-item nav-link @if(Route::is('safari'))
                active
            @endif">
                Home
            </a>
            <a href="{{ route('safari.about') }}" class="nav-item nav-link @if(Route::is('safari.about')) active @endif">
                About Us
            </a>
            <a href="{{ route('safari.our.story') }}" class="nav-item nav-link @if(Route::is('safari.our.story')) active @endif">
                Our Story
            </a>
            <a href="{{ route('safari.our.products') }}" class="nav-item nav-link @if(Route::is('safari.our.products')) active @endif">
                Our Products
            </a>
            <a href="{{ route('safari.sustainability') }}" class="nav-item nav-link @if(Route::is('safari.sustainability')) active @endif">
                Sustainability
            </a>
            <a href="{{ route('safari.news') }}" class="nav-item nav-link @if(Route::is('safari.news')) active @endif">
                News
            </a>
            <a href="{{ route('safari.contact') }}" class="nav-item nav-link @if(Route::is('safari.contact')) active @endif">
                Contact Us
            </a>
        </div>
        {{-- <div class="d-none d-lg-flex ms-2">
            <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                <small class="fa fa-search text-body"></small>
            </a>
            <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                <small class="fa fa-user text-body"></small>
            </a>
            <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                <small class="fa fa-shopping-bag text-body"></small>
            </a>
        </div> --}}
    </div>
</nav>


{{-- <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{ route('home') }}" class="navbar-brand p-0">
        <img src="{{ asset(config('app.logo')) }}" alt="{{ config('app.name') }}">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('safari') }}" class="nav-item nav-link @if (Route::is('safari')) active @endif">
                Home
            </a>
            <a href="{{ route('safari.about') }}" class="nav-item nav-link @if (Route::is('safari.about')) active @endif">
                About {{ config('app.name') }}
            </a>
            <a href="{{ route('safari.our.story') }}" class="nav-item nav-link @if (Route::is('safari.our.story')) active @endif">Our Story</a>
            <a href="{{ route('safari.our.products') }}" class="nav-item nav-link @if (Route::is('safari.our.products')) active @endif">Our Products</a>
            <a href="{{ route('safari.sustainability') }}" class="nav-item nav-link @if (Route::is('safari.sustainability')) active @endif">Sustainability</a>
            <a href="{{ route('safari.news') }}" class="nav-item nav-link @if (Route::is('safari.news')) active @endif">News</a>
            <a href="{{ route('safari.contact') }}" class="nav-item nav-link  @if (Route::is('safari.contact')) active @endif">Contact Us</a>
        </div>
    </div>
</nav> --}}

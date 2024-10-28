<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{ route('home') }}" class="navbar-brand p-0">
        {{-- <h1 class="text-primary"><i class="fas fa-search-dollar me-3"></i>Stocker</h1> --}}
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
                About
            </a>
            <a href="{{ route('safari.our.story') }}" class="nav-item nav-link @if (Route::is('safari.our.story')) active @endif">Our Story</a>
            <a href="{{ route('safari.our.products') }}" class="nav-item nav-link @if (Route::is('safari.our.products')) active @endif">Our Products</a>
            <a href="{{ route('safari.sustainability') }}" class="nav-item nav-link @if (Route::is('safari.sustainability')) active @endif">Sustainability</a>
            <a href="{{ route('safari.news') }}" class="nav-item nav-link @if (Route::is('safari.news')) active @endif">News</a>
            <a href="{{ route('safari.contact') }}" class="nav-item nav-link  @if (Route::is('safari.contact')) active @endif">Contact Us</a>
        </div>
    </div>
</nav>

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
            <a href="{{ route('safari') }}" class="nav-item nav-link @if (Route::is('safari'))
                active
            @endif">Home</a>
            <a href="#" class="nav-item nav-link">About</a>
            <a href="#" class="nav-item nav-link">Our Story</a>
            <a href="#" class="nav-item nav-link">Our Products</a>
            <a href="#" class="nav-item nav-link">Sustainability</a>
            <a href="#" class="nav-item nav-link">News</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link  @if (Route::is('contact'))
                active
            @endif">Contact Us</a>
        </div>
    </div>
</nav>
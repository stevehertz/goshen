<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fas fa-envelope"></i> {{ config('app.email') }}</li>
                            {{-- <li>Free Shipping for all Order of $99</li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            @include('frontend.includes.shop.social')
                        </div>
                        @auth
                            <div class="header__top__right__language">
                                <a href="{{ route('shop.orders.index') }}">
                                    <i class="fas fa-box"></i> My Orders
                                </a>
                            </div>
                        @endauth

                        <div class="header__top__right__auth">
                            @auth
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            @else
                                <a href="{{ route('login') }}">
                                    <i class="fas fa-user-alt"></i> Login
                                </a>
                            @endauth

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset(config('app.logo')) }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        @include('frontend.includes.shop.navbar')
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li>
                                <a href="{{ route('shop.wishlist') }}">
                                    <i class="fas fa-heart"></i> @auth <span>
                                        {{ \App\Models\Wishlist::countWishlist(Auth::user()->id) }}</span> @endauth
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('shop.cart.index') }}">
                                    <i class="fas fa-shopping-bag"></i>
                                    @auth
                                        <span>
                                            {{ \App\Models\Cart::countCart(Auth::user()->id) }}
                                        </span>
                                    @endauth

                                </a>
                            </li>
                        </ul>

                        @auth
                            <div class="header__cart__price">
                                item: <span>
                                    Kshs.{{ \App\Models\Cart::countTotalPrice(Auth::user()->id) }}
                                </span>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </div>
</header>

<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset(config('app.logo')) }}" alt="">
        </a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li>
                <a href="{{ route('shop.wishlist') }}">
                    <i class="fa fa-heart"></i> 
                    @auth
                        <span>{{ \App\Models\Wishlist::countWishlist(Auth::user()->id) }}</span>
                    @endauth
                    
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-shopping-bag"></i> 
                    @auth
                        <span>
                            {{ \App\Models\Cart::countCart(Auth::user()->id) }}
                        </span>
                    @endauth
                    
                </a>
            </li>
        </ul>
        @auth
            <div class="header__cart__price">item: <span>$150.00</span></div>
        @endauth
        
    </div>
    <div class="humberger__menu__widget">
        {{-- <div class="header__top__right__language">
            <img src="{{ asset('img/shop/language.png') }}" alt="">
            <div>English</div>
            <span class="arrow_carrot-down"></span>
            <ul>
                <li><a href="#">Spanis</a></li>
                <li><a href="#">English</a></li>
            </ul>
        </div> --}}
        <div class="header__top__right__auth">
            @auth
            
            @else
                <a href="#">
                    <i class="fa fa-user"></i> Login
                </a>
            @endauth
            
        </div>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        @include('frontend.includes.shop.navbar')
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        @include('frontend.includes.shop.social')
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> {{ config('app.email') }}</li>
        </ul>
    </div>
</div>
<!-- Humberger End -->

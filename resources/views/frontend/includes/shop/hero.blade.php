<section class="hero @if (!Route::is('shop')) hero-normal @endif">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fas fa-bars"></i>
                        <span>All categories</span>
                    </div>
                    <ul>
                        @forelse ($categories as $category)
                            <li>
                                <a href="#">
                                    {{ $category->title }}
                                </a>
                            </li>
                        @empty
                            <li>
                                <a href="#">
                                    No Category Found!
                                </a>
                            </li>
                        @endforelse
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>{{ config('app.phone') }}</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
                @if (Route::is('shop'))
                    <div class="hero__item set-bg" data-setbg="{{ asset('img/shop/hero/banner.jpg') }}">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

<section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/shop/breadcrumb.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>
                        {{ \App\Helper\Helper::getPageTitle() }}
                    </h2>
                    <div class="breadcrumb__option">
                        <a href="{{ route('shop') }}">Home</a>
                        @php
                            $breadcrumbs = \App\Helper\Helper::generateBreadcrumb(request());
                        @endphp
                        @foreach ($breadcrumbs as $breadcrumb)
                            @if (!$loop->last)
                                <span>
                                    {{ $breadcrumb['label'] }}
                                </span>
                            @else
                                <span>
                                    {{ $breadcrumb['label'] }}
                                </span>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

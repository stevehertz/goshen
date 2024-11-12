<ul>
    <li @if (Route::is('shop')) class="active" @endif>
        <a href="{{ route('shop') }}">
            {{ __('nav.home') }}
        </a>
    </li>
    <li @if (Route::is('shop.store')) class="active" @endif>
        <a href="{{ route('shop.store') }}">
            {{ __('nav.our_store') }}
        </a>
    </li>
    <li @if (Route::is('shop.bulk.purchase')) class="active" @endif>
        <a href="{{  route('shop.bulk.purchase')  }}">
            {{ __('nav.bulk_purchase') }}
        </a>
    </li>
    <li @if (Route::is('shop.contact')) class="active" @endif>
        <a href="{{ route('shop.contact') }}">
            {{ __('nav.contact_us') }}
        </a>
    </li>
</ul>

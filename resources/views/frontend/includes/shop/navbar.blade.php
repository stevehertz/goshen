<ul>
    <li @if (Route::is('shop')) class="active" @endif>
        <a href="{{ route('shop') }}">
            Home
        </a>
    </li>
    <li>
        <a href="#">
            Shop
        </a>
    </li>
    <li @if (Route::is('shop.contact')) class="active" @endif>
        <a href="{{ route('shop.contact') }}">
            Contact
        </a>
    </li>
</ul>

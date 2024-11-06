<div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
    <div class="col-lg-6 px-5 text-start">
        <small><i class="fa fa-map-marker-alt me-2"></i>{{ config('app.location') }}</small>
        <small class="ms-4">
            <a href="mailto:{{ config('app.email') }}">
                <i class="fa fa-envelope me-2"></i>{{ config('app.email') }}
            </a>
        </small>
    </div>
    <div class="col-lg-6 px-5 text-end">
        <small>Follow us:</small>
        <a class="text-body ms-3" href="{{ config('app.facebook') }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a class="text-body ms-3" href="{{ config('app.x') }}" target="_blank"><i class="fab fa-twitter"></i></a>
        <a class="text-body ms-3" href="{{ config('app.linkedin') }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <a class="text-body ms-3" href="{{ config('app.instagram') }}" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
</div>

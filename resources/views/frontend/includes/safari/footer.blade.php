<div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <img src="{{ asset(config('app.logo')) }}" alt="" width="200">
                <p>
                    Goshen pioneers agricircularity in Kenya, transforming tropical fruits into value added premium
                    dried fruit snacks and food ingredients.
                </p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href="{{ config('app.x') }}"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href="{{ config('app.facebook') }}"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href="{{ config('app.youtube') }}"><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-0" href="{{ config('app.linkedin') }}"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="mb-4">Address</h4>
                <p class="footer-address"><i class="fa fa-map-marker-alt me-3"></i>{{ config('app.location') }}</p>
                <p>
                    <a class="btn btn-contact" href="tel:{{ config('app.phone') }}">
                        <i class="fa fa-phone-alt me-3"></i>{{ config('app.phone') }}
                    </a>
                </p>
                <p>
                    <a class="btn btn-contact" href="mailto:{{ config('app.email') }}">
                        <i class="fa fa-envelope me-3"></i>{{ config('app.email') }}
                    </a>
                </p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="mb-4">Quick Links</h4>
                <a class="btn btn-link" href="{{ route('safari.about.us') }}">About Us</a>
                <a class="btn btn-link" href="{{ route('safari.our.products') }}">Our Products</a>
                <a class="btn btn-link" href="{{ route('safari.sustainability') }}">Sustainability</a>
                <a class="btn btn-link" href="{{ route('safari.contact') }}">Contact Us</a>

                <a class="btn btn-link" href="">Terms & Condition</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="mb-4">Newsletter</h4>
                <p class="footer-address">We are keen on telling our story. Kindly subscribe for the latest updates.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                        placeholder="Your email">
                    <button type="button"
                        class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">{{ config('app.name') }}</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    {{-- Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                    <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>

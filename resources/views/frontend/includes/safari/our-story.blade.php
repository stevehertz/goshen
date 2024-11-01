<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">About Us</h4>
                    <h1 class="display-5 mb-4">
                        Goshen: Pioneering Sustainable Agriculture in Africa
                    </h1>
                    <p class="mb-4">
                        At Goshen, we are dedicated to transforming Africa's tropical fruits into value-added premium
                        food products and food ingredients. Our mission focuses on minimizing post-harvest losses while
                        providing a sustainable market for African smallholder farmers. This has managed to enhance
                        farmer incomes while managing environmental impacts. Goshen is here for good to contribute to
                        building a more sustainable and dignified food system.
                    </p>
                    <div class="row g-4">
                        {{-- <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="d-flex">
                                <div><i class="fas fa-lightbulb fa-3x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Business Consuluting</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="d-flex">
                                <div><i class="bi bi-bookmark-heart-fill fa-3x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Year Of Expertise</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">
                                Discover Now
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Call Us</h4>
                                    <p class="mb-0 fs-5" style="letter-spacing: 1px;">
                                        {{ config('app.phone') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                <div class="rounded position-relative overflow-hidden">
                    <img src="{{ asset('img/frontend/about-1.png') }}" class="img-fluid rounded w-100" alt="">

                    <div class="" style="position: absolute; top: -15px; right: -15px;">
                        {{-- <img src="{{ asset('img/frontend/about-3.png') }}" class="img-fluid"
                            style="width: 150px; height: 150px; opacity: 0.7;" alt=""> --}}
                    </div>
                    <div class="" style="position: absolute; top: -20px; left: 10px; transform: rotate(90deg);">
                        {{-- <img src="{{ asset('img/frontend/about-4.png') }}" class="img-fluid"
                            style="width: 100px; height: 150px; opacity: 0.9;" alt=""> --}}
                    </div>
                    <div class="rounded-bottom" style="padding-top: 10px;">
                        <img src="{{ asset('img/frontend/about-2.png') }}" class="img-fluid rounded-bottom w-100"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

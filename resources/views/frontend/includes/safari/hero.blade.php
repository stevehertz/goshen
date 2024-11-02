<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('img/frontend/carousel-1.jpg') }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7">
                                <h1 class="display-2 mb-5 animated slideInDown">
                                    From African Farms to Global Tables
                                </h1>
                                <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">
                                    Watch Our Video
                                </a>
                                <a href="{{ route('safari.contact') }}"
                                    class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ 'img/frontend/carousel-2.jpg' }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7">
                                <h1 class="display-2 mb-5 animated slideInDown">
                                    Kenya’s Premier  Agricircular Tropical Fruits Processor and Exporter
                                </h1>
                                <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">
                                    Watch Our Video
                                </a>
                                <a href=""
                                    class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

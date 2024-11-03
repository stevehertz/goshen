<div class="container-xxl py-5 about-section">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="{{ asset('img/frontend/about-2.jpg') }}">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-5 mb-4">
                    Pioneering Sustainable Agriculture in Africa
                </h1>
                <p class="mb-4">
                    Welcome to Goshen Farm Exporters Ltd, where we embody excellence in African Agriculture. Our purpose
                    is rooted in empowering African small-scale farmers, ensuring stable incomes through sustainable
                    practices that transcend borders and unite households worldwide with African-inspired produce. At
                    Goshen, we believe in the power of agricircularity—optimizing global resources by creating
                    closed-loop systems in agriculture. Our dream is to extend beyond mere profitability; we daily aim
                    to foster positive impacts that resonate from the fields of Africa to markets globally. By 2030, we
                    aspire to empower over a million smallholder farmers, creating sustainable and resilient markets
                    that place unwavering quality at the forefront of our operations.
                </p>
                @if (!Route::is('safari'))
                    <p class="mb-4">
                        We are committed to nurturing a sustainable future where land flourishes, farmers thrive, and
                        consumers enjoy safe, nutritious food. Our goal is to create robust markets for smallholder
                        farmers
                        across the globe.
                    </p>
                    <p class="mb-4">
                        Goshen is more than an agricultural company; we are a movement dedicated to uplifting
                        communities
                        worldwide. With a commitment to excellence and sustainability, we envision a future where every
                        smallholder farmer is empowered, every household enjoys nutritious food, and our practices
                        exemplify
                        environmental stewardship. Every harvest and product is a step towards a sustainable and
                        prosperous
                        future.
                    </p>
                @endif

                @if (Route::is('safari'))
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="{{ route('safari.about.us') }}">
                        Read More..
                    </a>
                @endif
            </div>

            @if (!Route::is('safari'))
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h6 class="display-5 mb-4">
                        The Goshen Vision
                    </h6>
                    <p class="mb-4">
                        To be Africa's leading agri-circular food producer, processor and exporter by 2035
                    </p>
                    <h6 class="display-5 mb-4">
                        Our Mission
                    </h6>
                    <p class="mb-4">
                        To sustainably grow into Africa's leading food processor meeting expectations of our
                        stakeholders.
                        Customers, Producers, Partners, Staff & Shareholders.
                    </p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">
                        Watch our video
                    </a>
                </div>

                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="{{ asset('img/frontend/about-3.jpg') }}">
                    </div>
                </div>
            @endif


        </div>
    </div>
</div>

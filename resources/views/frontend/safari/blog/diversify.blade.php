@extends('frontend.layouts.safari.app')

@section('title', 'Farmers Training - ' . config('app.name'))

@section('content')

    <div class="container-xxl py-5 our-story-section">
        <div class="container">
            <div class="row g-5 align-items-center">

                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">
                        Diversification of Tropical fruit product
                    </h1>
                    <p class="mb-4">
                        Goshen has successfully integrated farmers from Lower Eastern Kenya and the Coast into its sourcing
                        portfolio, promoting sustainability and economic resilience. Initially focused on the value addition
                        of mangoes, Goshen has expanded its product range to include other tropical fruits such as coconut,
                        papaya, and pineapple. This diversification not only enhances factory efficiency but also caters to
                        a broader clientele seeking their favorite fruit snacks.
                    </p>
                    <p class="mb-4">
                        By integrating a wide variety of crops, Goshen contributes to sustainable agricultural practices,
                        reducing environmental impacts while improving soil health. Moreover, by offering training and
                        support to local farmers, Goshen is actively reducing poverty in these communities, providing them
                        with opportunities to generate stable incomes and improve their livelihoods.
                    </p>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="{{ asset('img/blogs/blog-2.jpg') }}">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="{{ asset('img/blogs/blog-3.jpg') }}">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="mb-4">
                        Goshen’s commitment to minimizing post-harvest losses is a critical aspect of its operations. By
                        implementing efficient processing techniques and ensuring timely distribution, the organization
                        maximizes the value of the harvested fruits, ensuring that less goes to waste.
                    </p>
                    <p class="mb-4">
                        The products are available for bulk export, domestic bulk sales, and retail, offered under both
                        private labels and the company's own brand. Through these initiatives, Goshen exemplifies how
                        agricultural diversification can drive sustainability, economic growth, and community empowerment.
                    </p>

                </div>
            </div>
        </div>
    </div>



@endsection

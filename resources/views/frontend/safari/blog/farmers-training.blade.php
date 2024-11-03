@extends('frontend.layouts.safari.app')

@section('title', 'Farmers Training - ' . config('app.name'))

@section('content')

    <div class="container-xxl py-5 our-story-section">
        <div class="container">
            <div class="row g-5 align-items-center">

                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">
                        Agroecology For Sustainability
                    </h1>
                    <p class="mb-4">
                        Goshen's initiative in partnership with CIAT to support mango smallholder farmers in Makueni is a
                        remarkable example of embracing agroecology without resorting to monocropping.
                    </p>
                    <p class="mb-4">
                        As farmers face the dual challenge of feeding a growing population while preserving biodiversity,
                        Goshen is pioneering sustainable agricultural practices that prioritize ecological balance. Goshen
                        is championing diverse farming systems that incorporate techniques like intercropping, use of
                        organic fertilizer, and crop rotations and use of fruit fly traps.
                    </p>
                    <p class="mb-4">
                        These practices not only enhance soil fertility but also create habitats for beneficial organisms, improving pest management naturally.For instance, smallholder farmers are encouraged to cultivate a mix of mangoes with other staple food crops, fostering a symbiotic relationship that enhances productivity while practices like composting and water-saving techniques optimize resource use. By prioritizing agroecological practices, Goshen empowers farmers to maintain their livelihoods and grow food in harmony with nature. This holistic approach not only protects the environment but also strengthens local economies, proving that a diverse, resilient agricultural ecosystem is possible—even in challenging climates like Makueni. Such initiatives are vital for a sustainable agricultural future.
                    </p>
                </div>

                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="{{ asset('img/blogs/blog-1.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

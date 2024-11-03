@extends('frontend.layouts.safari.app')

@section('title', 'Farmers Training - ' . config('app.name'))

@section('content')

    <div class="container-xxl py-5 our-story-section">
        <div class="container">
            <div class="row g-5 align-items-center">

                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">
                        Goshen's Dried Chilli Mango Flavour : A Tale of Innovation in Healthy Snacking
                    </h1>
                    <p class="mb-4">
                        In response to the growing consumer demand for adventurous, yet natural snacking options, Goshen's
                        Chili Mango emerges as a masterful fusion of local ingredients and innovative food processing. This
                        premium snack transforms sun-ripened mangoes from Kenya into crispy delights, enhanced with the
                        perfect kick of bird's eye chili from Makueni's small-scale farmers.
                    </p>
                    <p class="mb-4">
                        The product exemplifies strategic sourcing and thoughtful product development. By partnering with
                        farmers in semi-arid Makueni, Goshen not only ensures a sustainable supply chain but also supports
                        local agricultural communities. The choice of bird's eye chili is particularly strategic, offering
                        the ideal heat profile that complements the mango's natural sweetness without overwhelming it.
                    </p>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="{{ asset('img/blogs/blog-4.jpg') }}">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="{{ asset('img/blogs/blog-5.jpg') }}">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="mb-4">
                        The zero-additives approach positions the product perfectly in the rapidly growing clean-label
                        market segment. Each crisp delivers a sophisticated flavor journey – starting with tropical
                        sweetness and building to a satisfying spicy finish – while maintaining the nutritional benefits of
                        fresh mangoes. This combination particularly appeals to health-conscious consumers seeking exotic
                        flavor experiences.
                    </p>
                    <p class="mb-4">
                        Market differentiation comes from the unique texture transformation – the dehydration process
                        creates a satisfying crunch while preserving the fruit's natural intensity. This innovative snack
                        represents a new category that bridges the gap between traditional dried fruits and contemporary
                        flavor-forward snacking.
                    </p>

                </div>
            </div>
        </div>
    </div>



@endsection

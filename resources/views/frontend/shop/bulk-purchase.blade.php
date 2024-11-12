@extends('frontend.layouts.shop.app')

@section('content')
    <!-- Breadcrumb Section Begin -->
    @include('frontend.includes.shop.breadcrumb')
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="fas fa-phone-alt"></span>
                        <h4>Phone</h4>
                        <p>
                            <a href="tel:{{ config('app.phone') }}" style="color:#000;">
                                {{ config('app.phone') }}
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="fas fa-map-marker-alt"></span>
                        <h4>Address</h4>
                        <p>{{  config('app.location')  }}</p>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="fas fa-clock"></span>
                        <h4>Open time</h4>
                        <p>10:00 am to 23:00 pm</p>
                    </div>
                </div> --}}
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="fas fa-envelope"></span>
                        <h4>Email</h4>
                        <p>
                            <a href="mailto:{{ config('app.email') }}" style="color:#000;">
                                {{ config('app.email') }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>
                            Contact us to place your order
                        </h2>
                    </div>
                </div>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Your name">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Your Email">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea placeholder="Your message"></textarea>
                        <button type="submit" class="site-btn">SEND MESSAGE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

@endsection
@extends('frontend.layouts.safari.app')

@section('title', 'Contact Us - ' . config('app.name'))

@section('content')

    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Contact Us</h1>
                <p>Want to engage with us? Kindly reach out to us below.</p>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-primary text-white d-flex flex-column justify-content-center h-100 p-5">
                        <h5 class="text-white">Call Us</h5>
                        <p class="mb-5">
                            <a href="tel:{{ config('app.phone') }}" class="text-white">
                                <i class="fa fa-phone-alt me-3"></i>{{ config('app.phone') }}
                            </a>
                        </p>
                        <h5 class="text-white">Email Us</h5>
                        <p class="mb-5">
                            <a href="mailto:{{ config('app.email') }}" class="text-white">
                                <i class="fa fa-envelope me-3"></i>{{ config('app.email') }}
                            </a>
                        </p>
                        <h5 class="text-white">Office Address</h5>
                        <p class="mb-5">
                            <i class="fa fa-map-marker-alt me-3"></i>{{ config('app.location') }}
                        </p>
                        <h5 class="text-white">Follow Us</h5>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href="{{ config('app.x') }}"
                                target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1"
                                href="{{ config('app.facebook') }}" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1"
                                href="{{ config('app.youtube') }}" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-0"
                                href="{{ config('app.linkedin') }}" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <form action="{{ route('contact') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                    <label for="name">Your Name</label>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Your Email" required>
                                    <label for="email">Your Email</label>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" name="subject" class="form-control" id="subject"
                                        placeholder="Subject" required>
                                    <label for="subject">Subject</label>
                                    @error('subject')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="message" class="form-control" placeholder="Leave a message here" id="message" style="height: 200px"
                                        required></textarea>
                                    <label for="message">Message</label>
                                    @error('message')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Google Map Start -->
    <div class="container-xxl px-0 wow fadeIn" data-wow-delay="0.1s" style="margin-bottom: -6px;">
        <iframe class="w-100" style="height: 450px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.284594011365!2d38.214611273697315!3d-2.7316801972456073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18395aa7f93f7acf%3A0x14c79ac21eb0cec!2sMombasa%20Road!5e0!3m2!1sen!2ske!4v1730787155307!5m2!1sen!2ske"
            frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Google Map End -->

@endsection

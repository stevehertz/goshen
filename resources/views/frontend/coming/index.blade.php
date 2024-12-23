<!DOCTYPE html>
<html lang="en">

<head>

    <title>{{ config('app.name') }}</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="team" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ asset('css/coming/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/coming/vegas.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/coming/font-awesome.min.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('css/coming/templatemo-style.css') }}">

</head>

<body>

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>


    <!-- GRID LINE -->
    <section class="grid">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2">
                    <div class="grid-line"></div>
                </div>
                <div class="col-md-2 col-sm-2">
                    <div class="grid-line"></div>
                </div>
                <div class="col-md-2 col-sm-2">
                    <div class="grid-line"></div>
                </div>
                <div class="col-md-2 col-sm-2">
                    <div class="grid-line"></div>
                </div>
                <div class="col-md-2 col-sm-2">
                    <div class="grid-line"></div>
                </div>

            </div>
        </div>
    </section>


    {{-- <div class="menu-bg"></div>
    <div class="menu-burger">☰</div>

    <div class="menu-items">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-4 col-sm-6">
                    <h1>Navigations</h1>
                    <ul class="menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Our Studio</a></li>
                        <li><a href="#">Journal</a></li>
                        <li><a href="#">Start a project</a></li>
                        <li><a href="#">Email Us</a></li>
                    </ul>
                </div>

                <div class="col-md-4 col-sm-6">
                    <address>
                        <h1>Our Studio</h1>
                        <p>1234 New Street View, <br> Kumasi, Ghana</p>
                        <div class="google-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1197183.8373802372!2d-1.9415093691103689!3d6.781986417238027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb96f349e85efd%3A0xb8d1e0b88af1f0f5!2sKumasi+Central+Market!5e0!3m2!1sen!2sth!4v1532967884907"
                                allowfullscreen></iframe>
                        </div>
                    </address>
                </div>

                <div class="col-md-12 col-sm-12">
                    <ul class="social-icon">
                        <li class="line"></li>
                        <li><a href="https://fb.com/templatemo" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="https://plus.google.com/+templatemo" class="fa fa-google"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- HOME -->
    <section id="home">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="home-info">
                        <h1>
                            We are getting ready <br>to launch new CREATIVE site!
                        </h1>
                        <!-- You can change the date time in init.js file -->
                        <ul class="countdown">
                            <li>
                                <span class="days">14</span>
                                <h3>Days</h3>
                            </li>
                            <li>
                                <span class="hours">10</span>
                                <h3>hours</h3>
                            </li>
                            <li>
                                <span class="minutes">15</span>
                                <h3>minutes</h3>
                            </li>
                            <li>
                                <span class="seconds">34</span>
                                <h3>seconds</h3>
                            </li>
                        </ul>
                        <div class="subscribe-form">
                            <form action="" method="get">
                                <input type="email" name="email" class="form-control" placeholder="Enter your email"
                                    required="">
                                <button type="submit" class="form-control"><i class="fa fa-envelope-o"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SCRIPTS -->
    <script src="{{ asset('js/coming/jquery.js') }}"></script>
    <script src="{{ asset('js/coming/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/coming/vegas.min.js') }}"></script>
    <script src="{{ asset('js/coming/countdown.js') }}"></script>
    <script src="{{ asset('js/coming/init.js') }}"></script>
    <script src="{{ asset('js/coming/custom.js') }}"></script>

</body>

</html>

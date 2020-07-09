<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vintage Furniture</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Oswald:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vintage/vintagefonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('vintage/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vintage/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('vintage/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vintage/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vintage/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vintage/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vintage/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('vintage/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('vintage/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('vintage/css/style.css') }}">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <br>

    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-xl-2">
                    <h3 class="mb-0 site-logo m-0 p-0"><a href="{{ url('/') }}" class="mb-0">Vintage</a></h3>
                </div>

                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                            <li><a href="#about-section" class="nav-link">About</a></li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                                <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item bg-dark" href="{{ url('bedroom') }}">Bedroom</a>
                                    <a class="dropdown-item bg-dark" href="{{ url('lounge') }}">Lounge</a>
                                    <a class="dropdown-item bg-dark" href="{{ url('dinning') }}">Dinning</a>
                                </div>
                            </li>
                            <li><a href="{{ url('contact') }}" class="nav-link">Contact</a></li>
                            <li><a href="{{ url('place-order') }}" class="nav-link">Place Order</a></li>
                            <li><a href="{{ url('login') }}" class="nav-link">Login/SignUp</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- toggle menu-->
                <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white float-right"><span class="icon-menu h3"></span></a></div>

            </div>
        </div>

    </header>


        @yield('content')

<!-- footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-5">
                            <h2 class="footer-heading mb-4">About Us</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
                        </div>
                        <div class="col-md-3 mx-auto">
                            <h2 class="footer-heading mb-4">Quick Links</h2>
                            <ul class="list-unstyled">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-4">
                        <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
                        <form action="#" method="post" class="footer-subscribe">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="">
                        <h2 class="footer-heading mb-4">Follow Us</h2>
                        <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                    </div>


                </div>
            </div>
        </div>

    </footer>

</div> <!-- .site-wrap -->

<a href="#top" class="gototop"><span class="icon-angle-double-up"></span></a>

<script src="{{ asset('vintage/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('vintage/js/jquery-ui.js') }}"></script>
<script src="{{ asset('vintage/js/popper.min.js') }}"></script>
<script src="{{ asset('vintage/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vintage/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('vintage/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('vintage/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('vintage/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('vintage/js/aos.js') }}"></script>
<script src="{{ asset('vintage/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('vintage/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('vintage/js/main.js') }}"></script>

</body>
</html>

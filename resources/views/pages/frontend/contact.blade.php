<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>{{$title}}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('frontend/img/core-img/favicon.ico')}}">

    <!-- Core Stylesheet -->
    <link href="{{asset('frontend/style.css')}}" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">

</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="selene-preloader"></div>
    </div>
    
    <!-- ***** Header Area Start ***** -->
    <header class="header_area animated">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Menu Area Start -->
                <div class="col-12">
                    <div class="menu_area">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <!-- Logo -->
                            <a class="navbar-brand" href="#">{{$title}}</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#selene-navbar" aria-controls="selene-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <!-- Menu Area -->
                            <div class="collapse navbar-collapse" id="selene-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                                
                                <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>

                                <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Login</a></li>
                            </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="selene-breadcumb-area">
        <!-- Shape -->
        <div class="welcome-bg-shape">
            <img class="welcome-first-shape" src="{{asset('frontend/img/core-img/welcome-bg-1.png')}}" alt="">
            <img class="welcome-second-shape" src="{{asset('frontend/img/core-img/welcome-bg-2.png')}}" alt="">
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <section class="contact-area section_padding_100">
        <div class="container">
            <div class="row">
                <!-- Contact Form Area -->
                <div class="col-12 col-md-6">
                    <div class="contact-form-area">
                        <h2>Contact form</h2>
                        <form action="#">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <input type="text" class="form-control" id="name" placeholder="Name">
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="email" class="form-control" id="email" placeholder="E-mail">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
                                </div>
                                <button type="submit">send</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Contact Information -->
                <div class="col-12 col-md-6">
                    <div class="contact-information">
                        <h2>Give us a shout</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="single-info">
                            <i class="fa fa-map"></i>
                            <span>4127 Raoul Wallenber4127 Raoul Wallen <br>berg Place</span>
                        </div>
                        <div class="single-info">
                            <i class="fa fa-phone"></i>
                            <span>203-808-8613</span>
                        </div>
                        <div class="single-info">
                            <i class="fa fa-envelope"></i>
                            <span>Milothemes@gmail.com</span>
                        </div>
                        <!--<div class="contact-social-info">
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area text-center clearfix">
        <!-- Shape -->
        <div class="footer-bg-shape">
            <img src="{{asset('frontend/img/core-img/footer-bg.png')}}" alt="Footer Shape">
        </div>
        <div class="container h-100">
            <div class="row h-100 justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="footer-content">
                        <h2>Download App</h2>
                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. </h4>
                    </div>
                    @include('inc.messages')
                    <div class="app-download-area">
                    
                        <div class="app-download-btn active">
                            <!-- Windows Store Btn -->
                            <a href="{{route('windows')}}"><i class="fa fa-windows"></i><p class="mb-0"><span>available on</span> Windows Store</p></a>
                        </div>
                        <div class="app-download-btn active">
                            <!-- Google Store Btn -->
                            <a href="{{route('android')}}"><i class="fa fa-android"></i><p class="mb-0"><span>available on</span> Google Store</p></a>
                        </div>
                        <div class="app-download-btn">
                            <!-- Apple Store Btn -->
                            <a href="{{route('iphone')}}"><i class="fa fa-apple"></i><p class="mb-0"><span>available on</span> Apple Store</p></a>
                        </div>
                    </div>
                    <div class="footer-social-info">
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                    <!-- Foooter Text-->
                    <div class="copyright-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> in India
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('frontend/js/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('frontend/js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('frontend/js/active.js')}}"></script>
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="{{asset('frontend/js/map-active.js')}}"></script>

</body>

</html>
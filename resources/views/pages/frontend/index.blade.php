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
                                    
                                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>

                                    <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                                </ul>
                                <!-- Search btn -->
                                <div class="search-button d-lg-none">
                                    <a href="#" class="search-btn"><img src="{{asset('frontend/img/core-img/search-icon.png')}}" alt="Search"></a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Search Form Area Start ***** -->
    <div class="search-form-area">
        <!-- Remove btn -->
        <div class="remove-btn">
            <i class="fa fa-times"></i>
        </div>
        <!-- Search Form -->
        <form action="#" method="post">
            <input type="search" name="search" id="search" placeholder="Type keywords &amp; hit enter">
            <button type="submit" class="d-none"><img src="{{asset('frontend/img/core-img/search-icon.png')}}" alt="Search"></button>
        </form>
    </div>
    <!-- ***** Search Form Area End ***** -->

    <!-- ***** Wellcome Area Start ***** -->
    <section class="welcome_area clearfix" id="home">

        <!-- Shape -->
        <div class="welcome-bg-shape">
            <img class="welcome-first-shape" src="{{asset('frontend/img/core-img/welcome-bg-1.png')}}" alt="">
            <img class="welcome-second-shape" src="{{asset('frontend/img/core-img/welcome-bg-2.png')}}" alt="">
        </div>

        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md-7">
                    <div class="welcome-content">
                        <h2><span>SELENE</span> THE APP</h2>
                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta.</h4>
                    </div>
                    <div class="app-download-area">
                        <div class="app-download-btn active">
                            <!-- Google Store Btn -->
                            <a href="#"><i class="fa fa-android"></i><p class="mb-0"><span>available on</span> Google Store</p></a>
                        </div>
                        <div class="app-download-btn">
                            <!-- Apple Store Btn -->
                            <a href="#"><i class="fa fa-apple"></i><p class="mb-0"><span>available on</span> Apple Store</p></a>
                        </div>
                    </div>
                    <!-- Scroll btn -->
                    <div class="scroll-down-btn">
                        <a href="#about" class="scrollDown">Scroll Down <i class="fa fa-angle-double-down scroll-down" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Device -->
        <div class="welcome-mobile-device text-right">
            <img src="{{asset('frontend/img/bg-img/wel-dev-1.png')}}" alt="">
            <img src="{{asset('frontend/img/bg-img/wel-dev-2.png')}}" alt="">
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->

    <!-- ***** About App Area Start ***** -->
    <div class="about-app-area" id="about">

        <!-- Shape -->
        <div class="about-us-bg-shape">
            <img src="{{asset('frontend/img/core-img/about-bg.png')}}" alt="">
        </div>

        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- About App Slider -->
                <div class="col-12 col-md-7">
                    <div class="about-apps-slider owl-carousel">
                        <!-- Single Slide -->
                        <div class="app-single-slide">
                            <img src="{{asset('frontend/img/bg-img/slide-1.jpg')}}" alt="">
                        </div>
                        <!-- Single Slide -->
                        <div class="app-single-slide">
                            <img src="{{asset('frontend/img/bg-img/slide-2.jpg')}}" alt="">
                        </div>
                        <!-- Single Slide -->
                        <div class="app-single-slide">
                            <img src="{{asset('frontend/img/bg-img/slide-3.jpg')}}" alt="">
                        </div>
                        <!-- Single Slide -->
                        <div class="app-single-slide">
                            <img src="{{asset('frontend/img/bg-img/slide-2.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <!-- About App Content -->
                <div class="col-12 col-md-5">
                    <div class="about-app-content">
                        <h2>Mobile ready</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta.Lorem ipsum dolor sit amet.</p>
                        <div class="app-feature-icon d-flex">
                            <!-- Single App Feature Icon  -->
                            <div class="single-app-feature-icon d-flex align-items-center justify-content-center">
                                <img src="{{asset('frontend/img/bg-img/icon-1.png')}}" alt="">
                            </div>
                            <!-- Single App Feature Icon  -->
                            <div class="single-app-feature-icon d-flex align-items-center justify-content-center">
                                <img src="{{asset('frontend/img/bg-img/icon-2.png')}}" alt="">
                            </div>
                            <!-- Single App Feature Icon  -->
                            <div class="single-app-feature-icon d-flex align-items-center justify-content-center">
                                <img src="{{asset('frontend/img/bg-img/icon-3.png')}}" alt="">
                            </div>
                            <!-- Single App Feature Icon  -->
                            <div class="single-app-feature-icon d-flex align-items-center justify-content-center">
                                <img src="{{asset('frontend/img/bg-img/icon-4.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** About App Area End ***** -->

    <!-- ***** App FAQ Area Start ***** -->
    <section class="app-faq-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="app-faq-content">
                        <h2>An app for Each <br>&amp; Everyone</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta.Lorem ipsum dolor sit amet.</p>
                        <!-- Accordian Area -->
                        <div class="accordions" id="accordion" role="tablist" aria-multiselectable="true">
                            <!-- single accordian area start -->
                            <div class="panel single-accordion">
                                <h6><a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Curabitur pulvinar vel augue sit amet vestibulum
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                                <div id="collapseOne" class="accordion-content collapse">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis laudantium, deserunt esse, aspernatur, laborum ipsa necessitatibus dolor architecto sint minima suscipit. Blanditiis perspiciatis animi ipsam, officia modi aperiam aut temporibus.</p>
                                </div>
                            </div>
                            <!-- single accordian area start -->
                            <div class="panel single-accordion">
                                <h6>
                                    <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                                </h6>
                                <div id="collapseTwo" class="accordion-content collapse">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur fugit odio, voluptatem dolor possimus maxime sint debitis id vel numquam, porro aperiam eos distinctio optio perspiciatis officia, quisquam repellendus tenetur!</p>
                                </div>
                            </div>
                            <!-- single accordian area start -->
                            <div class="panel single-accordion">
                                <h6>
                                    <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">Donec scelerisque ante id efficitur pharetra 
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                                </h6>
                                <div id="collapseThree" class="accordion-content collapse">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus repudiandae nam ad corrupti illo pariatur inventore ratione reiciendis quidem soluta exercitationem, incidunt, expedita, cupiditate perspiciatis debitis temporibus qui. Culpa, facere.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- App Users Map Area -->
        <div class="app-users-map-area">
            <img src="{{asset('frontend/img/bg-img/world-map.png')}}" alt="">
            <div class="map-pins">
                <!-- Single Pin -->
                <div class="single-map-pin"></div>
                <!-- Single Pin -->
                <div class="single-map-pin"></div>
                <!-- Single Pin -->
                <div class="single-map-pin"></div>
                <!-- Single Pin -->
                <div class="single-map-pin"></div>
            </div>
        </div>
    </section>
    <!-- ***** App FAQ Area End ***** -->

    <!-- ***** Cool Facts Area Start ***** -->
    <section class="cool_facts_area clearfix">

        <div class="cool-facts-bg-shape">
            <!-- Shape -->
            <img src="{{asset('frontend/img/core-img/counters.png')}}" alt="">
            <!-- Cool Facts Content -->
            <div class="coolfacts-content">
                <div class="container">
                    <div class="row">
                        <!-- Single Cool Fact -->
                        <div class="col-12 col-sm-6 col-md">
                            <div class="single-cool-fact wow fadeInUp" data-wow-delay="0.2s">
                                <div class="counter-area">
                                    <h3><span class="counter">10</span></h3>
                                </div>
                                <div class="cool-facts-content">
                                    <p>Years of Experience</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Cool Fact-->
                        <div class="col-12 col-sm-6 col-md">
                            <div class="single-cool-fact wow fadeInUp" data-wow-delay="0.4s">
                                <div class="counter-area">
                                    <h3>+<span class="counter">500</span></h3>
                                </div>
                                <div class="cool-facts-content">
                                    <p>Happy Clients</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Cool Fact -->
                        <div class="col-12 col-sm">
                            <div class="single-cool-fact wow fadeInUp" data-wow-delay="0.6s">
                                <div class="counter-area">
                                    <h3><span class="counter">17</span>k</h3>
                                </div>
                                <div class="cool-facts-content">
                                    <p>Followers on FB</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Cool Fact -->
                        <div class="col-12 col-sm">
                            <div class="single-cool-fact wow fadeInUp" data-wow-delay="0.8s">
                                <div class="counter-area">
                                    <h3><span class="counter">132</span></h3>
                                </div>
                                <div class="cool-facts-content">
                                    <p>Finished Projects</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Cool Fact -->
                        <div class="col-12 col-sm">
                            <div class="single-cool-fact wow fadeInUp" data-wow-delay="0.8s">
                                <div class="counter-area">
                                    <h3><span class="counter">03</span></h3>
                                </div>
                                <div class="cool-facts-content">
                                    <p>Coffes a day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Cool Facts Area End ***** -->

    <!-- ***** App Feature Area Start ***** -->
    <section class="app-features-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="app-features-content">
                        <h2>All the best features</h2>
                        <div class="row">
                            <!-- Single Feature Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-feature-area">
                                    <img src="{{asset('frontend/img/bg-img/feature-1.png')}}" alt="">
                                    <h5>No1 in Sales!</h5>
                                    <p>Etiam nec odio vestibulum est mat tis effic iturut magna.</p>
                                </div>
                            </div>
                            <!-- Single Feature Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-feature-area">
                                    <img src="{{asset('frontend/img/bg-img/feature-2.png')}}" alt="">
                                    <h5>Online Marketing</h5>
                                    <p>Etiam nec odio vestibulum est mat tis effic iturut magna.</p>
                                </div>
                            </div>
                            <!-- Single Feature Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-feature-area">
                                    <img src="{{asset('frontend/img/bg-img/feature-3.png')}}" alt="">
                                    <h5>Modern Design</h5>
                                    <p>Etiam nec odio vestibulum est mat tis effic iturut magna.</p>
                                </div>
                            </div>
                            <!-- Single Feature Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-feature-area">
                                    <img src="{{asset('frontend/img/bg-img/feature-4.png')}}" alt="">
                                    <h5>Documented</h5>
                                    <p>Etiam nec odio vestibulum est mat tis effic iturut magna.</p>
                                </div>
                            </div>
                            <!-- Single Feature Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-feature-area">
                                    <img src="{{asset('frontend/img/bg-img/feature-5.png')}}" alt="">
                                    <h5>Easy to use</h5>
                                    <p>Etiam nec odio vestibulum est mat tis effic iturut magna.</p>
                                </div>
                            </div>
                            <!-- Single Feature Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-feature-area">
                                    <img src="{{asset('frontend/img/bg-img/feature-6.png')}}" alt="">
                                    <h5>Google Font</h5>
                                    <p>Etiam nec odio vestibulum est mat tis effic iturut magna.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- App Feature Thumb -->
        <div class="app-feature-side-thumb">
            <img src="{{asset('frontend/img/bg-img/feature-side.jpg')}}" alt="">
        </div>
    </section>
    <!-- ***** App Feature Area End ***** -->

   

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area text-center clearfix">
        <!-- Shape 1 -->
        <div class="footer-bg-shape">
            <img src="{{asset('frontend/img/core-img/footer-bg.png')}}" alt="Footer Shape">
        </div>
        <!-- Shape 2 -->
        <div class="footer-bg-shape-2">
            <img src="{{asset('frontend/img/core-img/price-table.png')}}" alt="">
        </div>

        <div class="container h-100">
            <div class="row h-100 justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="footer-content">
                        <h2>Download App</h2>
                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. </h4>
                    </div>
                    <div class="app-download-area">
                        <div class="app-download-btn active">
                            <!-- Google Store Btn -->
                            <a href="#"><i class="fa fa-android"></i><p class="mb-0"><span>available on</span> Google Store</p></a>
                        </div>
                        <div class="app-download-btn">
                            <!-- Apple Store Btn -->
                            <a href="#"><i class="fa fa-apple"></i><p class="mb-0"><span>available on</span> Apple Store</p></a>
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
</body>

</html>
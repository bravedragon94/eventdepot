<!DOCTYPE html>
<html lang="us" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->

    <!-- Author Meta -->
    <meta name="author" content="BestStronger">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Events Depot</title>
    <link rel='icon' href='{{asset('frontend/img/logo.png')}}' type='image/x-icon'>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{asset('frontend/css/linearicons.css')}}">=
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/plugins/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/availability-calendar.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate-text.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">

</head>
<body>

<!-- Start Header Area -->
<header class="default-header">
    <div class="container">
        <div class="header-wrap">
            <div class="header-top d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="{{url('/')}}"><img class="logo_image" src="{{asset('frontend/img/logo.png')}}" alt=""></a>
                </div>
                <div class="main-menubar d-flex align-items-center">
                    <nav class="hide">
                        <a href="#home">Home</a>
                        <a href="#functionalities">Functionalities</a>
                        <a href="#upcoming">Upcoming event</a>
                        @guest
                            <a href="{{ route('login') }}">Login</a>
                        @else
                            <a href="{{ route('home') }}">Dashboard</a>
                        @endguest
                    </nav>
                    <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header Area -->

<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-center" style="height: 915px;">
            <div class="banner-content col-lg-6 col-md-12">
                <h1>
                    Our Next Event Starts in
                </h1>
                <div class="row clock_sec d-flex flex-row justify-content-between" id="clockdiv">
                    <div class="clockinner">
                        <span class="days"></span>
                        <div class="smalltext">Days</div>
                    </div>
                    <div class="clockinner">
                        <span class="hours"></span>
                        <div class="smalltext">Hours</div>
                    </div>
                    <div class="clockinner">
                        <span class="minutes"></span>
                        <div class="smalltext">Minutes</div>
                    </div>
                    <div class="clockinner">
                        <span class="seconds"></span>
                        <div class="smalltext">Seconds</div>
                    </div>

                </div>
                <div class="row">
                    <form method="get" action="{{url('events')}}" class="mt30-center">
                        @csrf
                        <input type="hidden" name="str" value="post">
                        <button class="btn btn-primary " type="submit">Post Events</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
<section>
    <div class="testimonial-area off-white ptb100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class=" header-bdr text-center">
                        <h1 class="uppercase mb50">About Us</h1>
                    </div>
                    <div style="opacity: 1; display: block;">
                        <div class="owl-item">
                            <div class="single-testimonial text-center">
                                <div class="testi-des">
                                    <p>Event depot is a platform which all events happening across the United States are posted and published right on Event Depot. We strive to share valuable events to all our members and visitors. Whatever you are looking for, either singles mixers, business professionals networking, music concert, comedy, community event, and so much more, you can find it at Event depot. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="header-slider-area" id="home">
        <!--slider area are start-->
        <div class="slider-container bg-overlay parallex-slide">
            <div class="container">
                <div class="slide1-text parallex-slider-text animate-slider-text text-center">
                    <div class="middle-text slide-def">
                        <div class="cap-dec wow fadeInUp" data-wow-duration=".9s" data-wow-delay="0.8s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.8s; animation-name: fadeInUp;">
                            <p>All Over The worlds</p>
                        </div>
                        <div class="cap-title wow fadeInUp" data-wow-duration=".9s" data-wow-delay="0.8s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.8s; animation-name: fadeInUp;">
                            <h1>Biggest Designers Meet Up</h1> </div>
                        <div class="date-address wow fadeInUp" data-wow-duration=".9s" data-wow-delay="0.8s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.8s; animation-name: fadeInUp;">
                            <div class="event-date"> <i class="fas fa-calendar-week"></i>Feb 13, 2050 </div>
                            <div class="event-location"> <i class="fas fa-map-marker-alt"></i>15/a Rampura, Bonsrei, Dhaka - 1000 </div>
                        </div>
                        <div class="slider-btn wow fadeInDown" data-wow-duration=".9s" data-wow-delay="0.8s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.8s; animation-name: fadeInDown;"> <a class="btn-def" href="#">Buy Tickets</a> </div>
                    </div>
                </div>
            </div>
        </div>
        <!--slider area are End-->
        <div class="down-arrow"> <a class="see-demo-btn" href="#about-event" style="margin: 0 auto"><i class="fas fa-arrow-down"></i></a> </div>
    </div>
    <div class="about-area ptb100 fix" id="about-event">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="about-left">
                        <div class="about-top">
                            <h1 class="section-title">About Event</h1>
                            <div class="total-step">
                                <div class="descp">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a morless normal distribution of letters, as opposed</p>
                                </div>
                            </div>
                        </div>
                        <h1 class="section-title">Detail Event</h1>
                        <div class="total-step">
                            <div class="about-step">
                                <h2 class="sub-title">1st Stape to gather</h2>
                                <div class="descp">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                                </div>
                            </div>
                            <div class="about-step">
                                <h2 class="sub-title">2nd Stape to Create won way</h2>
                                <div class="descp">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="about-right">
                        <ul>
                            <li><i class="fas fa-calendar-week"></i>Feb 13, 2050</li>
                            <li><i class="fas fa-map-marker-alt"></i>15/a Rampura, Bonsrei, Dhaka - 1000 </li>
                            <li><i class="fas fa-palette"></i>50,000+ Designers</li>
                            <li><i class="fas fa-map-marked-alt"></i>Almost 16+ Countries</li>
                            <li><i class="fas fa-user-friends"></i>20,000 Seats For Designers</li>
                            <li><i class="fas fa-microphone"></i>80+ Speaker</li>
                        </ul>
                        <div class="about-btn"> <a href="#" class="btn-def bnt-2">Register</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start facilities Area -->
<section class="facilities-area section-gap" id="functionalities">
    <div class="container" style="display: flex">
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="section-title-1 text-left mb-30">
                <span class="line-style"></span>
                <small class="sub-title">we are lightning Speed Event Services</small>
                <h2 class="big-title"><strong>No.1</strong> Event Management Company</h2>
                <p class="black-color mb-50">
                    Looking to get funding for your business idea? Check our events
                    with Lightning Speed Funding. How about finding your soulmate?
                    You can find it at Lightning Speed Dating events. Looking to
                    grow your business networking portfolio? We have it here with
                    Lightning Speed Networking business events.
                </p>
                <a href="about.html" class="custom-btn">
                    about Event Services
                </a>
            </div>
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12" style="margin-left: 12.5%">
            <div class="row">
                <div class="sigle-facilities col-lg-4 col-md-6 pb-40 pt-10">
                    <span class="lnr lnr-chart-bars"></span>
                    <h4>Management</h4>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
                    </p>
                </div>
                <div class="sigle-facilities col-lg-4 col-md-6 pb-40 pt-10">
                    <span class="lnr lnr-bullhorn"></span>
                    <h4>Marketing</h4>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
                    </p>
                </div>
                <div class="sigle-facilities col-lg-4 col-md-6 pb-40 pt-10">
                    <span class="lnr lnr-poop"></span>
                    <h4>Uniqueness</h4>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
                    </p>
                </div>
                <div class="sigle-facilities col-lg-4 col-md-6 pt-10">
                    <span class="lnr lnr-smile"></span>
                    <h4>Design</h4>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
                    </p>
                </div>
                <div class="sigle-facilities col-lg-4 col-md-6 pt-10">
                    <span class="lnr lnr-sun"></span>
                    <h4>Creativity</h4>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
                    </p>
                </div>
                <div class="sigle-facilities col-lg-4 col-md-6 pt-10">
                    <span class="lnr lnr-magic-wand"></span>
                    <h4>Strategy</h4>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
                    </p>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- End facilities Area -->
<!-- Start calender Area -->
<section class="calender-area relative section-gap">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pb-80 header-text">
                <h1>Event Calendar</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 calender-wrap" id="calendar"></div>
            <div class="col-lg-12 event-dates">
                <div class="single-event d-flex flex-row">
                    <p class="col">
                        Dec 01
                    </p>
                    <p class="col-8">
                        World AIDS Day
                    </p>
                    <p class="col text-right">
                        <span class="lnr lnr-highlight"></span>
                        <span class="lnr lnr-trash"></span>
                    </p>
                </div>
                <div class="single-event d-flex flex-row">
                    <p class="col">
                        Dec 16
                    </p>
                    <p class="col-8">
                        Victory Day of people republic of Bangladesh
                    </p>
                    <p class="col text-right">
                        <span class="lnr lnr-highlight"></span>
                        <span class="lnr lnr-trash"></span>
                    </p>
                </div>
                <div class="single-event d-flex flex-row">
                    <p class="col">
                        Dec 25
                    </p>
                    <p class="col-8">
                        Chrismas Day Arrangement
                    </p>
                    <p class="col text-right">
                        <span class="lnr lnr-highlight"></span>
                        <span class="lnr lnr-trash"></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End calender Area -->
<!-- Start events Area -->
<section class="events-area section-gap" id="upcoming">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pb-80 header-text">
                <h1>Upcoming Events</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
                </p>
            </div>
        </div>
        <div class="row no-padding">
            @foreach($events as $event)
            <div class="col-lg-6 col-sm-6">

                <div class="single-events row no-padding">
                    <div class="col-lg-5 image">
                        <img class="event_image" src="{{asset('images/'.$event->image)}}" alt="" style=".single-events .image::after{content:'21 Dec';}">
                    </div>
                    <div class="col-lg-6 details">
                        <a href="#">
                            <h4>{{$event->title}}</h4>
                        </a>
                        <p>
                            {{substr($event->comment, 0 ,50)}}...
                        </p>
                        <p>{{Carbon\Carbon::parse($event->updated_at)->diffForHumans()}}</p>
                        <p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">05 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End events Area -->
<!-- start footer Area -->
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-12">
                <div class="single-footer-widget">
                    <h6>Top Products</h6>
                    <ul class="footer-nav">
                        <li><a href="#">Managed Website</a></li>
                        <li><a href="#">Manage Reputation</a></li>
                        <li><a href="#">Power Tools</a></li>
                        <li><a href="#">Marketing Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6  col-md-12">
                <div class="single-footer-widget newsletter">
                    <h6>Newsletter</h6>
                    <p>You can trust us. we only send promo offers, not a single spam.</p>
                    <div id="mc_embed_signup">
                        <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                            <div class="form-group row" style="width: 100%">
                                <div class="col-lg-8 col-md-12">
                                    <input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
                                </div>
                            </div>
                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-12">
                <div class="single-footer-widget mail-chimp">
                    <h6 class="mb-20">Instragram Feed</h6>
                    <ul class="instafeed d-flex flex-wrap">
                        <li><img src="{{asset('frontend/img/i1.jpg')}}" alt=""></li>
                        <li><img src="{{asset('frontend/img/i2.jpg')}}" alt=""></li>
                        <li><img src="{{asset('frontend/img/i3.jpg')}}" alt=""></li>
                        <li><img src="{{asset('frontend/img/i4.jpg')}}" alt=""></li>
                        <li><img src="{{asset('frontend/img/i5.jpg')}}" alt=""></li>
                        <li><img src="{{asset('frontend/img/i6.jpg')}}" alt=""></li>
                        <li><img src="{{asset('frontend/img/i7.jpg')}}" alt=""></li>
                        <li><img src="{{asset('frontend/img/i8.jpg')}}" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row footer-bottom d-flex justify-content-between">
            <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="far fa-heart"></i> by <a href="https://colorlib.com" target="_blank">Best Stronger</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            <div class="col-lg-4 col-sm-12 footer-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-dribbble"></i></a>
                <a href="#"><i class="fab fa-behance"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- End footer Area -->

<script src="{{asset('frontend/js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.frontend/js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="{{asset('frontend/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('frontend/js/availability-calendar.js')}}"></script>
<script src="{{asset('frontend/js/jquery.sticky.js')}}"></script>
<script src="{{asset('frontend/js/parallax.min.js')}}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{asset('frontend/js/countdown.js')}}"></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>

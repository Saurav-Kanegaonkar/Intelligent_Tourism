<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>About</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('images2/favicon.ico') }}" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }
        
        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }
    </style>
</head>

<body>

    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-container">
                <div class="cssload-speeding-wheel"></div>
            </div>
            <p>Loading...</p>
        </div>
    </div>
    <div class="page">
        <!-- Page Header-->
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed"
                    data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px"
                    data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <div class="rd-navbar-nav-wrap">
                                <ul class="list-inline list-inline-md rd-navbar-corporate-list-social">
                                    @if (Auth::guest())
                                        <li><a class="icon" href="{{ route('login') }}" style="font-family: 'Dancing Script', cursive;"> Login</a></li>
                                        <li><a class="icon" href="{{ route('register') }}" style="font-family: 'Dancing Script', cursive;"> Register</a></li>
                                    @else
                                        <li><a class="icon" href="/posts/create" style="font-family: 'Dancing Script', cursive;">Create Posts</a></li>
                                        <li><a class="icon" href="/home" style="font-family: 'Dancing Script', cursive;">{{ Auth::user()->name }}</a></li>
                                        <li>
                                            <a class="icon" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="font-family: 'Dancing Script', cursive;">
                                                Logout
                                            </a>
                    
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    @endif
                                </ul>
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="/" style="font-family: 'Dancing Script', cursive !important;">SmartTourister</a>
                                    </li>
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="/about" style="font-family: 'Dancing Script', cursive;">About</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="/trips" style="font-family: 'Dancing Script', cursive;">Trips</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="/posts" style="font-family: 'Dancing Script', cursive;">Blog</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="/Places" style="font-family: 'Dancing Script', cursive;">Places</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="/fun" style="font-family: 'Dancing Script', cursive;">Fun</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Breadcrumbs -->
        <section class="breadcrumbs-custom-inset">
            <div class="breadcrumbs-custom context-dark bg-overlay-60">
                <div class="container" >
                    <h2 class="breadcrumbs-custom-title" style="color: white; font-weight:700">About Us</h2>
                </div>
                <div class="box-position" style="background-image: url(https://s1.1zoom.me/big0/877/Winter_Parks_Trees_Fir_466443.jpg);"></div>
            </div>
        </section>
        <!-- Why choose us-->
        <section class="section section-sm section-first bg-default text-md-left">
            <div class="container">
                <div class="row row-50 justify-content-center align-items-xl-center">
                    <div class="col-md-10 col-lg-5 col-xl-6"><img src="{{ asset('images2/520x564.jpg') }}" alt="" width="519" height="564" />
                    </div>
                    <div class="col-md-10 col-lg-7 col-xl-6">
                        <h1 class="text-spacing-25 font-weight-normal title-opacity-9">Why choose us</h1>
                        <!-- Bootstrap tabs-->
                        <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                            <!-- Nav tabs-->
                            <ul class="nav nav-tabs">
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1" data-toggle="tab">Experience</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-2" data-toggle="tab">Skills</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-3" data-toggle="tab">Mission</a></li>
                            </ul>
                            <!-- Tab panes-->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tabs-4-1">
                                    <p>We're here to take the stress out of the holiday planning process. You can be as involved as you want, and you are always in control. Everything is tailored to your exact needs and tastes, and we will keep tweaking and adapting until it feels just right.</p>
                                    <!-- Linear progress bar-->
                                    <article class="progress-linear progress-secondary">
                                        <div class="progress-header">
                                            <p>Tours</p>
                                        </div>
                                        <div class="progress-bar-linear-wrap">
                                            <div class="progress-bar-linear" data-gradient=""><span class="progress-value">89</span><span class="progress-marker"></span></div>
                                        </div>
                                    </article>
                                    <!-- Linear progress bar-->
                                    <article class="progress-linear progress-orange">
                                        <div class="progress-header">
                                            <p>Excursions</p>
                                        </div>
                                        <div class="progress-bar-linear-wrap">
                                            <div class="progress-bar-linear" data-gradient=""><span class="progress-value">82</span><span class="progress-marker"></span></div>
                                        </div>
                                    </article>
                                    <!-- Linear progress bar-->
                                    <article class="progress-linear">
                                        <div class="progress-header">
                                            <p>Hotel Bookings</p>
                                        </div>
                                        <div class="progress-bar-linear-wrap">
                                            <div class="progress-bar-linear" data-gradient=""><span class="progress-value">88</span><span class="progress-marker"></span></div>
                                        </div>
                                    </article>
                                </div>
                                <div class="tab-pane fade" id="tabs-4-2">
                                    <div class="row row-40 justify-content-center text-center inset-top-10">
                                        <div class="col-sm-4">
                                            <!-- Circle Progress Bar-->
                                            <div class="progress-bar-circle" data-value="0.87" data-gradient="#01b3a7" data-empty-fill="transparent" data-size="150" data-thickness="12" data-reverse="true"><span></span></div>
                                            <p class="progress-bar-circle-title">Tours</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- Circle Progress Bar-->
                                            <div class="progress-bar-circle" data-value="0.74" data-gradient="#01b3a7" data-empty-fill="transparent" data-size="150" data-thickness="12" data-reverse="true"><span></span></div>
                                            <p class="progress-bar-circle-title">Excursions</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- Circle Progress Bar-->
                                            <div class="progress-bar-circle" data-value="0.99" data-gradient="#01b3a7" data-empty-fill="transparent" data-size="150" data-thickness="12" data-reverse="true"><span></span></div>
                                            <p class="progress-bar-circle-title">Hotel Bookings</p>
                                        </div>
                                    </div>
                                    <div class="group-md group-middle"></div>
                                </div>
                                <div class="tab-pane fade" id="tabs-4-3">
                                    <p><i>To serve our clients with enhanced travel experience by providing quality Services that address their Travel needs, through the most efficient arrangements so that customer loyalty, superior financial results and excellent customer satisfaction can be achieved.</i></p>
                                    <div class="text-center text-sm-left offset-top-30 tab-height">
                                        <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                                            <li>Transportation coordination</li>
                                            <li>Meet and Greet services</li>
                                            <li>Excursions</li>
                                            <li>Entertainment</li>
                                            <li>Hospitality personnel and guides</li>
                                            <li>Budget control</li>
                                        </ul>
                                    </div>
                                    <div class="group-md group-middle"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Latest Projects-->
        <section class="section section-sm section-fluid bg-default">
            <div class="container">
                <h3>Destinations</h3>
            </div>
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-classic owl-timeline" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-margin="30" data-autoplay="false" data-nav="true" data-dots="true">
                <div class="owl-item">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="https://www.orangesmile.com/common/img_cities_original/bombay--2092174-11.jpg" alt="" width="420" height="308" />
                        </div>
                        <div class="thumbnail-mary-caption">
                            <a class="icon fl-bigmug-line-zoom60" href="https://www.orangesmile.com/common/img_cities_original/bombay--2092174-11.jpg" data-lightgallery="item"><img src="https://www.orangesmile.com/common/img_cities_original/bombay--2092174-11.jpg" alt="" width="420" height="308" /></a>
                        </div>
                    </article>
                    <div class="thumbnail-mary-description">
                        <h5 class="thumbnail-mary-project"><a href="#">Mumbai</a></h5><span class="thumbnail-mary-decor"></span>
                        <h5 class="thumbnail-mary-time">
                        </h5>
                    </div>
                </div>
                <div class="owl-item">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="https://media.gettyimages.com/photos/the-taj-magal-india-picture-id1126863781?s=612x612" alt="" width="420" height="308" />
                        </div>
                        <div class="thumbnail-mary-caption">
                            <a class="icon fl-bigmug-line-zoom60" href="https://media.gettyimages.com/photos/the-taj-magal-india-picture-id1126863781?s=612x612" data-lightgallery="item"><img src="https://media.gettyimages.com/photos/the-taj-magal-india-picture-id1126863781?s=612x612" alt="" width="420" height="308" /></a>
                        </div>
                    </article>
                    <div class="thumbnail-mary-description">
                        <h5 class="thumbnail-mary-project"><a href="#">Agra</a></h5><span class="thumbnail-mary-decor"></span>
                        <h5 class="thumbnail-mary-time">
                        </h5>
                    </div>
                </div>
                <div class="owl-item">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="https://media.gettyimages.com/photos/architectural-details-of-a-temple-swaminarayan-akshardham-temple-picture-id481685827?k=6&m=481685827&s=612x612&w=0&h=hFUqyPArLUYPWbv3Be__FqkdOwDVAemW0SErdwP0YHY=" alt="" width="420" height="308" />
                        </div>
                        <div class="thumbnail-mary-caption">
                            <a class="icon fl-bigmug-line-zoom60" href="https://media.gettyimages.com/photos/architectural-details-of-a-temple-swaminarayan-akshardham-temple-picture-id481685827?k=6&m=481685827&s=612x612&w=0&h=hFUqyPArLUYPWbv3Be__FqkdOwDVAemW0SErdwP0YHY=" data-lightgallery="item"><img src="https://media.gettyimages.com/photos/architectural-details-of-a-temple-swaminarayan-akshardham-temple-picture-id481685827?k=6&m=481685827&s=612x612&w=0&h=hFUqyPArLUYPWbv3Be__FqkdOwDVAemW0SErdwP0YHY=" alt="" width="420" height="308" /></a>
                        </div>
                    </article>
                    <div class="thumbnail-mary-description">
                        <h5 class="thumbnail-mary-project"><a href="#">Ahmedabad</a></h5><span class="thumbnail-mary-decor"></span>
                        <h5 class="thumbnail-mary-time">
                        </h5>
                    </div>
                </div>
                <div class="owl-item">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="https://media.gettyimages.com/photos/visitors-are-seen-exploring-the-asias-largest-rock-garden-in-rock-picture-id1139191670?k=6&m=1139191670&s=612x612&w=0&h=ntAuDllhl-KscWhw-b1eCIvjZZ6CS-gw1mgKO84xWig=" alt="" width="420" height="308" />
                        </div>
                        <div class="thumbnail-mary-caption">
                            <a class="icon fl-bigmug-line-zoom60" href="https://media.gettyimages.com/photos/visitors-are-seen-exploring-the-asias-largest-rock-garden-in-rock-picture-id1139191670?k=6&m=1139191670&s=612x612&w=0&h=ntAuDllhl-KscWhw-b1eCIvjZZ6CS-gw1mgKO84xWig=" data-lightgallery="item"><img src="https://media.gettyimages.com/photos/visitors-are-seen-exploring-the-asias-largest-rock-garden-in-rock-picture-id1139191670?k=6&m=1139191670&s=612x612&w=0&h=ntAuDllhl-KscWhw-b1eCIvjZZ6CS-gw1mgKO84xWig=" alt="" width="420" height="308" /></a>
                        </div>
                    </article>
                    <div class="thumbnail-mary-description">
                        <h5 class="thumbnail-mary-project"><a href="#">Chandigarh</a></h5><span class="thumbnail-mary-decor"></span>
                        <h5 class="thumbnail-mary-time">
                        </h5>
                    </div>
                </div>
                <div class="owl-item">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="https://www.orangesmile.com/common/img_cities_original/new-delhi--2106102-10.jpg" alt="" width="420" height="308" />
                        </div>
                        <div class="thumbnail-mary-caption">
                            <a class="icon fl-bigmug-line-zoom60" href="https://www.orangesmile.com/common/img_cities_original/new-delhi--2106102-10.jpg" data-lightgallery="item"><img src="https://www.orangesmile.com/common/img_cities_original/new-delhi--2106102-10.jpg" alt="" width="420" height="308" /></a>
                        </div>
                    </article>
                    <div class="thumbnail-mary-description">
                        <h5 class="thumbnail-mary-project"><a href="#">Delhi</a></h5><span class="thumbnail-mary-decor"></span>
                        <h5 class="thumbnail-mary-time">
                        </h5>
                    </div>
                </div>
                <div class="owl-item">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="https://image.freepik.com/free-photo/confluence-indus-zanskar-rivers-leh-ladakh-india_1150-11112.jpg" alt="" width="420" height="308" />
                        </div>
                        <div class="thumbnail-mary-caption">
                            <a class="icon fl-bigmug-line-zoom60" href="https://image.freepik.com/free-photo/confluence-indus-zanskar-rivers-leh-ladakh-india_1150-11112.jpg" data-lightgallery="item"><img src="https://image.freepik.com/free-photo/confluence-indus-zanskar-rivers-leh-ladakh-india_1150-11112.jpg" alt="" width="420" height="308" /></a>
                        </div>
                    </article>
                    <div class="thumbnail-mary-description">
                        <h5 class="thumbnail-mary-project"><a href="#">Leh Ladakh</a></h5><span class="thumbnail-mary-decor"></span>
                        <h5 class="thumbnail-mary-time">
                        </h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- What people Say-->
        <section class="section section-sm section-last bg-default">
            <div class="container">
                <h3>What People Say</h3>
                <!-- Owl Carousel-->
                <div class="owl-carousel owl-modern" data-items="1" data-stage-padding="15" data-margin="30" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay="true">
                    <!-- Quote Lisa-->
                    <article class="quote-lisa">
                        <div class="quote-lisa-body">
                            <a class="quote-lisa-figure" href="#"><img class="img-circles" src="https://i.redd.it/gbifjg8h8twz.png" alt="" width="100" height="100" /></a>
                            <div class="quote-lisa-text">
                                <p class="q">If happiness had a form, what would it look like? It might be something like glass, because one doesn’t notice it normally. However, it is actually there. As proof, if you look at it from a different angle, the glass will reflect light. It will state it’s presence and existence more eloquently than any other thing in this world..</p>
                            </div>
                            <h5 class="quote-lisa-cite"><a href="#">Saurav Kanegaonkar</a></h5>
                            <p class="quote-lisa-status">Experienced Front-End Developer</p>
                        </div>
                    </article>
                    <!-- Quote Lisa-->
                    <article class="quote-lisa">
                        <div class="quote-lisa-body">
                            <a class="quote-lisa-figure" href="#"><img class="img-circles" src="https://i.pinimg.com/736x/5a/1b/1e/5a1b1e32639c6210416804dc7a93ef8e.jpg" alt="" width="100" height="100" /></a>
                            <div class="quote-lisa-text">
                                <p class="q">When There Is Evil In This World That Justice Cannot Defeat, Would You Taint Your Hands With Evil To Defeat Evil? Or Would You Remain Steadfast And Righteous Even If It Means Surrendering To Evil?</p>
                            </div>
                            <h5 class="quote-lisa-cite"><a href="#">Hemish Panchal</a></h5>
                            <p class="quote-lisa-status">Experienced Back-End Developer</p>
                        </div>
                    </article>
                    <!-- Quote Lisa-->
                    <article class="quote-lisa">
                        <div class="quote-lisa-body">
                            <a class="quote-lisa-figure" href="#"><img class="img-circles" src="https://i.redd.it/rb9hczmgn1p21.jpg" alt="" width="100" height="100" /></a>
                            <div class="quote-lisa-text">
                                <p class="q">All the hatred in the world is gathered on me, as promised. So, all you have to do is to erase my existence, and put an end to this chain of hatred. The Black Knights will have the legend of Zero left behind for them. Schneizel will work for Zero. And now the world can be unified at one table, not through military force, but through negotiation and talk. Mankind can finally embrace the future.</p>
                            </div>
                            <h5 class="quote-lisa-cite"><a href="#">Yashwik Panchal</a></h5>
                            <p class="quote-lisa-status">Expert in AI</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!--Counters-->
        <!-- Counter Classic-->
        <section class="section section-fluid bg-default">
            <div class="parallax-container" data-parallax-img="{{ asset('images2/1200x700.jpg') }}">
                <div class="parallax-content section-xl context-dark bg-overlay-26">
                    <div class="container">
                        <div class="row row-50 justify-content-center border-classic">
                            <div class="col-sm-6 col-md-5 col-lg-3">
                                <div class="counter-classic">
                                    <div class="counter-classic-number"><span class="counter">12</span>
                                    </div>
                                    <h5 class="counter-classic-title">Awards</h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-5 col-lg-3">
                                <div class="counter-classic">
                                    <div class="counter-classic-number"><span class="counter">194</span>
                                    </div>
                                    <h5 class="counter-classic-title">Tours</h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-5 col-lg-3">
                                <div class="counter-classic">
                                    <div class="counter-classic-number"><span class="counter">2</span><span class="symbol">k</span>
                                    </div>
                                    <h5 class="counter-classic-title">Travelers</h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-5 col-lg-3">
                                <div class="counter-classic">
                                    <div class="counter-classic-number"><span class="counter">3</span>
                                    </div>
                                    <h5 class="counter-classic-title">Team members</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Page Footer-->
        <footer class="section footer-corporate context-dark">
            <div class="footer-corporate-inset">
                <div class="container">
                    <div class="row row-40 justify-content-lg-between">
                        <div class="col-sm-6 col-md-12 col-lg-3 col-xl-4">
                            <div class="oh-desktop">
                                <div class="wow slideInRight" data-wow-delay="0s">
                                    <h6 class="text-spacing-100 text-uppercase">Contact us</h6>
                                    <ul class="footer-contacts d-inline-block d-sm-block">
                                        <li>
                                            <div class="unit">
                                                <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                                                <div class="unit-body"><a class="link-phone" href="tel:#">+1 323-913-4688</a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit">
                                                <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                                                <div class="unit-body"><a class="link-aemail" href="mailto:#">shy@success.org</a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit">
                                                <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                                                <div class="unit-body"><a class="link-location" href="#">VJTI, Dadar-East, Mumbai, Maharashtra</a></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-11 col-md-7 col-lg-5 col-xl-4">
                            <div class="oh-desktop">
                                <div class="wow slideInLeft" data-wow-delay="0s">
                                    <h6 class="text-spacing-100 text-uppercase">Quick links</h6>
                                    <ul class="row-6 list-0 list-marked list-marked-md list-marked-secondary list-custom-2">
                                        <li><a href="/about">About us</a></li>
                                        <li><a href="/Places">Our Tours</a></li>
                                        <li><a href="/about">Our Team</a></li>
                                        <li><a href="#">Gallery</a></li>
                                        <li><a href="/posts">Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-corporate-bottom-panel">
                <div class="container">
                    <div class="row justfy-content-xl-space-berween row-10 align-items-md-center2">
                        <div class="col-sm-6 col-md-4 text-sm-right text-md-center">
                            <div>
                                <ul class="list-inline list-inline-sm footer-social-list-2">
                                    <li>
                                        <a class="icon fa fa-facebook" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="icon fa fa-twitter" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="icon fa fa-google-plus" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="icon fa fa-instagram" href="#"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 order-sm-first">
                            <!-- Rights-->
                            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Wonder Tour</span>. All Rights Reserved. Design by SHY Brothers😎😎</p>
                        </div>
                        <div class="col-sm-6 col-md-4 text-md-right">
                            <p class="rights"><a href="#">Privacy Policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
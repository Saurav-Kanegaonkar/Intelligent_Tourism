<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Home</title>
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
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="/" style="font-family: 'Dancing Script', cursive;">SmartTourister</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="/about" style="font-family: 'Dancing Script', cursive;">About</a>
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
        <!-- Swiper-->
        <section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
            <div class="swiper-wrapper text-left">
                <div class="swiper-slide context-dark" data-slide-bg="{{ asset('images2/1920_1.png') }}">
                    <div class="swiper-slide-caption section-md">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0" style="color: black">Enjoy the Best Destinations with Our Travel Agency</h6>
                                    <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100" style="color: black"><span>Explore</span><span class="font-weight-bold"> The World</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide context-dark" data-slide-bg="{{ asset('images2/1920_2.jpeg') }}">
                    <div class="swiper-slide-caption section-md">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">A team of professional Travel Experts</h6>
                                    <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Trust</span><span class="font-weight-bold"> Our Experience</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide context-dark" data-slide-bg="{{ asset('images2/1920_1.png') }}">
                    <div class="swiper-slide-caption section-md">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0" style="color: black">Build your Next Holiday Trip with Us</h6>
                                    <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100" style="color: black"><span>Create</span><span class="font-weight-bold"> Your Tour</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Swiper Pagination-->
            <div class="swiper-pagination"></div>
        </section>
        <!-- Section Box Categories-->
        <section class="section section-lg section-top-1 bg-gray-4">
            <div class="container offset-negative-1">
                <div class="box-categories cta-box-wrap">
                    <div class="box-categories-content">
                        <div class="row justify-content-center">
                            <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                                <ul class="list-marked-2 box-categories-list">
                                    <li>
                                        <a href="#"><img src="{{ asset('images2/368.jpg') }}" alt="" width="368" height="460px" /></a>
                                        <h5 class="box-categories-title">Sight-seeing</h5>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                                <ul class="list-marked-2 box-categories-list">
                                    <li>
                                        <a href="#"><img src="{{ asset('images2/368_3.jpg') }}" alt="" width="368" height="420" /></a>
                                        <h5 class="box-categories-title">Trekking Holiday</h5>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                                <ul class="list-marked-2 box-categories-list">
                                    <li>
                                        <a href="#"><img src="{{ asset('images2/368_2.jpg') }}" alt="" width="368" height="420" /></a>
                                        <h5 class="box-categories-title">Beach Holidays</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><a class="link-classic wow fadeInUp" href="/trips">Let us plan your tour!<span></span></a>
                <!-- Owl Carousel-->
            </div>
        </section>
        <!-- Discover New Horizons-->
        <section class="section section-sm section-first bg-default text-md-left">
            <div class="container">
                <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
                    <div class="col-lg-6 text-center wow fadeInUp"><img src="{{ asset('images2/556.jpg') }}" alt="" width="556" height="382" />
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay=".1s">
                        <div class="box-width-lg-470">
                            <h3>Discover New Horizons</h3>
                            <!-- Bootstrap tabs-->
                            <div class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-center text-md-left" id="tabs-7">
                                <!-- Nav tabs-->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-7-1" data-toggle="tab">About us</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-2" data-toggle="tab">Why choose us</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-3" data-toggle="tab">Our mission</a></li>
                                </ul>
                                <!-- Tab panes-->
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tabs-7-1">
                                        <p>SmartTourister is committed to bringing our clients the best in value and quality travel arrangements. We are passionate about travel and sharing the world's wonders with you.</p>
                                        <div class="group-md group-middle"><a class="button button-black-outline button-md" href="/about">Read More</a></div>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-7-2">
                                        <p>We are proud to offer excellent quality and value for money in our tours, which give you the chance to experience your chosen destination in an authentic and exciting way.</p>
                                        <div class="group-md group-middle"><a class="button button-black-outline button-md" href="/about">Read More</a></div>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-7-3">
                                        <p>Our mission is to provide the ultimate travel planning experience while becoming a one-stop shop for every travel service available in the industry.</p>
                                        <div class="group-md group-middle"><a class="button button-black-outline button-md" href="/about">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--	Our Services-->
        <section class="section section-sm">
            <div class="container">
                <h3>Our Services</h3>
                <div class="row row-30">
                    <div class="col-sm-6 col-lg-4">
                        <article class="box-icon-classic">
                            <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                                <div class="unit-left">
                                    <div class="box-icon-classic-icon fl-bigmug-line-equalization3"></div>
                                </div>
                                <div class="unit-body">
                                    <h5 class="box-icon-classic-title"><a href="">Personalized Matching</a></h5>
                                    <p class="box-icon-classic-text">Our unique matching system lets you find just the tour you want for your next holiday.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <article class="box-icon-classic">
                            <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                                <div class="unit-left">
                                    <div class="box-icon-classic-icon fl-bigmug-line-circular220"></div>
                                </div>
                                <div class="unit-body">
                                    <h5 class="box-icon-classic-title"><a href="#">Wide Variety of Tours</a></h5>
                                    <p class="box-icon-classic-text">We offer a wide variety of personally picked tours with destinations all over the globe.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <article class="box-icon-classic">
                            <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                                <div class="unit-left">
                                    <div class="box-icon-classic-icon fl-bigmug-line-favourites5"></div>
                                </div>
                                <div class="unit-body">
                                    <h5 class="box-icon-classic-title"><a href="#">Highly Qualified Service</a></h5>
                                    <p class="box-icon-classic-text">Our tour managers are qualified, skilled, and friendly to bring you the best service.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <article class="box-icon-classic">
                            <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                                <div class="unit-left">
                                    <div class="box-icon-classic-icon fl-bigmug-line-headphones32"></div>
                                </div>
                                <div class="unit-body">
                                    <h5 class="box-icon-classic-title"><a href="#">24/7 Support</a></h5>
                                    <p class="box-icon-classic-text">You can always get professional support from our staff 24/7 and ask any question you have.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <article class="box-icon-classic">
                            <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                                <div class="unit-left">
                                    <div class="box-icon-classic-icon fl-bigmug-line-hot67"></div>
                                </div>
                                <div class="unit-body">
                                    <h5 class="box-icon-classic-title"><a href="#">Handpicked Hotels</a></h5>
                                    <p class="box-icon-classic-text">Our team offers only the best selection of affordable and luxury hotels to our clients.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <article class="box-icon-classic">
                            <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                                <div class="unit-left">
                                    <div class="box-icon-classic-icon fl-bigmug-line-wallet26"></div>
                                </div>
                                <div class="unit-body">
                                    <h5 class="box-icon-classic-title"><a href="#">Best Price Guarantee</a></h5>
                                    <p class="box-icon-classic-text">If you find tours that are cheaper than ours, we will compensate the difference.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hot tours-->
        <section class="section section-sm bg-default">
            <div class="container">
                <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Hot Tours</span></h3>
                <div class="row row-sm row-40 row-md-50">
                    <div class="col-sm-6 col-md-12 wow fadeInRight">
                        <!-- Product Big-->
                        <article class="product-big">
                            <div class="unit flex-column flex-md-row align-items-md-stretch">
                                <div class="unit-left">
                                    <a class="product-big-figure" href="#"><img src="{{ asset('images2/600.png') }}" alt="" width="600" height="366" /></a>
                                </div>
                                <div class="unit-body">
                                    <div class="product-big-body">
                                        <h5 class="product-big-title"><a href="https://www.fabhotels.com/blog/places-to-visit-in-mumbai/">Mumbai, Maharashtra</a></h5>
                                        <div class="group-sm group-middle justify-content-start">
                                            <div class="product-big-rating"><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span></div>
                                            <a class="product-big-reviews" href="#">4.5 customer reviews</a>
                                        </div>
                                        <p class="product-big-text">Mumbai, formerly known as Bombay, is the coastal capital of Maharashtra state in west-central India. It’s the country’s financial and commercial capital and its principal port on the Arabian Sea. With an estimated population exceeding 12 million, it’s the most populous city in India that’s home to some of the country’s richest neighborhoods.</p>
                                        <div class="product-big-price-wrap"><span class="product-big-price">₹54,999</span></div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-12 wow fadeInLeft">
                        <!-- Product Big-->
                        <article class="product-big">
                            <div class="unit flex-column flex-md-row align-items-md-stretch">
                                <div class="unit-left">
                                    <a class="product-big-figure" href="#"><img src="{{ asset('images2/600_2.jpg') }}" alt="" width="600" height="366" /></a>
                                </div>
                                <div class="unit-body">
                                    <div class="product-big-body">
                                        <h5 class="product-big-title"><a href="https://www.tripadvisor.in/Attractions-g297608-Activities-Ahmedabad_Ahmedabad_District_Gujarat.html">Ahmedabad, Gujarat</a></h5>
                                        <div class="group-sm group-middle justify-content-start">
                                            <div class="product-big-rating"><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span></div>
                                            <a class="product-big-reviews" href="#">5 customer reviews</a>
                                        </div>
                                        <p class="product-big-text">Ahmedabad has several floridly carved historic monuments including the Stepwell at Adalaj and the Rani Mosques (dedicated to Rani Sipri and Rani Rupmati). It is also home to many fine museums and art galleries. Modern office buildings and malls dot the more recently developed areas..</p>
                                        <div class="product-big-price-wrap"><span class="product-big-price">₹49,999</span></div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- Different People-->
        <section class="section section-sm">
            <div class="container">
                <h3 class="title-block find-car oh"><span class="d-inline-block wow slideInUp">Different People — One Mission</span></h3>
                <div class="row row-30 justify-content-center box-ordered">
                    <div class="col-sm-6 col-md-5 col-lg-3">
                        <!-- Team Modern-->
                        <article class="team-modern">
                            <div class="team-modern-header">
                                <a class="team-modern-figure" href="#"><img class="img-circles" src="https://media.istockphoto.com/photos/the-letter-s-in-orange-flames-picture-id178625189?k=6&m=178625189&s=612x612&w=0&h=L1Gcg7mzxCW4uUmS9dpvscBGqpmLn5xvkGByD4mdrVI=" alt="" width="118" height="118" /></a>
                                <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                    <g>
                      <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                    </g>
                  </svg>
                            </div>
                            <div class="team-modern-caption">
                                <h6 class="team-modern-name"><a href="#">Saurav Kanegaonkar</a></h6>
                                <p class="team-modern-status">TY CS</p>
                                <h6 class="team-modern-phone"><a href="tel:#">181070029</a></h6>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-3">
                        <!-- Team Modern-->
                        <article class="team-modern">
                            <div class="team-modern-header">
                                <a class="team-modern-figure" href="#"><img class="img-circles" src="https://media.istockphoto.com/photos/fire-letter-h-of-burning-flame-light-picture-id638099186?k=6&m=638099186&s=612x612&w=0&h=29n7UsE5HgGruHs1Ibhqw7jRL0mGE1OxNTKAcepMVrU=" alt="" width="118" height="118" /></a>
                                <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                    <g>
                      <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                    </g>
                  </svg>
                            </div>
                            <div class="team-modern-caption">
                                <h6 class="team-modern-name"><a href="#">Hemish Panchal</a></h6>
                                <p class="team-modern-status">TY CS</p>
                                <h6 class="team-modern-phone"><a href="tel:#">181070040</a></h6>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-3">
                        <!-- Team Modern-->
                        <article class="team-modern">
                            <div class="team-modern-header">
                                <a class="team-modern-figure" href="#"><img class="img-circles" src="https://media.istockphoto.com/photos/fire-letter-on-black-background-picture-id532184915?k=6&m=532184915&s=612x612&w=0&h=hnXZggZNtUlr4eMlgk6rRZqxMpmYwjY6pSC2fnABj-I=" alt="" width="118" height="118" /></a>
                                <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                    <g>
                      <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                    </g>
                  </svg>
                            </div>
                            <div class="team-modern-caption">
                                <h6 class="team-modern-name"><a href="#">Yashwik Panchal</a></h6>
                                <p class="team-modern-status">TY CS</p>
                                <h6 class="team-modern-phone"><a href="tel:#">181070041</a></h6>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section Subscribe-->
        <section class="section bg-default text-center offset-top-50">
            <div class="parallax-container" data-parallax-img="{{ asset('images2/1920_2.jpeg') }}">
                <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
                    <div class="container">
                        <h2 class="heading-2 oh font-weight-normal wow slideInDown"><span class="d-block font-weight-semi-bold">First-class Impressions</span><span class="d-block font-weight-light">are Waiting for You!</span></h2>
                        <p class="text-width-medium text-spacing-75 wow fadeInLeft" data-wow-delay=".1s">Our agency offers travelers various tours and excursions with destinations all over the world. Browse our website to find your dream tour!</p><a class="button button-secondary button-pipaluk" href="/trips">Book a Tour Now</a>
                    </div>
                </div>
            </div>
        </section>
        <!--	Instagrram wondertour-->
        <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
            <div class="container-fluid">
                <h3 class="gallery-title" style="font-size: medium">Gallery</h3>
                <!-- Owl Carousel-->
                <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0" data-margin="30" data-autoplay="true"
                    data-nav="true" data-dots="true">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="{{ asset('images2/270-6.jfif') }}" alt="" width="270" height="195" />
                        </div>
                        <div class="thumbnail-mary-caption">
                            <a class="icon fl-bigmug-line-zoom60" href="{{ asset('images2/270.jfif') }}" data-lightgallery="item"><img src="{{ asset('images2/270-2.jfif') }}" alt="" width="270" height="195" /></a>
                        </div>
                    </article>
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="{{ asset('images2/270-3.jfif') }}" alt="" width="270" height="195" />
                        </div>
                        <div class="thumbnail-mary-caption">
                            <a class="icon fl-bigmug-line-zoom60" href="{{ asset('images2/270.jfif') }}" data-lightgallery="item"><img src="{{ asset('images2/270.jfif') }}" alt="" width="270" height="195" /></a>
                        </div>
                    </article>
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="{{ asset('images2/270-7.jfif') }}" alt="" width="270" height="195" />
                        </div>
                        <div class="thumbnail-mary-caption">
                            <a class="icon fl-bigmug-line-zoom60" href="{{ asset('images2/270.jfif') }}" data-lightgallery="item"><img src="{{ asset('images2/270-2.jfif') }}" alt="" width="270" height="195" /></a>
                        </div>
                    </article>
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="{{ asset('images2/270-3.jfif') }}" alt="" width="270" height="195" />
                        </div>
                        <div class="thumbnail-mary-caption">
                            <a class="icon fl-bigmug-line-zoom60" href="{{ asset('images2/270.jfif') }}" data-lightgallery="item"><img src="{{ asset('images2/270-4.jfif') }}" alt="" width="270" height="195" /></a>
                        </div>
                    </article>
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="{{ asset('images2/270-5.jfif ') }}" alt="" width="270" height="195" />
                        </div>
                        <div class="thumbnail-mary-caption">
                            <a class="icon fl-bigmug-line-zoom60" href="{{ asset('images2/270.jfif') }}" data-lightgallery="item"><img src="{{ asset('images2/270-6.jfif') }}" alt="" width="270" height="195" /></a>
                        </div>
                    </article>
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="{{ asset('images2/270-7.jfif') }}" alt="" width="270" height="195" />
                        </div>
                        <div class="thumbnail-mary-caption">
                            <a class="icon fl-bigmug-line-zoom60" href="{{ asset('images2/270.jfif') }}" data-lightgallery="item"><img src="{{ asset('images2/270.jfif') }}" alt="" width="270" height="195" /></a>
                        </div>
                    </article>
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
                            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>SmartTourister</span>. All Rights Reserved. Design by SHY Brothers😎😎</p>
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
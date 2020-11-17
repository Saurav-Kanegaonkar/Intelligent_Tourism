{{-- @extends('layouts.app')

@section('content')
    <h2>Posts</h2>
    @if (count($posts)>0)
        @foreach ($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style='width:100%; height:100%' src="/storage/cover_images/{{$post->cover_image}}" alt="">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <a href="/posts/{{$post->id}}"><h3>{{$post->title}}</h3></a>
                        <small>Written on {{$post->created_at}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="d-flex justify-content-center">
            {{$posts->links()}}
        </div>
        
    @else
        <p>No posts found ;_;</p>
    @endif
    
@endsection --}}

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>lsapp</title>
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

        body{
            background-color: #F5F5F5;
        }
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
        .card{
            padding: 20px 10px 20px 20px;
            border: 5px solid lightblue;
            margin-bottom: 20px;
        }
        img{
            border: 5px solid black;
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
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="/" style="font-family: 'Dancing Script', cursive;">SmartTourister</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="/about" style="font-family: 'Dancing Script', cursive;">About</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="/trips" style="font-family: 'Dancing Script', cursive;">Trips</a>
                                    </li>
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="/posts" style="font-family: 'Dancing Script', cursive;">Blog</a>
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
        <br><br>
        <div class="container ok">
            <div id="a">
                <h2 >Posts</h2><br>
                @if (count($posts)>0)
                    @foreach ($posts as $post)
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <img style='width:100%; height:100%' src="/storage/cover_images/{{$post->cover_image}}" alt="">
                                </div>
                                <div class="col-md-8 col-sm-8 card-body">
                                    <a href="/posts/{{$post->id}}"><h3 style="margin-bottom: 60px !important">{{$post->title}}</h3></a>
                                    <div style="font-size: large; padding-bottom:140px;">
                                        {!! $post->body !!}
                                    </div>
                                    <small>Written on {{$post->created_at}}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex justify-content-center">
                        {{$posts->links()}}
                    </div>
                @else
                    <p>No posts found ;_;</p>
                @endif
            </div>
        </div>
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
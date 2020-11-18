@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="content-box content-single">
                <article class="post-180 gd_place type-gd_place status-publish hentry gd_placecategory-hotels">
                    @foreach ($place_detail as $place)
                        <header>
                            <h1 class="entry-title" style="color: #337ab7; font-weight: 600; font-size: x-large;">{{ $place->name }}</h1>
                        </header>
                        <div>
                            <?php
                                $str= "http://lsapp.test/assets/images/shops/a".$place->place_id.".jpg";
                            ?>
                            <img src={{$str}} class="geodir-lazy-load align size-medium_large" style="display: block;
                            margin-left: auto;
                            margin-right: auto;
                            width: 50%"/><br><br><br>
                        </div>
                        <div class="entry-content entry-summary">
                            {{-- @if($place->photos->count())
                                <div class="geodir-post-slider center-gallery">
                                    <div class="bxslider">
                                        @foreach($place->photos as $photo)
                                        <div><img src="{{ $photo->url }}"></div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif --}}
                            @if(count($activities))
                                <div class="geodir-single-taxonomies-container">
                                    <p class="clearfix"> 
                                        <span class="geodir-category high">
                                            <strong>Activities: </strong>
                                            @foreach($activities as $act)
                                                <div class="gd-badge-meta gd-badge-alignleft" title="{{ $act }}">
                                                    <div class="gd-badge" style="background-color:#ffb100;color:#ffffff;"><i class="fas fa-certificate"></i> <span class='gd-secondary'>{{ $act }}</span></div>
                                                </div>
                                            @endforeach
                                        </span>
                                    </p>
                                </div>
                                <br><br>
                            @endif
                            <div class="geodir-single-tabs-container">
                                <div class="geodir-tabs" id="gd-tabs">
                                    <dl class="geodir-tab-head"><dt></dt>
                                        <dd class="geodir-tab-active"><a data-tab="#post_content" data-status="enable"><i class="fas fa-home" aria-hidden="true"></i>About</a></dd><dt></dt>
                                        {{-- @if($place->photos->count())
                                            <dd class=""><a data-tab="#post_images" data-status="enable"><i class="fas fa-image" aria-hidden="true"></i>Photos</a></dd><dt></dt>
                                        @endif --}}
                                        @if($place->latitude && $place->longitude)
                                            <dd class=""><a data-tab="#post_map" data-status="enable"><i class="fas fa-globe-americas" aria-hidden="true"></i>Map</a></dd><dt></dt>
                                        @endif
                                        @if(count($Days))
                                            <dd class=""><a data-tab="#working_hours" data-status="enable"><i class="fas fa-clock" aria-hidden="true"></i>Working Hours</a></dd>
                                        @endif
                                    </dl>
                                    <ul class="geodir-tabs-content geodir-entry-content high" style="z-index: 0; position: relative;">
                                        <li id="post_contentTab" style="display: none;"><span id="post_content"></span>
                                            <div id="geodir-tab-content-post_content" class="hash-offset"></div>
                                            <div class="geodir-post-meta-container">
                                                <div class="geodir_post_meta  geodir-field-post_content">
                                                    <p><Strong>Address:</Strong></p>
                                                    <p>{{ $place->address }}</p>
                                                    <p><Strong>Description:</Strong></p>
                                                    <p>{{ $place->description }}</p>
                                                    @if(count($Days))
                                                        @if($open)
                                                            <p><Strong>Place is open and will close at {{ $close }}.</Strong></p>
                                                        @else
                                                            <p><Strong>Place is closed since {{ $close }}</Strong></p>
                                                        @endif
                                                    @endif
                                                    <p></p>
                                                </div>
                                            </div>
                                        </li>
                                        {{-- @if($place->photos->count())
                                            <li id="post_imagesTab" style="display: none;"><span id="post_images"></span>
                                                <div id="geodir-tab-content-post_images" class="hash-offset"></div>
                                                <div class="geodir-post-slider">
                                                    <div class="geodir-image-container geodir-image-sizes-medium_large ">
                                                        <div id="geodir_images_5de6cafacbba5_180" class="geodir-image-wrapper" data-controlnav="1" data-slideshow="1">
                                                            <ul class="geodir-gallery geodir-images clearfix">
                                                                @foreach($place->photos as $photo)
                                                                    <li>
                                                                        <a href="{{ $photo->getUrl() }}" class="geodir-lightbox-image" target="_blank"><img src="{{ $photo->getUrl('thumb') }}" width="1440" height="960"><i class="fas fa-search-plus" aria-hidden="true"></i></a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif --}}
                                        @if($place->latitude && $place->longitude)
                                            <li id="post_mapTab" style="display: none;">
                                                <div id="map-canvas" style="height: 425px; width: 100%; position: relative; overflow: hidden;">
                                                </div>
                                            </li>
                                        @endif
                                        @if(count($Days))
                                            <li id="working_hoursTab" style="display: none;">
                                                <?php
                                                    $i =0;
                                                ?>
                                                @foreach($Days as $day)
                                                    <p><strong>{{$Vars[$i]}}</strong>- {{$day->from_hours}}:{{$day->from_minutes}} To {{$day->to_hours}}:{{$day->to_minutes}}</p>
                                                    <?php
                                                        $i++;
                                                    ?>
                                                @endforeach
                                                
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="geodir-single-taxonomies-container">
                                <div class="geodir-pos_navigation clearfix">
                                    <div class="geodir-post_left">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <footer class="entry-footer"></footer>
                    @endforeach
                </article>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<style>
@media only screen and (min-width: 675px) {
    .center-gallery {
        width: 50%;
        margin: auto;
    }

    .high{
        font-size: medium;
        padding: 0px;
        margin: 0px;
    }
    body{
        background: #74ebd5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #ACB6E5, #74ebd5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #ACB6E5, #74ebd5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
}
</style>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script type="text/javascript">
    if (window.location.hash && window.location.hash.indexOf('&') === -1 && jQuery(window.location.hash + 'Tab').length) {
        hashVal = window.location.hash;
    } else {
        hashVal = jQuery('dl.geodir-tab-head dd.geodir-tab-active').find('a').attr('data-tab');
    }
    openTab(hashVal);

    jQuery('dl.geodir-tab-head dd a').click(function() {
        openTab(jQuery(this).data('tab'))
    });

    function openTab(hashVal)
    {
        jQuery('dl.geodir-tab-head dd').each(function() {
            var tab = '';
            tab = jQuery(this).find('a').attr('data-tab');
            jQuery(this).removeClass('geodir-tab-active');
            if (hashVal != tab) {
                jQuery(tab + 'Tab').hide();
            }
        });
        jQuery('a[data-tab="'+hashVal+'"]').parent().addClass('geodir-tab-active');
        jQuery(hashVal + 'Tab').show();
    }

    $(function(){
        $('.bxslider').bxSlider({
            mode: 'fade',
            slideWidth: 600
        });
    });
</script>
@if($place->latitude && $place->longitude)
    <script type='text/javascript' src='https://maps.google.com/maps/api/js?language=en&key=AIzaSyDOZF22hjdjUWzNRraAZb55W87sLkG4zEg&libraries=places&region=GB'></script>
    <script defer>
        function initialize() {
            var latLng = new google.maps.LatLng({{ $place->latitude }}, {{ $place->longitude }});
            var mapOptions = {
                zoom: 14,
                minZoom: 6,
                maxZoom: 17,
                zoomControl:true,
                zoomControlOptions: {
                    style:google.maps.ZoomControlStyle.DEFAULT
                },
                center: latLng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scrollwheel: false,
                panControl:false,
                mapTypeControl:false,
                scaleControl:false,
                overviewMapControl:false,
                rotateControl:false
            }
            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            var image = new google.maps.MarkerImage("{{ asset('assets/images/pin.png') }}", null, null, null, new google.maps.Size(40,52));

            var content = `
            <div class="gd-bubble" style="">
                <div class="gd-bubble-inside">
                    <div class="geodir-bubble_desc">
                    <div class="geodir-bubble_image">
                        <div class="geodir-post-slider">
                            <div class="geodir-image-container geodir-image-sizes-medium_large ">
                                <div id="geodir_images_5de53f2a45254_189" class="geodir-image-wrapper" data-controlnav="1">
                                    <ul class="geodir-post-image geodir-images clearfix">
                                        <li>
                                            <div class="geodir-post-title">
                                                <h4 class="geodir-entry-title">
                                                    <a href="{{ route('place_info', $place->place_id) }}" title="View: {{ $place->name }}">{{ $place->name }}</a>
                                                </h4>
                                            </div>
                                            <a href="{{ route('place_info', $place->place_id) }}"><img src={{$str}} alt="{{ $place->name }}" class="align size-medium_large" width="1400" height="930"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="geodir-bubble-meta-side">
                    <div class="geodir-output-location">
                    <div class="geodir-output-location geodir-output-location-mapbubble">
                        <div class="geodir_post_meta  geodir-field-post_title"><span class="geodir_post_meta_icon geodir-i-text">
                            <i class="fas fa-minus" aria-hidden="true"></i>
                            <span class="geodir_post_meta_title">Place Title: </span></span>{{ $place->name }}</div>
                        <div class="geodir_post_meta  geodir-field-address" itemscope="" itemtype="http://schema.org/PostalAddress">
                            <span class="geodir_post_meta_icon geodir-i-address"><i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                            <span class="geodir_post_meta_title">Address: </span></span><span itemprop="streetAddress">{{ $place->address }}</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            </div>`;
            var marker = new google.maps.Marker({
                position: latLng,
                icon:image,
                map: map,
                title: 'Awesome'
            });
            var infowindow = new google.maps.InfoWindow();
            google.maps.event.addListener(marker, 'click', (function (marker) {
                return function () {
                    infowindow.setContent(content)
                    infowindow.open(map, marker);
                }
            })(marker));
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endif
@endsection
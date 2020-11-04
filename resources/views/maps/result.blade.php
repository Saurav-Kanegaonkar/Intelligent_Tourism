@extends('layouts.main')


@section('content')
@include('partials.map')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="content-box content-single">
                <article class="post-8 page type-page status-publish hentry">
                    <header>
                        <h1 class="entry-title" style="text-align: center">Places You Can Visit</h1></header>
                    <div class="entry-content entry-summary">
                        <div class="geodir-loop-container">
                            <ul class="geodir-category-list-view clearfix gridview_onethird geodir-listing-posts geodir-gridview gridview_onethird">
                                <?php
                                        $i =0;
                                ?>
                                @foreach($place_detail as $place)
                                    <li class="gd_place type-gd_place status-publish has-post-thumbnail wow">
                                        <div class="gd-list-item-left ">
                                            <div class="geodir-post-slider">
                                                <div class="geodir-image-container geodir-image-sizes-medium_large">
                                                    <div class="geodir-image-wrapper">
                                                        <ul class="geodir-post-image geodir-images clearfix">
                                                            <li>
                                                                <a href="{{ route('place_info', $place->place_id) }}">
                                                                    <?php
                                                                        $str= "http://lsapp.io/assets/images/shops/a".$place->place_id.".jpg";
                                                                    ?>
                                                                    <img src={{$str}} width="1440" height="960" class="geodir-lazy-load align size-medium_large" />
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gd-list-item-right ">
                                            <div class="geodir-post-title">
                                                <h2 class="geodir-entry-title"> <a href="{{ route('place_info', $place->place_id) }}" title="View: {{ $place->name }}">{{ $place->name }}</a></h2></div>
                                            @foreach($activitiyOfEachPlace[$i] as $act)
                                                <div class="gd-badge-meta gd-badge-alignleft" title="{{ $act }}">
                                                    <div class="gd-badge" style="background-color:#ffb100;color:#ffffff;"><i class="fas fa-certificate"></i> <span class='gd-secondary'>{{ $act }}</span></div>
                                                </div>
                                            @endforeach
                                            <div class="geodir-post-meta-container">
                                                <div class="geodir_post_meta gd-bh-show-field gd-lv-s-2 geodir-field-business_hours gd-bh-toggled gd-bh-{{ $OpenClose[$i] ? 'open' : 'close' }}" style="clear:both;">
                                                    <span class="geodir-i-business_hours geodir-i-biz-hours">
                                                        <i class="fas fa-clock" aria-hidden="true"></i><font>{{ $OpenClose[$i] ? 'Opened' : 'Closed' }} now</font>
                                                    </span>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="geodir-post-content-container">
                                                <div class="geodir_post_meta  geodir-field-post_content" style='max-height:120px;overflow:hidden;'>{{ $place->description }} <a href="place/{{$place->place_id}}" class='gd-read-more  gd-read-more-fade'>Read more...</a></div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                        $i++;
                                    ?>
                                @endforeach
                            </ul>
                            <div class="clear"></div>
                        </div>
                        {{-- {{ $shops->appends(request()->query())->links('partials.pagination') }} --}}
                    </div>
                    <footer class="entry-footer"></footer>
                </article>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type='text/javascript' src='https://maps.google.com/maps/api/js?language=en&key=AIzaSyDOZF22hjdjUWzNRraAZb55W87sLkG4zEg&libraries=places&region=GB'></script>
<script defer>
	function initialize() {
		var mapOptions = {
			zoom: 10.7,
			minZoom: 6,
			maxZoom: 17,
			zoomControl:true,
			zoomControlOptions: {
  				style:google.maps.ZoomControlStyle.DEFAULT
			},
			center: new google.maps.LatLng({{ $avg_latitude }}, {{ $avg_longitude }}),
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			scrollwheel: false,
			panControl:true,
			mapTypeControl:false,
			scaleControl:true,
			overviewMapControl:false,
			rotateControl:false
	  	}
		var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var image = new google.maps.MarkerImage("assets/images/pin.png", null, null, null, new google.maps.Size(40,52));
        var places = @json($place_detail);

        for(place in places)
        {
            place = places[place];
            if(place.latitude && place.longitude)
            {
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:image,
                    map: map,
                    title: place.name
                });
                var infowindow = new google.maps.InfoWindow();
                google.maps.event.addListener(marker, 'click', (function (marker, place) {
                    return function () {
                        infowindow.setContent(generateContent(place))
                        infowindow.open(map, marker);
                    }
                })(marker, place));
            }
        }
	}
	google.maps.event.addDomListener(window, 'load', initialize);

    function generateContent(place)
    {
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
                                                    <a href="{{ route('place_info', '') }}/`+place.place_id+`" title="View: `+place.name+`">`+place.name+`</a>
                                                </h4>
                                            </div>
                                            <a href="{{ route('place_info', '') }}/`+place.place_id+`"><img src="{{asset('assets/images/shops/a`+place.place_id+`.jpg')}}" alt="`+place.name+`" class="align size-medium_large" width="1400" height="930"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <br>
                <div class="geodir-bubble-meta-side">
                    <div class="geodir-output-location">
                    <div class="geodir-output-location geodir-output-location-mapbubble">
                        <div class="geodir_post_meta  geodir-field-post_title"><span class="geodir_post_meta_icon geodir-i-text">
                            <i class="fas fa-minus" aria-hidden="true"></i>
                            <span class="geodir_post_meta_title">Place Title: </span></span>`+place.name+`</div>
                        <div class="geodir_post_meta  geodir-field-address" itemscope="" itemtype="http://schema.org/PostalAddress">
                            <span class="geodir_post_meta_icon geodir-i-address"><i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                            <span class="geodir_post_meta_title">Address: </span></span><span itemprop="streetAddress">`+place.address+`</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            </div>`;

    return content;

    }
</script>
@endsection
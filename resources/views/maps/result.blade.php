@extends('layouts.main')

@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<link rel='stylesheet' href='{{ asset('assets/css/checkbox.css') }}' type='text/css' />

<style>
    a {
        color: #337ab7 !important;
    }
    body{
        background: #00467F;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to bottom, #A5CC82, #00467F);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to bottom, #A5CC82, #00467F); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
    select{
        text-align-last: center;
    }
    option{
        width: 100px;
        color: black;
        background-color: lightblue;    
    }
</style>
@endsection
@section('content')
@include('partials.map')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="content-box content-single">
                <article class="post-8 page type-page status-publish hentry">
                    <header>
                        <h1 class="entry-title" style="text-align: center; color:#00467F; padding: 5px;"><strong>Places You Can Visit</strong></h1>
                    </header>
                    <div class="entry-content entry-summary">
                        <div class="geodir-loop-container">
                            {!! Form::open(['action' => 'PagesController@places_submit', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            @csrf
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
                                                <br>
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
                                                <div class="geodir_post_meta geodir-field-post_content" style='max-height:120px;overflow:hidden;'>{{ $place->description }} <a href="place/{{$place->place_id}}" class='gd-read-more  gd-read-more-fade' style="font-size: medium">Read more...</a></div>
                                            </div>
                                            
                                            <div class="grid">
                                                
                                                <label class="checkbox path">

                                                    <input type="checkbox" name="checkbox[]" onclick="dothis()" class="myCheck" value="{{$place->place_id}}">
                                                    <svg viewBox="0 0 21 21">
                                                        <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                                                    </svg>
                                                </label>

                                            </div>
                                            <br>
                                        </div>
                                    </li>
                                    <?php
                                        $i++;
                                    ?>
                                @endforeach
                            </ul>
                            <div class="w3layouts agileits cool" style="margin-left: 38%">
                                <label for="" style="color:rgb(49, 185, 15) ;font-size:large; padding-left:3.5%"><span style="color: red">* </span>{{ __('Select your starting point') }}</label><br>
                                <select name="start_point" id="places" required>
                                    <option value="none">-- Select Starting point for your trip --</option>
                                </select>
                            </div>
                            <br><br><br>
                            <div class="clear"></div>
                            <div class="send-button w3layouts agileits">
                                <form>
                                    <input type="submit" class="btn btn-primary" value="Proceed" style="margin-left: 45%">
                                </form>
                                <div class="clear"></div>
                            </div>
                            {!! Form::close() !!}
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
    function dothis(){
        var places = @json($place_detail);
        var t=document.getElementsByClassName("myCheck");
        var selectElement = document.getElementById('places');
        var i, L = selectElement.options.length - 1;
       	for(i = L; i >= 0; i--) {
       	   selectElement.remove(i);
       	}
        var selectEle = document.getElementById("places"), o;
        o = document.createElement("option");
        o.value = "-- Select Starting point for your trip --";
        o.appendChild(document.createTextNode("-- Select Starting point for your trip --"));
        selectEle.appendChild(o);
        document.getElementById("places").options[0].disabled = true;
        for(var i=0;i<t.length;i++)
        {
        	if(t[i].checked)
            {
            	var selectEle = document.getElementById("places"), o;
                o = document.createElement("option");
                o.value = places[i].name;
                o.appendChild(document.createTextNode(places[i].name));
                selectEle.appendChild(o);
            }
        }
    }
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
                                                    <a style="color:white !important;" href="{{ route('place_info', '') }}/`+place.place_id+`" title="View: `+place.name+`">`+place.name+`</a>
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
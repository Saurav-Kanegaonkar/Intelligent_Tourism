@extends('layouts.app1')

@section('content')

<!DOCTYPE html>
<html>
<head>

	<title>Travel Agency Sign In Form A Flat Responsive Widget Template :: W3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/animate-custom.css') }}" />
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" type="text/css" media="all">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" type="text/css" media="all">
</head>
<style>

    #nice2{
        background: #F3904F;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to bottom, #3B4371, #F3904F);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to bottom, #3B4371, #F3904F); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }

	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
	-webkit-appearance: none;
	margin: 0;
    }
    select{
        width: 89%;
        color: #fff;
        font-family: 'Open Sans', sans-serif;
        font-weight: 300;
        margin: 10px 0 20px;
        font-size: 16px;
        letter-spacing: 1px;
        padding: 10px 5px 10px 40px;
        border: 1px solid rgba(255, 255, 255, 0.18);
        background: transparent;
        outline: none;
        
    }
    option{
        color: white;
        background-color: gray;
    }
    .yay{
        font-size: large !important;
    }
    .bord{
        width: 90%;
        border: 1px solid rgba(255, 255, 255, 0.18);
        padding: 10px 5px 10px 13px;
    }
    .wrapper{
        padding-bottom: 0px;
    }
    div#login{
        padding-bottom: 0px;
    }
    input[type="checkbox"] {
    display:none;
    }

    input[type="checkbox"] + label {
        color:#f2f2f2;
    }

    input[type="checkbox"] + label span {
        display:inline-block;
        width:19px;
        height:19px;
        margin:-2px 10px 0 0;
        vertical-align:middle;
        background-color: white;
        background:url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/check_radio_sheet.png') left top no-repeat;
        cursor:pointer;
    }

    input[type="checkbox"]:checked + label span {
        background:url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/check_radio_sheet.png') -19px top no-repeat;
    }
</style>

<body>
	<br><br>
	

	<div class="container w3layouts agileits">

		<div class="content-left w3layouts agileits">
            <img src="{{ asset('images/see.jpeg') }}" alt="W3layouts Agileits" style="height: 980px; opacity: 0.75";>
			<p>Do you want to check out the exclusive trips planned by us?</p>
			<a class="more w3layouts agileits" href="/ready_trips">CLICK HERE!</a>
			<!-- <div class="list w3layouts agileits">
				<ul class="w3layouts agileits">
					<li class="w3layouts agileits"><a href="#">About</a></li>
					<li class="li2 w3layouts agileits"><a href="#">Terms Of Use</a></li>
					<li class="w3layouts agileits"><a href="#">Contact</a></li>
				</ul>
			</div> -->
		</div>
		
		<div class="content-right w3layouts agileits">
			<section>
				<div id="container_demo">
					<a class="hiddenanchor w3layouts agileits" id="tologin"></a>
					<a class="hiddenanchor w3layouts agileits" id="toregister"></a>
					<div id="wrapper">
						<div id="login" class="animate w3layouts agileits form">
                            <h2 class="w3layouts agileits">Trips</h2>
                            
                            {!! Form::open(['action' => 'PagesController@trips_submit', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            @csrf
                                <label for="" class="yay">{{ __('Select city to explore') }}</label><br>
                                <select name="city" id="" required>
                                    <option value="" disabled selected>--Select City--</option>
                                    <option value="Mumbai">Mumbai</option>
                                    <option value="Ahmedabad">Ahmedabad</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Agra">Agra</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                </select>
								
								<br><br>
								<label for="days" class="yay">{{ __('Number of Days') }}</label>
								<input id="days" type="number" max="3" name="days" required>
                                
                                <br><br>
                                <label for="days" class="yay">{{ __('Activies to be done!') }}</label>
                                <br><br>
								<div class="form-check bord">
                                    <input type="checkbox" id="c1" name="activity[]" value="Shopping"/>
                                    <label for="c1"><span></span>Shopping</label>
                                    <br><br>
                                    <input type="checkbox" id="c2" name="activity[]" value="Sight-seeing"/>
                                    <label for="c2"><span></span>Sight-seeing</label>
                                    <br><br>
                                    <input type="checkbox" id="c3" name="activity[]" value="Trekking"/>
                                    <label for="c3"><span></span>Trekking</label>
                                    <br><br>
                                    <input type="checkbox" id="c4" name="activity[]" value="Zoo"/>
                                    <label for="c4"><span></span>Zoo</label>
                                    <br><br>
                                    <input type="checkbox" id="c5" name="activity[]" value="Beach"/>
                                    <label for="c5"><span></span>Beach</label>
                                    <br><br>
                                    <input type="checkbox" id="c6" name="activity[]" value="Malls"/>
                                    <label for="c6"><span></span>Malls</label>
                                    <br><br>
                                    <input type="checkbox" id="c7" name="activity[]" value="Garden"/>
                                    <label for="c7"><span></span>Parks/Garden</label>
                                    <br><br>
                                    <input type="checkbox" id="c8" name="activity[]" value="Palaces"/>
                                    <label for="c8"><span></span>Palaces</label>
                                    <br><br>
                                    <input type="checkbox" id="c9" name="activity[]" value="Temples"/>
                                    <label for="c9"><span></span>Temples</label>
                                    <br><br>
                                </div>
                                
                                <br><br>
								<div class="send-button w3layouts agileits">
									<form>
										<input type="submit" class="btn btn-primary">
									</form>
									<div class="clear"></div>
								</div>
								<div class="clear"></div>
                            {!! Form::close() !!}
							<div class="clear"></div>
							<br><br><br>
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="clear"></div>
	</div>
</body>
<!-- //Body -->

</html>

@endsection
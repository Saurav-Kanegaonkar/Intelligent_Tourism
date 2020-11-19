{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.app1')

@section('content')

<!DOCTYPE html>
<html>

<!-- Head -->
<head>

	<title>Travel Agency Sign In Form A Flat Responsive Widget Template :: W3layouts</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/animate-custom.css') }}" />
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" type="text/css" media="all">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" type="text/css" media="all">
        <style>
            /* Chrome, Safari, Edge, Opera */
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
              -webkit-appearance: none;
              margin: 0;
            }
            
            /* Firefox */
            input[type=number] {
              -moz-appearance: textfield;
            }
        </style>
</head>
<body>

    <br><br>
	<div class="container w3layouts agileits">

		<div class="content-left w3layouts agileits">
            <img src="{{ asset('images/background.jpg') }}" alt="W3layouts Agileits" style="height: 780px">
			<p>Plan your next dream trip. Select your destination and leave the rest to us.</p>
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
						<div id="register" class="animate w3layouts agileits form">
							<h2>Sign up</h2>
							<form  action="{{ route('register') }}" autocomplete="on" method="POST">
		
									{{-- <label>Name</label>
									<input type="text" class="name w3layouts agileits" Name="Name" required=""> --}}
									@csrf
										<label for="name">{{ __('Name') }}</label><br>
										<input id="name" class="name w3layouts agileits" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

										@error('name')
											<span class="invalid-feedback" role="alert">
												<strong style="color: #E91E63">{{ $message }}</strong>
											</span>
											<br>
										@enderror
									
                                    {{-- <label>E-mail</label>
									<input type="text" Name="Email" required=""> --}}
										<label for="email">{{ __('E-Mail Address') }}</label>
										<input id="email" type="text" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
								
											@error('email')
												<span class="invalid-feedback" role="alert">
													<strong style="color: #E91E63">{{ $message }}</strong>
												</span>
												<br>
											@enderror
									{{-- <label>Phone Number</label>
									<input type="number" class="phone w3layouts agileits" Name="Phone Number" required=""> --}}
									<label for="phone_no">{{ __('Phone Number') }}</label>
									<input id="phone_no" class="phone w3layouts agileits" type="number" class="@error('phone_no') is-invalid @enderror" name="phone_no" value="{{ old('phone_no') }}" required autocomplete="phone_no">
							
										@error('phone_no')
											<span class="invalid-feedback" role="alert">
												<strong style="color: #E91E63">{{ $message }}</strong>
											</span>
											<br>
										@enderror
									{{-- <label>Age</label>
									<input type="number" Name="age" required=""> --}}
									<br><label for="age">{{ __('Age') }}</label><br>
									<input id="age" type="number" max="70" class="@error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age">
							
										@error('age')
											<span class="invalid-feedback" role="alert">
												<strong style="color: #E91E63">{{ $message }}</strong>
											</span>
											<br>
										@enderror
									{{-- <label>Password</label>
									<input type="password" Name="Password" required=""> --}}
									<label for="password">{{ __('Password') }}</label>
										<input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
								
											@error('password')
												<span class="invalid-feedback" role="alert">
													<strong style="color: #E91E63">{{ $message }}</strong>
												</span>
												<br>
											@enderror
                                    {{-- <label>Confirm Password</label>
									<input type="password" Name="Password" required=""> --}}
										<label for="password-confirm">{{ __('Confirm Password') }}</label>
											<input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
									
									<div class="send-button w3layouts agileits">
											<input type="submit" value="SIGN UP">
									</div>
	
								<p class="change_link w3layouts agileits">
									Already a member? <a href="{{ route('login') }}" class="to_register">Sign In</a>
								</p>
								<div class="clear"></div>
							</form>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</section>
		</div>
		<div class="clear"></div>

	</div>

</body>
</html>

@endsection


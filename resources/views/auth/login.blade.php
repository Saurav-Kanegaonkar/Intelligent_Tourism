{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
<body>
	<br><br>
	

	<div class="container w3layouts agileits">

		<div class="content-left w3layouts agileits">
            <img src="{{ asset('images/background.jpg') }}" alt="W3layouts Agileits" style="height: 594px">
			<p>Plan your next dream trip. Select your destination and leave the rest to us.</p>
			<a class="more w3layouts agileits" href="#">LEARN MORE</a>
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
							<h2 class="w3layouts agileits">Sign In</h2>
							
						<form  action="{{ route('login') }}" autocomplete="on" method="POST">
							@csrf
								{{-- <label>E-mail</label>
								<input type="text" Name="email" required=""> --}}
								<label>{{ __('E-Mail Address') }}</label>
								<input id="email" type="text" class="@error('email') is-invalid @enderror" Name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
						
								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong style="color: #E91E63">{{ $message }}</strong>
									</span>
									<br><br>
								@enderror

								{{-- <label>Password</label>
								<input type="password" Name="Password" required=""> --}}
								
								<label for="password">{{ __('Password') }}</label>
								<input id="password" type="password" class="@error('password') is-invalid @enderror" Name="password" required autocomplete="current-password">
	
								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong style="color: #E91E63">{{ $message }}</strong>
									</span>
									<br>
								@enderror

								<div class="form-group row">
									<div class="col-md-6 offset-md-4">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
							
											<label class="form-check-label" for="remember">
												{{ __('Remember Me') }}
											</label>
										</div>
									</div>
								</div>

								<div class="send-button w3layouts agileits">
									<form>
										<input type="submit" class="btn btn-primary">
	


										@if (Route::has('password.request'))
											<a class="btn btn-link" href="{{ route('password.request') }}">
												{{ __('Forgot Your Password?') }}
											</a>
										@endif
									</form>
									<div class="clear"></div>
								</div>
								<p class="change_link w3layouts agileits">
									Don't have an account? <a href="{{ route('register') }}" class="to_register">Sign Up!</a>
								</p>
								<div class="clear"></div>
							</form>
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
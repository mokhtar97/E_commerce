<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{url('/design/login/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/design/login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/design/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/design/login/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/design/login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{url('/design/login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/design/login/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/design/login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{url('/design/login/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/design/login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('/design/login/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>





@if($message =Session::get('error'))
<div class="alert alert-danger alert-block">
<button type="button" class="close" data-dismiss="alert"></button>
<strong>{{ $message }}</strong>
</div>
@endif


@if(count($errors)>0)
   <div class="alert alert-danger alert-block">
   <ul>
   @foreach($errors->all() as $error)
   <li>{{$error}}</li>
   @endforeach
   </ul>
   </div>
   @endif
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form  method="post" action="{{url('checksign')}}" class="login100-form validate-form">
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
					<span class="login100-form-title p-b-70">
						Welcome
					</span>
					<span class="login100-form-avatar">
						<img src="{{url('/design/login/images/avatar-01.jpg')}}" alt="AVATAR">
					</span>

                    <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
						<input class="input100" type="text" name="name">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>


					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="email"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
                    
					<div class="container-login100-form-btn">
               <input type="submit" class="btn btn-warning" value="Sign_in"/>
              
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>


</div>
<!--===============================================================================================-->
<script src="{{url('/design/login/vendor/jquery/jquery-3.2.1.min.jsjs')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('/design/login/vendor/animsition/js/animsition.min.jsjs')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('/design/login/vendor/bootstrap/js/popper.jsjs')}}"></script>
	<script src="{{url('/design/login/vendor/bootstrap/js/bootstrap.min.jsjs')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('/design/login/vendor/select2/select2.min.jsjs')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('/design/login/vendor/daterangepicker/moment.min.jsjs')}}"></script>
	<script src="{{url('/design/login/vendor/daterangepicker/daterangepicker.jsjs')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('/design/login/vendor/countdowntime/countdowntime.jsjs')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('/design/login/js/main.js')}}"></script>

</body>
</html>

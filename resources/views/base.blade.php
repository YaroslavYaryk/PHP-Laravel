<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield("title")</title>
	<link href="{{ url('css/app.css') }}" rel="stylesheet" type="text/css" >
	<link rel = "icon" href = "{{ url('img/title.png') }}">


</head>
<body>
	<?php
		session_start();
		if (isset($_SESSION["user"])){
            $is_authenticated = 1;
			$username = $_SESSION["user"]->username;
        }else{
            $is_authenticated = 0;
        }

		

	?>
		<nav id="navbar" class="navbar">
			<h1>The dojo blog</h1>
			<div class="links">
				<a href="{{url('/')}}">Home</a>
					@if ($is_authenticated)
						<div class="block__link">
							<a href="{{url('logout/')}}">Logout</a>
							<a href="{{url('profile/' . $username)}}">Profile</a>

						</div>
					@else
						<div class="block__link">
							<a href="{{url('login_view/')}}">Login</a>
							<a href="{{url('reg_view/')}}">Registration</a>
						</div>

					@endif
				<a href="{{ url('create/blog/') }}" style="
					color: white;
					background-color: #f1356d;
					border-radius: 8px" >New Blog</a>
			</div>
		</nav >

		@yield('content')

</body>
</html>

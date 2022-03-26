@extends("base")

@section("title", "Register")


@section("content")

<div class="home">
	<center><h1>Registration</h1></center>
	<form method="POST" action="{{url('register')}}"  class="create">
		@csrf

		<input type="text" name="email" placeholder="Enter Email" />
		<input type="text" name="username" placeholder="Enter Username" />
		<input type="password" name="password2" placeholder="Enter password" />

		<input type="submit" />

		<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	</form>
</div>

@endsection

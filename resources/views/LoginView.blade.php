@extends("base")

@section("title", "Login")


@section("content")

<div class="home">
	<center><h1>Login</h1></center>
	<form method="POST" action="{{url('login')}}"  class="create">
		@csrf

		<input type="text" name="username" placeholder="Enter Username" />
		<input type="password" name="password" placeholder="Enter password" />

		<input type="submit" />

		<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	</form>
</div>

@endsection

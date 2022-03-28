@extends("base")

@section("title", "Profile")

@section("content")

	<div class="blog-list" style="margin-left:34.5%">
		
		<h1>{{$user->username}} profile</h1>
		<br>
		<h2>Roles</h2>
		<ul>
			@foreach($user->roles as $role)
				<li>{{$role->name}}</li>
			@endforeach
		</ul>


		@foreach($user->blogs as $blog)
		<br>
		<article class="_body" style="text-align:justify;">
			<h2>{{$blog->title}}</h2>
			<br>
			<div>{{substr($blog->body, 0,1000)}}</div>
			<br>
			<div class="bottom_block">
				<p>Written by {{$blog->user->username}}</p>
				<div class="block__bottom">
					<a class="btn__update del-post"href="{{ url('/blogs/' . $blog->id . '/delete/') }}">Delete blog</a>
				</div>
			</div>
			<br>
		</article>
		@endforeach
	</div>

@endsection
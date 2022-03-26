@extends("base")

@section("title", "Blog Details")


@section("content")

	<article class="article_body">
		<h2>{{$blog->title}}</h2>
		<br>
		<div>{{$blog->body}}</div>
		<br>
		<div class="bottom_block">
			<p>Written by {{$blog->author}}</p>
			<div class="block__bottom">
				<a class="btn__update del-post"href="{{ url('/blogs/' . $blog->id . '/delete/') }}">Delete blog</a>
			</div>
		</div>
		<br>
	</article>

@endsection

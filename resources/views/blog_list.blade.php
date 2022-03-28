@extends("base")

@section("title", "Blogs")

@section("content")

<div class="blog-list">
			<h2>All Blogs:</h2>
			@foreach ($blogs as $blog)
				<div class="blog-preview blog__list" key={blog.title} >
					<div class="block__left">
						<a href="{{ url('/blogs/' . $blog->id) }}"><h2>{{$blog->title}}</h2></a>
						<p>Written by {{$blog->user->username}}</p>
					</div>
				</div>	
				<div className="blog__right">
						

					</div>
			@endforeach
		</div>

@endsection
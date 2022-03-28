@extends("base")

@section("title", "Create Blog")


@section("content")
	<div class="create">

		<h2>Add a New Blog</h2>
		<form action="{{url('create/')}}" method="POST">
			@csrf

			<label>Blog title:</label>
			<input
				type="text"
				required
				name="title"
			/>
			<label>Blog body:</label>
			<textarea
				required
				name="body"
			></textarea>
			
			<button type="submit">Add Blog</button>

			<input type="hidden" name="_token" value="{{ csrf_token() }}" />

		</form>
	</div>

@endsection


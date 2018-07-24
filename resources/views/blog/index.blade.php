@extends('main')

@section('title',' Blog')

@section('content')
	
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<h1>Blog Posts</h1>
		</div>
	</div>

	@foreach ($posts as $post)
		
		<div class="row">
			<div class="col-md-8 offset-md-2 post">
				<h2>{{$post->title}}</h2>
				<h5>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>

				<p>{{ substr($post->body, 0, 250) }} {{ strlen($post->body) > 250 ? "..." : "" }}</p>

				<a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Read More...</a>

				<hr>
			</div>
		</div>

	@endforeach

	<div class="row">
		<div class="col-md-12">
			<div class="pagination justify-content-center">
				{{ $posts->links() }}
			</div>
		</div>
	</div>

@endsection
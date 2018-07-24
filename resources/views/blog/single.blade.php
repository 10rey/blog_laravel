@extends('main')

@section('title', " $post->title")

@section('content')

	<div class="row">
		<div class="col-md-8 offset-md-2">
			<h1>{{ $post->title }}</h1>
			<h6>Created at: {{ date('M j, Y', strtotime($post->created_at)) }}</h6>
			<p>{{ $post->body }}</p>
		</div>
	</div>

@endsection


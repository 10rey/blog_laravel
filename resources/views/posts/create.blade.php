@extends('main')

@section('title','Create new Post')

@section('stylesheets')

	<link rel="stylesheet" type="text/css" href="/css/parsley.css">

@endsection

@section('content')

	<div class='row'>
		
		<div class='col-md-8 offset-md-2'>

			<h1>Create New Post</h1>

			<hr>

			<form action="{{ route('posts.store') }}" method="post" accept-charset="utf-8" data-parsley-validate>

				{{ csrf_field() }}

				<label name="title" class="form-text">Title</label>
				<input type="text" id="title" name="title" class="form-control" placeholder="Title..." required maxlength="255">
				<label name="slug" class="form-text">Slug</label>
				<input type="text" name="slug" class="form-control" required minlength="5" maxlength="255">
				<label name="body" class="form-text">Post</label>
				<textarea name="body" id="body" rows="10" class="form-control" placeholder="Enter post here..." required></textarea>
				<input type="submit" value="Create Post" class="btn btn-success btn-lg btn-block" style="margin-top: 20px"></input>
				
			</form>
			
		</div>
	</div>

@endsection

@section('scripts')

	<script src="/js/parsley.min.js" type="text/javascript"></script>

@endsection


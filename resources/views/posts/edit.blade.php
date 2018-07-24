@extends('main')

@section('title','Edit Blog Post')

@section('stylesheets')

	<link rel="stylesheet" type="text/css" href="/css/parsley.css">

@endsection

@section('content')

	<div class="row">

		<div class="col-md-12">

			<form action="{{ route('posts.update', $post->id) }}" method="post" accept-charset="utf-8" data-parsley-validate>

				{{ csrf_field() }}

				{{ method_field('put') }}


				<div class="form-row"> 

				    <div class="form-group col-md-8">

				    	<label class="form-text">Title</label>

					 	<input class="form-control" type="text" name="title" value="{{ $post->title }}" id="title" required maxlenght="255">

					 	<label name="slug" class="form-text">Slug</label>

						<input type="text" name="slug" value="{{ $post->slug }}" class="form-control" required minlength="5" maxlength="255" >

					 	<label class="form-text">Post</label>

					 	<textarea class="form-control" name="body" rows="15" required> {{ $post->body }} </textarea>

				    </div>

				    <div class="form-group col-md-4">

				    	<div class="card" style="width:20rem;">

					 		<div class="card-body text-center">

						 		<dl class="row">
						 			
						 			<dt class="col-sm-6">Created At:</dt>
						 			<dl class="col-sm-6">{{ date('M j, Y h:i a', strtotime($post->created_at)) }}</dl>

						 		</dl>

						 		<dl class="row">
						 			
						 			<dt class="col-sm-6">Last Updated:</dt>
						 			<dl class="col-sm-6">{{ date('M j, Y h:i a', strtotime($post->updated_at)) }}</dl>

						 		</dl>

						 		<hr>

						 		<div class="row">
						 			
						 			<div class="col-sm-6">

						 				<a href="{{ route('posts.show',$post->id) }}" title="" class="btn btn-danger btn-block">Cancel</a>

						 			</div>

						 			<div class="col-sm-6">

						 				<input type="submit" class="btn btn-success btn-block" value="Save changes">

						 			</div>

						 		</div>

					 		</div>
					 		
					 	</div>

				    </div>

				</div>
			  
			</form>

		</div>
		
	</div>

@endsection

@section('scripts')

	<script src="/js/parsley.min.js" type="text/javascript"></script>

@endsection

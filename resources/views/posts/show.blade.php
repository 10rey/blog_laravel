@extends('main')

@section('title','View Posts')

@section('content')

	<div class="row">
		 
		 <div class="col-md-8">

		 	<h1>{{ $post->title }}</h1>

			<p class="lead">{{ $post->body }}</p>
		 	
		 </div>

		 <div class="col-md-4">
		 	
		 	<div class="card" style="width:20rem;">

		 		<div class="card-body text-center">

		 			<dl class="row">
			 			<div class="col-sm-12">
			 				<label class="form-text">URL:</label>
			 				<p class="form-text"><a href="{{ route('blog.single',$post->slug) }}"> {{ route('blog.single',$post->slug) }} </a></p>
			 			</div>

			 		</dl>

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
			 				<a href="{{ route('posts.edit', $post->id) }}" title="" class="btn btn-primary btn-block">Edit</a>
			 			</div>

			 			<div class="col-sm-6">

			 				<form action=" {{ route('posts.destroy', $post->id) }}" method="post" >
			 						
			 					{{ csrf_field() }}
			 					{{ method_field('delete') }}

			 					<button class="btn btn-danger btn-block" type="submit">Delete</button>
								
			 				</form>
			 				
			 			</div>

			 			<div class="col-sm-12">
			 				<a href=" {{route('posts.index') }} " class="btn btn-outline-secondary btn-block btn-h1-spacing">
			 					<-- See all Posts
			 				</a>
			 			</div>

			 		</div>

		 		</div>
		 		
		 	</div>

		 </div>

	</div>
	
@endsection
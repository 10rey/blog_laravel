@extends('main')

@section('title','All Posts')

@section('content')

	<div class="row">
		
		<div class="col-md-10">

			<h1>All Posts</h1>
			
		</div>

		<div class="col-md-2">

			<a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-outline-dark">Create new</a>
			
		</div>

		<div class="col-md-12">

			<br>
			
		</div>

	</div>

	<div class="row">

		<div class="col-md-12">

			<div class="table">

				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th>#</th>
							<th>Title</th>
							<th>Body</th>
							<th>Created At</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
							@foreach ($posts as $post)
								
								<tr>
									
									<th>{{ $post->id }}</th>
									<td>{{ $post->title }}</td>
									<td>{{ substr($post->body, 0, 47) }} {{ strlen($post->body) > 47 ? "..." : "" }}</td>
									<td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
									<td> 
										<a href="{{ route('posts.show', $post->id) }}" title="" class="btn btn-outline-secondary btn-sm">View</a>
										<a href="{{ route('posts.edit', $post->id) }}" title="" class="btn btn-outline-secondary btn-sm">Edit</a> 
									</td>

								</tr>

							@endforeach

					</tbody>
				</table>

				<div class="pagination justify-content-center">
					{{ $posts->links() }}
				</div>
				
			</div>
			
		</div>
		
	</div>


@endsection
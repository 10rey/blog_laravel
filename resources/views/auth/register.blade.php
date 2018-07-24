@extends('main')

@section('title', ' Register')

@section('stylesheets')

    <link rel="stylesheet" type="text/css" href="/css/parsley.css">

@endsection

@section('content')
	
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form action="{{ route('register') }}" method="post" data-parsley-validate>

				{{ csrf_field() }}

				<div class="form-group">
					<h1 class="form-text text-center">Register</h1>
				</div>

				<div class="form-group">
				    <label for=name">Name</label>
				    <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
				 </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required data-parsley-type="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required data-parsley-minlength="6">
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password" required data-parsley-equalto="#password">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Register</button>
				
			</form>
		</div>
	</div>

@endsection

@section('scripts')

    <script src="/js/parsley.min.js" type="text/javascript"></script>

@endsection

@extends('main')

@section('title',' Login')

@section('stylesheets')

    <link rel="stylesheet" type="text/css" href="/css/parsley.css">

@endsection

@section('content')

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="{{ route('login') }}" method="post" data-parsley-validate>

                {{ csrf_field() }}

                <div class="form-group">
                    <h1 class="form-text text-center">Login</h1>
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required data-parsley-type="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label" name="remember" for="remember">Remember me</label>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block">Login</button>

            </form>
        </div>
    </div>

@endsection

@section('scripts')

    <script src="/js/parsley.min.js" type="text/javascript"></script>

@endsection
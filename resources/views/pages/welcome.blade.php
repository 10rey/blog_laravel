
@extends('main')

@section('title',' Homepage')

@section('content')

    <div class="row">
        <div class="col-md-12">

            <div class="jumbotron">
                <h1>Welcome to my Blog!</h1>
                <p class="lead">Thank you so much for visiting my site. This is just a test site using Laravel 5.4!</p>
                <p> <a class="btn btn-primary btn-lg" href="" role="button" title="">Popular Post</a></p>
            </div>
            
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">

            @foreach ($posts as $post)

                <div class="post">
                    <h3>{{ $post->title }}</h3>
                    <h6>Created at: {{ date('M j, Y', strtotime($post->created_at)) }}</h6>
                    <p>
                        {{ substr($post->body, 0, 300) }} {{ strlen($post->body) > 300 ? "..." : "" }}
                    </p>
                    <a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary" title="">Read More...</a>
                </div>

                <hr>

            @endforeach

        </div>  
        
        <div class="col-md-3 offset-md-1">
            <h2>Sidebar</h2>
        </div>
    </div>

@endsection
       
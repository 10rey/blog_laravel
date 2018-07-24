


<nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Jess' Test Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02"  aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Request::is('/') ? "active" : "" }}">
                    <a class="nav-link" href="/">Home</a> 
                </li>
                <a class="nav-link {{ Request::is('blog') ? "active" : "" }}" href="/blog">Blog</a>
                <a class="nav-link {{ Request::is('about') ? "active" : "" }}" href="/about">About</a>
                <a class="nav-link {{ Request::is('contact') ? "active" : "" }}" href="/contact">Contact</a>
            </ul>

            <ul class="nav navbar-nav navbar-right">

                @if(Auth::check())

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hello, {{ Auth::user()->name}} </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('posts.index') }}">Posts</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>

                        {{-- Logout in post method --}}
                        <form action="{{ route('logout') }}" method="post">

                            {{ csrf_field() }}

                            <input type="submit" class="dropdown-item text-danger text" value="Logout">

                        </form>

                    </div>
                </li>

                @else
                
                <li class="nav-item dropdown">

                    <a class="btn btn-outline-warning dropdown-toggle" role="button" id="dlink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">My Account</a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dlink">
                        <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('register') }}">Register</a>   
                    </div>

                </li>

                @endif

            </ul>
        </div>
    </nav>
<!DOCTYPE html>
<html>

<head>

    @include('partials._head')

</head>

<body>
    
    <!-- nav -->
    @include('partials._nav')  
    <!-- end of nav -->

    <!-- main container -->
    <div class="container">

        @include('partials._messages')
        
        @yield('content')

        @include('partials._footer')

    </div>
    <!-- main container -->

    <!-- Bootstrap 4 js, jquery, jpopper -->
    @include('partials._javascripts')
    <!-- Bootstrap 4 js, jquery, jpopper -->

    {{-- javascripts --}}
    @yield('scripts')
    {{-- javascripts --}}
     
</body>

</html>
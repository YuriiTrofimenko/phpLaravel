<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf - 8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Larabook</title>
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
    </head><! - - /head - - >
    <body>
        <div class="container">
        @section('menu')
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="navbar-nav">
                <li class="nav-item active" role="presentation" {{$page == 'Mainpage' ? 'class=active' : ''}}>
                    <a class="nav-link" href="{{url('topic/index')}}">Main Page</a></li>
                <li  class="nav-item" role="presentation" {{$page == 'Forms' ? 'class=active' : ''}}>
                    <a class="nav-link" href="{{url('block/create')}}">Content Control</a></li>
            </ul>
        </nav>
        
            @show
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="container">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <! - - Latest compiled and minified
        JavaScript - - >
        <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}">
        </script>
        <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}">
        </script>
    </body>
</html>
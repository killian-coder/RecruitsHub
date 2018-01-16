<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
        <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        {{--  <link href="{{ asset('css/style.css') }}" rel="stylesheet">  --}}
    
    </head>
    <body>
        {{--  <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>  --}}

        <div class="">
           
 <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider"></li>
            <li><a href="#!">three</a></li>
        </ul>
        <nav>
            <div class="nav-wrapper">
            <a href="#!" class="brand-logo">Logo</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="sass.html">Menu Item 1</a></li>
                <li><a href="badges.html">Menu Item 2</a></li>
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Categories <i class="fa fa-caret-down"></i></a></li>
            </ul>
            </div>
        </nav> 
      </div>
        {{--  END OF NAVIGATION  --}}
        <div id="index-banner" class="parallax-container">
                <div class="section no-pad-bot">
                <div class="container">
                    <br><br>
                    <h1 class="header center white-text text-darken-4">recruits-hub</h1>
                    <div class="row center">
                    <h5 class="header col s12 white-text text-darken-4">Worlds number 1 place for recruits!</h5>
                    </div>

         
                    <br>
                    
                    <div class="fixed-action-btn horizontal click-to-toggle">
                            <a class="btn-floating btn-large red">
                              <i class="large material-icons">mode_edit</i>
                            </a>
                            <ul>
                              <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
                              <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
                              <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
                              <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
                            </ul>
                          </div>

                </div>
                </div>
                <div class="parallax"><img src="{{ asset('images/background1.jpeg') }}" alt="Unsplashed background img 1"></div>
          </div>













        <script>
                $(document).ready(function(){
                    $(".dropdown-button").dropdown();
                });
        </script>
        <script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
        <script src="{{ asset('js/materialize.min.js') }}"></script>
        <script src="{{ asset('js/init.js') }}"></script>
    </body>
</html>

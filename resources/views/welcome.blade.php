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
        <nav class="indigo darken-4">
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
                    <div class="row center">
                        <div class="center-align">
                            <a href="" class="btn indigo darken-3">Explore More</a>
                        </div>
                    </div>
                    <br>
                    
                    <div class="fixed-action-btn horizontal click-to-toggle">
                            <a class="btn-floating btn-large red">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                            </a>
                            <ul>
                              <li><a class="btn-floating red darken-3"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                              <li><a class="btn-floating brown darken-1"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              <li><a href="twitter.com" class="btn-floating blue"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a class="btn-floating blue darken-4"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            </ul>
                    </div>

                </div>
                </div>
                <div class="parallax"><img src="{{ asset('images/background3.jpg') }}" alt="Unsplashed background img 1"></div>
          </div>
          <br>
          <div class="container">
              <div class="row">
                  <div class="center-align">
                      <h3>Recent Profiles</h3>
                  </div>

                  <div class="col l4 m3 s12">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="images/avatars/man_avatar.png">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">John Doe <span class="right"><i class="fa fa-caret-up"></i></span></span>
                                {{--  <p><a href="#">This is a link</a></p>  --}}
                                <b>Interested In:</b> Electrical Engineering
                                <b>Interested In:</b> Electrical Engineering
                                <b>Interested In:</b> Electrical Engineering
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">John Doe <span class="right"><i class="fa fa-caret-down"></i></span></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                  </div>

                  <div class="col l4 m3 s12">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="images/avatars/tutu.jpg" height="300px">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Thulani Tembo <span class="right"><i class="fa fa-caret-up"></i></span></span>
                                {{--  <p><a href="#">This is a link</a></p>  --}}
                                <b>Interested In:</b> Electrical Engineering
                                <b>Interested In:</b> Electrical Engineering
                                <b>Interested In:</b> Electrical Engineering
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Thulani Tembo <span class="right"><i class="fa fa-caret-down"></i></span></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                  </div>

                  <div class="col l4 m3 s12">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="images/avatars/man_avatar.png">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">John Doe <span class="right"><i class="fa fa-caret-up"></i></span></span>
                                {{--  <p><a href="#">This is a link</a></p>  --}}
                                <b>Interested In:</b> Electrical Engineering
                                <b>Interested In:</b> Electrical Engineering
                                <b>Interested In:</b> Electrical Engineering
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">John Doe <span class="right"><i class="fa fa-caret-down"></i></span></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                  </div>
              </div>
          </div>












        <footer class="page-footer indigo darken-4">
            <div class="container">
                <div class="row">
              
                </div>
                  
                </div>
                <div class="footer-copyright ">
                    <div class="container">
                        © 2017, All rights reserved.
                        <div class="right">recruits-hub</div>
                    </div>
                </div>
        </footer>
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

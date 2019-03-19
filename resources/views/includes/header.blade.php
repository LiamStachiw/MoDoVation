<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>MoDoVation</title>
    <link rel="icon" href="/images/MDVIcon.ico"/>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    <!-- Custom styles for blog -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for blog -->
    <link href="/css/blog.css" rel="stylesheet">

    <!-- Javascript & JQuery -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/javascript.js"></script>

    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>

    <!-- Custom styles for prodcuts template -->
    <link href="/css/product.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </head>

  <body>

      <nav class="site-header sticky-top py-1">
          <div class="container d-flex flex-column flex-md-row justify-content-between">
            <div class="pos-f-t">
              <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4">
                  <h5 class="text-white h4">Menu</h5>
                    <ul class="list-unstyled text-small">

                      @if(Auth::user())
                      <li><a class="py-2  d-md-inline-block" href="/profile">{{Auth::user()->name}}</a></li>
                      @endif
          
                      @guest
                      <li><a class="py-2 d-md-inline-block" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        @if (Route::has('register'))
                        <li><a class="py-2  d-md-inline-block" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @endif
                        @else
                        <li><a class="py-2  d-md-inline-block" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a></li>
          
                        <li><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form></li>
                      @endguest

                      <hr>

                      <li><a class="py-2" href="/">Home</a></li>
                      <li><a class="py-2 d-md-inline-block" href="/todo">To Do List</a></li>
                      <li><a class="py-2 d-md-inline-block" href="/goals">Goals</a></li>
                      <li><a class="py-2  d-md-inline-block" href="/journals">Journals</a></li>
                      

                    </ul>
                </div>
              </div>
              <nav class="navbar navbar-dark">
                  <a class="py-2 d-md-inline-block" href="/" style="float: right"><img src="/images/MDVLogo.png" alt="Logo" width="66" height="24"></a>
                  <button style="margin-left: 15px" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </nav>
            </div>

            
            <a class="py-2 d-none d-md-inline-block" href="/todo">To Do List</a>
            <a class="py-2 d-none d-md-inline-block" href="/goals">Goals</a>
            <a class="py-2 d-none d-md-inline-block" href="/journals">Journals</a>
            {{-- <a class="py-2 d-none d-md-inline-block" href="/settings">Settings</a> --}}

            @if(Auth::user())
            <a class="py-2 d-none d-md-inline-block" href="/profile">{{Auth::user()->name}}</a>
            @endif

            @guest
              <a class="py-2 d-none d-md-inline-block" href="{{ route('login') }}">{{ __('Login') }}</a>
              @if (Route::has('register'))
                <a class="py-2 d-none d-md-inline-block" href="{{ route('register') }}">{{ __('Register') }}</a>
              @endif
              @else
              <a class="py-2 d-none d-md-inline-block" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            @endguest
          </div>
        </nav>
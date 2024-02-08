<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
msmss
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page') - {{ config('app.name', 'Laravel Ticket') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav classccncccccsksksksssssssssssssssssss ="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel')dckcd }}
            </a>cddc
            <button dcclass="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span dclass="navbar-toggler-icon"></span>
            </button>cd
d
 c           <div class="collapse navbar-collapse" id="navbarSupportedContent">
  dc              <!-- Left Side Of Navbar -->
    dc            <ul class="navbar-nav mr-auto">
dc
  dc              </ul>
dc
  dc              <!-- Right Side Of Navbar -->
    d            <ul class="navbar-nav ml-auto">
     cd               <!-- Authentication Links -->
       dc             @guest
                        <li class="nav-item">
         dc                   <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
           dc             </li>
             dc           @if (Route::has('register'))
               dc             <li class="nav-item">
                 dc               <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                   d         </li>
                    dc    @endif
                    @edclse
                        dc<li class="nav-item dropdown">
                          dc  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            dc    {{ Auth::user()->name }} <span class="caret"></span>
                            </dca>
dc
  dc                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    dc                            <a class="dropdown-item" href="{{ route('logout') }}"
      dc                             onclick="event.preventDefault();
        dc                                             document.getElementById('logout-form').submit();">
          dcdc                          {{ __('Logout') }}
              dc                  </a>
dc
  dc                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    dc                                @csrf
      dc                          </form>
        cd                    </div>
          dc              </li>
            dc        @endguest
              dc  </ul>
            </didcv>
        </div>dc
    </nav>dc
dc
  dc  <main class="py-4">
    dc    @yield('auth_content')
      dc  @yield('content')
    </madcin>
</div>dc
dc
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@yield('footer')
</body>
</html>

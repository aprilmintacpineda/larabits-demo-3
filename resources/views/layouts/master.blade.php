<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
  <title>Larabits</title>
</head>
<body>
  <div class="topbar-wrapper">
    <div class="topbar-container">
      <h1>Logo</h1>
      <nav>
        @if(Auth::check())
          <ul>
            <li><a href="{{ url('/logout') }}">Logout<span class="decor"></span></a></li>
          </ul>
        @else
          <ul>
            <li><a href="{{ url('/') }}">Home<span class="decor"></span></a></li>
            <li><a href="{{ url('login') }}">Login<span class="decor"></span></a></li>
            <li><a href="{{ url('register') }}">Register<span class="decor"></span></a></li>
          </ul>
        @endif
      </nav>
    </div>
  </div>
  <div class="body">
    @yield('body')
  </div>
</body>
</html>

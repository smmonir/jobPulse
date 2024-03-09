<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>JobPulse</title>
        <link type="text/css" rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body class="antialiased">
      <div id="nav">
         @include('components.header');
      </div>
      <div id="content">
         @yield('main')
      </div>
      <div id="footer">
         @include('components.footer');
      </div>
    </body>
</html>
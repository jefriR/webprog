<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'LSAPP')}}</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
<!--        <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}"-->
        @yield('css')
    </head>
    <body>
      @include('include.navbar')
      
      <div class="container">
        @include('include.messages')
        @yield('content')
      </div>
    </body>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/clock.js')}}"></script>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scream Cream</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="tw-w-full tw-max-w-screen-xl tw-mx-auto tw-font-heading tw-text-black" id="app">
      @include('layouts.header')
      @yield('content')
      @include('layouts.footer')
    </div>    
    <script type="text/javascript" src="{{ mix('/js/app.js')}}" async defer></script>
</body>
</html>
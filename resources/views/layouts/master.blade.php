<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  {{-- <link rel="stylesheet" href="{{ asset('css/normalize.css') }}"> --}}
  {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}

  <link rel="icon" href="favicon.ico">
  <link rel="icon" href="img/favicons/icon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="img/favicons/180x180.png">
  <link rel="manifest" href="manifest.webmanifest">
</head>

<body>
  @include('layouts.header')

  @yield('content')

  @include('layouts.footer')

  @include('layouts.carrier')

  @yield('script')
</body>

</html>

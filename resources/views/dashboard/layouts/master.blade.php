<!DOCTYPE html>
<html class="page" lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="robots" content="none">
  <meta name="googlebot" content="noindex, nofollow">
  <meta name="yandex" content="none">

  <title>Панель управления | Lady Healthcare</title>

  <link rel="stylesheet" href="{{ asset('glide/glide.css') }}">
  <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

  <link rel="icon" href="{{ asset('favicon.ico') }}">
</head>

<body class="page-body">
  @include('layouts.dashboard')

  @yield('content')

  <script src="{{ asset('glide/glide.min.js') }}"></script>
  <script src="{{ asset('leaflet/leaflet.js') }}"></script>
  <script src="{{ asset('pristine/pristine.min.js') }}"></script>
  <script src="{{ asset('js/dashboard/main.js') }}" type="module"></script>
  @yield('script')
</body>

</html>

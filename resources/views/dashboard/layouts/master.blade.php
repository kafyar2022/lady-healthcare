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

  <link rel="stylesheet" href="{{ asset('simditor/simditor.css') }}">
  <link rel="stylesheet" href="{{ asset('glide/glide.css') }}">
  <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <link rel="icon" href="{{ asset('favicon.ico') }}">
</head>

<body class="page__body page__body--admin">
  @include('dashboard.layouts.dashboard')

  @yield('content')

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="{{ asset('simditor/module.js') }}"></script>
  <script src="{{ asset('simditor/hotkeys.js') }}"></script>
  <script src="{{ asset('simditor/uploader.js') }}"></script>
  <script src="{{ asset('simditor/simditor.js') }}"></script>
  <script src="{{ asset('glide/glide.min.js') }}"></script>
  <script src="{{ asset('leaflet/leaflet.js') }}"></script>
  <script src="{{ asset('pristine/pristine.min.js') }}"></script>
  @yield('script')
</body>

</html>

<!DOCTYPE html>
<html class="login-page" lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="robots" content="none">
  <meta name="googlebot" content="noindex, nofollow">
  <meta name="yandex" content="none">
  <title>Вход | Lady Healthcare</title>
</head>

<body class="login-page-body">

  <form class="login-form" action="{{ route('auth.check') }}" method="post">
    @csrf
    <label class="login-label">
      <input class="login-input" name="login" type="text" placeholder="Логин">
    </label>
    <label class="login-label">
      <input class="login-input" id="password" name="password" type="password" placeholder="Пароль">
      <button class="login-eye-btn" type="button">Показать пароль</button>
    </label>
    <button class="button login-submit-btn" type="submit">Войти</button>
  </form>

</body>

</html>

<aside class="dashboard">
  <h2 class="dashboard__title">Панель управления сайтом</h2>

  <ul class="dashboard-list">
    <li class="dashboard-list__item">
      <a class="dashboard-list__link {{ $route === 'home' || $route === 'drugs' || $route === 'drugs.show' ? 'dashboard-list__link--current' : '' }}" href="{{ route('dashboard') }}">Режим редактирования / Главная</a>
    </li>
    <li class="dashboard-list__item">
      <a class="dashboard-list__link {{ $route === 'dashboard.drugs' ? 'dashboard-list__link--current' : '' }}" href="{{ route('dashboard.drugs') }}">Препараты</a>
    </li>
    <li class="dashboard-list__item">
      <a class="dashboard-list__link {{ $route === 'dashboard.banners' ? 'dashboard-list__link--current' : '' }}" href="{{ route('dashboard.banners') }}">Баннеры</a>
    </li>
    <li class="dashboard-list__item">
      <a class="dashboard-list__link {{ $route === 'dashboard.carrier' ? 'dashboard-list__link--current' : '' }}" href="{{ route('dashboard.carrier') }}">Карьера</a>
    </li>
    <li class="dashboard-list__item">
      <a class="dashboard-list__link" href="{{ route('auth.logout') }}">Выход</a>
    </li>
  </ul>
</aside>

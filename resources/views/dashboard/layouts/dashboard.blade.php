<aside class="dashboard">
  <div class="dashboard__inner">
    <ul class="dashboard__menu">
      <li class="dashboard__menu-item {{ $route == 'admin.products' ? 'dashboard__menu-item--current' : '' }}">
        <a class="dashboard__link" href="{{ route('admin.products') }}">Препараты</a>
      </li>

      <li class="dashboard__menu-item {{ $route == 'admin.directions' ? 'dashboard__menu-item--current' : '' }}">
        <a class="dashboard__link" href="{{ route('admin.directions') }}">Направлении</a>
      </li>

      <li class="dashboard__menu-item {{ $route == 'admin.banners' ? 'dashboard__menu-item--current' : '' }}">
        <a class="dashboard__link" href="{{ route('admin.banners') }}">Баннеры</a>
      </li>

      <li class="dashboard__menu-item">
        <a class="dashboard__link admin-panel__link--logout" href="{{ route('auth.logout') }}">Выйти</a>
      </li>
    </ul>
  </div>
</aside>

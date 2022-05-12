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

  <form class="dash-form social-links__dash-form" enctype="multipart/form-data">
    <fieldset class="dash-form__inner">
      <legend class="dash-form__title">Социальные сети</legend>
      <div class="dash-form__element">
        <label class="dash-form__label">
          Название
          <input class="dash-form__field" name="title" type="text" required placeholder=". . .">
        </label>
      </div>
      <div class="dash-form__element">
        <label class="dash-form__label">
          Ссылка на страницу
          <input class="dash-form__field" type="text" required placeholder=". . .">
        </label>
      </div>
      <div class="dash-form__element">
        <label class="dash-form__label">
          Выберите иконку
          <div class="dash-form__field">. . .</div>
          <input class="visually-hidden" type="file" required>
        </label>
      </div>

      <div class="dash-form__actions">
        <button class="popup-btn popup-btn--save" type="submit" title="Сохранить"></button>
      </div>
    </fieldset>
    <button class="popup-btn popup-btn--close" type="button" title="Закрыть"></button>
  </form>
</aside>

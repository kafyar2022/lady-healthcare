<header class="container main-header">
  <div class="main-header__container">
    <a class="main-logo" href="{{ route('home') }}">
      <img src="{{ asset('img/main-logo.svg') }}" width="169" height="64" alt="Логотип компании Lady Healthcare">
    </a>

    <section class="contacts-card">
      <h2 class="visually-hidden">Контакты</h2>

      <a class="contact-link contacts-card__email" href="mailto:{{ $mainTexts['company-email'] }}" data-type="text" data-title="Электронная почта" data-id="{{ $mainTexts['company-email-id'] }}">{{ $mainTexts['company-email'] }}</a> <br>
      <a class="contact-link contacts-card__phone" href="tel:{{ str_replace([' ', '(', ')', '-'], '', $mainTexts['company-phone']) }}" data-type="text" data-title="Контактные номера" data-id="{{ $mainTexts['company-phone-id'] }}">{{ $mainTexts['company-phone'] }}</a>

      <ul class="social-links">
        @foreach ($socialLinks as $social)
          <li class="social-links__item">
            <a class="social-links__link" href="{{ $social->url }}" target="_blank" data-type="social-link" data-id="{{ $social->id }}" data-title="{{ $social->title }}" data-icon="{{ $social->icon }}" data-url="{{ $social->url }}">{{ $social->title }} <i style="{{ 'background-image: url(../img/social-icons/' . $social->icon . ')' }}"></i></a>
          </li>
        @endforeach
      </ul>
    </section>
  </div>
</header>

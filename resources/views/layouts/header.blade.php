<header class="main-header">
  <a class="main-logo header__main-logo" href="{{ route('home') }}">
    <img src="{{ asset('img/main-logo.svg') }}" width="169" height="64" alt="Логотип компании Lady Healthcare">
  </a>

  <section class="contacts-card">
    <h2 class="visually-hidden">Контакты</h2>

    <a class="contact-link" href="mailto:{{ $mainTexts['company-email'] }}">{{ $mainTexts['company-email'] }}</a> <br>
    <a class="contact-link" href="tel:{{ str_replace([' ', '(', ')', '-'], '', $mainTexts['company-phone']) }}">{{ $mainTexts['company-phone'] }}</a>

    <ul class="social-links">
      @foreach ($socialLinks as $social)
        <li class="social-links__item">
          <a class="social-links__link" href="{{ $social->url }}" data-icon="{{ $social->icon }}">{{ $social->title }}</a>
        </li>
      @endforeach
    </ul>
  </section>
</header>

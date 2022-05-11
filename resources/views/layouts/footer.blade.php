<footer class="main-footer">
  <div class="map" id="map" data-zoom="{{ $mainTexts['map-zoom-level'] }}" data-lat="{{ $mainTexts['map-lat'] }}" data-lng="{{ $mainTexts['map-lng'] }}"></div>
  <div class="container">
    <a class="main-logo main-footer__main-logo" href="{{ route('home') }}">
      <img src="{{ asset('img/main-logo.svg') }}" width="169" height="64" alt="Логотип компании Lady Healthcare">
    </a>

    <dl class="footer-contacts">
      <dt class="footer-contacts__term" data-type="text" data-id="{{ $mainTexts['footer-address-title-id'] }}">{{ $mainTexts['footer-address-title'] }}</dt>
      <dd class="footer-contacts__item" data-action="reset-map" data-type="text" data-title="Адрес компании" data-id="{{ $mainTexts['address-id'] }}">{{ $mainTexts['address'] }}</dd>
      <dt class="footer-contacts__term" data-type="text" data-id="{{ $mainTexts['footer-contacts-title-id'] }}">{{ $mainTexts['footer-contacts-title'] }}</dt>
      <dd class="footer-contacts__item">
        <a class="contact-link contact-link--white" href="mailto:{{ $mainTexts['company-email'] }}" data-type="text" data-title="Электронная почта" data-id="{{ $mainTexts['company-email-id'] }}">{{ $mainTexts['company-email'] }}</a>
      </dd>
      <dd class="footer-contacts__item">
        <a class="contact-link contact-link--white" href="tel:{{ str_replace([' ', '(', ')', '-'], '', $mainTexts['company-phone']) }}" data-type="text" data-title="Контактные номера" data-id="{{ $mainTexts['company-phone-id'] }}">{{ $mainTexts['company-phone'] }}</a>
      </dd>
    </dl>
  </div>
  <p class="copyright" data-type="text" data-title="Копирайт" data-id="{{ $mainTexts['copyright-id'] }}">{{ $mainTexts['copyright'] }}</p>
</footer>

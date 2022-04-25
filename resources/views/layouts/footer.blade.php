<footer class="main-footer">
  <a class="main-logo footer__main-logo" href="{{ route('home') }}">
    <img src="{{ asset('img/main-logo.svg') }}" width="169" height="64" alt="Логотип компании Lady Healthcare">
  </a>

  <dl class="footer-contacts">
    <dt class="footer-contacts__title">{{ $mainTexts['footer-address-title'] }}</dt>
      <dd class="footer-contacts__item">{{ $mainTexts['address'] }}</dd>
    <dt class="footer-contacts__title">{{ $mainTexts['footer-contacts-title'] }}</dt>
      <dd class="footer-contacts__item">
        <a class="contact-link contact-link--white" href="mailto:{{ $mainTexts['company-email'] }}">{{ $mainTexts['company-email'] }}</a>
      </dd>
      <dd class="footer-contacts__item">
        <a class="contact-link contact-link--white" href="tel:{{ str_replace([' ', '(', ')', '-'], '', $mainTexts['company-phone']) }}">{{ $mainTexts['company-phone'] }}</a>
      </dd>
  </dl>

  <div class="map" id="map"></div>

  <p class="copyright">{{ $mainTexts['copyright'] }}</p>
</footer>

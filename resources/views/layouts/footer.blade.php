<footer class="main-footer">
  <div class="map" id="map"></div>

  <div class="container">
    <a class="main-logo main-footer__main-logo" href="{{ route('main') }}">
      <img
        src="{{ asset('img/main-logo.svg') }}"
        width="169"
        height="64"
        alt="Логотип компании Lady Healthcare">
    </a>

    <dl class="footer-contacts">
      <dt class="footer-contacts__term">
        Адрес регионального офиса
      </dt>
      <dd class="footer-contacts__item">
        «Lady Healthcare», Блок 18, Норман Роуд, 53, Гринвич Центр Бизнес Парк,
        Лондон, Англия, SE10 9QF
      </dd>
      <dt class="footer-contacts__term">
        Контакты регионального офиса
      </dt>
      <dd class="footer-contacts__item">
        <a class="contact-link contact-link--white" href="mailto:info@ladyhealthcare.com">
          info@ladyhealthcare.com
        </a>
      </dd>
      <dd class="footer-contacts__item">
        <a class="contact-link contact-link--white" href="tel:+442035982050">
          +44 203 598 2050
        </a>
      </dd>
    </dl>
  </div>

  <p class="copyright">
    &#169; 2012-{{ date('Y') }} Lady Healthcare
    Все права защищены
  </p>
</footer>

<header class="main-header container">
  <div class="main-header__container">
    <a class="main-logo" href="{{ route('main') }}">
      <img
        src="{{ asset('img/main-logo.svg') }}"
        width="169"
        height="64"
        alt="Логотип компании Lady Healthcare">
    </a>

    <section class="contacts-card">
      <h2 class="visually-hidden">Контакты</h2>

      <a class="contact-link contacts-card__email" href="mailto:info@ladyhealthcare.com">
        info@ladyhealthcare.com
      </a><br>
      <a class="contact-link contacts-card__phone" href="tel:+442035982050">
        +44 203 598 2050
      </a>

      <ul class="social-links">
        <li class="social-links__item">
          <a class="social-links__link" href="#" target="_blank">
            Фейсбук <i style="background-image: url(../img/social-icons/facebook.svg)"></i>
          </a>
        </li>
        <li class="social-links__item">
          <a class="social-links__link" href="#" target="_blank">
            Инстаграмм <i style="background-image: url(../img/social-icons/instagram.svg)"></i>
          </a>
        </li>
      </ul>
    </section>
  </div>
</header>

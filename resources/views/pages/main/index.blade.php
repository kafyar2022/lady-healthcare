@extends('layouts.master')

@section('title', 'Lady Healthcare | Главная')

@section('content')
  <main class="page-content">
    <div class="container">
      <h1 class="visually-hidden">Lady Healthcare</h1>

      <ul class="site-navigation">
        <li class="site-navigation__item site-navigation__item--for-women">
          <a class="site-navigation__link" href="{{ route('products') }}?category=for-women">Для женщин</a>
        </li>
        <li class="site-navigation__item site-navigation__item--for-kids">
          <a class="site-navigation__link" href="{{ route('products') }}?category=for-kids">Для детей</a>
        </li>
      </ul>
    </div>

    <section class="about">
      <div class="container about__container">
        <h2 class="visually-hidden">О нас</h2>

        <p class="slogan">Нежная <br> забота о вас</p>
        <p class="about__text">Lady Healthcare представляет собой воплощение женщины, олицетворяющей
          материнскую заботу, спокойствие и любовь, несущую благо окружающим.</p>
      </div>
    </section>

    <section class="container foundation">
      <h2 class="title title--home">Наша основа</h2>

      <ul class="foundation-list">
        <li class="foundation-list__item foundation-list__item--about">
          <h3 class="foundation__title">О компании</h3>

          <p class="foundation__text">Lady Healthcare – активно развивающаяся фармацевтическая
            компания основанная в 2005 году занимающаяся разработкой и дистрибуцией современных,
            качественных и доступных лекарственных препаратов.</p>
        </li>

        <li class="foundation-list__item foundation-list__item--mission">
          <h3 class="foundation__title">Миссия</h3>

          <p class="foundation__text">Применять, разрабатывать и модернизировать новейшие
            инновационные научные достижения для решения задач в сфере здравоохранения и
            находить новые пути лечения различных заболеваний.</p>
        </li>

        <li class="foundation-list__item foundation-list__item--vision">
          <h3 class="foundation__title">Видение</h3>

          <p class="foundation__text">Создать надежную и стабильную компанию, которая вносит
            улучшения в практику здравоохранения.</p>
        </li>
      </ul>
    </section>

    <section class="container value">
      <h2 class="title title--home">Наши ценности</h2>

      <ul class="values-list">
        <li class="values-list__item values-list__item--active">
          <h3 class="values-list__title">Забота и этика</h3>

          <p class="values-list__text">Один из главных принципов нашей корпоративной культуры
            – забота о здоровье девушек, женщин и детей. С помощью нашей продукции мы стараемся
            повысить благополучие и уровень жизни людей, что является приоритетным путем
            развития для компании.</p>
        </li>

        <li class="values-list__item">
          <h3 class="values-list__title">Совершенствование</h3>

          <p class="values-list__text">Мы стараемся постоянно совершенствовать методы создания
            своей продукции и находимся в поиске инноваций для производства еще более
            качественных лекарств, чтобы улучшить доступ населения к необходимой и доступной
            медицинской помощи.</p>
        </li>

        <li class="values-list__item">
          <h3 class="values-list__title">Открытость и доверие</h3>

          <p class="values-list__text">Доверие между коллегами – основа деятельности нашей
            компании. Также мы ведем открытый бизнес с партнерами на законной и взаимовыгодной
            основах. Укрепление взаимопонимания является приоритетом при работе во всех
            направлениях.</p>
        </li>

        <li class="values-list__item">
          <h3 class="values-list__title">Интeресы партнеров</h3>

          <p class="values-list__text">Наша компания взаимодействует со специалистами
            здравоохранения, пациентами, производителями фармацевтической продукции,
            деловыми партнерами. Мы учитываем потребности и пожелание каждой группы людей
            для продвижения деятельности бренда.</p>
        </li>
      </ul>
    </section>

    {{-- <section class="carrier">
      <div class="container">
        <h2 class="title">Карьера</h2>

        <p class="carrier__text">Сотрудники - наш механизм и залог успеха, чьи способности и
          потенциал раскрываются, путем обеспечения достойных условий труда, постоянного
          профессионального обучения и поощрения здорового образа жизни.</p>

        <a class="button carrier__join-link" href="#join">Присоединись к нам</a>
      </div>
    </section> --}}

    <section class="container drugs">
      <h2 class="title title--home">Наши препараты</h2>

      <ul class="drugs-list">
        <li class="drugs-list__item drugs-list__item--all">
          <h3 class="drugs-list__title">Все препараты</h3>
          <a class="button drugs-list__link" href="{{ route('products') }}">
            Перейти
          </a>
        </li>
        <li class="drugs-list__item drugs-list__item--kids">
          <h3 class="drugs-list__title">Для детей</h3>
          <a class="button drugs-list__link" href="{{ route('products') }}?category=for-kids">
            Перейти
          </a>
        </li>
        <li class="drugs-list__item drugs-list__item--women">
          <h3 class="drugs-list__title">Для женщин</h3>
          <a class="button drugs-list__link" href="{{ route('products') }}?category=for-women">
            Перейти
          </a>
        </li>
      </ul>
    </section>

    <section class="container benefits">
      <h2 class="title title--home">Преимущества партнерам</h2>

      <ul class="benefits-list">
        <li class="benefits-list__item">Слияние и <br> приобретение</li>
        <li class="benefits-list__item">Построение <br> системы продаж</li>
        <li class="benefits-list__item">Маркетинговое <br> продвижение</li>
        <li class="benefits-list__item">Совместные проекты с <br> зарубежными фармкомпаниями</li>
        <li class="benefits-list__item">Контроль за <br> издержками</li>
        <li class="benefits-list__item">Внедрение <br> новых препаратов</li>
      </ul>
    </section>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/main.js') }}" type="module"></script>
@endsection

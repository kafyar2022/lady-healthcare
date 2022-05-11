@extends('layouts.master')

@section('title', 'Lady Healthcare')

@section('content')
  <main class="page-content">
    <div class="container">
      <h1 class="visually-hidden">Lady Healthcare</h1>

      <ul class="site-navigation">
        <li class="site-navigation__item site-navigation__item--for-women">
          <a class="site-navigation__link" href="{{ route('drugs') }}?category=for-women" data-type="text" data-title="Женские препараты (ссылка)" data-id="{{ $data['for-women-id'] }}">{{ $data['for-women'] }}</a>
        </li>
        <li class="site-navigation__item site-navigation__item--for-kids">
          <a class="site-navigation__link" href="{{ route('drugs') }}?category=for-kids" data-type="text" data-title="Детские препараты (ссылка)" data-id="{{ $data['for-kids-id'] }}">{{ $data['for-kids'] }}</a>
        </li>
      </ul>
    </div>

    <section class="about">
      <div class="container about__container">
        <h2 class="visually-hidden">О нас</h2>

        <p class="slogan" data-type="text" data-id="{{ $data['slogan-id'] }}">{{ $data['slogan'] }}</p>
        <p class="about__text" data-type="text" data-id="{{ $data['about-text-id'] }}">{{ $data['about-text'] }}</p>
      </div>
    </section>

    <section class="container foundation">
      <h2 class="title title--home" data-type="text" data-title="Заголовок" data-id="{{ $data['foundation-title-id'] }}">{{ $data['foundation-title'] }}</h2>

      <ul class="foundation-list">
        <li class="foundation-list__item foundation-list__item--about">
          <h3 class="foundation__title" data-type="text" data-id="{{ $data['about-company-title-id'] }}">{{ $data['about-company-title'] }}</h3>
          <p class="foundation__text" data-type="text" data-id="{{ $data['about-company-text-id'] }}">{{ $data['about-company-text'] }}</p>
        </li>
        <li class="foundation-list__item foundation-list__item--mission">
          <h3 class="foundation__title" data-type="text" data-id="{{ $data['mission-title-id'] }}">{{ $data['mission-title'] }}</h3>
          <p class="foundation__text" data-type="text" data-id="{{ $data['mission-text-id'] }}">{{ $data['mission-text'] }}</p>
        </li>
        <li class="foundation-list__item foundation-list__item--vision">
          <h3 class="foundation__title" data-type="text" data-id="{{ $data['vision-title-id'] }}">{{ $data['vision-title'] }}</h3>
          <p class="foundation__text" data-type="text" data-id="{{ $data['vision-text-id'] }}">{{ $data['vision-text'] }}</p>
        </li>
      </ul>
    </section>

    <section class="container value">
      <h2 class="title title--home" data-type="text" data-title="Заголовок" data-id="{{ $data['value-title-id'] }}">{{ $data['value-title'] }}</h2>

      <ul class="values-list">
        <li class="values-list__item values-list__item--active">
          <h3 class="values-list__title" data-type="text" data-id="{{ $data['care-ethics-title-id'] }}">{{ $data['care-ethics-title'] }}</h3>
          <p class="values-list__text" data-type="text" data-id="{{ $data['care-ethics-text-id'] }}">{{ $data['care-ethics-text'] }}</p>
        </li>
        <li class="values-list__item">
          <h3 class="values-list__title" data-type="text" data-id="{{ $data['perfection-title-id'] }}">{{ $data['perfection-title'] }}</h3>
          <p class="values-list__text" data-type="text" data-id="{{ $data['perfection-text-id'] }}">{{ $data['perfection-text'] }}</p>
        </li>
        <li class="values-list__item">
          <h3 class="values-list__title" data-type="text" data-id="{{ $data['opennes-trust-title-id'] }}">{{ $data['opennes-trust-title'] }}</h3>
          <p class="values-list__text" data-type="text" data-id="{{ $data['opennes-trust-text-id'] }}">{{ $data['opennes-trust-text'] }}</p>
        </li>
        <li class="values-list__item">
          <h3 class="values-list__title" data-type="text" data-id="{{ $data['parner-interest-title-id'] }}">{{ $data['parner-interest-title'] }}</h3>
          <p class="values-list__text" data-type="text" data-id="{{ $data['parner-interest-text-id'] }}">{{ $data['parner-interest-text'] }}</p>
        </li>
      </ul>
    </section>

    <section class="carrier">
      <div class="container">
        <h2 class="title" data-type="text" data-title="Заголовок" data-id="{{ $data['carrier-title-id'] }}">{{ $data['carrier-title'] }}</h2>
        <p class="carrier__text" data-type="text" data-id="{{ $data['carrier-text-id'] }}">{{ $data['carrier-text'] }}</p>
        <a class="button carrier__join-link" href="#join" data-type="text" data-title="Ссылка" data-id="{{ $data['join-us-id'] }}">{{ $data['join-us'] }}</a>
      </div>
    </section>

    <section class="container drugs">
      <h2 class="title title--home" data-type="text" data-title="Заголовок" data-id="{{ $data['drugs-title'] }}">{{ $data['drugs-title'] }}</h2>

      <ul class="drugs-list">
        <li class="drugs-list__item drugs-list__item--all">
          <h3 class="drugs-list__title" data-type="text" data-id="{{ $data['all-drug-id'] }}">{{ $data['all-drug'] }}</h3>
          <a class="button drugs-list__link" href="{{ route('drugs') }}" data-type="text" data-title="Ссылка" data-id="{{ $data['go-link-id'] }}">{{ $data['go-link'] }}</a>
        </li>
        <li class="drugs-list__item drugs-list__item--kids">
          <h3 class="drugs-list__title" data-type="text" data-id="{{ $data['kids-drugs-id'] }}">{{ $data['kids-drugs'] }}</h3>
          <a class="button drugs-list__link" href="{{ route('drugs') }}?category=for-kids" data-type="text" data-title="Ссылка" data-id="{{ $data['go-link-id'] }}">{{ $data['go-link'] }}</a>
        </li>
        <li class="drugs-list__item drugs-list__item--women">
          <h3 class="drugs-list__title" data-type="text" data-id="{{ $data['women-drugs-id'] }}">{{ $data['women-drugs'] }}</h3>
          <a class="button drugs-list__link" href="{{ route('drugs') }}?category=for-women" data-type="text" data-title="Ссылка" data-id="{{ $data['go-link-id'] }}">{{ $data['go-link'] }}</a>
        </li>
      </ul>
    </section>

    <section class="container benefits">
      <h2 class="title title--home" data-type="text" data-title="Заголовок" data-id="{{ $data['benefits-title-id'] }}">{{ $data['benefits-title'] }}</h2>

      <ul class="benefits-list">
        <li class="benefits-list__item" data-type="text" data-id="{{ $data['benefit-1-id'] }}">{{ $data['benefit-1'] }}</li>
        <li class="benefits-list__item" data-type="text" data-id="{{ $data['benefit-2-id'] }}">{{ $data['benefit-2'] }}</li>
        <li class="benefits-list__item" data-type="text" data-id="{{ $data['benefit-3-id'] }}">{{ $data['benefit-3'] }}</li>
        <li class="benefits-list__item" data-type="text" data-id="{{ $data['benefit-4-id'] }}">{{ $data['benefit-4'] }}</li>
        <li class="benefits-list__item" data-type="text" data-id="{{ $data['benefit-5-id'] }}">{{ $data['benefit-5'] }}</li>
        <li class="benefits-list__item" data-type="text" data-id="{{ $data['benefit-6-id'] }}">{{ $data['benefit-6'] }}</li>
      </ul>
    </section>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/home.js') }}" type="module"></script>
@endsection

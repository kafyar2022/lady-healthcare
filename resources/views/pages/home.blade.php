@extends('layouts.master')

@section('title', 'Lady Healthcare')

@section('content')
  <main class="page-content">
    <div class="container">
      <h1 class="visually-hidden">Lady Healthcare</h1>

      <ul class="site-navigation">
        <li class="site-navigation__item site-navigation__item--for-women">
          <a class="site-navigation__link" href="{{ route('drugs') }}?category=for-women">{{ $data['for-women'] }}</a>
        </li>
        <li class="site-navigation__item site-navigation__item--for-kids">
          <a class="site-navigation__link" href="{{ route('drugs') }}?category=for-kids">{{ $data['for-kids'] }}</a>
        </li>
      </ul>
    </div>

    <section class="about">
      <div class="container about__container">
        <h2 class="visually-hidden">О нас</h2>

        <p class="slogan">{{ $data['slogan'] }}</p>
        <p class="about__text">{{ $data['about-text'] }}</p>
      </div>
    </section>

    <section class="container foundation">
      <h2 class="title title--home">{{ $data['foundation-title'] }}</h2>

      <ul class="foundation-list">
        <li class="foundation-list__item foundation-list__item--about">
          <h3 class="foundation__title">{{ $data['about-company-title'] }}</h3>
          <p class="foundation__text">{{ $data['about-company-text'] }}</p>
        </li>
        <li class="foundation-list__item foundation-list__item--mission">
          <h3 class="foundation__title">{{ $data['mission-title'] }}</h3>
          <p class="foundation__text">{{ $data['mission-text'] }}</p>
        </li>
        <li class="foundation-list__item foundation-list__item--vision">
          <h3 class="foundation__title">{{ $data['vision-title'] }}</h3>
          <p class="foundation__text">{{ $data['vision-text'] }}</p>
        </li>
      </ul>
    </section>

    <section class="container value">
      <h2 class="title title--home">{{ $data['value-title'] }}</h2>

      <ul class="values-list">
        <li class="values-list__item values-list__item--active">
          <h3 class="values-list__title">{{ $data['care-ethics-title'] }}</h3>
          <p class="values-list__text">{{ $data['care-ethics-text'] }}</p>
        </li>
        <li class="values-list__item">
          <h3 class="values-list__title">{{ $data['perfection-title'] }}</h3>
          <p class="values-list__text">{{ $data['perfection-text'] }}</p>
        </li>
        <li class="values-list__item">
          <h3 class="values-list__title">{{ $data['opennes-trust-title'] }}</h3>
          <p class="values-list__text">{{ $data['opennes-trust-text'] }}</p>
        </li>
        <li class="values-list__item">
          <h3 class="values-list__title">{{ $data['parner-interest-title'] }}</h3>
          <p class="values-list__text">{{ $data['parner-interest-text'] }}</p>
        </li>
      </ul>
    </section>

    <section class="carrier">
      <div class="container">
        <h2 class="title">{{ $data['carrier-title'] }}</h2>
        <p class="carrier__text">{{ $data['carrier-text'] }}</p>
        <a class="button carrier__join-link" href="#join">{{ $data['join-us'] }}</a>
      </div>
    </section>

    <section class="container drugs">
      <h2 class="title title--home">{{ $data['drugs-title'] }}</h2>

      <ul class="drugs-list">
        <li class="drugs-list__item drugs-list__item--all">
          <h3 class="drugs-list__title">{{ $data['all-drug'] }}</h3>
          <a class="button drugs-list__link" href="{{ route('drugs') }}">{{ $data['go-link'] }}</a>
        </li>
        <li class="drugs-list__item drugs-list__item--kids">
          <h3 class="drugs-list__title">{{ $data['kids-drugs'] }}</h3>
          <a class="button drugs-list__link" href="{{ route('drugs') }}?category=for-kids">{{ $data['go-link'] }}</a>
        </li>
        <li class="drugs-list__item drugs-list__item--women">
          <h3 class="drugs-list__title">{{ $data['women-drugs'] }}</h3>
          <a class="button drugs-list__link" href="{{ route('drugs') }}?category=for-women">{{ $data['go-link'] }}</a>
        </li>
      </ul>
    </section>

    <section class="container benefits">
      <h2 class="title title--home">{{ $data['benefits-title'] }}</h2>

      <ul class="benefits-list">
        <li class="benefits-list__item">{{ $data['benefit-1'] }}</li>
        <li class="benefits-list__item">{{ $data['benefit-2'] }}</li>
        <li class="benefits-list__item">{{ $data['benefit-3'] }}</li>
        <li class="benefits-list__item">{{ $data['benefit-4'] }}</li>
        <li class="benefits-list__item">{{ $data['benefit-5'] }}</li>
        <li class="benefits-list__item">{{ $data['benefit-6'] }}</li>
      </ul>
    </section>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/home.js') }}" type="module"></script>
@endsection

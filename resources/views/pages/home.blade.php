@extends('layouts.master')

@section('title', 'Lady Healthcare')

@section('content')
  <main class="container">
    <h1 class="visually-hidden">Lady Healthcare</h1>

    <ul class="site-navigation">
      <li class="site-navigation__item">
        <a class="site-navigation__link" href="{{ route('products') }}?category=for-women">{{ $pageTexts['for-women'] }}</a>
      </li>
      <li class="site-navigation__item">
        <a class="site-navigation__link" href="{{ route('products') }}?category=for-kids">{{ $pageTexts['for-kids'] }}</a>
      </li>
    </ul>

    <section class="about">
      <h2 class="visually-hidden">О нас</h2>

      <b class="slogan">{{ $pageTexts['slogan'] }}</b>
      <p class="about__text">{{ $pageTexts['about-text'] }}</p>
    </section>

    <section class="foundation">
      <h2 class="title">{{ $pageTexts['foundation-title'] }}</h2>

      <ul class="foundation-list">
        <li class="foundation__item">
          <h3 class="foundation__title">{{ $pageTexts['about-company-title'] }}</h3>
          <p class="about-company-text">{{ $pageTexts['about-company-text'] }}</p>
        </li>
        <li class="foundation__item">
          <h3 class="foundation__title">{{ $pageTexts['mission-title'] }}</h3>
          <p class="mission-text">{{ $pageTexts['mission-text'] }}</p>
        </li>
        <li class="foundation__item">
          <h3 class="foundation__title">{{ $pageTexts['vision-title'] }}</h3>
          <p class="vision-text">{{ $pageTexts['vision-text'] }}</p>
        </li>
      </ul>
    </section>

    <section class="value">
      <h2 class="title">{{ $pageTexts['value-title'] }}</h2>

      <ul class="values-list">
        <li class="values-list__item">
          <h3 class="values-list__title">{{ $pageTexts['care-ethics-title'] }}</h3>
          <p class="values-list__text">{{ $pageTexts['care-ethics-text'] }}</p>
        </li>
        <li class="values-list__item">
          <h3 class="values-list__title">{{ $pageTexts['perfection-title'] }}</h3>
          <p class="values-list__text">{{ $pageTexts['perfection-text'] }}</p>
        </li>
        <li class="values-list__item">
          <h3 class="values-list__title">{{ $pageTexts['opennes-trust-title'] }}</h3>
          <p class="values-list__text">{{ $pageTexts['opennes-trust-text'] }}</p>
        </li>
        <li class="values-list__item">
          <h3 class="values-list__title">{{ $pageTexts['parner-interest-title'] }}</h3>
          <p class="values-list__text">{{ $pageTexts['parner-interest-text'] }}</p>
        </li>
      </ul>
    </section>

    <section class="carrier">
      <h2 class="title">{{ $pageTexts['carrier-title'] }}</h2>
      <p class="carrier__text">{{ $pageTexts['carrier-text'] }}</p>
      <a class="button carrier__join-link" href="#join">{{ $pageTexts['join-us'] }}</a>
    </section>

    <section class="drugs">
      <h2 class="title">{{ $pageTexts['drugs-title'] }}</h2>

      <ul class="drugs-list">
        <li class="drugs-list__item">
          <h3 class="drugs-list__title">{{ $pageTexts['all-drug'] }}</h3>
          <a class="button drugs-list__link" href="{{ route('products') }}">{{ $pageTexts['go-link'] }}</a>
        </li>
        <li class="drugs-list__item">
          <h3 class="drugs-list__title">{{ $pageTexts['kids-drugs'] }}</h3>
          <a class="button drugs-list__link" href="{{ route('products') }}?category=for-kids">{{ $pageTexts['go-link'] }}</a>
        </li>
        <li class="drugs-list__item">
          <h3 class="drugs-list__title">{{ $pageTexts['women-drugs'] }}</h3>
          <a class="button drugs-list__link" href="{{ route('products') }}?category=for-women">{{ $pageTexts['go-link'] }}</a>
        </li>
      </ul>
    </section>

    <section class="benefits">
      <h2 class="title">{{ $pageTexts['benefits-title'] }}</h2>

      <ul class="benefits-list">
        <li class="benefits-list__item">{{ $pageTexts['benefit-1'] }}</li>
        <li class="benefits-list__item">{{ $pageTexts['benefit-2'] }}</li>
        <li class="benefits-list__item">{{ $pageTexts['benefit-3'] }}</li>
        <li class="benefits-list__item">{{ $pageTexts['benefit-4'] }}</li>
        <li class="benefits-list__item">{{ $pageTexts['benefit-5'] }}</li>
        <li class="benefits-list__item">{{ $pageTexts['benefit-6'] }}</li>
      </ul>
    </section>
  </main>
@endsection

@section('script')
  {{-- script --}}
@endsection

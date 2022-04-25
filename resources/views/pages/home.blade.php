@extends('layouts.master')

@section('title', 'Lady Healthcare')

@section('content')
  <main class="container">
    <h1 class="visually-hidden">Lady Healthcare</h1>

    <ul class="site-navigation">
      <li class="site-navigation__item">
        <a class="site-navigation__link" href="{{ route('drugs') }}?category=for-women">{{ $data['for-women'] }}</a>
      </li>
      <li class="site-navigation__item">
        <a class="site-navigation__link" href="{{ route('drugs') }}?category=for-kids">{{ $data['for-kids'] }}</a>
      </li>
    </ul>

    <section class="about">
      <h2 class="visually-hidden">О нас</h2>

      <b class="slogan">{{ $data['slogan'] }}</b>
      <p class="about__text">{{ $data['about-text'] }}</p>
    </section>

    <section class="foundation">
      <h2 class="title">{{ $data['foundation-title'] }}</h2>

      <ul class="foundation-list">
        <li class="foundation__item">
          <h3 class="foundation__title">{{ $data['about-company-title'] }}</h3>
          <p class="about-company-text">{{ $data['about-company-text'] }}</p>
        </li>
        <li class="foundation__item">
          <h3 class="foundation__title">{{ $data['mission-title'] }}</h3>
          <p class="mission-text">{{ $data['mission-text'] }}</p>
        </li>
        <li class="foundation__item">
          <h3 class="foundation__title">{{ $data['vision-title'] }}</h3>
          <p class="vision-text">{{ $data['vision-text'] }}</p>
        </li>
      </ul>
    </section>

    <section class="value">
      <h2 class="title">{{ $data['value-title'] }}</h2>

      <ul class="values-list">
        <li class="values-list__item">
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
      <h2 class="title">{{ $data['carrier-title'] }}</h2>
      <p class="carrier__text">{{ $data['carrier-text'] }}</p>
      <a class="button carrier__join-link" href="#join">{{ $data['join-us'] }}</a>
    </section>

    <section class="drugs">
      <h2 class="title">{{ $data['drugs-title'] }}</h2>

      <ul class="drugs-list">
        <li class="drugs-list__item">
          <h3 class="drugs-list__title">{{ $data['all-drug'] }}</h3>
          <a class="button drugs-list__link" href="{{ route('drugs') }}">{{ $data['go-link'] }}</a>
        </li>
        <li class="drugs-list__item">
          <h3 class="drugs-list__title">{{ $data['kids-drugs'] }}</h3>
          <a class="button drugs-list__link" href="{{ route('drugs') }}?category=for-kids">{{ $data['go-link'] }}</a>
        </li>
        <li class="drugs-list__item">
          <h3 class="drugs-list__title">{{ $data['women-drugs'] }}</h3>
          <a class="button drugs-list__link" href="{{ route('drugs') }}?category=for-women">{{ $data['go-link'] }}</a>
        </li>
      </ul>
    </section>

    <section class="benefits">
      <h2 class="title">{{ $data['benefits-title'] }}</h2>

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
  {{-- script --}}
@endsection

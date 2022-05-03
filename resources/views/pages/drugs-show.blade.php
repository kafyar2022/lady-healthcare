@extends('layouts.master')

@section('title', $drug->title . ' | Lady Healthcare')

@section('content')
  <section class="banner">
    <h2 class="visually-hidden">Баннеры</h2>

    <div class="glide">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          @foreach ($data['banners'] as $banner)
            <li class="glide__slide">
              <div class="container glide__container">{!! $banner->content !!}</div>
              <img class="glide__img" src="{{ asset('files/banners/' . $banner->img) }}" alt="{{ $banner->title }}">
            </li>
          @endforeach
        </ul>
      </div>
      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">"></button>
      </div>
    </div>
  </section>

  <main class="container">
    <div class="product-hgroup">
      <h1 class="title product-hgroup__title">{{ $drug->title }}</h1>

      <ul class="breadcrumbs">
        <li class="breadcrumbs__item">
          <a class="breadcrumbs__link" href="{{ route('home') }}">{{ $mainTexts['home-link'] }}</a>
        </li>
        <li class="breadcrumbs__item">
          <a class="breadcrumbs__link" href="{{ route('drugs') }}">{{ $mainTexts['drug-link'] }}</a>
        </li>
      </ul>
    </div>

    <section class="product">
      <h2 class="title visually-hidden">Информация о продукте</h2>

      <div class="product-inner product-inner--left">
        <img class="product__img" src="{{ asset('files/drugs/img/' . $drug->img) }}" alt="{{ $drug->title }}">
      </div>
      <div class="product-inner product-inner--right">
        <span class="product__composition">{{ $drug->min_composition }}</span>
        <span class="product__composition">{{ $drug->max_composition }}</span>
        <span class="product__icon" style="{{ $drug->icon ? 'background-image: url(../img/social-icons/' . $drug->icon . ')' : '' }}"></span>
        <span class="product__prescription">{{ $drug->prescription }}</span>
        <p class="product__description">{{ $drug->description }}</p>
        <p class="product__filter">{{ $drug->category === 'for-kids' ? 'Для женщин' : 'Для детей' }} / {{ $drug->direction->title }}</p>
        @if ($drug->instruction)
          <a class="product__link product__link--download" href="{{ route('drugs.download-instruction', $drug->id) }}">
            <p>{{ $data['download-instruction'] }}</p>
          </a>
        @endif
        <a class="product__link product__link--buy" href="{{ $drug->url }}" target="_blank">
          <p>{{ $data['drugs-buy'] }}</p>
        </a>

        <dl class="accordion">
          <div class="accordion__item">
            <dt class="accordion__term accordion__description--hidden">Состав</dt>
            <dd class="accordion__description">{{ $drug->compound }}</dd>
          </div>
          <div class="accordion__item">
            <dt class="accordion__term accordion__description--hidden">Показания к применению</dt>
            <dd class="accordion__description">{{ $drug->indications }}</dd>
          </div>
          <div class="accordion__item">
            <dt class="accordion__term accordion__description--hidden">Способ применения</dt>
            <dd class="accordion__description">{{ $drug->mode }}</dd>
          </div>
        </dl>
      </div>
    </section>

    <section class="similar-drugs">
      <h2 class="title title--product">{{ $data['similar-drugs-title'] }}</h2>

      <ul class="product-list similar-drugs__product-list">
        @foreach ($data['similar-drugs'] as $drug)
          <li class="product-list__item">
            <x-drug :drug="$drug" />
          </li>
        @endforeach
      </ul>
    </section>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/drugs-show.js') }}" type="module"></script>
@endsection

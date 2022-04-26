@extends('layouts.master')

@section('title', $drug->title . ' | Lady Healthcare')

@section('content')
  <main class="container">
    <h1 class="title">{{ $drug->title }}</h1>

    <ul class="breadcrumbs">
      <li class="breadcrumbs__item">
        <a class="breadcrumbs__link" href="{{ route('home') }}">{{ $mainTexts['home-link'] }}</a>
      </li>
      <li class="breadcrumbs__item">
        <a class="breadcrumbs__link" href="{{ route('drugs') }}">{{ $mainTexts['drug-link'] }}</a>
      </li>
    </ul>

    <section class="banner">
      <h2 class="visually-hidden">Баннеры</h2>

      <div class="glide">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            @foreach ($data['banners'] as $banner)
              <li class="glide__slide">
                <div class="glide__inner">{!! $banner->content !!}</div>
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

    <section class="product">
      <h2 class="title">Информация о продукте</h2>

      <div class="product-inner product-inner--left">
        <img class="product__img" src="{{ asset('files/drugs/img/' . $drug->img) }}" alt="{{ $drug->title }}">
      </div>
      <div class="product-inner product-inner--right">
        <span class="product__composition">{{ $drug->min_composition }}</span>
        <span class="product__composition">{{ $drug->max_composition }}</span>
        <span class="product__prescription">{{ $drug->prescription }}</span>
        <p class="product__description">{{ $drug->description }}</p>
        <p class="product__filter">{{ $drug->category === 'for-kids' ? 'Для женщин' : 'Для детей' }} / {{ $drug->direction->title }}</p>
        <a class="product__link product__link--download" href="{{ route('drugs.download-instruction', $drug->id) }}">{{ $data['download-instruction'] }}</a>
        <a class="product__link product__link--buy" href="{{ $drug->url }}" target="_blank">{{ $data['drugs-buy'] }}</a>

        <dl>
          <dt>Состав</dt>
          <dd>{{ $drug->compound }}</dd>
          <dt>Показания к применению</dt>
          <dd>{{ $drug->indications }}</dd>
          <dt>Способ применения</dt>
          <dd>{{ $drug->mode }}</dd>
        </dl>
      </div>
    </section>

    <section class="similar-drugs">
      <h2 class="title">{{ $data['similar-drugs-title'] }}</h2>

      <ul class="product-list">
        @foreach ($data['similar-drugs'] as $drug)
          <li class="product-list__item">
            <x-drug :drug="$drug" />
          </li>
        @endforeach
      </ul>
    </section>
  </main>
@endsection

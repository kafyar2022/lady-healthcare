@extends('layouts.master')

@section('title', 'Lady Healthcare | ' . $data->product->title)

@section('content')
  <section class="banner">
    <h2 class="visually-hidden">Баннеры</h2>

    <div class="glide">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          @foreach ($data->banners as $banner)
            <li class="glide__slide">
              <div class="container glide__container">
                <h2 class="glide__title">{{ $banner->title }}</h2>
                <p class="glide__text">{{ $banner->text }}</p>
                @if ($banner->url)
                  <a class="button glide__link" href="{{ $banner->url }}" target="_blank">
                    {{ $banner->link }}
                  </a>
                @endif
              </div>
              <img class="glide__img" src="{{ asset($banner->img) }}" alt="{{ $banner->title }}">
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
      <h1 class="title product-hgroup__title">{{ $data->product->title }}</h1>

      <ul class="breadcrumbs">
        <li class="breadcrumbs__item">
          <a class="breadcrumbs__link" href="{{ route('main') }}">Главная</a>
        </li>
        <li class="breadcrumbs__item">
          <a class="breadcrumbs__link" href="{{ route('products') }}">Все препараты</a>
        </li>
      </ul>
    </div>

    <section class="product">
      <h2 class="title visually-hidden">Информация о продукте</h2>

      <div class="product-inner product-inner--left">
        <img class="product__img" src="{{ asset($data->product->img) }}" alt="{{ $data->product->title }}">
      </div>
      <div class="product-inner product-inner--right">
        <span class="product__icon">{!! $data->product->releaseForm->svg !!}</span>
        <span class="product__prescription">{{ $data->product->prescription }}</span>
        <div class="product__description content">
          {!! $data->product->description !!}
        </div>
        <p class="product__filter">
          {{ $data->product->category === 'for-kids' ? 'Для женщин' : 'Для детей' }}
          @if ($data->product->direction_id)
            / {{ $data->product->direction->title }}
          @endif
        </p>
        @if ($data->product->instruction)
          <a
            class="product__link product__link--download"
            href="{{ asset($data->product->instruction) }}">
            <p>Скачать <br> инструкцию</p>
          </a>
        @endif
        <a class="product__link product__link--buy" href="{{ $data->product->url }}" target="_blank">
          <p>Приобрести <br> препарат</p>
        </a>

        <dl class="accordion">
          <div class="accordion__item">
            <dt class="accordion__term accordion__description--hidden">Состав</dt>
            <dd class="accordion__description content">{!! $data->product->compound !!}</dd>
          </div>
          <div class="accordion__item">
            <dt class="accordion__term accordion__description--hidden">Показания к применению</dt>
            <dd class="accordion__description content">{!! $data->product->indications !!}</dd>
          </div>
          <div class="accordion__item">
            <dt class="accordion__term accordion__description--hidden">Способ применения</dt>
            <dd class="accordion__description content">{!! $data->product->mode !!}</dd>
          </div>
        </dl>
      </div>
    </section>

    <section class="similar-drugs">
      <h2 class="title title--product">Похожие препараты</h2>

      <ul class="product-list similar-drugs__product-list">
        @foreach ($data->similarProducts as $product)
          <li class="product-list__item">
            <x-drug :drug="$product" />
          </li>
        @endforeach
      </ul>
    </section>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/drugs-show.js') }}" type="module"></script>
@endsection

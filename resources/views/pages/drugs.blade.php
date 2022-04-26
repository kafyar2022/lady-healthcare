@extends('layouts.master')

@section('title', 'Препараты | Lady Healthcare')

@section('content')
  <main class="container">
    <h1 class="visually-hidden">Препараты Lady Healthcare</h1>

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

    <section class="our-drugs">
      <h2 class="title">{{ $data['our-drugs-title'] }}</h2>

      <header class="our-drugs-header">
        <form class="search-form">
          <label class="search-form__label">
            <input class="visually-hidden" name="keyword" type="search" placeholder="Поиск препарата">
          </label>
        </form>
        <form class="filter-form">
          <p class="filter-form__element">
            <input class="filter-form__checkbox" type="checkbox" name="for-women" id="for-women">
            <label for="for-women">{{ $data['for-women-label'] }}</label>
          </p>
          <p class="filter-form__element">
            <input class="visually-hidden" type="checkbox" name="for-kids" id="for-kids">
            <label for="for-kids">{{ $data['for-kids-label'] }}</label>
          </p>
          <p class="filter-form__element">
            <select name="prescription">
              <option>ОТС</option>
              <option>RX</option>
              <option>БАД</option>
            </select>
          </p>
          <p class="filter-form__element">
            <select name="direction">
              @foreach ($data['directions'] as $direction)
                <option value="{{ $direction->id }}">{{ $direction->title }}</option>
              @endforeach
            </select>
          </p>
        </form>
      </header>

      <ul class="product-list">
        @foreach ($data['drugs'] as $drug)
          <li class="product-list__item">
            <x-drug :drug="$drug" />
          </li>
        @endforeach
      </ul>
      {{ $data['drugs']->links('components/pagination') }}

      <h3 class="attention-title">{{ $data['attention-title'] }}</h3>
      <p class="attention-text">{{ $data['attention-text'] }}</p>
    </section>
  </main>
@endsection

@section('script')
  {{-- script --}}
@endsection

@extends('layouts.master')

@section('title', 'Lady Healthcare | Препараты')

@section('content')
  <section class="banner">
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
    <h1 class="visually-hidden">Препараты Lady Healthcare</h1>

    <section class="our-drugs">
      <h2 class="title title--product">Наши препараты</h2>

      <header class="our-drugs-header">
        <form class="search-form">
          <label class="search-form__label">
            <input
              class="search-form__input"
              name="keyword"
              type="search"
              placeholder="Поиск препарата" autocomplete="off">
          </label>
        </form>

        <form class="filter-form">
          <p class="filter-form__element">
            <input
              class="visually-hidden"
              type="checkbox"
              name="for-women"
              id="for-women" {{ request()->get('category') === 'for-women' ? 'checked' : '' }}>
            <label class="filter-form__label filter-form__label--checkbox" for="for-women">
              Для женщин
            </label>
          </p>
          <p class="filter-form__element">
            <input
              class="visually-hidden"
              type="checkbox"
              name="for-kids"
              id="for-kids"
              {{ request()->get('category') === 'for-kids' ? 'checked' : '' }}>
            <label class="filter-form__label filter-form__label--checkbox" for="for-kids">
              Для детей
            </label>
          </p>
          <p class="filter-form__element filter-form__element--with-arrow">
            <select class="filter-form__field" name="prescription">
              <option value="">Рецептурность</option>
              <option>ОТС</option>
              <option>RX</option>
              <option>БАД</option>
            </select>
          </p>
          <p class="filter-form__element filter-form__element--with-arrow">
            <select class="filter-form__field" name="direction">
              <option value="">Направления</option>
              @foreach ($data->directions as $direction)
                <option value="{{ $direction->id }}">{{ $direction->title }}</option>
              @endforeach
            </select>
          </p>
        </form>
      </header>

      <div class="product-list-wrapper">
        <ul class="product-list">
          @foreach ($data->products as $product)
            <li class="product-list__item">
              <x-drug :drug="$product" />
            </li>
          @endforeach
        </ul>
        {{ $data->products->links('components/pagination') }}
      </div>

      <h3 class="attention-title">Внимание</h3>
      <p class="attention-text">Информация, представленная на сайте, не должна использоваться
        для самостоятельной диагностики и лечения и не может служить заменой очной консультации
        врача.</p>
    </section>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/drugs.js') }}" type="module"></script>
@endsection

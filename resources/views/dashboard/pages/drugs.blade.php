@extends('dashboard.layouts.master')

@section('content')
  <main class="dash-content our-drugs">
    <h2 class="title title--product" data-type="text" data-title="Заголовок" data-id="{{ $data['our-drugs-title-id'] }}">{{ $data['our-drugs-title'] }}</h2>

    <header class="our-drugs-header">
      <form class="search-form">
        <label class="search-form__label">
          <input class="search-form__input" name="keyword" type="search" placeholder="Поиск препарата" autocomplete="off">
        </label>
      </form>
      <form class="filter-form">
        <p class="filter-form__element">
          <input class="visually-hidden" type="checkbox" name="for-women" id="for-women" {{ request()->get('category') === 'for-women' ? 'checked' : '' }}>
          <label class="filter-form__label filter-form__label--checkbox" for="for-women" data-type="text" data-id="{{ $data['for-women-label-id'] }}">{{ $data['for-women-label'] }}</label>
        </p>
        <p class="filter-form__element">
          <input class="visually-hidden" type="checkbox" name="for-kids" id="for-kids" {{ request()->get('category') === 'for-kids' ? 'checked' : '' }}>
          <label class="filter-form__label filter-form__label--checkbox" for="for-kids" data-type="text" data-id="{{ $data['for-kids-label-id'] }}">{{ $data['for-kids-label'] }}</label>
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
            @foreach ($data['directions'] as $direction)
              <option value="{{ $direction->id }}">{{ $direction->title }}</option>
            @endforeach
          </select>
        </p>
      </form>
    </header>

    <div class="product-list-wrapper">
      <ul class="product-list">
        @foreach ($data['drugs'] as $drug)
          <li class="product-list__item" data-id="{{ $drug->id }}">
            <x-drug :drug="$drug" />
          </li>
        @endforeach
      </ul>
      {{ $data['drugs']->links('components/pagination') }}
    </div>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/dashboard/drugs.js') }}" type="module"></script>
@endsection

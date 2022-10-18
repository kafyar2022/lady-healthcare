@extends('dashboard.layouts.master')

@section('content')
  <main class="page__content">
    <div class="modal modal--fail {{ session()->has('fail') ? '' : 'modal--hidden' }}">{{ session()->get('fail') }}</div>
    <div class="modal modal--success {{ session()->has('success') ? '' : 'modal--hidden' }}">{{ session()->get('success') }}</div>

    <ul class="page__breadcrumbs">
      <li class="page__breadcrumb">
        <a href="{{ route('main') }}">Главная =></a>
      </li>
      <li class="page__breadcrumb">
        <a href="{{ route('admin.products') }}">Препараты =></a>
      </li>
      <li class="page__breadcrumb page__breadcrumb--current">
        {{ $data->product ? 'Редактирование' : 'Добавление' }}
      </li>
    </ul>

    <div class="page__link-wrapper">
      @if ($data->product)
        <h1 class="page__title">Редактирование</h1>
      @else
        <h1 class="page__title">Добавление</h1>
      @endif
      <a class="page__link" data-action="submit">Сохранить</a>
    </div>

    <img
      @if ($data->product) src="{{ asset($data->product->img) }}" @endif
      width="300"
      height="300"
      style="object-fit: contain;">

    <form class="form-dash" action="{{ $data->product ? route('products.post', ['action' => 'update']) : route('products.post', ['action' => 'store']) }}" method="post" enctype="multipart/form-data">
      @csrf

      @if ($data->product)
        <input type="hidden" name="id" value="{{ $data->product->id }}">
      @endif

      <label class="form-dash__element">
        <span class="form-dash__label">Фото</span>
        <input class="visually-hidden" name="img" type="file" accept="image/*">
        <input
          class="form-dash__field"
          type="text"
          placeholder="{{ $data->product && $data->product->img ? $data->product->img : 'Выберите файл' }}"
          value="{{ $data->product->img ?? '' }}"
          readonly>
      </label>

      <label class="form-dash__element">
        <span class="form-dash__label">Название*</span>
        <input
          class="form-dash__field"
          name="title"
          type="text"
          value="{{ $data->product->title ?? '' }}"
          placeholder="Милдрокард"
          required
          data-pristine-required-message="Объязательное поле">
      </label>

      <label class="form-dash__element">
        <span class="form-dash__label">Категория*</span>
        <select class="form-dash__field form-dash__field--select" name="category">
          <option
            value="for-women"
            @if ($data->product && $data->product->category == 'for-women') selected @endif>
            Для женщин
          </option>
          <option
            value="for-kids"
            @if ($data->product && $data->product->category == 'for-kids') selected @endif>
            Для детей
          </option>
        </select>
      </label>

      <label class="form-dash__element">
        <span class="form-dash__label">Рецептурность*</span>
        <select class="form-dash__field form-dash__field--select" name="prescription">
          <option
            value="OTC"
            @if ($data->product && $data->product->prescription == 'OTC') selected @endif>
            OTC
          </option>
          <option
            value="RX"
            @if ($data->product && $data->product->prescription == 'RX') selected @endif>
            RX
          </option>
          <option
            value="БАД"
            @if ($data->product && $data->product->prescription == 'БАД') selected @endif>
            БАД
          </option>
        </select>
      </label>

      <label class="form-dash__element">
        <span class="form-dash__label">Направление*</span>
        <select class="form-dash__field form-dash__field--select" name="direction_id">
          @foreach ($data->directions as $direction)
            <option
              value="{{ $direction->id }}"
              @if ($data->product && $data->product->direction_id == $direction->id) selected @endif>
              {{ $direction->title }}
            </option>
          @endforeach
        </select>
      </label>

      <label class="form-dash__element">
        <span class="form-dash__label">Форма выпуска</span>
        <select class="form-dash__field form-dash__field--select" name="release_form_id">
          @foreach ($data->releaseForms as $form)
            <option
            value="{{ $form->id }}"
            @if ($data->product && $data->product->release_form_id == $form->id) selected @endif>
            {{ $form->title }}
          </option>
          @endforeach
        </select>
      </label>

      <label class="form-dash__element">
        <span class="form-dash__label">Ссылка</span>
        <input
          class="form-dash__field"
          name="url"
          type="url"
          value="{{ $data->product->url ?? '' }}"
          placeholder="https://salomat.tj">
      </label>

      <label class="form-dash__element">
        <span class="form-dash__label">Инструкция</span>
        <input class="visually-hidden" name="instruction" type="file">
        <input
          class="form-dash__field"
          type="text"
          placeholder="{{ $data->product && $data->product->instruction ? $data->product->instruction : 'Выберите файл' }}"
          value="{{ $data->product->instruction ?? '' }}"
          readonly>
      </label>

      <label class="form-dash__element" style="grid-column: span 2; grid-row: span 4;">
        <span class="form-dash__label">Описание</span>
        <textarea class="form-dash__field" name="description">
          {{ $data->product->description ?? '' }}
        </textarea>
      </label>

      <label class="form-dash__element" style="grid-column: span 2; grid-row: span 4;">
        <span class="form-dash__label">Состав</span>
        <textarea class="form-dash__field" name="compound">
          {{ $data->product->compound ?? '' }}
        </textarea>
      </label>

      <label class="form-dash__element" style="grid-column: span 2; grid-row: span 4;">
        <span class="form-dash__label">Показания к применению</span>
        <textarea class="form-dash__field" name="indications">
          {{ $data->product->indications ?? '' }}
        </textarea>
      </label>

      <label class="form-dash__element" style="grid-column: span 2; grid-row: span 4;">
        <span class="form-dash__label">Способ применения</span>
        <textarea class="form-dash__field" name="mode">
          {{ $data->product->mode ?? '' }}
        </textarea>
      </label>
    </form>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/dashboard/drugs-show.js') }}" type="module"></script>
@endsection

<form class="form" enctype="multipart/form-data">
  <fieldset class="form__group">
    <legend class="form__title">{{ $drug->title }} (Редактирование)</legend>
    <input type="hidden" name="drug-id" value="{{ $drug->id }}">
    <p class="form__element">
      <label class="form__label form__label--img">
        Фото препарата
        <img src="{{ $drug->img ? asset('files/drugs/img/' . $drug->img) : asset('img/muffin-grey.svg') }}">
        <input class="visually-hidden" name="img" type="file">
      </label>
    </p>
    <p class="form__element">
      <label class="form__label form__label--file">
        Инструкция
        <span class="form__field form__field--instruction">{{ $drug->instruction ? $drug->instruction : 'Файл не выбран' }}</span>
        <input class="visually-hidden" name="instruction" type="file">
      </label>
    </p>
    <p class="form__element">
      <label class="form__label">
        Название препарата
        <input class="form__field" name="title" type="text" placeholder="Милдрокард" value="{{ $drug->title }}" required>
      </label>
    </p>
    <p class="form__element">
      <label class="form__label">
        Ссылка где можно купить продукт
        <input class="form__field" name="url" type="text" placeholder="https://mildrokard.com" value="{{ $drug->url }}">
      </label>
    </p>
    <p class="form__element">
      <label class="form__label">
        Категория
        <select class="form__field" name="category">
          <option value="for-women" {{ $drug->category === 'for-women' ? 'selected' : '' }}>Для женщин</option>
          <option value="for-kids" {{ $drug->category === 'for-kids' ? 'selected' : '' }}>Для детей</option>
        </select>
      </label>
    </p>
    <p class="form__element">
      <label class="form__label">
        Рецептурность
        <select class="form__field" name="prescription">
          <option {{ $drug->prescription === 'OTC' ? 'selected' : '' }}>OTC</option>
          <option {{ $drug->prescription === 'RX' ? 'selected' : '' }}>RX</option>
          <option {{ $drug->prescription === 'БАД' ? 'selected' : '' }}>БАД</option>
        </select>
      </label>
    </p>
    <p class="form__element">
      <label class="form__label">
        Направления
        <select class="form__field" name="direction_id">
          @foreach ($directions as $direction)
            <option value="{{ $direction->id }}" {{ $drug->direction_id == $direction->id ? 'selected' : '' }}>{{ $direction->title }}</option>
          @endforeach
        </select>
      </label>
    </p>
    <p class="form__element">
      <label class="form__label">
        Минимальный состав
        <input class="form__field" name="min_composition" type="text" placeholder="2МЛ" value="{{ $drug->min_composition ? $drug->min_composition : '' }}">
      </label>
    </p>
    <p class="form__element">
      <label class="form__label">
        Максимальный состав
        <input class="form__field" name="max_composition" type="text" placeholder="5МЛ" value="{{ $drug->max_composition ? $drug->max_composition : '' }}">
      </label>
    </p>
    <p class="form__element">
      <label class="form_label">
        Описание
        <textarea class="form__field form__field--text" name="description" cols="30" rows="10">{{ $drug->description }}</textarea>
      </label>
    </p>
    <p class="form__element">
      <label class="form_label">
        Состав
        <textarea class="form__field form__field--text" name="compound" cols="30" rows="10">{{ $drug->compound }}</textarea>
      </label>
    </p>
    <p class="form__element">
      <label class="form_label">
        Показания к применению
        <textarea class="form__field form__field--text" name="indications" cols="30" rows="10">{{ $drug->indications }}</textarea>
      </label>
    </p>
    <p class="form__element">
      <label class="form_label">
        Способ применения
        <textarea class="form__field form__field--text" name="mode" cols="30" rows="10">{{ $drug->mode }}</textarea>
      </label>
    </p>
    <div class="form__actions">
      <button class="popup-btn popup-btn--save" type="submit" title="Сохранить"></button>
      <button class="popup-btn popup-btn--reset" type="reset" title="Сбросить"></button>
      <button class="popup-btn popup-btn--destroy" type="button" data-id="{{ $drug->id }}" title="Удалить данный препарат"></button>
      <button class="popup-btn popup-btn--insert" type="button" title="Дабавить новый препарат"></button>
    </div>
  </fieldset>
  <button class="popup-btn popup-btn--close" type="button" title="Закрыть"></button>
</form>

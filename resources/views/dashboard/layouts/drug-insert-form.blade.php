<form class="form" enctype="multipart/form-data">
  <fieldset class="form__group">
    <legend class="form__title">Препарат (Добавление)</legend>
    <p class="form__element">
      <label class="form__label form__label--img">
        Фото препарата
        <img src="{{ asset('img/muffin-grey.svg') }}">
        <input class="visually-hidden" name="img" type="file">
      </label>
    </p>
    <p class="form__element">
      <label class="form__label form__label--file">
        Инструкция
        <span class="form__field form__field--instruction">{{ 'Файл не выбран' }}</span>
        <input class="visually-hidden" name="instruction" type="file">
      </label>
    </p>
    <p class="form__element">
      <label class="form__label">
        Название препарата
        <input class="form__field" name="title" type="text" placeholder="Милдрокард" required placeholder="Милдрокард">
      </label>
    </p>
    <p class="form__element">
      <label class="form__label">
        Ссылка где можно купить продукт
        <input class="form__field" name="url" type="text" placeholder="https://mildrokard.com">
      </label>
    </p>
    <p class="form__element">
      <label class="form__label">
        Категория
        <select class="form__field" name="category">
          <option value="for-women">Для женщин</option>
          <option value="for-kids">Для детей</option>
        </select>
      </label>
    </p>
    <p class="form__element">
      <label class="form__label">
        Рецептурность
        <select class="form__field" name="prescription">
          <option>OTC</option>
          <option>RX</option>
          <option>БАД</option>
        </select>
      </label>
    </p>
    <p class="form__element">
      <label class="form__label">
        Направления
        <select class="form__field" name="direction_id">
          @foreach ($directions as $direction)
            <option value="{{ $direction->id }}">{{ $direction->title }}</option>
          @endforeach
        </select>
      </label>
    </p>
    <p class="form__element">
      <label class="form__label">
        Минимальный состав
        <input class="form__field" name="min_composition" type="text" placeholder="2МЛ">
      </label>
    </p>
    <p class="form__element">
      <label class="form__label">
        Максимальный состав
        <input class="form__field" name="max_composition" type="text" placeholder="5МЛ">
      </label>
    </p>
    <p class="form__element">
      <label class="form_label">
        Описание
        <textarea class="form__field form__field--text" name="description" cols="30" rows="10" placeholder="Описание препарата"></textarea>
      </label>
    </p>
    <p class="form__element">
      <label class="form_label">
        Состав
        <textarea class="form__field form__field--text" name="compound" cols="30" rows="10" placeholder="Состав препарата"></textarea>
      </label>
    </p>
    <p class="form__element">
      <label class="form_label">
        Показания к применению
        <textarea class="form__field form__field--text" name="indications" cols="30" rows="10" placeholder="Показания к применению"></textarea>
      </label>
    </p>
    <p class="form__element">
      <label class="form_label">
        Способ применения
        <textarea class="form__field form__field--text" name="mode" cols="30" rows="10" placeholder="Способ применения"></textarea>
      </label>
    </p>
    <div class="form__actions">
      <button class="popup-btn popup-btn--save" type="submit" title="Опубликовать"></button>
    </div>
  </fieldset>
  <button class="popup-btn popup-btn--close" type="button" title="Закрыть"></button>
</form>

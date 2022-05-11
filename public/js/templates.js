const createVacancyTemplate = (vacancy) => `
  <h3 class="vacancy-title">Обязанности:</h3>
  <p class="vacancy-text">${vacancy.responsibilities ? vacancy.responsibilities : ''}</p>
  <h3 class="vacancy-title">Что мы от Вас ожидаем:</h3>
  <p class="vacancy-text">${vacancy.expectation ? vacancy.expectation : ''}</p>
  <div class="vacancy-links">
    ${vacancy.file ? `<a class="vacancy-link" href="/vacancy-download?id=${vacancy.id}"><span><b>Скачать</b> <br> полное описание</span></a>` : ''}
    <label class="vacancy-link vacancy-link--upload vacancy-link--upload-wating" for="file"><span><b>Загрузить</b> <br> своё резюме</span></label>
  </div>
`;

const createApplicationSuccessPopupTemplate = (name) => `
  <div class="apply__success">
    <p class="apply__success-message">Спасибо, ${name} <br> Ваша заявка принята</p>
    <div class="apply__link-wrapper">
      <a class="apply__link apply__link--dark" href="/">Вернутся на главную</a>
      <a class="apply__link apply__link--light" href="/drugs">Перейти к препаратам</a>
    </div>
  </div>
`;

const createTextTemplate = (evt) => `
  <form class="text-form">
    <input type="hidden" name="text-id" value="${evt.target.dataset.id}">
    <fieldset class="text-form__element">
      <legend class="text-form__label">${evt.target.dataset.title ? evt.target.dataset.title : 'Текст'}</legend>
      <textarea class="text-form__field" name="text" rows="${Math.ceil(evt.target.textContent.length / 32)}" required>${evt.target.textContent}</textarea>
      <button class="popup-btn popup-btn--save" type="submit" title="Сохранить"></button>
      <button class="popup-btn popup-btn--reset" type="reset" title="Сбросить"></button>
    </fieldset>
    <button class="popup-btn popup-btn--close" type="button" title="Закрыть"></button>
  </form>
`;

const createMapOptionsTemplate = (zoom, lat, lng) => `
  <form class="text-form map-form">
    <fieldset class="text-form__element">
      <legend class="text-form__label">Настройки карты</legend>
      <input class="text-form__field" name="zoom" value="${zoom}" required>
      <input class="text-form__field" name="lat" value="${lat}" required>
      <input class="text-form__field" name="lng" value="${lng}" required>
      <button class="popup-btn popup-btn--save" type="submit" title="Сохранить"></button>
      <button class="popup-btn popup-btn--reset" type="reset" title="Сбросить"></button>
    </fieldset>
    <button class="popup-btn popup-btn--close" type="button" title="Закрыть"></button>
  </form>
`;

export {
  createVacancyTemplate,
  createApplicationSuccessPopupTemplate,
  createTextTemplate,
  createMapOptionsTemplate,
};

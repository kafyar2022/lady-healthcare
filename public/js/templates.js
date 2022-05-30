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
  <form class="dash-form">
    <input type="hidden" name="text-id" value="${evt.target.dataset.id}">
    <fieldset class="dash-form__element">
      <legend class="dash-form__title">${evt.target.dataset.title ? evt.target.dataset.title : 'Текст'}</legend>
      <textarea class="dash-form__field" name="text" rows="${Math.ceil(evt.target.textContent.length / 32)}" required>${evt.target.textContent}</textarea>

      <div class="dash-form__actions">
        <button class="popup-btn popup-btn--save" type="submit" title="Сохранить"></button>
        <button class="popup-btn popup-btn--reset" type="reset" title="Сбросить"></button>
      </div>
    </fieldset>
    <button class="popup-btn popup-btn--close" type="button" title="Закрыть"></button>
  </form>
`;

const createMapOptionsTemplate = (zoom, lat, lng) => `
  <form class="dash-form map-form">
    <fieldset class="dash-form__inner">
      <legend class="dash-form__title">Настройки карты</legend>
      <input class="dash-form__field" name="zoom" value="${zoom}" required>
      <input class="dash-form__field" name="lat" value="${lat}" required>
      <input class="dash-form__field" name="lng" value="${lng}" required>

      <div class="dash-form__actions">
        <button class="popup-btn popup-btn--save" type="submit" title="Сохранить"></button>
        <button class="popup-btn popup-btn--reset" type="reset" title="Сбросить"></button>
      </div>
    </fieldset>
    <button class="popup-btn popup-btn--close" type="button" title="Закрыть"></button>
  </form>
`;

const createSocialLinkUpdateTemplate = (evt) => `
  <form class="dash-form social-links__dash-form" enctype="multipart/form-data">
    <input type="hidden" name="social-link-id" value="${evt.target.dataset.id}">
    <fieldset class="dash-form__inner">
      <legend class="dash-form__title">Социальные сети</legend>
      <div class="dash-form__element">
        <label class="dash-form__label">
          Название
          <input class="dash-form__field" name="title" type="text" value="${evt.target.dataset.title}" required>
        </label>
      </div>
      <div class="dash-form__element">
        <label class="dash-form__label">
          Ссылка на страницу
          <input class="dash-form__field" type="text" name="url" value="${evt.target.dataset.url}" required>
        </label>
      </div>
      <div class="dash-form__element">
        <label class="dash-form__label">
          Выберите иконку
          <div class="dash-form__field">${evt.target.dataset.icon}</div>
          <input class="visually-hidden" type="file" name="icon">
        </label>
      </div>

      <div class="dash-form__actions">
        <button class="popup-btn popup-btn--save" type="submit" title="Сохранить"></button>
        <button class="popup-btn popup-btn--reset" type="reset" title="Сбросить"></button>
        <button class="popup-btn popup-btn--destroy" type="button" title="Удалить"></button>
        <button class="popup-btn popup-btn--insert" type="button" title="Создать новый"></button>
      </div>
    </fieldset>
    <button class="popup-btn popup-btn--close" type="button" title="Закрыть"></button>
  </form>
`;

const createSocialLinkEmptyTemplate = () => `
  <li class="social-links__item">
    <a class="social-links__link" target="_blank"><i ></i></a>
  </li>
`;

const createSocialLinkInsertTemplate = () => `
  <form class="dash-form social-links__dash-form" enctype="multipart/form-data">
    <fieldset class="dash-form__inner">
      <legend class="dash-form__title">Социальные сети</legend>
      <div class="dash-form__element">
        <label class="dash-form__label">
          Название
          <input class="dash-form__field" name="title" type="text" required placeholder=". . .">
        </label>
      </div>
      <div class="dash-form__element">
        <label class="dash-form__label">
          Ссылка на страницу
          <input class="dash-form__field" type="text" name="url" required placeholder=". . .">
        </label>
      </div>
      <div class="dash-form__element">
        <label class="dash-form__label">
          Выберите иконку
          <div class="dash-form__field">. . .</div>
          <input class="visually-hidden" name="icon" type="file" required>
        </label>
      </div>

      <div class="dash-form__actions">
        <button class="popup-btn popup-btn--save" type="submit" title="Сохранить"></button>
      </div>
    </fieldset>
    <button class="popup-btn popup-btn--close" type="button" title="Закрыть"></button>
  </form>
`;

const createBannerEditForm = (banner) => `
  <form class="form banners__form" enctype="multipart/form-data">
    <fieldset class="form__group">
      <legend class="form__title">${banner.title}</legend>
      <input type="hidden" name="banner_id" value="${banner.id}">
      <p class="form__element">
        <label class="form__label form__label--file">
          Фото
          <span class="form__field form__field--img">${banner.img}</span>
          <input class="visually-hidden" name="img" type="file">
        </label>
      </p>
      <p class="form__element">
        <label class="form__label">
          Заголовок
          <input class="form__field" name="title" type="text" value="${banner.title}" required>
        </label>
      </p>
      <p class="form__element">
        <label class="form_label">
          Текс, описание, объявление...
          <textarea class="form__field form__field--text" name="text" cols="30" rows="10">${banner.text ?? ''}</textarea>
        </label>
      </p>
      <p class="form__element">
        <label class="form__label">
          Ссылка (не объязательно)
          <input class="form__field" name="url" type="text" value="${banner.url ?? ''}">
        </label>
      </p>
      <p class="form__element">
        <label class="form__label">
          Текст ссылки (не объязательно)
          <input class="form__field" name="link" type="text" value="${banner.link ?? ''}">
        </label>
      </p>
      <div class="form__actions">
        <button class="popup-btn popup-btn--save" type="submit" title="Сохранить"></button>
        <button class="popup-btn popup-btn--reset" type="reset" title="Сбросить"></button>
        <button class="popup-btn popup-btn--destroy" type="button" data-id="${banner.id}" title="Удалить"></button>
        <button class="popup-btn popup-btn--insert" type="button" title="Дабавить"></button>
      </div>
    </fieldset>
    <button class="popup-btn popup-btn--close" type="button" title="Закрыть"></button>
  </form>
`;

const createBannerInsertForm = () => `
  <form class="form banners__form banners__form--insert" enctype="multipart/form-data">
    <fieldset class="form__group">
      <legend class="form__title">Баннер (Редактирование)</legend>
      <p class="form__element">
        <label class="form__label form__label--file">
          Фото
          <span class="form__field form__field--img">Файл не выбран</span>
          <input class="visually-hidden" name="img" type="file" required>
        </label>
      </p>
      <p class="form__element">
        <label class="form__label">
          Заголовок
          <input class="form__field" name="title" type="text" placeholder="Нео Витес для иммунитета" required>
        </label>
      </p>
      <p class="form__element">
        <label class="form_label">
          Текс, описание, объявление...
          <textarea class="form__field form__field--text" name="text" cols="30" rows="10" placeholder="Текс, описание, объявление..."></textarea>
        </label>
      </p>
      <p class="form__element">
        <label class="form__label">
          Ссылка (не объязательно)
          <input class="form__field" name="url" type="text" placeholder="https://example.com">
        </label>
      </p>
      <p class="form__element">
        <label class="form__label">
          Текст ссылки (не объязательно)
          <input class="form__field" name="link" type="text" placeholder="К препарату">
        </label>
      </p>
      <div class="form__actions">
        <button class="popup-btn popup-btn--save" type="submit" title="Сохранить"></button>
      </div>
    </fieldset>
    <button class="popup-btn popup-btn--close" type="button" title="Закрыть"></button>
  </form>
`;

const createBannerTemplate = () => `
  <li class="glide__slide glide__slide--active">
    <div class="container glide__container">
      <h2 class="glide__title"></h2>
      <p class="glide__text"></p>
      <a class="button glide__link" target="_blank"></a>
    </div>
    <img class="glide__img">
  </li>
`;

export {
  createVacancyTemplate,
  createApplicationSuccessPopupTemplate,
  createTextTemplate,
  createMapOptionsTemplate,
  createSocialLinkUpdateTemplate,
  createSocialLinkEmptyTemplate,
  createSocialLinkInsertTemplate,
  createBannerEditForm,
  createBannerInsertForm,
  createBannerTemplate,
};

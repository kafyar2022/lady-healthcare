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

export { createVacancyTemplate, createApplicationSuccessPopupTemplate };

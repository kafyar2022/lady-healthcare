import { storeBanner } from '../api.js';
import { createElement } from '../render.js';
import { createBannerInsertForm } from '../templates.js';

const showInsertForm = (imgEl, titleEl, textEl, linkEl) => {
  const formEl = createElement(createBannerInsertForm);
  const fileChooserEl = formEl.querySelector('input[name="img"]');
  const filePreviewEl = formEl.querySelector('.form__field--img');
  const titleFieldEl = formEl.querySelector('input[name="title"]');
  const textFieldEl = formEl.querySelector('textarea[name="text"]');
  const linkFieldEl = formEl.querySelector('input[name="link"]');
  const urlFieldEl = formEl.querySelector('input[name="url"]');

  document.querySelector('.dashboard-list').insertAdjacentElement('afterend', formEl);

  imgEl.src = '';
  imgEl.alt = '';
  titleEl.textContent = '';
  textEl.textContent = '';
  linkEl.href = '';
  linkEl.textContent = '';

  fileChooserEl.addEventListener('change', (evt) => {
    const file = evt.target.files[0];
    filePreviewEl.textContent = evt.target.value;
    imgEl.src = URL.createObjectURL(file);
  });

  titleFieldEl.addEventListener('input', (evt) => (titleEl.textContent = evt.target.value));
  textFieldEl.addEventListener('input', (evt) => (textEl.textContent = evt.target.value));
  linkFieldEl.addEventListener('input', (evt) => (linkEl.textContent = evt.target.value));
  urlFieldEl.addEventListener('input', (evt) => (linkEl.href = evt.target.value));

  formEl.addEventListener('submit', (evt) => {
    evt.preventDefault();
    storeBanner(
      new FormData(evt.target),
      () => location.reload(),
    )
  });

  formEl.addEventListener('reset', () => {
    filePreviewEl.textContent = 'Файл не выбран';
    imgEl.src = '';
    titleEl.textContent = '';
    textEl.textContent = '';
    linkEl.textContent = '';
    linkEl.href = '';
  });
};

export { showInsertForm };

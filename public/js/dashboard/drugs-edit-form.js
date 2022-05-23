import { replace } from '../render.js';
import { destroyDrug, getDrugInsertTemplate, updateDrug } from '../api.js';
import { createElement } from '../util.js';
import { setInsertFormHandlers } from './drugs-insert-form.js';

export const setEditFormHandlers = (formEl, cardEl) => {
  const imgChooserEl = formEl.querySelector('input[name="img"]');
  const imgPreviewEl = formEl.querySelector('img');
  const prevImg = imgPreviewEl.src;
  const fileChooserEl = formEl.querySelector('input[name="instruction"]');
  const filePreviewEl = formEl.querySelector('.form__field--instruction');
  const prevFile = filePreviewEl.textContent;
  const closeEl = formEl.querySelector('.popup-btn--close');
  const destroyEl = formEl.querySelector('.popup-btn--destroy');
  const insertEl = formEl.querySelector('.popup-btn--insert');

  imgChooserEl.addEventListener('change', (evt) => imgPreviewEl.src = URL.createObjectURL(evt.target.files[0]));
  fileChooserEl.addEventListener('change', (evt) => filePreviewEl.textContent = evt.target.value);

  closeEl.addEventListener('click', () => formEl.remove());

  formEl.addEventListener('reset', () => {
    imgPreviewEl.src = prevImg;
    filePreviewEl.textContent = prevFile;
    formEl.scrollIntoView({ behavior: 'smooth' });
  });

  formEl.addEventListener('submit', (evt) => {
    evt.preventDefault();
    updateDrug(
      new FormData(evt.target),
      () => formEl.remove(),
      () => console.log('fail'),
    );
  });

  destroyEl.addEventListener('click', (evt) => destroyDrug(
    evt.target.dataset.id,
    () => {
      formEl.remove();
      cardEl.remove();
    },
    () => console.log('fail'),
  ));

  insertEl.addEventListener('click', () => {
    getDrugInsertTemplate((template) => {
      const insertFormEl = createElement(template);
      replace(insertFormEl, formEl);
      insertFormEl.scrollIntoView({ behavior: 'smooth' });
      setInsertFormHandlers(insertFormEl);
    });
  });
};

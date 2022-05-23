import { storeDrug } from '../api.js';

export const setInsertFormHandlers = (formEl) => {
  const imgChooserEl = formEl.querySelector('input[name="img"]');
  const imgPreviewEl = formEl.querySelector('img');
  const prevImg = imgPreviewEl.src;
  const fileChooserEl = formEl.querySelector('input[name="instruction"]');
  const filePreviewEl = formEl.querySelector('.form__field--instruction');
  const prevFile = filePreviewEl.textContent;
  const closeEl = formEl.querySelector('.popup-btn--close');

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
    storeDrug(
      new FormData(evt.target),
      () => formEl.remove(),
      () => console.log('fail'),
    );
  });
};

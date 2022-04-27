import { submitApplication } from './api.js';

const applyModalEl = document.querySelector('#join');
const formEl = applyModalEl.querySelector('.apply-form');
const submitEl = formEl.querySelector('button[type="submit"]');
const closeEl = document.querySelector('.apply__close');

const closeApplyModal = () => {
  applyModalEl.classList.add('apply--hidden');
};

const pristine = window.Pristine(formEl, {
  classTo: 'apply-form__element',
  errorClass: 'apply-form__element--invalid',
  successClass: 'apply-form__element--valid',
  errorTextParent: 'apply-form__element',
  errorTextTag: 'div',
  errorTextClass: 'apply-form__error'
}, true);

const formSubmitHandler = () => {
  submitEl.disabled = true;

  closeEl.addEventListener('click', closeApplyModal);

  formEl.addEventListener('submit', (evt) => {
    evt.preventDefault();

    const isValid = pristine.validate();
    if (isValid) {
      submitApplication(
        formEl,
        () => { console.log('success'); },
        () => { console.log('fail'); },
      );
    }
  });
};

export { formSubmitHandler };

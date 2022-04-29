import { getVacancies, submitApplication } from './api.js';
import { createApplicationSuccessPopupTemplate, createVacancyTemplate } from './templates.js';

const showModalEl = document.querySelector('.carrier__join-link');
const modalEl = document.querySelector('.apply');
const closeModalEl = document.querySelector('.apply__close');
const formEl = modalEl.querySelector('.apply-form');
const submitEl = formEl.querySelector('button[type="submit"]');
const vacancyEl = formEl.querySelector('select[name="vacancy"]');
const modalLeftEl = modalEl.querySelector('.apply__left');
const fileChooserEl = formEl.querySelector('input[name="cv"]');
const nameEl = formEl.querySelector('input[name="name"]');

let vacancies;

const renderSelectedVacancy = (vacancy) => {
  modalLeftEl.innerHTML = createVacancyTemplate(vacancy);
};

function showModalElClickHandler(evt) {
  evt.preventDefault();
  document.querySelector('input[name="name"]').focus();
  modalEl.classList.remove('apply--hidden');
  closeModalEl.addEventListener('click', closeModalElClickHandler);
  document.addEventListener('keydown', modalElKeydownHandler);
  vacancyEl.addEventListener('change', vacancyElChangeHandler);
  fileChooserEl.addEventListener('change', fileChooserElChangeHandler);
}

function closeModalElClickHandler() {
  modalEl.classList.add('apply--hidden');
  closeModalEl.removeEventListener('click', closeModalElClickHandler);
  document.removeEventListener('keydown', modalElKeydownHandler);
  vacancyEl.removeEventListener('change', vacancyElChangeHandler);
  fileChooserEl.removeEventListener('change', fileChooserElChangeHandler);
  const successModal = modalEl.querySelector('.apply__success');
  successModal ? successModal.remove() : '';
}

function modalElKeydownHandler(evt) {
  if (evt.key === 'Escape') {
    modalEl.classList.add('apply--hidden');
    closeModalEl.removeEventListener('click', closeModalElClickHandler);
    document.removeEventListener('keydown', modalElKeydownHandler);
    vacancyEl.removeEventListener('change', vacancyElChangeHandler);
    fileChooserEl.removeEventListener('change', fileChooserElChangeHandler);
    const successModal = modalEl.querySelector('.apply__success');
    successModal ? successModal.remove() : '';
  }
}

function vacancyElChangeHandler(evt) {
  submitEl.disabled = true;
  if (evt.target.value === '') {
    modalLeftEl.innerHTML = '';
    return;
  }
  if (!vacancies) {
    getVacancies((data) => {
      vacancies = data;
      renderSelectedVacancy(vacancies[evt.target.value]);
    });
  } else {
    renderSelectedVacancy(vacancies[evt.target.value]);
  }
}

function fileChooserElChangeHandler() {
  document
    .querySelector('.vacancy-link--upload-wating')
    .classList.remove('vacancy-link--upload-wating');

  submitEl.disabled = false;
}

const showSuccessPopup = () => {
  modalEl.children[0].insertAdjacentHTML('beforeend', createApplicationSuccessPopupTemplate(nameEl.value));
};

const pristine = window.Pristine(formEl, {
  classTo: 'apply-form__element',
  errorClass: 'apply-form__element--invalid',
  successClass: 'apply-form__element--valid',
  errorTextParent: 'apply-form__element',
  errorTextTag: 'div',
  errorTextClass: 'apply-form__error'
}, true);

const initApplyModal = () => {
  submitEl.disabled = true;

  showModalEl.addEventListener('click', showModalElClickHandler);

  formEl.addEventListener('submit', (evt) => {
    evt.preventDefault();

    const isValid = pristine.validate();
    if (isValid) {
      submitApplication(
        new FormData(evt.target),
        () => {
          showSuccessPopup();
         }
      );
    }
  });
};

export { initApplyModal };

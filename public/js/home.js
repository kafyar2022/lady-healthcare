import { formSubmitHandler } from './carrier-form.js';
import { initMap, resetMap } from './map.js';

const valueEls = document.querySelectorAll('li.values-list__item');
const applicationModalShowEl = document.querySelector('.carrier__join-link');
const applicationModalEl = document.querySelector('#join');

initMap();
formSubmitHandler();

valueEls.forEach((el) => {

  el.addEventListener('mouseover', (evt) => {
    document
      .querySelector('li.values-list__item--active')
      .classList
      .remove('values-list__item--active');

    evt.target.closest('li').classList.add('values-list__item--active');
  })
});

document.body.addEventListener('click', (evt) => {
  if (evt.target.dataset.action === 'reset-map') {
    resetMap();
  }
});

applicationModalEl.classList.add('apply', 'apply--hidden');

applicationModalShowEl.addEventListener('click', (evt) => {
  evt.preventDefault();
  applicationModalEl.classList.remove('apply--hidden');
});

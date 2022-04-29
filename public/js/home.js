import { initApplyModal } from './apply-modal.js';
import { initMap, resetMap } from './map.js';

const valueEls = document.querySelectorAll('li.values-list__item');

initMap();
initApplyModal();

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


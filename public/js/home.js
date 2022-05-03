import { initApplyModal } from './apply-modal.js';
import { initMap } from './map.js';

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

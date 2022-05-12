import { updateText } from '../api.js';
import { createElement } from '../render.js';
import { createTextTemplate } from '../templates.js';

export const showTextSettings = (element, evt) => {
  if (element.querySelector(`input[name="text-id"][value="${evt.target.dataset.id}"]`)) {
    return;
  }
  const newFormEl = createElement(createTextTemplate(evt));
  const inputEl = newFormEl.querySelector('textarea[name="text"]');
  const closeEl = newFormEl.querySelector('.popup-btn--close');
  const text = evt.target.textContent;

  inputEl.addEventListener('input', (e) => {
    evt.target.textContent = e.target.value;
  });

  newFormEl.addEventListener('reset', () => {
    evt.target.textContent = text;
  });

  closeEl.addEventListener('click', () => {
    newFormEl.remove();
    evt.target.textContent = text;
  });

  newFormEl.addEventListener('submit', (evt) => {
    evt.preventDefault();

    updateText(
      new FormData(evt.target),
      () => evt.target.remove(),
      () => console.log('fail'),
    );
  });

  element.insertAdjacentElement('beforeend', newFormEl);
};

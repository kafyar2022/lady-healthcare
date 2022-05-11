import { switchMapEditState } from '../map.js';
import { initTextEdition } from './text.js';

const dashboardEl = document.querySelector('.dashboard');

switchMapEditState(dashboardEl)

document.addEventListener('contextmenu', (evt) => {
  evt.preventDefault();

  switch (evt.target.dataset.type) {
    case 'text':
      initTextEdition(dashboardEl, evt);
      break;
  }
});

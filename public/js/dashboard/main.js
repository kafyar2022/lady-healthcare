import { switchMapEditState } from '../map.js';
import { showSocialLinkSettings } from './social-link.js';
import { showTextSettings } from './text.js';

const dashboardEl = document.querySelector('.dashboard');

if (document.querySelector('.map')) {
  switchMapEditState(dashboardEl)
}

document.addEventListener('contextmenu', (evt) => {
  evt.preventDefault();

  switch (evt.target.dataset.type) {
    case 'text':
      showTextSettings(dashboardEl, evt);
      break;

    case 'social-link':
      showSocialLinkSettings(dashboardEl, evt);
      break
  }
});

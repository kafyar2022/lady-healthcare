import { switchMapEditState } from '../map.js';
import { showSocialLinkSettings } from './social-link.js';
import { showTextSettings } from './text.js';

const dashboardEl = document.querySelector('.dashboard');

switchMapEditState(dashboardEl)

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

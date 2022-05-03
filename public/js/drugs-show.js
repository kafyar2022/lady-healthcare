import { initAccordion } from './accordion.js';
import { initMap } from './map.js';

initMap();
initAccordion();

new Glide('.glide', {
  type: 'carousel',
  startAt: 0,
  perView: 1
}).mount();

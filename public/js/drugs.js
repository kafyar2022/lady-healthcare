import { initFilter } from './filter.js';
import { initMap } from './map.js';

initMap();
initFilter();

new Glide('.glide', {
  type: 'carousel',
  startAt: 0,
  perView: 1,
  gap: 0,
}).mount();

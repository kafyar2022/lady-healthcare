import { showEditForm } from './banner-forms.js';

const bannersListEl = document.querySelector('.glide__slides');

new Glide('.glide', {
  startAt: 0,
  perView: 1,
  gap: 0,
}).mount();

bannersListEl.addEventListener('contextmenu', (evt) => {
  evt.preventDefault();
  showEditForm(evt);
});

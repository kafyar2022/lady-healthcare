import { getDrugsByOption } from './api.js';
import { debounce } from './util.js';

const filterSectionEl = document.querySelector('.our-drugs');
const searchEl = document.querySelector('input[name="keyword"]');
const searchFormEl = document.querySelector('.search-form');
const filterFormEl = document.querySelector('.filter-form');
const prescriptionEl = document.querySelector('select[name="prescription"]');
const directionEl = document.querySelector('select[name="direction"]');
const productsWrapperEl = document.querySelector('.product-list-wrapper');
const forwomenEl = document.querySelector('input[name="for-women"]');
const forkidsEl = document.querySelector('input[name="for-kids"]');

const filterDrugs = (page = 1) => {
  getDrugsByOption(
    {
      keyword: searchEl.value,
      category: filterFormEl.querySelector('input:checked') ? filterFormEl.querySelector('input:checked').id : '',
      prescription: prescriptionEl.value,
      direction: directionEl.value,
      page,
    },
    (data) => {
      productsWrapperEl.innerHTML = data;
      filterSectionEl.scrollIntoView({ behavior: 'smooth' });
    },
  );
};

const initFilter = () => {
  searchFormEl.addEventListener('submit', (evt) => { evt.preventDefault(); });
  filterFormEl.addEventListener('submit', (evt) => { evt.preventDefault(); });
  filterFormEl.addEventListener('input', debounce(filterDrugs));

  searchEl.setAttribute('size', searchEl.getAttribute('placeholder').length);
  searchEl.addEventListener('input', (evt) => {
    evt.target.value.length > 0 ? evt.target.setAttribute('size', evt.target.value.length) : evt.target.setAttribute('size', evt.target.getAttribute('placeholder').length);
  });
  searchEl.addEventListener('input', debounce(filterDrugs));

  forwomenEl.addEventListener('change', () => {
    forkidsEl.checked ? forkidsEl.checked = false : '';
  });

  forkidsEl.addEventListener('change', () => {
    forwomenEl.checked ? forwomenEl.checked = false : '';
  });

  productsWrapperEl.addEventListener('click', (evt) => {
    if (evt.target.className === 'page-link') {
      evt.preventDefault();
      filterDrugs(evt.target.href.split('page=')[1]);
    }
  });
};

export { initFilter };

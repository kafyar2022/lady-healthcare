import { getDrugEditData } from '../api.js';
import { initFilter } from '../filter.js';
import { createElement } from '../util.js';
import { setEditFormHandlers } from './drugs-edit-form.js';

initFilter();

const drugListEl = document.querySelector('.product-list');
const dashboardListEl = document.querySelector('.dashboard-list')

drugListEl.addEventListener('contextmenu', (evt) => {
  const drugItemEl = evt.target.closest('.product-list__item');
  if (drugItemEl) {
    getDrugEditData(
      drugItemEl.dataset.id,
      (response) => {
        if (!document.querySelector(`input[name="drug-id"][value="${drugItemEl.dataset.id}"]`)) {
          const editForm = createElement(response.template);
          setEditFormHandlers(editForm, drugItemEl);
          dashboardListEl.insertAdjacentElement('afterend', editForm);
        }
      },
    );
  }
});

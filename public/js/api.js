const headers = {
  'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
};

const submitApplication = (body, onSuccess) =>
  fetch('/carrier/apply', {
    headers,
    method: 'post',
    body,
  })
    .then(() => onSuccess())
    .catch((err) => console.error(err))

const getVacancies = (onSuccess) =>
  fetch('/vacancies')
    .then((response) => response.json())
    .then((vacancies) => onSuccess(vacancies))
    .catch((err) => console.error(err));

const getDrugsByOption = (options, onSuccess) =>
  fetch(`/drugs/filter?page=${options.page}`, {
    headers,
    method: 'post',
    body: JSON.stringify(options),
  })
    .then((response) => response.json())
    .then((response) => onSuccess(response.template))
    .catch((err) => console.error(err));

const updateText = (body, onSuccess, onFail) =>
  fetch('/dashboard/text-update', {
    headers,
    method: 'post',
    body,
  })
    .then((response) => {
      if (response.redirected) {
        onFail();
      } else {
        onSuccess();
      }
    })
    .catch((err) => console.log(err));

const updateMap = (body, onSuccess, onFail) =>
  fetch('/dashboard/map-update', {
    headers,
    method: 'post',
    body,
  })
    .then((response) => {
      if ((response.ok && !response.redirected)) {
        onSuccess();
      } else {
        onFail();
      }
    })
    .catch((err) => console.log(err));

const insertNewSocialLink = (body, onSuccess, onFail) =>
  fetch('/dashboard/insert-social-link', {
    headers,
    method: 'post',
    body,
  })
    .then((response) => {
      if ((response.ok && !response.redirected)) {
        onSuccess();
      } else {
        onFail();
      }
    })
    .catch((err) => console.log(err));

const updateSocialLink = (body, onSuccess, onFail) =>
  fetch('/dashboard/update-social-link', {
    headers,
    method: 'post',
    body,
  })
    .then((response) => {
      if ((response.ok && !response.redirected)) {
        onSuccess();
      } else {
        onFail();
      }
    })
    .catch((err) => console.log(err));

const destroySocialLink = (id, onSuccess, onFail) =>
  fetch(`/dashboard/destroy-social-link?id=${id}`)
    .then((response) => {
      if ((response.ok && !response.redirected)) {
        onSuccess();
      } else {
        onFail();
      }
    })
    .catch((err) => console.log(err));

const getDrugEditData = (id, onSuccess) =>
  fetch(`/dashboard/drug-edit?id=${id}`)
    .then((response) => response.json())
    .then((response) => onSuccess(response))
    .catch((err) => console.log(err));

const storeDrug = (body, onSuccess, onFail) =>
  fetch('/dashboard/drug-store', {
    headers,
    method: 'post',
    body,
  })
    .then((response) => {
      if (response.ok && !response.redirected) {
        onSuccess();
      } else {
        onFail();
      }
    })
    .catch((err) => console.error(err));

const updateDrug = (body, onSuccess, onFail) =>
  fetch('/dashboard/drug-update', {
    headers,
    method: 'post',
    body,
  })
    .then((response) => {
      if (response.ok && !response.redirected) {
        onSuccess();
      } else {
        onFail();
      }
    })
    .catch((err) => console.error(err));

const getDrugInsertTemplate = (onSuccess) =>
  fetch('/dashboard/drug-create')
    .then((response) => response.json())
    .then((data) => onSuccess(data.template))
    .catch((err) => console.error(err));

const destroyDrug = (id, onSuccess, onFail) =>
  fetch(`/dashboard/drug-destroy?id=${id}`)
    .then((response) => {
      if (response.ok && !response.redirected) {
        onSuccess();
      } else {
        onFail();
      }
    })
    .catch((err) => console.error(err));

export {
  submitApplication,
  getVacancies,
  getDrugsByOption,
  updateText,
  updateMap,
  insertNewSocialLink,
  updateSocialLink,
  destroySocialLink,
  getDrugEditData,
  storeDrug,
  updateDrug,
  destroyDrug,
  getDrugInsertTemplate,
};

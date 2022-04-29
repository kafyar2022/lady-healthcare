const headers = {
  'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
};

const submitApplication = (body, onSuccess) =>
  fetch('/carrier/apply', {
    headers,
    method: 'post',
    body,
  })
    .then(() => {
      onSuccess();
    })
    .catch((err) => {
      console.error(err);
    })

const getVacancies = (onSuccess) =>
  fetch('/vacancies')
    .then((response) => response.json())
    .then((vacancies) => {
      onSuccess(vacancies);
    })
    .catch((err) => {
      console.error(err);
    });

export { submitApplication, getVacancies };

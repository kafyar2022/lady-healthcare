const headers = {
  'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
};
const submitApplication = (formEl, onSuccess, onFail) =>
  fetch('/carrier/apply', {
    headers,
    method: 'post',
    body: new FormData(formEl),
  })
    .then((response) => {
      if (response.ok) {
        onSuccess();
      } else {
        onFail();
      }
    })
    .catch((err) => {
      console.error(err);
    })

export { submitApplication };

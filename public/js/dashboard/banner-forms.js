import { destroyBanner, storeBanner, updateBanner } from '../api.js';
import { createElement } from '../render.js';
import { createBannerEditForm, createBannerInsertForm, createBannerTemplate } from '../templates.js';

const dashboardNavigation = document.querySelector('.dashboard-list');
const bannersListEl = document.querySelector('.glide__slides');
let resetForm;

const setFormHandlers = (formEl, itemEl) => {
  const imgPreviewEl = itemEl.querySelector('img');
  const titlePreviewEl = itemEl.querySelector('h2');
  const textPreviewEl = itemEl.querySelector('p');
  const linkPreviewEl = itemEl.querySelector('a');
  const previousImg = imgPreviewEl.src;
  const previousTitle = titlePreviewEl.textContent;
  const previousText = textPreviewEl.textContent;
  const previousLink = linkPreviewEl.textContent;
  const previousUrl = linkPreviewEl.href;

  const imgChooserEl = formEl.querySelector('input[name="img"]');
  const imgUrlPreviewEl = formEl.querySelector('.form__field--img')
  const titleFieldEl = formEl.querySelector('input[name="title"]');
  const textFieldEl = formEl.querySelector('textarea[name="text"]');
  const linkFieldEl = formEl.querySelector('input[name="link"]');
  const urlFieldEl = formEl.querySelector('input[name="url"]');
  const resetEl = formEl.querySelector('.popup-btn--reset');

  if (!resetEl) {
    bannersListEl.style = '';
  }

  imgChooserEl.addEventListener('change', (evt) => {
    const file = evt.target.files[0];
    imgPreviewEl.src = URL.createObjectURL(file);
    imgUrlPreviewEl.textContent = evt.target.value;
  });

  titleFieldEl.addEventListener('input', (evt) => (titlePreviewEl.textContent = evt.target.value));
  textFieldEl.addEventListener('input', (evt) => (textPreviewEl.textContent = evt.target.value));
  linkFieldEl.addEventListener('input', (evt) => (linkPreviewEl.textContent = evt.target.value));
  urlFieldEl.addEventListener('input', (evt) => (linkPreviewEl.href = evt.target.value));

  resetForm = () => {
    imgPreviewEl.src = previousImg;
    titlePreviewEl.textContent = previousTitle;
    textPreviewEl.textContent = previousText;
    linkPreviewEl.textContent = previousLink;
    linkPreviewEl.href = previousUrl;
  }

  if (resetEl) {
    resetEl.addEventListener('click', () => resetForm());
  }
};

const showInsertForm = () => {
  const formEl = createElement(createBannerInsertForm());
  const previousFormEl = document.querySelector('.banners__form--insert');

  if (!previousFormEl) {
    const bannerEl = createElement(createBannerTemplate());
    const closeEl = formEl.querySelector('.popup-btn--close');

    dashboardNavigation.insertAdjacentElement('afterend', formEl);
    bannersListEl.innerHTML = '';
    bannersListEl.insertAdjacentElement('afterbegin', bannerEl)

    closeEl.addEventListener('click', () => (location.reload()));

    setFormHandlers(formEl, bannerEl);

    formEl.addEventListener('submit', (evt) => {
      evt.preventDefault();

      storeBanner(
        new FormData(evt.target),
        () => location.reload(),
        () => console.error('fail'),
      );
    });
  }
};

const showEditForm = (evt) => {
  const previousFormEl = document.querySelector(`input[name="banner_id"][value="${evt.target.dataset.id}"]`);

  if (!previousFormEl) {
    const banner = JSON.parse(evt.target.dataset.banner);
    const formEl = createElement(createBannerEditForm(banner));
    const insertEl = formEl.querySelector('.popup-btn--insert');
    const destroyEl = formEl.querySelector('.popup-btn--destroy');
    const closeEl = formEl.querySelector('.popup-btn--close');

    dashboardNavigation.insertAdjacentElement('afterend', formEl);
    setFormHandlers(formEl, evt.target);

    insertEl.addEventListener('click', () => {
      formEl.remove();
      showInsertForm();
    });

    destroyEl.addEventListener('click', (evt) => destroyBanner(
      evt.target.dataset.id,
      () => location.reload(),
      () => console.error('fail'),
    ));

    closeEl.addEventListener('click', () => {
      formEl.remove();
      resetForm();
    });

    formEl.addEventListener('submit', (evt) => {
      evt.preventDefault();

      updateBanner(
        new FormData(evt.target),
        () => formEl.remove(),
        () => console.error('fail'),
      );
    });
  }
};

export {
  showEditForm
};

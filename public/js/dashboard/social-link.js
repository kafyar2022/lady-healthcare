import { destroySocialLink, insertNewSocialLink, updateSocialLink } from '../api.js';
import { createElement } from '../render.js';
import { createSocialLinkEmptyTemplate, createSocialLinkInsertTemplate, createSocialLinkUpdateTemplate } from '../templates.js';


export const showSocialLinkSettings = (element, evt) => {
  if (!element.querySelector(`input[name="social-link-id"][value="${evt.target.dataset.id}"]`)) {
    const socialLinkListEl = document.querySelector('.social-links');
    const updateFormEl = createElement(createSocialLinkUpdateTemplate(evt));
    const fileChooserEl = updateFormEl.querySelector('input[name="icon"]');
    const filePreviewEl = updateFormEl.querySelector('div.dash-form__field');
    const iconPreviewEl = evt.target.querySelector('i');
    const iconInitialUrl = iconPreviewEl.style.backgroundImage;

    fileChooserEl.addEventListener('change', (e) => {
      const file = e.target.files[0];
      iconPreviewEl.style.backgroundImage = `url("${URL.createObjectURL(file)}")`;
      filePreviewEl.textContent = file.name.toLowerCase();
    });

    updateFormEl.addEventListener('submit', (e) => {
      e.preventDefault();
      updateSocialLink(
        new FormData(updateFormEl),
        () => updateFormEl.remove(),
        () => console.error('fail'),
      );
    });

    updateFormEl.addEventListener('click', (e) => {
      if (e.target.classList.contains('popup-btn--reset')) {
        iconPreviewEl.style.backgroundImage = iconInitialUrl;
        filePreviewEl.textContent = evt.target.dataset.icon
      }

      if (e.target.classList.contains('popup-btn--destroy')) {
        destroySocialLink(
          evt.target.dataset.id,
          () => {
            updateFormEl.remove();
            evt.target.parentElement.remove();
          },
          () => console.error('fail'),
        );
      }

      if (e.target.classList.contains('popup-btn--insert')) {
        const newItemEl = createElement(createSocialLinkEmptyTemplate());
        const insertFormEl = createElement(createSocialLinkInsertTemplate());
        const closeFormEl = insertFormEl.querySelector('.popup-btn--close');
        const fileChooserEl = insertFormEl.querySelector('input[name="icon"]');
        const filePreviewEl = insertFormEl.querySelector('div.dash-form__field');
        const iconPreviewEl = newItemEl.querySelector('i');

        fileChooserEl.addEventListener('change', (e) => {
          const file = e.target.files[0];
          iconPreviewEl.style.backgroundImage = `url("${URL.createObjectURL(file)}")`;
          filePreviewEl.textContent = file.name.toLowerCase();
        });

        socialLinkListEl.insertAdjacentElement('beforeend', newItemEl);
        element.querySelector('.dashboard-list')
          .insertAdjacentElement('afterend', insertFormEl);

        insertFormEl.addEventListener('submit', (e) => {
          e.preventDefault();
          insertNewSocialLink(
            new FormData(insertFormEl),
            () => insertFormEl.remove(),
            () => console.error('fail'),
          );
        });

        closeFormEl.addEventListener('click', (e) => {
          insertFormEl.remove();
          newItemEl.remove();
        });
      }

      if (e.target.classList.contains('popup-btn--close')) {
        updateFormEl.remove();
        iconPreviewEl.style.backgroundImage = iconInitialUrl;
      }
    });


    element.querySelector('.dashboard-list')
      .insertAdjacentElement('afterend', updateFormEl);
  }
};

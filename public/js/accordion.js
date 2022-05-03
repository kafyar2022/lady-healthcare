const accordionEl = document.querySelector('.accordion');
const accordionTermEls = accordionEl.querySelectorAll('dt');

const initAccordion = () => {
  accordionEl.addEventListener('click', (evt) => {
    if (evt.target.tagName === 'DT') {
      accordionTermEls.forEach((element) => {
        if (!element.classList.contains('accordion__description--hidden') && element !== evt.target) {
          element.classList.add('accordion__description--hidden');
        }
      });
      evt.target.classList.toggle('accordion__description--hidden');
    }
  });

  document.body.addEventListener('click', (evt) => {
    if (!accordionEl.contains(evt.target)) {
      accordionTermEls.forEach((element) => {
        if (!element.classList.contains('accordion__description--hidden') && element !== evt.target) {
          element.classList.add('accordion__description--hidden');
        }
      });
    }
  });
};

export { initAccordion };

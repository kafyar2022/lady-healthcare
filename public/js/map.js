import { updateMap } from './api.js';
import { createElement } from './render.js';
import { createMapOptionsTemplate } from './templates.js';

const mapEl = document.querySelector('.map');

let zoomLevel = 14;

const centerCoordinates = {
  lat: 38.57424,
  lng: 68.78639,
};

if (mapEl) {
  zoomLevel = mapEl.dataset.zoom;
  centerCoordinates.lat = mapEl.dataset.lat;
  centerCoordinates.lng = mapEl.dataset.lng;
}

let map;

const mainIcon = L.icon({
  iconUrl: '/img/main-pin.svg',
  iconSize: [52, 52],
  iconAnchor: [26, 52],
});

const mainMarker = L.marker(centerCoordinates, {
  draggable: false,
  icon: mainIcon,
});

const initMap = () => {
  map = L.map('map')
    .setView(centerCoordinates, zoomLevel);

  L.tileLayer(
    'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
  },
  ).addTo(map);

  mainMarker.addTo(map);

  document.body.addEventListener('click', (evt) => {
    if (evt.target.dataset.action === 'reset-map') {
      resetMap();
    }
  });
};

const resetMap = () => {
  map.setView(centerCoordinates, zoomLevel);
  mainMarker.setLatLng(centerCoordinates);
};

const switchMapEditState = (element) => {
  mainMarker.dragging.enable();
  mainMarker.on('moveend', (evt) => {
    const { lat, lng } = evt.target.getLatLng();
    if (element.querySelector('.map-form')) {
      element.querySelector('input[name="zoom"]').value = map.getZoom();
      element.querySelector('input[name="lat"]').value = lat.toFixed(5);
      element.querySelector('input[name="lng"]').value = lng.toFixed(5);
    } else {
      const mapFormEl = createElement(createMapOptionsTemplate(map.getZoom(), lat.toFixed(5), lng.toFixed(5)));
      const closeEl = mapFormEl.querySelector('.popup-btn--close');

      closeEl.addEventListener('click', () => {
        mapFormEl.remove();
        resetMap();
      });

      mapFormEl.addEventListener('reset', () => resetMap());
      mapFormEl.addEventListener('submit', (evt) => {
        evt.preventDefault();
        updateMap(
          new FormData(evt.target),
          () => evt.target.remove(),
          () => console.log('fail'),
        );
      });

      element.insertAdjacentElement('beforeend', mapFormEl);
    }
  });
}

export {
  initMap,
  resetMap,
  switchMapEditState,
}

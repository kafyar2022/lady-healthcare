const ZOOM_LEVEL = 13;

const centerCoordinates = {
  lat: 38.57424,
  lng: 68.78639,
};

let map;

const mainIcon = L.icon({
  iconUrl: 'img/main-pin.svg',
  iconSize: [52, 52],
  iconAnchor: [26, 52],
});

const mainMarker = L.marker(centerCoordinates, {
  draggable: false,
  icon: mainIcon,
});

const initMap = () => {
  map = L.map('map')
    .setView(centerCoordinates, ZOOM_LEVEL);

  L.tileLayer(
    'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
  },
  ).addTo(map);

  mainMarker.addTo(map);
};

const resetMap = () => {
  map.setView(centerCoordinates, ZOOM_LEVEL);
  mainMarker.setLatLng(centerCoordinates);
};

export { initMap, resetMap }

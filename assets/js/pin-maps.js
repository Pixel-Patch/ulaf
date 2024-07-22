let markerAdd, markerEdit;

function initMap(mapId, searchBoxId, latitudeId, longitudeId) {
  const zoomLevel = mapId === "map-edit" ? 20 : 15;

  const map = new google.maps.Map(document.getElementById(mapId), {
    center: {
      lat: parseFloat(document.getElementById(latitudeId).value) || 15.730555136929185,
      lng: parseFloat(document.getElementById(longitudeId).value) || 120.92987291131153
    },
    zoom: zoomLevel,
  });

  let marker;
  if (mapId === "map-add") {
    markerAdd = new google.maps.Marker({
      position: {
        lat: parseFloat(document.getElementById(latitudeId).value) || 15.730555136929185,
        lng: parseFloat(document.getElementById(longitudeId).value) || 120.92987291131153
      },
      map: map,
      draggable: true,
    });
    marker = markerAdd;
  } else if (mapId === "map-edit") {
    markerEdit = new google.maps.Marker({
      position: {
        lat: parseFloat(document.getElementById(latitudeId).value) || 15.730555136929185,
        lng: parseFloat(document.getElementById(longitudeId).value) || 120.92987291131153
      },
      map: map,
      draggable: true,
    });
    marker = markerEdit;
  }

  marker.addListener("dragend", () => {
    const position = marker.getPosition().toJSON();
    document.getElementById(latitudeId).value = position.lat;
    document.getElementById(longitudeId).value = position.lng;
    reverseGeocode(position, searchBoxId);
  });

  const input = document.getElementById(searchBoxId);
  const autocomplete = new google.maps.places.Autocomplete(input);
  autocomplete.bindTo("bounds", map);

  autocomplete.addListener("place_changed", () => {
    const place = autocomplete.getPlace();
    if (!place.geometry) {
      window.alert("No details available for input: '" + place.name + "'");
      return;
    }

    marker.setPosition(place.geometry.location);
    document.getElementById(latitudeId).value = place.geometry.location.lat();
    document.getElementById(longitudeId).value = place.geometry.location.lng();
    document.getElementById(searchBoxId).value = place.formatted_address;
    map.setCenter(place.geometry.location);
    map.setZoom(15);
  });

  document.getElementById(latitudeId).addEventListener('change', () => {
    const lat = parseFloat(document.getElementById(latitudeId).value);
    const lng = parseFloat(document.getElementById(longitudeId).value);
    const position = { lat, lng };
    marker.setPosition(position);
    map.setCenter(position);
    reverseGeocode(position, searchBoxId);
  });

  document.getElementById(longitudeId).addEventListener('change', () => {
    const lat = parseFloat(document.getElementById(latitudeId).value);
    const lng = parseFloat(document.getElementById(longitudeId).value);
    const position = { lat, lng };
    marker.setPosition(position);
    map.setCenter(position);
    reverseGeocode(position, searchBoxId);
  });
}

function reverseGeocode(position, searchBoxId) {
  const geocoder = new google.maps.Geocoder();
  geocoder.geocode({
    location: position
  }, (results, status) => {
    if (status === "OK") {
      if (results[0]) {
        document.getElementById(searchBoxId).value = results[0].formatted_address;
      } else {
        window.alert("No results found");
      }
    } else {
      window.alert("Geocoder failed due to: " + status);
    }
  });
}

window.addEventListener("load", () => {
  initMap("map-add", "addpinlocation", "pin-latitude-add", "pin-longitude-add");
  initMap("map-edit", "editpinlocation", "pin-latitude-edit", "pin-longitude-edit");
});
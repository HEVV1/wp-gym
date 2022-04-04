document.addEventListener('DOMContentLoaded', () => {
  const lat = jQuery('#lat').val();
  const lng = jQuery('#lng').val();
  const address = jQuery('#address').val();

  var map = L.map('map').setView([lat, lng], 16);
  if (lat && lng) {
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([lat, lng]).addTo(map)
      .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
      .openPopup();
  }
});
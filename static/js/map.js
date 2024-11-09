let map;
let marker;

function initMap(lat = -23.5505, lon = -46.6333) {
    map = L.map('map').setView([lat, lon], 12);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    marker = L.marker([lat, lon]).addTo(map);
}

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(sendLocation, handleError, { enableHighAccuracy: true });
    } else {
        alert("Geolocalização não é suportada por este navegador.");
    }
}

function handleError(error) {
    switch (error.code) {
        case error.PERMISSION_DENIED:
            alert("Usuário negou a solicitação de geolocalização.");
            break;
        case error.POSITION_UNAVAILABLE:
            alert("Posição indisponível.");
            break;
        case error.TIMEOUT:
            alert("O tempo para obter a localização expirou.");
            break;
        default:
            alert("Erro desconhecido ao tentar obter a localização.");
            break;
    }
}

function sendLocation(position) {
    const latitude = position.coords.latitude;
    const longitude = position.coords.longitude;

    fetch('/get_location', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            latitude: latitude,
            longitude: longitude
        })
    })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                updateMap(data.latitude, data.longitude);
            } else {
                alert('Erro ao enviar a localização.');
            }
        })
        .catch(error => {
            console.error('Erro:', error);
            alert('Erro ao enviar a localização.');
        });
}

function updateMap(lat, lon) {
    map.setView([lat, lon], 12);
    marker.setLatLng([lat, lon]);
}

initMap();

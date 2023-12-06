// overlay.js

function showOverlay() {
    document.body.classList.add('overlay-open');
    document.getElementById('titleOverlay').classList.add('show');
}

function hideOverlay() {
    document.body.classList.remove('overlay-open');
    document.getElementById('titleOverlay').classList.remove('show');
}

document.getElementById('titleOverlay').addEventListener('click', hideOverlay);

document.getElementById('titleOverlay').querySelector('div').addEventListener('click', function (event) {
    event.stopPropagation(); // Prevent the click event from reaching the overlay
});

showOverlay();

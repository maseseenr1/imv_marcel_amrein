// overlay.js

// Function to show the overlay
function showOverlay() {
    document.body.classList.add('overlay-open');
    document.getElementById('titleOverlay').classList.add('show');
}

// Function to hide the overlay and start transitions
function hideOverlay() {
    document.body.classList.remove('overlay-open');
    document.getElementById('titleOverlay').classList.remove('show');
}

// Add event listener to close the overlay when clicking anywhere
document.getElementById('titleOverlay').addEventListener('click', hideOverlay);

// Add event listener to prevent closing the overlay when clicking inside the overlay content
document.getElementById('titleOverlay').querySelector('div').addEventListener('click', function (event) {
    event.stopPropagation(); // Prevent the click event from reaching the overlay
});

// Call showOverlay() to display the overlay
showOverlay();

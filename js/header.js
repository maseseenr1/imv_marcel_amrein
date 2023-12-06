document.addEventListener('DOMContentLoaded', function () {
  var header = document.getElementById('header');
  var logo = document.getElementById('logo');

  // Initial styling on page load
  header.style.fontSize = '30px';
  logo.style.height = '90px';

  // Listen for the scroll event
  window.addEventListener('scroll', function () {
    // Check the scroll position using alternative properties
    var scrollPosition = window.scrollY || document.documentElement.scrollTop || document.body.scrollTop;

    // Adjust styling based on scroll position
    if (scrollPosition > 0) {
      header.style.fontSize = '20px';
      logo.style.height = '40px';
    } else {
      header.style.fontSize = '30px';
      logo.style.height = '90px';
    }
  });
});
window.addEventListener('beforeunload', function () {
    window.scrollTo(0, 0);
  });
  
  document.getElementById('scrollToTopBtn').addEventListener('click', function () {
    document.body.scrollTop = 0; /* For Safari */
    document.documentElement.scrollTop = 0; /* For Chrome, Firefox, IE, and Opera */
  });
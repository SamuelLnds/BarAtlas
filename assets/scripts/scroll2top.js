document.addEventListener('DOMContentLoaded', function() {

  const scrollButton = document.querySelector('.back2top');

  function toggleScrollButton() {
      if (window.scrollY > 0) {
          scrollButton.classList.add('show');
      } else {
          scrollButton.classList.remove('show');
      }
  }

  function scrollToTop(event) {
      event.preventDefault();
      window.scrollTo({
          top: 0,
          behavior: "smooth"
      });
  }

  window.addEventListener('scroll', toggleScrollButton);

  scrollButton.addEventListener('click', scrollToTop);

});

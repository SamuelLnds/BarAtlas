document.addEventListener('DOMContentLoaded', function () {
    var carousel = document.querySelector('.slides');
    var slides = Array.from(carousel.children);
    var firstSlideClone = slides[0].cloneNode(true);
    carousel.appendChild(firstSlideClone);

    var currentIndex = 0;
    var totalSlides = slides.length;

    function moveToNextSlide() {
        if (currentIndex === totalSlides) {
            carousel.style.transition = 'none';
            carousel.style.transform = 'translateX(0)';
            currentIndex = 0;

            // Allow time for the transition reset to apply
            setTimeout(() => {
                carousel.style.transition = 'transform 0.3s ease';
                currentIndex++;
                carousel.style.transform = `translateX(-${currentIndex}00%)`;
            }, 20);
        } else {
            currentIndex++;
            carousel.style.transform = `translateX(-${currentIndex}00%)`;
        }
    }

    setInterval(moveToNextSlide, 3000);
});

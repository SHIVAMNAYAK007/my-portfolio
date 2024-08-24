// script.js
document.addEventListener('DOMContentLoaded', function() {
    let slides = document.querySelectorAll('#carousel .slide');
    let currentSlide = 0;

    function showSlide(index) {
        slides[currentSlide].style.display = 'none';
        currentSlide = (index + slides.length) % slides.length;
        slides[currentSlide].style.display = 'block';
    }

    showSlide(currentSlide);

    setInterval(function() {
        showSlide(currentSlide + 1);
    }, 5000);
});

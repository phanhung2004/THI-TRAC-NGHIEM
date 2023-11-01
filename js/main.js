let currentSlide = 0; // Slide hiện tại
const slides = document.querySelectorAll('.carousel-item');
const totalSlides = slides.length;

function showSlide(n) {
    slides[currentSlide].classList.remove('active');
    currentSlide = (n + totalSlides) % totalSlides;
    slides[currentSlide].classList.add('active');
}

function nextSlide() {
    showSlide(currentSlide + 1);
}

function previousSlide() {
    showSlide(currentSlide - 1);
}

function startAutoSlide() {
    setInterval(nextSlide, 1000); // Chuyển slide sau mỗi 3 giây (3000 milliseconds)
}

startAutoSlide();
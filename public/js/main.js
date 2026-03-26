let currentSlide = 0;

function getSlides() {
    return document.querySelectorAll('.product-slide');
}

function getDots() {
    return document.querySelectorAll('.slider-dot');
}

function showSlide(index) {
    const slides = getSlides();
    const dots = getDots();

    if (!slides.length) return;

    if (index < 0) index = slides.length - 1;
    if (index >= slides.length) index = 0;

    slides.forEach(slide => slide.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));

    slides[index].classList.add('active');
    if (dots[index]) dots[index].classList.add('active');

    currentSlide = index;
}

function changeSlide(step) {
    showSlide(currentSlide + step);
}

function goToSlide(index) {
    showSlide(index);
}

setInterval(() => {
    changeSlide(1);
}, 6000);

let slideIndex = 0;
const slideInterval = 5000; // Интервал смены слайдов в миллисекундах

function showSlides() {
    const slides = document.querySelector('.slides');
    const slideCount = document.querySelectorAll('.slide').length;
    slides.style.transform = `translateX(-${slideIndex * 100 / slideCount}%)`;
    slideIndex = (slideIndex + 1) % slideCount;
    setTimeout(showSlides, slideInterval); // Изменяем слайд через установленный интервал
}

showSlides();

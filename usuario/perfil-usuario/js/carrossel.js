let currentIndex = 0;

function showSlide(index) {
    const carouselWrapper = document.querySelector('.carousel-wrapper');
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;

    if (index < 0) {
        currentIndex = totalSlides - 1;
    } else if (index >= totalSlides) {
        currentIndex = 0;
    } else {
        currentIndex = index;
    }

    const translateValue = -currentIndex * 100 + '%';
    carouselWrapper.style.transform = 'translateX(' + translateValue + ')';
}

function prevSlide() {
    showSlide(currentIndex - 1);
}

function nextSlide() {
    showSlide(currentIndex + 1);
}

// Automação de slides (opcional)
setInterval(() => {
    nextSlide();
}, 7000); // Muda de slide a cada 3 segundos (ajuste conforme necessário)
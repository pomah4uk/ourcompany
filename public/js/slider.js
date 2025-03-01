document.addEventListener('DOMContentLoaded', function() {
    const slider = document.getElementById('reviewsSlider');
    const slides = slider.children;
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');
    const dots = document.querySelectorAll('.slider-dot');
    
    let currentSlide = 0;
    const slidesToShow = window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
    const slideWidth = 100 / slidesToShow;
    
    Array.from(slides).forEach(slide => {
        slide.style.width = `${slideWidth}%`;
    });

    function updateSlider() {
        slider.style.transform = `translateX(-${currentSlide * slideWidth}%)`;
        
        dots.forEach((dot, index) => {
            dot.classList.toggle('bg-blue-500', index === currentSlide);
        });
    }

    prevButton.addEventListener('click', () => {
        currentSlide = Math.max(currentSlide - 1, 0);
        updateSlider();
    });

    nextButton.addEventListener('click', () => {
        currentSlide = Math.min(currentSlide + 1, slides.length - slidesToShow);
        updateSlider();
    });

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentSlide = index;
            updateSlider();
        });
    });

    window.addEventListener('resize', () => {
        const newSlidesToShow = window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
        if (newSlidesToShow !== slidesToShow) {
            location.reload();
        }
    });
}); 
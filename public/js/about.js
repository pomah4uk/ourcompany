document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.counter');
    const speed = 200;

    const animateCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
        const increment = target / speed;

        if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(() => animateCounter(counter), 1);
        } else {
            counter.innerText = target;
        }
    };

    // Функция для проверки видимости элемента
    const isElementInViewport = (el) => {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    };

    // Запуск анимации при прокрутке
    let animated = false;
    window.addEventListener('scroll', () => {
        if (!animated && counters.length > 0 && isElementInViewport(counters[0])) {
            counters.forEach(counter => animateCounter(counter));
            animated = true;
        }
    });

    // Анимация для feature-items
    const featureItems = document.querySelectorAll('.feature-item');
    featureItems.forEach(item => {
        item.addEventListener('mouseenter', () => {
            item.classList.add('scale-105');
        });
        item.addEventListener('mouseleave', () => {
            item.classList.remove('scale-105');
        });
    });
}); 
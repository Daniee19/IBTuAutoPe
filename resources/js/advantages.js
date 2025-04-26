document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.getElementById('carousel');
    const template = document.getElementById('logo-template');

    for (let i = 0; i < 3; i++) {
        carousel.append(...template.content.cloneNode(true).children);
    }

    let scrollSpeed = 1;
    let resetPoint = carousel.scrollWidth / 3;

    function autoScroll() {
        carousel.scrollLeft += scrollSpeed;
        if (carousel.scrollLeft >= resetPoint * 2) {
            carousel.scrollLeft = 0;
        }
        requestAnimationFrame(autoScroll);
    }

    autoScroll();
});

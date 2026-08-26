const slides = Array.from(document.querySelectorAll(".carousel_list-item"));
const dots = Array.from(document.querySelectorAll(".carousel_indicator"));

let current = 0

function showSlide(index) {
    slides.forEach((slide, i) => {
       const isActive = i === index;
        slide.classList.toggle("current-slide", isActive);
        slide.classList.toggle("opacity-100", isActive);
        slide.classList.toggle("opacity-0", !isActive);
        slide.classList.toggle("pointer-events-none", !isActive);
    });

    dots.forEach((dot, i) => {
        dot.classList.toggle("bg-neonyellow", i === index);
    });

    current = index;
}

dots.forEach((dot, i) => {
    dot.addEventListener('click', () => showSlide(i));
});

showSlide(0);
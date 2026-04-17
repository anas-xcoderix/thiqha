const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');

let current = 0;
let interval;

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.remove('opacity-100');
        slide.classList.add('opacity-0');

        dots[i].classList.remove('w-[114px]', 'bg-[#20395D]');
        dots[i].classList.add('w-5', 'bg-white');
    });

    slides[index].classList.remove('opacity-0');
    slides[index].classList.add('opacity-100');

    dots[index].classList.remove('w-5', 'bg-white');
    dots[index].classList.add('w-[114px]', 'bg-[#20395D]');

    current = index;
}

dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        showSlide(index);
        resetAutoSlide();
    });
});

/*
function autoSlide() {
    interval = setInterval(() => {
        let next = (current + 1) % slides.length;
        showSlide(next);
    }, 4000);
}
*/

function resetAutoSlide() {
    clearInterval(interval);
    // autoSlide();
}

showSlide(0);
// autoSlide();

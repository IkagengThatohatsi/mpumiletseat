/* =========================================
   WORK PAGE SLIDESHOW
========================================= */

const slides = document.querySelectorAll(".slide");
const nextSlide = document.getElementById("nextSlide");
const prevSlide = document.getElementById("prevSlide");
const slideDots = document.querySelectorAll(".slide-dot");
const currentSlide = document.getElementById("currentSlide");

if (slides.length > 0) {

    let slideIndex = 0;
    let slideTimer;


    function showSlide(index) {

        if (index >= slides.length) {
            slideIndex = 0;
        } else if (index < 0) {
            slideIndex = slides.length - 1;
        } else {
            slideIndex = index;
        }


        slides.forEach((slide, index) => {
            slide.classList.toggle(
                "active",
                index === slideIndex
            );
        });


        slideDots.forEach((dot, index) => {
            dot.classList.toggle(
                "active",
                index === slideIndex
            );
        });


        currentSlide.textContent =
            String(slideIndex + 1).padStart(2, "0");
    }


    function next() {
        showSlide(slideIndex + 1);
        resetTimer();
    }


    function previous() {
        showSlide(slideIndex - 1);
        resetTimer();
    }


    function startTimer() {
        slideTimer = setInterval(() => {
            showSlide(slideIndex + 1);
        }, 5000);
    }


    function resetTimer() {
        clearInterval(slideTimer);
        startTimer();
    }


    if (nextSlide) {
        nextSlide.addEventListener("click", next);
    }


    if (prevSlide) {
        prevSlide.addEventListener("click", previous);
    }


    slideDots.forEach((dot) => {

        dot.addEventListener("click", () => {

            const index = Number(dot.dataset.slide);

            showSlide(index);
            resetTimer();

        });

    });


    showSlide(0);
    startTimer();

}
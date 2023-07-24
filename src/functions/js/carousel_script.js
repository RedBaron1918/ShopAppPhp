let slides = document.querySelectorAll(".carousel .slide");
let currentSlide = 0;

setInterval(function() {
  slides[currentSlide].classList.remove("active");
  currentSlide = (currentSlide + 1) % slides.length;
  slides[currentSlide].classList.add("active");
}, 3000);
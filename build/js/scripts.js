// Custom Scripts
const windowInnerWidth = window.innerWidth;

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 2,
  spaceBetween: 20,
  slidesPerGroup: 1,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".portfolio-next",
    prevEl: ".portfolio-prev",
  },
});

var swiper = new Swiper(".hideswiper", {
  slidesPerView: 1,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: ".portfolio-next",
    prevEl: ".portfolio-prev",
  },
});



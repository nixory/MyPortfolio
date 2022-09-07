// Custom Scripts
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

$('#work1').hide();
$(".portfolio-btn").click(function() {
  $(".portfolio-btn").toggleClass("modals-aktiv"),
	  $('#work1').show()
});
$("#exit").click(function() {
	$('#work1').hide();
});

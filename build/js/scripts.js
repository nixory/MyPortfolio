// Custom Scripts
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 2,
  spaceBetween: 20,
  slidesPerGroup: 1,
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

$('#work1, #work2').hide();
$(".portfolio-btn__1").click(function() {
	$('#work1').show();
});
$(".portfolio-btn__2").click(function() {
	$('#work2').show();
});
$("#exit").click(function() {
	$('#work1').hide();
});
$("#exit2").click(function() {
	$('#work2').hide();
});


const screenWidth = window.screen.width;

if (screenWidth <= 810) {
  
  $('#logo').click(function() {
    // $('.header-wrapper ul').removeClass("header-nav");
    $('#modalexit').addClass('activeicon');
    $('.header-wrapper ul').toggleClass('active');
    
  });
}
else{
  console.log('33')
}
if (screenWidth > 810) {
  
  $('#modalexit').removeClass('activeicon');
  $('.header-wrapper ul').removeClass('active');

}
else{
  console.log('34')
}

$("#modalexit, #howcanihelpbtn, #portfoliobtn, #aboutmebtn, #contactsbtn").click(function() {
	$('.header-wrapper ul').toggleClass('active');
  $('#modalexit').removeClass('activeicon');
});


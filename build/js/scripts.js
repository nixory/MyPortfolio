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
  loop: false,
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

$("#eng").click(function() {
  console.log('22')
  document.getElementById("eng").innerHTML = "RU";
  $('#eng').toggleClass('ru');
  if(document.querySelector("#eng").classList.contains("ru"))
  {
    document.getElementById("howcanihelpbtn").innerHTML = "What I do";
    document.getElementById("portfoliobtn").innerHTML = "My portfolio";
    document.getElementById("aboutmebtn").innerHTML = "About me";
    document.getElementById("contactsbtn").innerHTML = "Contacts";
    document.getElementById("hi").innerHTML = "Hi!";
    document.getElementById("my name").innerHTML = "My name is <span class=&quot;welcome-text__name-o&quot;>Nickita</span>,";
    document.getElementById("developer").innerHTML = "<span class=&quot;welcome-text__who-o&quot;>I</span> - website developer.";
    document.getElementById("forwho").innerHTML = "This site was created specifically for customers";
    document.getElementById("writeme").innerHTML = "Write me";
    document.getElementById("myskills").innerHTML = "My skills:";
    document.getElementById("myhelp").innerHTML = "What I do";
    document.getElementById("whatido").innerHTML = "I develop landing page sites, business card sites. I can help you refine, tweak your site, make adaptive site layout, so that the site works equally on all devices, I can optimize sites. Unfortunately, I am not able to make complex projects or online stores yet. In any case, if you have an idea, a task, a problem, or you just need to make a site - contact me, I will try to help you!";
    document.getElementById("porfo").innerHTML = "Portfolio";
    document.getElementById("btn3").innerHTML = "More info";
    document.getElementById("btn4").innerHTML = "More info";
    document.getElementById("btn5").innerHTML = "More info";
    document.getElementById("btn2").innerHTML = "More info";
    document.getElementById("btn6").innerHTML = "Go to website";
    document.getElementById("hours").innerHTML = "Did site +- 48 hours";
    document.getElementById("title1").innerHTML = "Development of the logistics website “Globalopt”";
    document.getElementById("task").innerHTML = "Task:";
    document.getElementById("taskadv").innerHTML = "It was necessary to convert the site from the curve PSD layout (it didnt open in Photoshop), using pixel perfect technique (this is when the site is identical to the layout pixel to pixel) to HTML/CSS/JS. Just had to add to the site interactivity (active modal windows, animations), sliders, as well as make adaptive layout (adaptation of the site for all possible devices).";
    document.getElementById("solution").innerHTML = "Solution:";
    document.getElementById("solutionadv").innerHTML = "I was able to open the layout in Avocode. I was able to create a site using the pixel perfect technique using an extension in Chrome. Thanks to Swiper js - made interactive sliders on the site. Made adaptation of the site. Just as a bonus to all - optimized the site: compressed all the graphics (except for icons svg format) and changed the type of graphics on the webp (a more modern type of graphics), fixed all the shortcomings that gave Google PageSpeed Insights.";
    document.getElementById("btn7").innerHTML = "Go to website";
    document.getElementById("hours2").innerHTML = "Did site +- 48 hours";
    document.getElementById("title2").innerHTML = "Development of the packaging production website “Good Cardboard”";
    document.getElementById("task1").innerHTML = "Task:";
    document.getElementById("task2").innerHTML = "It was necessary to convert a site with PSD layout to HTML/CSS/SASS/JS, adapt it, connect two maps of Google maps and configure them, make a slider with blackout pictures are not active, to optimize the site.";
    document.getElementById("solution1").innerHTML = "Solution:";
    document.getElementById("solutionadv1").innerHTML = "Made the site using Pixel Perfect technology, added a modal window, added two Google Maps and configured them (this was the most difficult for me, because I was dealing with this for the first time), using Swiper js made the necessary sliders, adapted the site to all devices, as well as properly optimized the site.";
    document.getElementById("boutme").innerHTML = "About me";
    document.getElementById("specialty").innerHTML = "Front-end developer";
    document.getElementById("nameSurname").innerHTML = "Name, Surname";
    document.getElementById("myNameSurname").innerHTML = "Nickita Stepanovs";
    document.getElementById("age").innerHTML = "Age:";
    document.getElementById("myAge").innerHTML = "19 years";
    document.getElementById("education").innerHTML = "Education:";
    document.getElementById("myEducation").innerHTML = "Secondary (12th grade), studied at Glo Academy, currently studying at TSI majoring in Computer Science.";
    document.getElementById("exp").innerHTML = "Experience:";
    document.getElementById("myExp").innerHTML = "In the field of web programming for a year, at most did their own training projects.";
    document.getElementById("country").innerHTML = "Country of residence:";
    document.getElementById("myCountry").innerHTML = "Latvia, Riga.";
    document.getElementById("contact").innerHTML = "Contact with me";
    document.querySelector(".contactme__input").placeholder = "Your Email:";
    document.querySelector(".contactme__input-o").placeholder = "Your Message:";
    document.getElementById("submit").innerHTML = "Sumbit";
    document.getElementById("myContacts").innerHTML = "Contacts";
    document.getElementById("hidentext").innerHTML = "Click on the logo to open the menu";
  }
  else {
    document.getElementById("eng").innerHTML = "ENG";
    document.getElementById("howcanihelpbtn").innerHTML = "Чем я полезен";
    document.getElementById("portfoliobtn").innerHTML = "Моё портфолио";
    document.getElementById("aboutmebtn").innerHTML = "Обо мне";
    document.getElementById("contactsbtn").innerHTML = "Контакты";
    document.getElementById("hi").innerHTML = "Привет!";
    document.getElementById("my name").innerHTML = "Меня зовут <span class=&quot;welcome-text__name-o&quot;>Никита</span>,";
    document.getElementById("developer").innerHTML = "<span class=&quot;welcome-text__who-o&quot;>Я</span> - разработчик сайтов.";
    document.getElementById("forwho").innerHTML = "Данный сайт создан специально для заказчиков";
    document.getElementById("writeme").innerHTML = "Написать мне";
    document.getElementById("myskills").innerHTML = "Мои умения:";
    document.getElementById("myhelp").innerHTML = "Чем я полезен";
    document.getElementById("whatido").innerHTML = "Я разрабатываю landing page сайты, сайты визитки. Могу помочь вам доработать, подкорректировать ваш сайт, сделать адаптивный вёрстку сайта, чтобы сайт одинаково работал на всех устройствах, умею оптимизировать сайты. К сожалению интернет магазины или сложные проекты делать еще пока не умею. В любом случае, если у вас есть идея, задача, проблема, либо вам нужно просто сделать сайт - напишите мне, я постораюсь вам помочь!";
    document.getElementById("porfo").innerHTML = "Портфолио";
    document.getElementById("btn3").innerHTML = "Подробнее";
    document.getElementById("btn2").innerHTML = "Подробнее";
    document.getElementById("btn4").innerHTML = "Подробнее";
    document.getElementById("btn5").innerHTML = "Подробнее";
    document.getElementById("btn6").innerHTML = "Перейти на сайт";
    document.getElementById("hours").innerHTML = "Делал сайт +- 48 часов";
    document.getElementById("title1").innerHTML = "Разработка сайта по логистике из Китая “Globalopt”";
    document.getElementById("task").innerHTML = "Задача:";
    document.getElementById("taskadv").innerHTML = "Нужно было сверстать сайт с кривово PSD макета(он не открывался в программе Photoshop), использую технику pixel perfect (это когда сайт идентичен макету пиксель в пиксель). Так же нужно было добавить на сайт интерактив (активные модальные окна, анимации), слайдеры, а так же сделать адаптивную вёрстку(адаптация сайта под все возможные устройства).";
    document.getElementById("solution").innerHTML = "Решение:";
    document.getElementById("solutionadv").innerHTML = "Смог открыть макет в программе Avocode. Сверстал сайт по технике pixel perfect с помощью расширения в браузере Chrome. Благодоря Swiper js сделал интерактивные слайдеры на сайте. Сделал адаптацию сайта. Так же бонусом ко всему - оптимизировал сайт: сжал всю графику(кроме иконок svg формата) и изменил тип графики на webp (более современный тип графики), починил все недочёты, которые выдал Google PageSpeed Insights.";
    document.getElementById("btn7").innerHTML = "Перейти на сайт";
    document.getElementById("hours2").innerHTML = "Делал сайт +- 32 часов";
    document.getElementById("title2").innerHTML = "Разработка сайта по производству упаковок “Добрый Картон”";
    document.getElementById("task1").innerHTML = "Задача:";
    document.getElementById("task2").innerHTML = "Нужно сверстать сайт с PSD макета, адаптировать, подключить две карты Google maps и настроить их, сделать слайдер с затемнением не активных картинок, оптимизировать сайт.";
    document.getElementById("solution1").innerHTML = "Решение:";
    document.getElementById("solutionadv1").innerHTML = "Сверстал сайт применяя технологию Pixel Perfect, добавил модальное окно, добавил две Google карты и настроил их (это был самый сложный для меня этап, так как сталкулся с этим в первые), с помощью Swiper js сделал нужные слайдеры, адаптировал сайт под все устройства, а так же правильно оптимизировал сайт.";
    document.getElementById("boutme").innerHTML = "Обо мне";
    document.getElementById("specialty").innerHTML = "Front-end разработчик";
    document.getElementById("nameSurname").innerHTML = "Имя, Фамилия:";
    document.getElementById("myNameSurname").innerHTML = "Никита Степанов";
    document.getElementById("age").innerHTML = "Возвраст:";
    document.getElementById("myAge").innerHTML = "19 лет";
    document.getElementById("education").innerHTML = "Образование:";
    document.getElementById("myEducation").innerHTML = "Среднее (12 классов), обучался в Glo Academy, в данный момент учусь в институте TSI специальность “Компьютерные науки”.";
    document.getElementById("exp").innerHTML = "Опыт:";
    document.getElementById("myExp").innerHTML = "В сфере веб программирования уже год, максимум делал свои учебные проекты.";
    document.getElementById("country").innerHTML = "Страна проживания:";
    document.getElementById("myCountry").innerHTML = "Латвия, Рига.";
    document.getElementById("contact").innerHTML = "Связаться со мной";
    document.querySelector(".contactme__input").placeholder = "Ваш Email:";
    document.querySelector(".contactme__input-o").placeholder = "Ваше сообщение:";
    document.getElementById("submit").innerHTML = "Отправить";
    document.getElementById("myContacts").innerHTML = "Контакты";
    document.getElementById("hidentext").innerHTML = "Кликни на лого, чтобы открыть меню";
}
  
})

$("#blackmoon").click(function() {
  
  $(".main__body").toggleClass("dark-mode");
});


function send(event, php){
  console.log("Отправка запроса");
  event.preventDefault ? event.preventDefault() : event.returnValue = false;
  var req = new XMLHttpRequest();
  req.open('POST', php, true);
  req.onload = function() {
    if (req.status >= 200 && req.status < 400) {
    json = JSON.parse(this.response); // Ебанный internet explorer 11
        console.log(json);
          
        // ЗДЕСЬ УКАЗЫВАЕМ ДЕЙСТВИЯ В СЛУЧАЕ УСПЕХА ИЛИ НЕУДАЧИ
        if (json.result == "success") {
          // Если сообщение отправлено
          alert("Сообщение отправлено");
        } else {
          // Если произошла ошибка
          alert("Ошибка. Сообщение не отправлено");
        }
      // Если не удалось связаться с php файлом
      } else {alert("Ошибка сервера. Номер: "+req.status);}}; 
  
  // Если не удалось отправить запрос. Стоит блок на хостинге
  req.onerror = function() {alert("Ошибка отправки запроса");};
  req.send(new FormData(event.target));
  }

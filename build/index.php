<?php

    // Subscribe my channel if you are using this code
    // Subscribe my channel if you are using this code
    // Subscribe my channel if you are using this code
    // Subscribe my channel if you are using this code
    // Subscribe my channel if you are using this code


    use PHPMailer\PHPMailer\PHPMailer;
    
    function sendmail(){
        
        $name = "Portfolio";  // Name of your website or yours
        $to = "nikitastepanovs777@gmail.com";  // mail of reciever
        $subject = "Message from portfolio";
        $text = $_GET['text'];
        $email = $_GET['email'];
        $body = "
        <h2>New message</h2>
        <b>Email:</b> $email<br><br>
        <b>Message:</b><br>$text
        ";
        $from = "knowex228@gmail.com";  // you mail
        $password = "ptnbdxyykefpyjeg";  // your mail password

        // Ignore from here

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
        $mail = new PHPMailer();

        // To Here

        //SMTP Settings
        $mail->isSMTP();
        // $mail->SMTPDebug = 3;  Keep It commented this is used for debugging                          
        $mail->Host = "smtp.gmail.com"; // smtp address of your email
        $mail->SMTPAuth = true;
        $mail->Username = $from;
        $mail->Password = $password;
        $mail->Port = 587;  // port
        $mail->SMTPSecure = "tls";  // tls or ssl
        $mail->smtpConnect([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            ]
        ]);

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($from, $name);
        $mail->addAddress($to); // enter email address whom you want to send
        $mail->Subject = ("$subject");
        $mail->Body = $body;
        if ($mail->send()) {
            header("Location: sent-email.html");
        } else {
            echo "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }
    }


        // sendmail();  // call this function when you want to

        if (isset($_GET['sendmail'])) {
            sendmail();
        }
?>


<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="theme-color" content="white" />
    <meta name="msapplication-navbutton-color" content="white" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="white" />
    <!-- Primary Meta Tags -->
    <title>Nixory - Website developer | Разработчик сайтов</title>
    <meta name="title" content="Nixory - Website developer | Разработчик сайтов">
    <meta name="description" content="I develop websites, qualitatively and quickly, which can bring the maximum conversion rate to you. Разрабатываю сайты на заказ качественно и быстро, которые смогут вам принести максимум конверсий.">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://nixory.xyz/">
    <meta property="og:title" content="Nixory - Website developer | Разработчик сайтов">
    <meta property="og:description" content="I develop websites, qualitatively and quickly, which can bring the maximum conversion rate to you. Разрабатываю сайты на заказ качественно и быстро, которые смогут вам принести максимум конверсий.">
    <meta property="og:image" content="./img/image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://nixory.xyz/">
    <meta property="twitter:title" content="Nixory - Website developer | Разработчик сайтов">
    <meta property="twitter:description" content="I develop websites, qualitatively and quickly, which can bring the maximum conversion rate to you. Разрабатываю сайты на заказ качественно и быстро, которые смогут вам принести максимум конверсий.">
    <meta property="twitter:image" content="./img/image.png">
    <meta name="robots" content="index, nofollow" />
    <meta name="yandex" content="noyaca" />
    <meta name="google" content="all" />
    <link rel="icon" type="image/png" href="./img/icons/icon.png">
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
      href="https://fonts.googleapis.com/css2?family=Graduate&family=Raleway:wght@200;300;400;500;600;700&family=Red+Hat+Display:wght@300&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/aos.css">
    <link
      href="./css/style.css"
      rel="stylesheet"
      media="(prefers-color-scheme: dark),(prefers-color-scheme: no-preference), (prefers-color-scheme: light)"
    />
  </head>
  <body class="main__body">
    <div class="header">
      <div class="container">
        <div class="header-navbar">
          <img alt="" id="modalexit" src="img/icons/exiticon.png" />
          <div class="header-logotext" id="logo">
            <div class="header-logo">Nixory</div>
            <div class="header-logo__hidetext" id="hidentext">
              Кликни на лого, чтобы открыть меню
            </div>
          </div>
          <div class="header-wrapper">
            <ul class="header-nav">
              <li class="header-nav__item">
                <a
                  class="header-nav__item-link"
                  href="#howcanihelp"
                  id="howcanihelpbtn"
                  >Чем&nbsp;я&nbsp;полезен</a
                >
              </li>
              <li class="header-nav__item">
                <a
                  class="header-nav__item-link"
                  href="#portfolio"
                  id="portfoliobtn"
                  >Моё&nbsp;портфолио</a
                >
              </li>
              <li class="header-nav__item">
                <a class="header-nav__item-link" href="#aboutme" id="aboutmebtn"
                  >Обо&nbsp;мне</a
                >
              </li>
              <li class="header-nav__item">
                <a
                  class="header-nav__item-link"
                  href="#contacts"
                  id="contactsbtn"
                  >Контакты</a
                >
              </li>
            </ul>
            <div class="header-links">
              <a
                class="header-link"
                href="https://www.instagram.com/eternalxxsleep/"
                ><img
                  alt="instagram"
                  class="header-link__img"
                  src="img/icons/Vectorinstagram.svg" /></a
              ><a class="header-link" href="https://github.com/nixory"
                ><img
                  alt="github"
                  class="header-link__img"
                  src="img/icons/Vectorgithub.svg" /></a
              ><a class="header-link" href="mailto:nikitastepanovs777@gmail.com"
                ><img
                  alt="email"
                  class="header-link__img"
                  src="img/icons/Vectoremail.svg"
              /></a>
              <!-- <a href="#" class="language">eng</a> -->
              <div class="english" id="eng" style="text-decoration: underline">ENG</div>
              <!-- <div class="theme"><img src="img/blackmoon.jpg" alt="" style="width: 40%; cursor:pointer;" id="blackmoon"></div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="welcome">
      <div class="container">
        <div class="welcome-wrapper">
          <div class="welcome-text">
            <h2 class="welcome-text__hi" id="hi">Привет!</h2>
            <h1 class="welcome-text__name" id="my name">
              Меня зовут <span class="welcome-text__name-o">Никита</span>,
            </h1>
            <h3 class="welcome-text__who" id="developer">
              <span class="welcome-text__who-o">Я</span> - разработчик сайтов.
            </h3>
            <div class="welcome-text__forwhosite" id="forwho">
              Данный сайт создан специально для заказчиков
            </div>
            <form
              action="http://localhost:3001/index#contacts"
              method="get"
              style="display: inline; color: white"
            >
              <button
                class="welcome__btn btn"
                style="color: white"
                id="writeme"
              >
                Написать мне
              </button>
            </form>
          </div>
          <div class="welcome-img">
            <img alt="" src="img/Programming-amico%201.svg" />
          </div>
        </div>
      </div>
    </section>
    <section class="skills" data-aos="fade-up">
      <div class="container">
        <div class="skills-wrapper">
          <h4 class="skills-title title" id="myskills">Мои умения:</h4>
          <ul class="skills-pool">
            <li class="skills-pool__item">
              <span class="skills-pool__item-o">1.</span>HTML
            </li>
            <li class="skills-pool__item">
              <span class="skills-pool__item-o">2.</span>CSS
            </li>
            <li class="skills-pool__item">
              <span class="skills-pool__item-o">3.</span>SASS
            </li>
            <li class="skills-pool__item">
              <span class="skills-pool__item-o">4.</span>JavaScript
            </li>
            <li class="skills-pool__item">
              <span class="skills-pool__item-o">5.</span>Git
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="howcanihelp" id="howcanihelp" data-aos="fade-up">
      <div class="container">
        <div class="wrapper">
          <h4 class="howcanihelp-title title" id="myhelp">Чем я полезен</h4>
          <div class="howcanihelp-wrapper">
            <div class="howcanihelp-desc" id="whatido">
              Я разрабатываю landing page сайты, сайты визитки. Могу помочь вам
              доработать, подкорректировать ваш сайт, сделать адаптивный вёрстку
              сайта, чтобы сайт одинаково работал на всех устройствах, умею
              оптимизировать сайты. К сожалению интернет магазины или сложные
              проекты делать еще пока не умею. В любом случае, если у вас есть
              идея, задача, проблема, либо вам нужно просто сделать сайт -
              напишите мне, я постораюсь вам помочь!
            </div>
            <div class="howcanihelp-img">
              <img alt="" src="img/Code%20typing-bro%201.svg" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h4 class="portfolio-title title" id="porfo">Портфолио</h4>
        <div class="portfolio-wrapper">
          <div class="swiper mySwiper portfolioswiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="portfolio-img__bgc" id="bg2"></div>
                <img
                  alt=""
                  class="portfolio-img"
                  src="img/Rectangle%201firstwoprk.webp"
                />
                <button class="portfolio-btn portfolio-btn__1 btn" id="btn2">
                  Подробнее
                </button>
              </div>
              <div class="swiper-slide">
                <div class="portfolio-img__bgc"></div>
                <img
                  alt=""
                  class="portfolio-img"
                  src="img/Rectangle%202secondwork.webp"
                />
                <button class="portfolio-btn portfolio-btn__2 btn" id="btn4">
                  Подробнее
                </button>
              </div>
            </div>
          </div>
          <div class="swiper mySwiper hideswiper">
            <div class="swiper-wrapper hideswiper-wrapper">
              <div class="swiper-slide hideswiper-slide">
                <div class="portfolio-img__bgc" id="bg1"></div>
                <img
                  alt=""
                  class="portfolio-img"
                  src="img/Rectangle%201firstwoprk.webp"
                />
                <button class="portfolio-btn portfolio-btn__1 btn" id="btn3">
                  Подробнее
                </button>
              </div>
              <div class="swiper-slide hideswiper-slide">
                <div class="portfolio-img__bgc"></div>
                <img
                  alt=""
                  class="portfolio-img"
                  src="img/Rectangle%202secondwork.webp"
                />
                <button class="portfolio-btn portfolio-btn__2 btn" id="btn5">
                  Подробнее
                </button>
              </div>
            </div>
          </div>
          <div class="portfolio-next"></div>
          <div class="portfolio-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="portfolio-work1" id="work1" data-aos="zoom-in">
          <img alt="" id="exit" src="img/icons/mdi_exit-to-app.svg" />
          <div class="portfolio-work1__wrapper">
            <div class="portfolio-work1__desc">
              <img
                alt=""
                class="portfolio-work1__img"
                src="img/Rectangle%202firstwork.webp"
              />
              <span class="portfolio-work1__hours" id="hours"
                >Делал сайт +- 48 часов</span
              >
              <form
                action="https://nixory.github.io/globalopt/build/"
                method="get"
                style="display: inline; align-self: flex-start"
                target="_blank"
              >
                <button class="portfolio-work1__btn btn" id="btn6">
                  Перейти на сайт
                </button>
              </form>
            </div>
            <div class="portfolio-work1__text" >
              <div class="portfolio-work1__title" id="title1">
                Разработка сайта по логистике из Китая “Globalopt”
              </div>
              <div class="portfolio-work1__tasks">
                <span class="portfolio-work1__task" id="task">Задача:</span>
                <div class="portfolio-work1__taskadv" id="taskadv">
                  Нужно было сверстать сайт с кривово PSD макета(он не
                  открывался в программе Photoshop), использую технику pixel
                  perfect (это когда сайт идентичен макету пиксель в пиксель).
                  Так же нужно было добавить на сайт интерактив (активные
                  модальные окна, анимации), слайдеры, а так же сделать
                  адаптивную вёрстку(адаптация сайта под все возможные
                  устройства).
                </div>
              </div>
              <div class="portfolio-work1__decisions">
                <span class="portfolio-work1__decision" id="solution"
                  >Решение:</span
                >
                <div class="portfolio-work1__taskadv" id="solutionadv">
                  Смог открыть макет в программе Avocode. Сверстал сайт по
                  технике pixel perfect с помощью расширения в браузере Chrome.
                  Благодоря Swiper js сделал интерактивные слайдеры на сайте.
                  Сделал адаптацию сайта. Так же бонусом ко всему -
                  оптимизировал сайт: сжал всю графику(кроме иконок svg формата)
                  и изменил тип графики на webp (более современный тип графики),
                  починил все недочёты, которые выдал Google PageSpeed Insights.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="portfolio-work1 portfolio-work2" id="work2">
          <img alt="" id="exit2" src="img/icons/mdi_exit-to-app.svg" />
          <div class="portfolio-work1__wrapper">
            <div class="portfolio-work1__desc">
              <img
                alt=""
                class="portfolio-work1__img"
                src="img/Rectangle%2022firstwoprk.webp"
              />
              <span class="portfolio-work1__hours" id="hours2"
                >Делал сайт +- 32 часа</span
              >
              <form
                action="https://nixory.github.io/Good-cardboard/build/"
                method="get"
                style="display: inline; align-self: flex-start"
                target="_blank"
              >
                <button class="portfolio-work1__btn btn" id="btn7">
                  Перейти на сайт
                </button>
              </form>
            </div>
            <div class="portfolio-work1__text">
              <div
                class="portfolio-work1__title portfolio-work1__title-o"
                id="title2"
              >
                Разработка сайта по производству упаковок “Добрый Картон”
              </div>
              <div class="portfolio-work1__tasks">
                <span class="portfolio-work1__task" id="task1">Задача:</span>
                <div class="portfolio-work1__taskadv" id="task2">
                  Нужно сверстать сайт с PSD макета, адаптировать, подключить
                  две карты Google maps и настроить их, сделать слайдер с
                  затемнением не активных картинок, оптимизировать сайт.
                </div>
              </div>
              <div class="portfolio-work1__decisions">
                <span class="portfolio-work1__decision" id="solution1"
                  >Решение:</span
                >
                <div class="portfolio-work1__taskadv" id="solutionadv1">
                  Сверстал сайт применяя технологию Pixel Perfect, добавил
                  модальное окно, добавил две Google карты и настроил их (это
                  был самый сложный для меня этап, так как сталкулся с этим в
                  первые), с помощью Swiper js сделал нужные слайдеры,
                  адаптировал сайт под все устройства, а так же правильно
                  оптимизировал сайт.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="aboutme" id="aboutme" data-aos="fade-up">
      <div class="container">
        <h4 class="aboutme__title title" id="boutme">Обо мне</h4>
        <div class="aboutme__wrapper">
          <div class="aboutme__text">
            <div class="aboutme__whoami" id="specialty">
              Front-end разработчик
            </div>
            <div class="aboutme__info">
              <div class="aboutme__articul" id="nameSurname">Имя, Фамилия:</div>
              <div class="aboutme__infoo" id="myNameSurname">
                Никита Степанов
              </div>
            </div>
            <div class="aboutme__info">
              <div class="aboutme__articul" id="age">Возвраст:</div>
              <div class="aboutme__infoo" id="myAge">19 лет</div>
            </div>
            <div class="aboutme__info">
              <div class="aboutme__articul" id="education">Образование:</div>
              <div class="aboutme__infoo" id="myEducation">
                Среднее (12 классов), обучался в Glo Academy, в данный момент
                учусь в институте TSI специальность “Компьютерные науки”.
              </div>
            </div>
            <div class="aboutme__info">
              <div class="aboutme__articul" id="exp">Опыт:</div>
              <div class="aboutme__infoo" id="myExp">
                В сфере веб программирования уже год, максимум делал свои
                учебные проекты.
              </div>
            </div>
            <div class="aboutme__info">
              <div class="aboutme__articul" id="country">
                Страна проживания:
              </div>
              <div class="aboutme__infoo" id="myCountry">Латвия, Рига.</div>
            </div>
            <div class="aboutme__info">
              <div class="aboutme__articul" id="email1">Email:</div>
              <div class="aboutme__infoo" id="myEmail">
                nikitastepanovs777@gmail.com
              </div>
            </div>
          </div>
          <div class="aboutme__photo">
            <img alt="" class="aboutme__myphoto" src="img/myphoto.webp" />
          </div>
        </div>
      </div>
    </section>
    <div class="contactme" >
      <div class="contactme-blur">
        <div class="container">
          <div class="contactme__title title" id="contact">
            Связаться со мной
          </div>
          <form
            method="get"
            id="form"
            class="contactme__forms"
          >
            <input
              class="contactme__input"
              name="email"
              placeholder="Ваш email:"
              required=""
              type="email"
            />
            <input
              class="contactme__input contactme__input-o"
              name="text"
              placeholder="Ваше сообщение:"
              required=""
              type="text"
            />
            <button
              class="contactme__btn btn"
              id="submit"
              type="submit" name="sendmail"
             
            >
              Отправить
            </button>
          </form>
        </div>
      </div>
    </div>
    <div class="contacts" id="contacts" >
      <div class="container">
        <div class="contacts__title title" id="myContacts">Контакты</div>
        <ul class="contacts__icons">
          <li class="contacts__item">
            <a href="https://www.instagram.com/eternalxxsleep/" target="_blank"
              ><img alt="" src="img/icons/instagram.svg"
            /></a>
          </li>
          <li class="contacts__item">
            <a href="https://vk.com/eternalxsleep" target="_blank"
              ><img alt="" src="img/icons/vk.svg"
            /></a>
          </li>
          <li class="contacts__item">
            <a href="https://t.me/w8plzz" target="_blank"
              ><img alt="" src="img/icons/telegram.svg"
            /></a>
          </li>
          <li class="contacts__item">
            <a href="https://github.com/nixory" target="_blank"
              ><img alt="" src="img/icons/github.svg"
            /></a>
          </li>
          <li class="contacts__item">
            <a
              href="https://www.linkedin.com/in/nikita-stepanovs-42683a23b/"
              target="_blank"
              ><img alt="" src="img/icons/linkedin.svg"
            /></a>
          </li>
          <li class="contacts__item">
            <a href="mailto:nikitastepanovs777@gmail.com"
              ><img alt="" src="img/icons/email.svg"
            /></a>
          </li>
        </ul>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="./js/aos.js"></script>
    <script src="./js/scripts.js"></script>
  </body>
</html>

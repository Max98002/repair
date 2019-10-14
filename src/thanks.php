<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ремонт Квартир</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <?php include('navbar.php') ?>

  <main>
    <section class="hero">
      <div class="container">
        <div class="hero-block">
          <div class="hero-text">

            <h1 class="hero-text__title">
              Спасибо за заявку
            </h1>

            <span class="hero-text__subtitle">
              мы перезвоним черезе 15 минут
            </span>

            <ul class="hero-list">
              <li class="hero-list__item">
                <div class="hero-list__image">
                  <img class="wow zoomIn" data-wow-delay="0.4s" src="../src/img/hero/hero-list/hero-clock.png" alt="calc">
                </div>
                <span class="hero-list__text">
                  Точно соблюдаем сроки
                </span>
              </li>
              <li class="hero-list__item">
                <div class="hero-list__image">
                  <img class="wow zoomIn" data-wow-delay="0.4s" src="../src/img/hero/hero-list/hero-calc.png" alt="board">
                </div>
                <span class="hero-list__text">
                  Рассчитаем смету на работы <br>
                  и материалы в день обращения
                </span>
              </li>
              <li class="hero-list__item">
                <div class="hero-list__image">
                  <img class="wow zoomIn" data-wow-delay="0.4s" src="../src/img/hero/hero-list/hero-board.png" alt="clock">
                </div>
                <span class="hero-list__text">
                  Предложим более 100 вариантов <br>
                  исполнения дизайна Вашего жилья
                </span>
              </li>
            </ul>
          </div>
          <!-- /.hero-text -->
          <div class="hero-image">
            <img src="../src/img/hero/hero-img.png" alt="План квартиры">
          </div>
          <!-- /.hero-image -->
        </div>
        <!-- /.hero-block -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.hero -->
  </main>

  <footer class="footer">
    <div class="map" id="googleMap">
      <!-- <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5540.320115169274!2d30.51086982004365!3d50.455104940649804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce5ca45ed977%3A0xc43fb88d084978ca!2z0LLRg9C70LjRhtGPINCS0LXQu9C40LrQsCDQltC40YLQvtC80LjRgNGB0YzQutCwLCDQmtC40ZfQsiwgMDIwMDA!5e0!3m2!1suk!2sua!4v1570787966021!5m2!1suk!2sua"
        width="100%" height="665" frameborder="0" style="border:0;" allowfullscreen="">
      </iframe> -->
    </div>
    <div class="container">
      <div class="contacts-block">
        <div class="contacts">
          <h3 class="contacts__title">Приезжайте к нам в гости! Проконсультируем Вас по&nbsp;всем вопросам ремонта</h3>
          <ul class="contacts-list">
            <li class="contacts-list__item">
              <span class="contacts-list__icon contacts-list__iconup">
                <img src="./img/contacts/1.png" alt="">
              </span>
              <span class="contacts-list__text">
                г. Москва <br>
                <span class="contacts-list__strong">
                  ул. Ленинга, д. 10,<br>
                  корпус 2, оф. 308
                </span>
              </span>
            </li>
            <li class="contacts-list__item">
              <span class="contacts-list__icon contacts-list__iconup">
                <img src="./img/contacts/2.png" alt="">
              </span>
              <span class="contacts-list__text">
                <div class="contacts-list__strong">
                  Режим работы: <br>
                  с 9:00 до 18:00
                </div>

              </span>
            </li>
            <li class="contacts-list__item">
              <span class="contacts-list__icon">
                <img src="./img/contacts/3.png" alt="">
              </span>
              <span class="contacts-list__text">
                Телефон: <br>
                <a href="tel:+74954225131" class="contacts-list__phone contacts-list__strong">+ 7 (495) 42-251-31</a>
              </span>
            </li>
          </ul>
          <p><?php
              echo date("l jS \of F Y h:i A")
              ?></p>
        </div>
        <!-- /.contacts -->
      </div>
      <!-- /.contacts-block -->
    </div>
    <!-- /.container -->
  </footer>
  <!-- /.footer section -->


  <!-- /.modal -->
  <div class="back-top">
    <a href="#" id="up">
      <img src="./img/arrow/up-arrow.svg" alt="">
    </a>
  </div>
  <!-- /.back-top -->

  <!-- <script src="./js/main.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

  <!-- jqueryValidate -->
  <script src="./js/jquery.validate.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#brif-form').validate({
        rules: {
          username: {
            required: true,
            minlength: 2
          },
          phone: {
            required: true,
          },
          email: {
            required: true,
            email: true
          }
        },
        errorElement: "div",
        errorClass: "invalid",
        messages: {
          username: {
            required: "Укажите имя",
            minlength: jQuery.validator.format("Осталось cимволов! {0}")
          },
          phone: {
            required: "Укажите телефон"
          },
          email: {
            required: "Заполните поле Email",
            email: "Введите корректный email"
          }
        }
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#offervalidate__form').validate({
        rules: {
          username: {
            required: true,
            minlength: 2
          },
          phone: {
            required: true,
          }
        },
        errorElement: "div",
        errorClass: "offerError",
        messages: {
          username: {
            required: "Укажите имя",
            minlength: jQuery.validator.format("Осталось cимволов! {0}")
          },
          phone: {
            required: "Укажите телефон"
          }
        }
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#modalValidate').validate({
        rules: {
          username: {
            required: true,
            minlength: 2
          },
          phone: {
            required: true,
          }
        },
        errorElement: "div",
        errorClass: "modalError",
        messages: {
          username: {
            required: "Укажите имя",
            minlength: jQuery.validator.format("Осталось cимволов! {0}")
          },
          phone: {
            required: "Укажите телефон"
          }
        }
      });
    });
  </script>
  <!--end jqueryValidate -->

  <!-- jquery.maskedinput.min -->
  <script src="./js/jquery.maskedinput.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.phone').mask("+38(999) 999-9999");
    });
  </script>
  <!--end jquery.maskedinput.min -->

  <script src="./js/modal.js"></script>

  <!-- Анімація WOW -->
  <script src="./js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <!--end Анімація WOW -->

  <!-- Подключення слік слайдера -->
  <script src="./js/slick.min.js"></script>

  <script>
    $(document).ready(function() {
      $('.slider').slick({
        infinite: true,
        centerPadding: '60px',
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: $('.arrows__left'),
        nextArrow: $('.arrows__right'),
        responsive: [{
            breakpoint: 1200,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 868,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
    });
  </script>
  <!-- end --  Подключення слік слайдера -->

  <script>
    function myMap() {
      var mapProp = {
        center: new google.maps.LatLng(50.456281, 30.365321),
        zoom: 8,
      };
      var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    }
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCb2gW-rwajmPboyMAM_FX7B_-EJH0c7CI&callback=myMap">
  </script>


</body>

</html>
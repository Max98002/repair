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
              Внутренняя отделка
              помещений&nbsp;"под&nbsp;ключ"
            </h1>

            <span class="hero-text__subtitle">
              с гарантией качества, прописанной в договоре
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

    <section class="section document">
      <div class="container">
        <h2 class="section-title document__title">Все наши гарантийные обязательства <br> подробно и прозрачно описаны в
          договоре
        </h2>
        <!-- /.section-title document__title -->
        <div class="document-block">
          <div class="document__card">
            <div class="document__image">
              <img src="./img/document/1.png" alt="">
            </div>
            <!-- /.document__image -->
            <div class="document__text">
              Гарантия на качество <br>
              выполняемых работ
            </div>
            <!-- /.document__title -->
          </div>
          <!-- /.ducument__card -->
          <div class="document__card">
            <div class="document__image">
              <img src="./img/document/2.png" alt="">
            </div>
            <!-- /.document__image -->
            <div class="document__text">
              Гарантия на фиксированные цены <br>
              Виды работ и цены на них <br>
              прописаны в договоре
            </div>
            <!-- /.document__title -->
          </div>
          <!-- /.ducument__card -->
          <div class="document__card">
            <div class="document__image">
              <img src="./img/document/3.png" alt="">
            </div>
            <!-- /.document__image -->
            <div class="document__text">
              Гарантия на точное соблюдение <br>
              сроков и ответственность за <br>
              их невыполнение


            </div>
            <!-- /.document__title -->
          </div>
          <!-- /.ducument__card -->
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section document -->

  </main>


  <?php include('footer.php') ?>


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
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
    <section class="section offer ">
      <div class="container">
        <div class="offer-block">
          <h2 class="section-title offer__title">
            Мы бесплатно разработаем
            дизайн-проект Вашего жилья
            и реализуем его!
          </h2>
          <!-- /.section-title -->
          <span class="section-subtitle offer__subtitle">
            Оставьте заявку на разработку
            бесплатного дизайн-проекта!
          </span>
          <!-- /.section-subtitle -->
          <form action="mail.php" method="POST" class="form offer__form" id="offervalidate__form">

            <div class="input-group input-group__item">
              <input type="text" name="username" autocomplete="off" class="input offer__input" placeholder="Ваше имя">
            </div>
            <div class="input-group input-group__item">
              <input type="tel" name="phone" autocomplete="off" class="input offer__input phone" placeholder="Ваш телефон">
            </div>

            <button class="button offer__button">Получить бесплатный дизайн-проект</button>
          </form>
          <!-- /.form offer__form -->
          <div class="offer__text">
            <span class="offer__manager">
              Наш менеджер перезвонит Вам
              в течение 60 секунд
            </span>
            <div class="offer__contacts">
              <span class="offer__address">или перезвоните нам сами</span>
              <a href="tel:380680811952" class="offer__phone">+7 (495) 42-251-31</a>
            </div>
          </div>
        </div>
        <!-- /.offer-block -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.offer -->
    <section class="section portfolio">
      <div class="container">
        <h2 class="section-title portfolio__title">Работая с 2007 года, <br> мы сделали более 500 ремонтов в квартирах и
          домах</h2>
        <div class="slider">
          <div class="slider__item"><img class="slider__img" src="./img/portfolio/portfoli-1.jpg" alt="Slider"></div>
          <div class="slider__item"><img class="slider__img" src="./img/portfolio/portfoli-2.jpg" alt="Slider"></div>
          <div class="slider__item"><img class="slider__img" src="./img/portfolio/portfoli-3.jpg" alt="Slider"></div>
          <div class="slider__item"><img class="slider__img" src="./img/portfolio/portfoli-1.jpg" alt="Slider"></div>
          <div class="slider__item"><img class="slider__img" src="./img/portfolio/portfoli-2.jpg" alt="Slider"></div>
          <div class="slider__item"><img class="slider__img" src="./img/portfolio/portfoli-3.jpg" alt="Slider"></div>
        </div>
        <!-- /.slider -->
        <div class="arrows portfolio__arrows">
          <div class="arrows__left">
            <img src="./img/portfolio/left-arrow.png" alt="">
          </div>
          <!-- /.arrows__left -->
          <div class="arrows__right">
            <img src="./img/portfolio/right-arrow.png" alt="">
          </div>
          <!-- /.arrows__right -->
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section portfolio -->
    <section class="section price">
      <div class="container">
        <h2 class="section-title price__title">У нас очень гибкая система скидок на комплексные работы!</h2>
        <!-- /.section__title price__title -->
        <span class="section-subtitle price__subtitle">Прайс на наши услуги</span>
        <!-- /.section-subtitle price__sutitle -->
        <div class="cards">
          <div class="card price__card  wow fadeInUp" data-wow-delay="0.3s">
            <div class="card__image"><img src="./img/price/p1.png" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">Ремонт ванных комнат и с/у</h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
          <div class="card price__card  wow fadeInUp" data-wow-delay="0.4s">
            <div class="card__image"><img src="./img/price/p2.png" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">Ремонт комнат и квартир</h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
          <div class="card price__card  wow fadeInUp" data-wow-delay="0.5s">
            <div class="card__image"><img src="./img/price/p3.png" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">Отделка офисных помещений</h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
          <div class="card price__card  wow fadeInUp" data-wow-delay="0.3s">
            <div class="card__image"><img src="./img/price/p4.png" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">Ремонт в новостройках</h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
          <div class="card price__card  wow fadeInUp" data-wow-delay="0.4s">
            <div class="card__image"><img src="./img/price/p5.png" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">Ремонт кухонь</h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
          <div class="card price__card  wow fadeInUp" data-wow-delay="0.5s">
            <div class="card__image"><img src="./img/price/p6.png" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">Ремонт дач и коттеджей</h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.cards -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section price -->
    <section class="section steps">
      <div class="container">
        <h2 class="section-title steps__title">Наши специалисты готовы выехать на замер в любое удобное для Вас время
        </h2>
        <!-- /.section-title steps__title -->
        <div class="section-subtitle steps__subtitle">5 шагов до ремонта</div>
        <!-- /.section-subtitle steps__subtitle -->
        <div class="steps-block">
          <div class="step">
            <div class="step__image">
              <img class="wow zoomIn" src="./img/steps/1.png" alt="">
            </div>
            <!-- /.step__image -->
            <p class="step__text">Вы звоните нам <br> или оставляете заявку
            </p>
            <!-- /.step__text -->
          </div>
          <!-- /.step -->
          <div class="step">
            <div class="step__image step__upgrait">
              <img class="wow zoomIn" src="./img/steps/2.png" alt="">
            </div>
            <!-- /.step__image -->
            <p class="step__text">Согласуем удобное <br> для Вас время выезда специалиста на замер
            </p>
            <!-- /.step__text -->
          </div>
          <!-- /.step -->
          <div class="step">
            <div class="step__image step__upgrait">
              <img class="wow zoomIn" src="./img/steps/3.png" alt="">
            </div>
            <!-- /.step__image -->
            <p class="step__text">Рассчитываем смету согласовываем <br> с Вами
            </p>
            <!-- /.step__text -->
          </div>
          <!-- /.step -->
          <div class="step">
            <div class="step__image step__upgrait">
              <img class="wow zoomIn" src="./img/steps/4.png" alt="">
            </div>
            <!-- /.step__image -->
            <p class="step__text">Подписываем договор закупаем материал <br> по оптовым ценам
            </p>
            <!-- /.step__text -->
          </div>
          <!-- /.step -->
          <div class="step">
            <div class="step__image step__upgrait">
              <img class="wow zoomIn" src="./img/steps/5.png" alt="">
            </div>
            <!-- /.step__image -->
            <p class="step__text">Выполняем ремонт <br> в указанные сроки
            </p>
            <!-- /.step__text -->
          </div>
          <!-- /.step -->
        </div>
        <!-- /.steps-block -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section steps -->
    <section class="section slogan">
      <div class="container">
        <h2 class="section-title slogan__title">Ремонт обойдется Вам дешевле, так как <br> мы используем качественные
          материалы по оптовым&nbsp;ценам</h2>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section slogan -->
    <section class="section info">
      <div class="container">
        <div class="info-block">
          <div class="cardinfo">
            <div class="cardinfo__text">
              Поможем закупить все материалы <br> по оптовым ценам у проверенных поставщиков
            </div>
            <!-- /.card__text -->
            <div class="cardinfo__image"></div>
            <!-- /.card__image -->
          </div>
          <!-- /.card -->
          <div class="cardinfo cardinfo__fon">
            <div class="cardinfo__text">
              Мы дадим Вам <span class="cardinfo__strong">максимальные скидки</span>
              у наших партнеров для закупки материалов оптом
            </div>
            <!-- /.card__text -->
            <div class="cardinfo__image"></div>
            <!-- /.card__image -->
          </div>
          <!-- /.card -->
          <div class="cardinfo cardinfo__fonn">
            <div class="cardinfo__text">
              Все, что не сможете найти в городе -
              поможем заказать <span class="cardinfo__strong">у проверенных
                поставщиков</span>
            </div>
            <!-- /.card__text -->
            <div class="cardinfo__image"></div>
            <!-- /.card__image -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.sectio info -->
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
    <section class="section brif">
      <div class="container">
        <div class="brif-block">
          <div class="interview brif__interview">
            <h3 class="interview__title">Мы можем озвучить Вам примерную стоимость работы и материалов по телефону</h3>
            <span class="interview__subtitle">Для этого нужно ответить на 4 вопроса:</span>
            <ul class="interview-list">
              <li class="interview-list__item">
                <span class="interview-list__counter">1.</span>
                <span class="interview-list__text interview-list__uptext">Какова площадь помещения?</span>
              </li>
              <li class="interview-list__item">
                <span class="interview-list__counter">2.</span>
                <span class="interview-list__text interview-list__uptextt">У Вас новостройка или вторичное жилье?</span>
              </li>
              <li class="interview-list__item">
                <span class="interview-list__counter interview-list__updating">3.</span>
                <span class="interview-list__text interview-list__uptexttt">Где находится помещение, в котором будет
                  производиться
                  ремонт?</span>
              </li>
              <li class="interview-list__item">
                <span class="interview-list__counter">4.</span>
                <span class="interview-list__text">Назначение помещения?</span>
              </li>
            </ul>




          </div>
          <!-- /.interview brif__interview -->
          <div class="form brif__form">
            <h3 class="form__title">Оставьте&nbsp;заявку&nbsp;на&nbsp;бесплатный расчет ремонта по телефону</h3>
            <span class="form__subtitle">Для этого заполните форму ниже</span>
            <form action="#" id="brif-form">
              <div class="input-group input-group__brif">
                <input type="text" autocomplete="off" name="username" class="input brif__input" placeholder="Ваше имя">
              </div>
              <div class="input-group input-group__brif">
                <input type="tel" autocomplete="off" name="phone" class="input brif__input phone" placeholder="Ваш телефон">
              </div>
              <div class="input-group input-group__brif">
                <input type="email" autocomplete="off" name="email" class="input brif__input" placeholder="Ваш email">
              </div>
              <button class="button brif__button">Рассчитать стоимост</button>
              <span class="form__description">Мы перезвоним Вам в течение 60 секунд</span>
            </form>
          </div>
          <!-- /.form forma brif__form -->
        </div>
        <!-- /.brif-block -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section brif -->
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

  <div class="modal" id="modal">
    <div class="container">
      <div class="modal-dialog">
        <button class="modal-dialog__close" id="close">&times;</button>
        <div class="modal-block">
          <div class="modal-block__price">
            <h4 class="modal-block__title">Узнайте точную стоимость ремонта по телефону!</h4>
            <span class="modal-block__subtitle">Заполните поля ниже - мы свяжемся с Вами</span>
            <form action="#" class="form modal__form" id="modalValidate">

              <div class="input-group">
                <input type="text" name="username" autocomplete="off" class="input modal__input" placeholder="Ваше имя">
              </div>
              <div class="input-group">
                <input type="tel" name="phone" autocomplete="off" class="input modal__input phone" placeholder="Ваш телефон">
              </div>

              <button class="button offer__button">Узнать стоимость</button>
            </form>
            <div class="modal__contacts">
              <span class="modal__address">Или Вы можете перезвонить нам сами по телефону:</span>
              <a href="tel:380680811952" class="modal__phone">+7 (495) 42-251-31</a>
            </div>
          </div>
          <!-- /.modal__price -->
        </div>
        <!-- /.modal-block -->
      </div>
      <!-- /.modal-dialog -->
    </div>
  </div>

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
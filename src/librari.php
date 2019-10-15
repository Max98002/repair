<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="./js/main.js"></script>
<script src="./js/jquery.validate.min.js"></script>
<script src="./js/jquery.maskedinput.min.js"></script>
<script src="./js/wow.min.js"></script>
<script src="./js/slick.min.js"></script>

<!-- jqueryValidate -->
<script>
  $(document).ready(function() {

    var thanksmodal = $('#thanksmodal');
    var closeThank = $('#closeThanksModal');

    closeThank.on('click', function() {
      thanksmodal.removeClass('thanksmodal_active');
    });

    $('.offervalidate__form').validate({
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
      },
      submitHandler: function(form) {
        $.ajax({
          url: form.action,
          type: form.method,
          data: $(form).serialize(),
          success: function(response) {
            console.log("Hello Все гуд: " + response);
            $('#offer-form')[0].reset();
            thanksmodal.addClass('thanksmodal_active');
          },
          error: function(jqHXR, textStatus, errorThrown) {
            console.log(jqHXR + " " + textStatus);
          }
        });
      }
    });
  });
</script>
<script>
  $(document).ready(function() {
    var thanksmodal = $('#thanksmodal');
    var closeThank = $('#closeThanksModal');

    closeThank.on('click', function() {
      thanksmodal.removeClass('thanksmodal_active');
    });
    $('.modalValidate').validate({
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
      },
      submitHandler: function(form) {
        $.ajax({
          url: form.action,
          type: form.method,
          data: $(form).serialize(),
          success: function(response) {
            console.log("Hello Все гуд: " + response);
            $('#modal-form')[0].reset();
            thanksmodal.addClass('thanksmodal_active');
          },
          error: function(jqHXR, textStatus, errorThrown) {
            console.log(jqHXR + " " + textStatus);
          }
        });
      }
    });
  });
</script>
<script>
  $(document).ready(function() {

    var thanksmodal = $('#thanksmodal');
    var closeThank = $('#closeThanksModal');

    closeThank.on('click', function() {
      thanksmodal.removeClass('thanksmodal_active');
    });
    
    $('.brifForm').validate({
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
      },
      submitHandler: function(form) {
        $.ajax({
          url: form.action,
          type: form.method,
          data: $(form).serialize(),
          success: function(response) {
            console.log("Hello Все гуд: " + response);
            $('#brif-form')[0].reset();
            thanksmodal.addClass('thanksmodal_active');
          },
          error: function(jqHXR, textStatus, errorThrown) {
            console.log(jqHXR + " " + textStatus);
          }
        });
      }
    });
  });
</script>
<!--end jqueryValidate -->

<!-- jquery.maskedinput.min -->
<script>
  $(document).ready(function() {
    $('.phone').mask("+38(999) 999-9999");
  });
</script>
<!--end jquery.maskedinput.min -->

<!-- Анімація WOW -->
<script>
  new WOW().init();
</script>
<!--end Анімація WOW -->

<!-- Подключення слік слайдера -->
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

<!-- API google maps -->
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
<!--end API google maps -->
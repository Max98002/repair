$(document).ready(function () {
  var button = $('#button');
  var modal = $('#modal');
  var close = $('#close');
  var btnmenu = $('#btnmenu');
  var menu = $('#menu');
  var modalText = $('.offer__modalText');

  button.on('click', function () {
    modal.addClass('modal_active');
  });

  close.on('click', function () {
    modal.removeClass('modal_active');
  });

  btnmenu.on('click', function () {
    menu.toggleClass('menu_active');
  });

  // function move() {
  //   modal.removeClass('modal_active');
  // }
  // setInterval(move, 5000);

  // jQuery AJAX
  $('#offer-form').on('submit', function name(event) {
    event.preventDefault();
    $.ajax({
      type: "POST",
      url: "mail.php",
      data: $(this).serialize(),
      success: function (response) {
        console.log("Hello Все гуд: " + response);
        $('#offer-form')[0].reset();
        $('.offer__button').text(response);
        modalText.addClass('offer_active');
      },
      error: function(jqHXR, textStatus, errorThrown) {
        console.log(jqHXR + " " + textStatus);
      }
    });
  });
  //end jQuery AJAX

});

// scrollTop
$(function () {

  $(window).scroll(function () {

    if ($(this).scrollTop() != 0) {

      $('#up').fadeIn();

    } else {

      $('#up').fadeOut();

    }

  });

  $('#up').click(function () {

    $('body,html').animate({ scrollTop: 0 }, 800);

  });

});
//end scrollTop
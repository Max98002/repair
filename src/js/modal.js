$(document).ready(function () {
  var button = $('#button');
  var modal = $('#modal');
  var close = $('#close');
  var btnmenu = $('#btnmenu');
  var menu = $('#menu');

  button.on('click', function () {
    modal.addClass('modal_active');
  });

  close.on('click', function () {
    modal.removeClass('modal_active');
  });

  function move() {
    modal.removeClass('modal_active');
  }
  setInterval(move, 5000);

  btnmenu.on('click', function () {
    menu.toggleClass('menu_active');
  });


});


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
$(document).ready(function () {
  var button = $('#button');
  var modal = $('#modal');
  var close = $('#close');

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

  $('#up').click(function () {
    $('body,html').animate({ scrollTop: 0 }, 500);
    return false;
  })

});

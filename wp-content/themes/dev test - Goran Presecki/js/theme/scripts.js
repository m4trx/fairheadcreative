$(document).ready(function () {
  "use strict";
  triggers.anchorScroll();
  triggers.classToggler();
  
  var thisYear = new Date().getFullYear();
  $('.year-current').text(thisYear);

  $('#bonus_form').on('submit', function(event) {
    event.preventDefault();
    $('#modal .modal-body').html('<ul></ul>');
    $('#bonus_form input[type=checkbox]:checked').each( function() {
      $('#modal .modal-body > ul').append('<li>' + $('#bonus_form label[for=' + $(this).attr('id') + ']').html() + '</li>');
    });
    $('#modal').modal();
  });
  $('#modal_submit').on('click', function() {
    $('#bonus_form').unbind('submit').submit();
  });
});

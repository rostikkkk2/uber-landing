$(document).ready(() => {

  $('#btn_new_worker').click(() => {
    $("#worker").modal('show');
  });

  $('#btn_partner').click(() => {
    $("#partner").modal('show');
  });

  setTimeout(function() {
    $('.alert-success').fadeOut('fast');
  },5000);

})

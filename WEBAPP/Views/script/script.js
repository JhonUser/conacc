$(document).ready(function() {
  $('select').material_select();
  $('#myTable').DataTable();
  $('.datepicker').pickadate();
  $('.slider').slider({full_width: true});
  $('.modal-trigger').leanModal();
  $('#consultar.propietario').DataTable();
  $('.button-collapse').sideNav({
    menuWidth: 200,
    edge: 'left',
    closeOnClick: true
  });
});

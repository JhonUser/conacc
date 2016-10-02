$(document).ready(function() {
  $('select').material_select();
  $('#myTable').DataTable();
  $('.datepicker').pickadate();
  $('.slider').slider({full_width: true});
  $('.modal-trigger').leanModal();
   $('#tabla').DataTable();
  $('.button-collapse').sideNav({
    menuWidth: 200,
    edge: 'left',
    closeOnClick: true
  });
});
function c(){
  swal("!Bien!", "Guardó con exito!", "success");
};
function u(){
  swal("!Bien!", "Modificó con exito!", "success");
};

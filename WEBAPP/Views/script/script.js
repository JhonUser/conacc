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
function e(){
  swal("Error", "Algo va mal!", "warning");
};
function a(){
  swal("Bien", "Registro la hora de salida!", "success");
};
function redir(){
  var red="dashboard.php?seccion=rol";
  window.location.href=red;
// var URLsearch = window.location.search;
// alert(URLsearch);
};

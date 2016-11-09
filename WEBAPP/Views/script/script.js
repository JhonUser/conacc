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
function log(){
  swal("Error", "Verifique sus datos nuevamente!", "warning");
};
function a(){
  swal("Bien", "Registro la hora de salida!", "success");
};
function redir(){
var URLsearch = window.location.search;
if(URLsearch=="?seccion=rol&e" || URLsearch=="?seccion=rol&crt" || URLsearch=="?seccion=rol&upt"){
  var red="dashboard.php?seccion=rol";
  window.location.href=red;
  //alert(URLsearch);
}
else if((URLsearch)=="?seccion=usuario&crt" || "?seccion=usuario&upt"){
  var red="dashboard.php?seccion=usuario";
  location.href=red;
}
else if((URLsearch)=="?seccion=ci5wcm9waWV0YXJpbw==&crt" || "?seccion=ci5wcm9waWV0YXJpbw==&upt"){
  var red1="dashboard.php?seccion=ci5wcm9waWV0YXJpbw==";
  location.href=red1;
}
else if((URLsearch)=="?seccion=rr_producto&crt"|| "?seccion=rr_producto&upt"){
  var red="dashboard.php?seccion=rr_producto";
  location.href=red;
}
else if((URLsearch)=="?seccion=producto&crt" || "?seccion=producto&upt"){
  var red="dashboard.php?seccion=producto";
  location.href=red;
}
else if((URLsearch)=="?seccion=c_entrada&act"){
  var red="dashboard.php?seccion=c_entrada";
  location.href=red;
}
else{
  var red="dashboard.php?seccion=anuncios";
  location.href=red;
}
};
// var URLsearch = window.location.search;
// alert(URLsearch);

$(document).ready(function() {
  $('select').material_select();
  $('#myTable').DataTable();
  $('.datepicker').pickadate();
  $('.slider').slider({full_width: true});
  $('.modal-trigger').leanModal();
  $('#tabla').DataTable();
  $("#codrol").keyup(function(){
      var codigo =$("#codrol").val();
      $.post("../prueba.php", {cod: codigo}).done(function(data){
      $("#trato").html(data); 
      //alert( codigo );
      });         
    });
  $('.button-collapse').sideNav({
    menuWidth: 200,
    edge: 'left',
    closeOnClick: true
  });
});

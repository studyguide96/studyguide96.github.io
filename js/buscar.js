$(function() {
  $('.error').hide();
  $(".button").click(function() {
    // validate and process form here
    
    $('.error').hide();
    var competencia = $("select#listacompetencia").val();
    if (competencia == "") {
      $("label#name_error").show();
      $("select#name").focus();
      return false;
    }
    var area = $("select#area").val();
    if (area == "") {
      $("label#area_error").show();
      $("select#area").focus();
      return false;
    }
    var docente = $("select#docente").val();
    if (docente == "") {
      $("label#docente_error").show();
      $("select#docente").focus();
      return false;
    }

    var dia = $("inputt#id_dia").val();
    var hora = $("inputt#id_hora").val();
    
    var dataString = 'competencia='+ competencia + '&area=' + area + '&docente=' + docente + '&dia=' + dia + '&hora=' + hora;
    //alert (dataString);return false;
    $.ajax({
      type: "POST",
      url: "../php/registrarHorario.php",
      data: dataString,
      success: function(r) {
        if(r == 1) {
          alert('competencia agregada exitosamente');
        }else{
          alert('Error: ' + r);
        }
      }
    });
    return false;
  });
});
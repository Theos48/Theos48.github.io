        
function login() {
  var folio = $("#itFolio").val();
  var password = $("#itPassword").val();

  if (folio == "") {
    $("#campo1").addClass("has-error");
    $("#mensaje1").fadeIn();
    return false;
  }else {
    $("#campo1").removeClass("has-error");
    $("#mensaje1").fadeOut();
    if (password == "") {
      $("#campo2").addClass("has-error");
      $("#mensaje2").fadeIn();
      return false;
    }else {
      $("#campo2").removeClass("has-error");
      $("#mensaje2").fadeOut();
      $("#mensaje").html("");
    var datos = "action=login&" + $("#formusuario").serialize();
    $.post("../controlador/usuarioControl.php", datos, function(data) {        
        $("#mensaje").prepend(data);
        $('#mensaje').show('slow');
        $('#mensaje').fadeOut(6000);
    });
    }
  }        
}

function rgAspirante() {
  var nombre =$("#nombre").val();
  var apaterno = $("#apaterno").val();
  var amaterno = $("#amaterno").val();
  var correo = $("#correo").val();
  var usuario = $("#usuario").val();
  var clave = $("#clave").val();  

  if (nombre == null || nombre.length == 0) {
    $("#camponombre").addClass("has-error");
    alert("Por favor ingresa tu nombre.")
    return false;
  }else{
    $("#camponombre").removeClass("has-error");    
  }
  
  if (apaterno == null || apaterno.length == 0) {
    $("#campoapaterno").addClass("has-error");
    alert("Por favor ingresa tu apellido paterno");
    return false;
  }
  else{
    $("#campoapaterno").removeClass("has-error");
  }
  
  if (amaterno == null || amaterno.length == 0) {
    $("#campoamaterno").addClass("has-error");
    alert("Por favor ingresa tu apellido materno");
    return false;
  }else{
    $("#campoamaterno").removeClass("has-error");
  }
  
  if (correo == null || correo.length == 0){
    $("#campocorreo").addClass("has-error");
    alert("Por favor ingresa un correo válido");
    return false;
  }else{
    $("#campocorreo").removeClass("has-error");
  }
       
  if (usuario == null || usuario.length == 0) {
    $("#campousuario").addClass("has-error");
    alert("Por favor ingresa tu usuario");
    return false;
  }else{
    $("#campousuario").removeClass("has-error");
  }
  
  if (clave == null || clave.length == 0) {
    $("#campoclave").addClass("has-error");
    alert("Por favor ingresa tu clave de acceso");
    return false;
  }
  else{
    $("#campoclave").removeClass("has-error");    
  }
    $("#notificacion").html("");
    var datos = "action=registra&" + $("#formaspirante").serialize();
    $.post("../controlador/aspiranteControl.php", datos, function(data) {
        $('#notificacion').html(data);    
    });
    //$('#formaspirante')[0].reset();

}

function mdformlogin() {
    var datos = "action=mdformulariologin";
    $.post("../controlador/mdformularioControl.php", datos, function(data) {
        $('#principal').html(data);
    });
}

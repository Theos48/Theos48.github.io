function rgPregunta() {
    $("#mensaje").html("");
    var datos = "action=registra&" + $("#formpregunta").serialize();
    $.post("../controlador/preguntaControl.php", datos, function(data) {
        $("#mensaje").prepend(data);
        $('#mensaje').show('slow');
        $('#mensaje').fadeOut(6000);
    });
}

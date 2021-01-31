const cantidadPreguntas = 5;

var x;
x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
    var x;
    x = $('#primerenlace');
    x.click(hidematerias1);
    x = $('#segundoenlace');
    x.click(hidematerias2);
    x = $('#tercerenlace');
    x.click(hidematerias3);
    x = $('#cuartoenlace');
    x.click(hidematerias4);

    x = $('#quintoenlace');
    x.click(hidematerias5);
    x = $('#sextoenlace');
    x.click(hidematerias6);
    x = $('#septimoenlace');
    x.click(hidematerias7);
    x = $('#octavoenlace');
    x.click(hidematerias8);
    x = $('#novenoenlace');
    x.click(hidematerias9);
}

function hidematerias1() {
    var rb = $(".calc:checked");
    if (rb.length == cantidadPreguntas) {
        x = $('#ver1');
        y = $('#ver2');
        x.hide();
        y.show();

    } else {
        $("#ver1").removeClass("panel-primary");
        $("#ver1").addClass("panel-warning");
        $(".badge1").removeClass("label-info");
        $(".badge1").addClass("label-warning");
        alert('¡Contesta todas las preguntas!');
        return false;
    }
}


function hidematerias2() {

    var rb = $(".calc2:checked");
    if (rb.length == cantidadPreguntas) {
        x = $('#ver2');
        y = $('#ver3');
        x.hide();
        y.show();
    } else {
        $("#ver2").removeClass("panel-primary");
        $("#ver2").addClass("panel-warning");
        $(".badge2").removeClass("label-info");
        $(".badge2").addClass("label-warning");
        alert('¡Contesta todas las preguntas!');
        return false;
    }
}

function hidematerias3() {

    var rb = $(".calc3:checked");
    if (rb.length == cantidadPreguntas) {
        x = $('#ver3');
        y = $('#ver4');
        x.hide();
        y.show();
    } else {
        $("#ver3").removeClass("panel-primary");
        $("#ver3").addClass("panel-warning");
        $(".badge3").removeClass("label-info");
        $(".badge3").addClass("label-warning");
        alert('¡Contesta todas las preguntas!');
        return false;
    }
}

function hidematerias4() {

    var rb = $(".calc4:checked");
    if (rb.length == cantidadPreguntas) {
        x = $('#ver4');
        y = $('#ver5');
        x.hide();
        y.show();
    } else {
        $("#ver4").removeClass("panel-primary");
        $("#ver4").addClass("panel-warning");
        $(".badge4").removeClass("label-info");
        $(".badge4").addClass("label-warning");
        alert('¡Contesta todas las preguntas!');
        return false;
    }
}

function hidematerias5() {

    var rb = $(".calc5:checked");
    if (rb.length == cantidadPreguntas) {
        x = $('#ver5');
        y = $('#ver6');
        x.hide();
        y.show();
    } else {
        $("#ver5").removeClass("panel-primary");
        $("#ver5").addClass("panel-warning");
        $(".badge5").removeClass("label-info");
        $(".badge5").addClass("label-warning");
        alert('¡Contesta todas las preguntas!');
        return false;
    }
}

function hidematerias6() {

    var rb = $(".calc6:checked");
    if (rb.length == cantidadPreguntas) {
        x = $('#ver6');
        y = $('#ver7');
        x.hide();
        y.show();
    } else {
        $("#ver6").removeClass("panel-primary");
        $("#ver6").addClass("panel-warning");
        $(".badge6").removeClass("label-info");
        $(".badge6").addClass("label-warning");
        alert('¡Contesta todas las preguntas!');
        return false;
    }
}

function hidematerias7() {

    var rb = $(".calc7:checked");
    if (rb.length == cantidadPreguntas) {
        x = $('#ver7');
        y = $('#ver8');
        x.hide();
        y.show();
    } else {
        $("#ver7").removeClass("panel-primary");
        $("#ver7").addClass("panel-warning");
        $(".badge7").removeClass("label-info");
        $(".badge7").addClass("label-warning");
        alert('¡Contesta todas las preguntas!');
        return false;
    }
}

function hidematerias8() {

    var rb = $(".calc8:checked");
    if (rb.length == cantidadPreguntas) {
        x = $('#ver8');
        y = $('#ver9');
        x.hide();
        y.show();
    } else {
        $("#ver8").removeClass("panel-primary");
        $("#ver8").addClass("panel-warning");
        $(".badge8").removeClass("label-info");
        $(".badge8").addClass("label-warning");
        alert('¡Contesta todas las preguntas!');
        return false;
    }
}

function hidematerias9() {

    var rb = $(".calc9:checked");
    if (rb.length == cantidadPreguntas) {
        x = $('#ver9');
        y = $('#ver10');
        x.hide();
        y.show();
    } else {
        $("#ver9").removeClass("panel-primary");
        $("#ver9").addClass("panel-warning");
        $(".badge9").removeClass("label-info");
        $(".badge9").addClass("label-warning");
        alert('¡Contesta todas las preguntas!');
        return false;
    }
}


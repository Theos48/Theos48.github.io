const totalPreguntas = 5;

var x;
x=$(document);
x.ready(inicializarEventos);
x.ready(cuenta);

function inicializarEventos(){
	var x;
	x=$(".calc");
	x.change(calcscore);
	x=$(".calc2");
	x.change(calcscore2);
	x=$(".calc3");
	x.change(calcscore3);
	x=$(".calc4");
	x.change(calcscore4);
	x=$(".calc5");
	x.change(calcscore5);

	x=$(".calc6");
	x.change(calcscore6);
	x=$(".calc7");
	x.change(calcscore7);
	x=$(".calc8");
	x.change(calcscore8);
	x=$(".calc9");
	x.change(calcscore9);
	x=$(".calc10");
	x.change(calcscore10);
	
	
	
	x=$(".calc");
	x.change(cuentaChecksA1);

	
	
	x=$(".calc2");
	x.change(cuentaChecksA2);
	
	
	x=$(".calc3");
	x.change(cuentaChecksA3);
	
	
	x=$(".calc4");
	x.change(cuentaChecksA4);

	
	x=$(".calc5");
	x.change(cuentaChecksA5);


	x=$(".calc6");
	x.change(cuentaChecksA6);


	x=$(".calc7");
	x.change(cuentaChecksA7);


	x=$(".calc8");
	x.change(cuentaChecksA8);


	x=$(".calc9");
	x.change(cuentaChecksA9);


	x=$(".calc10");
	x.change(cuentaChecksA10);
}

function calcscore(){
    var score = 0;
    $(".calc:checked").each(function(){
        score+=parseInt($(this).val(),10);
    });
    $("input[name=sum]").val(score)
}

function calcscore2(){
    var score = 0;
    $(".calc2:checked").each(function(){
        score+=parseInt($(this).val(),10);
    });
    $("input[name=sum2]").val(score)
}

function calcscore3(){
    var score = 0;
    $(".calc3:checked").each(function(){
        score+=parseInt($(this).val(),10);
    });
    $("input[name=sum3]").val(score)
}

function calcscore4(){
    var score = 0;
    $(".calc4:checked").each(function(){
        score+=parseInt($(this).val(),10);
    });
    $("input[name=sum4]").val(score)
}

function calcscore5(){
    var score = 0;
    $(".calc5:checked").each(function(){
        score+=parseInt($(this).val(),10);
    });
    $("input[name=sum5]").val(score)
}

function calcscore6(){
    var score = 0;
    $(".calc6:checked").each(function(){
        score+=parseInt($(this).val(),10);
    });
    $("input[name=sum6]").val(score)
}

function calcscore7(){
    var score = 0;
    $(".calc7:checked").each(function(){
        score+=parseInt($(this).val(),10);
    });
    $("input[name=sum7]").val(score)
}

function calcscore8(){
    var score = 0;
    $(".calc8:checked").each(function(){
        score+=parseInt($(this).val(),10);
    });
    $("input[name=sum8]").val(score)
}

function calcscore9(){
    var score = 0;
    $(".calc9:checked").each(function(){
        score+=parseInt($(this).val(),10);
    });
    $("input[name=sum9]").val(score)
}

function calcscore10(){
    var score = 0;
    $(".calc10:checked").each(function(){
        score+=parseInt($(this).val(),10);
    });
    $("input[name=sum10]").val(score)
}



function cuenta(){
	r = new clockCountdown('clock',{'dias':0,'horas':4,'minutos':0,'segundos':0});
}


function cuentaChecksA1(){
    var score = 0;
    $(".calc:checked").each(function(){
        score+=parseInt($(this).length);
    });
    $(".cambiar1").text(score)

		var rb = $(".calc:checked");
		if (rb.length == totalPreguntas) {
			$("#ver1").removeClass("panel-warning");
			$("#ver1").removeClass("panel-primary");
	    $("#ver1").addClass("panel-success");
			$(".badge1").removeClass("label-warning");
			$(".badge1").removeClass("label-info");
			$(".badge1").addClass("label-success");
			$("#mensaje1").fadeOut();
		}else {
			$(".badge1").removeClass("label-info");
			$(".badge1").addClass("label-warning");
		}
}

function cuentaChecksA2(){
    var score = 0;
    $(".calc2:checked").each(function(){
        score+=parseInt($(this).length);
    });
    $(".cambiar2").text(score)

		var rb = $(".calc2:checked");
		if (rb.length == totalPreguntas) {
			$("#ver2").removeClass("panel-warning");
			$("#ver2").removeClass("panel-primary");
	    $("#ver2").addClass("panel-success");
			$(".badge2").removeClass("label-warning");
			$(".badge2").removeClass("label-info");
			$(".badge2").addClass("label-success");
			$("#mensaje2").fadeOut();
		}else {
			$(".badge2").removeClass("label-info");
			$(".badge2").addClass("label-warning");
		}
}

function cuentaChecksA3(){
    var score = 0;
    $(".calc3:checked").each(function(){
        score+=parseInt($(this).length);
    });
    $(".cambiar3").text(score)

		var rb = $(".calc3:checked");
		if (rb.length == totalPreguntas) {
			$("#ver3").removeClass("panel-warning");
			$("#ver3").removeClass("panel-primary");
	    $("#ver3").addClass("panel-success");
			$(".badge3").removeClass("label-warning");
			$(".badge3").removeClass("label-info");
			$(".badge3").addClass("label-success");
			$("#mensaje3").fadeOut();
		}else {
			$(".badge3").removeClass("label-info");
			$(".badge3").addClass("label-warning");
		}
}

function cuentaChecksA4(){
    var score = 0;
    $(".calc4:checked").each(function(){
        score+=parseInt($(this).length);
    });
    $(".cambiar4").text(score)

		var rb = $(".calc4:checked");
		if (rb.length == totalPreguntas) {
			$("#ver4").removeClass("panel-warning");
			$("#ver4").removeClass("panel-primary");
	    $("#ver4").addClass("panel-success");
			$(".badge4").removeClass("label-warning");
			$(".badge4").removeClass("label-info");
			$(".badge4").addClass("label-success");
			$("#mensaje4").fadeOut();
		}else {
			$(".badge4").removeClass("label-info");
			$(".badge4").addClass("label-warning");
		}
}

function cuentaChecksA5(){
    var score = 0;
    $(".calc5:checked").each(function(){
        score+=parseInt($(this).length);
    });
    $(".cambiar5").text(score)

		var rb = $(".calc5:checked");
		if (rb.length == totalPreguntas) {
			$("#ver5").removeClass("panel-warning");
			$("#ver5").removeClass("panel-primary");
	    $("#ver5").addClass("panel-success");
			$(".badge5").removeClass("label-warning");
			$(".badge5").removeClass("label-info");
			$(".badge5").addClass("label-success");
			$("#mensaje5").fadeOut();
		}else {
			$(".badge5").removeClass("label-info");
			$(".badge5").addClass("label-warning");
		}
}

function cuentaChecksA6(){
    var score = 0;
    $(".calc6:checked").each(function(){
        score+=parseInt($(this).length);
    });
    $(".cambiar6").text(score)

		var rb = $(".calc6:checked");
		if (rb.length == totalPreguntas) {
			$("#ver6").removeClass("panel-warning");
			$("#ver6").removeClass("panel-primary");
	    	$("#ver6").addClass("panel-success");
			$(".badge6").removeClass("label-warning");
			$(".badge6").removeClass("label-info");
			$(".badge6").addClass("label-success");
			$("#mensaje6").fadeOut();
		}else {
			$(".badge6").removeClass("label-info");
			$(".badge6").addClass("label-warning");
		}
}

function cuentaChecksA7(){
    var score = 0;
    $(".calc7:checked").each(function(){
        score+=parseInt($(this).length);
    });
    $(".cambiar7").text(score)

		var rb = $(".calc7:checked");
		if (rb.length == totalPreguntas) {
			$("#ver7").removeClass("panel-warning");
			$("#ver7").removeClass("panel-primary");
	    	$("#ver7").addClass("panel-success");
			$(".badge7").removeClass("label-warning");
			$(".badge7").removeClass("label-info");
			$(".badge7").addClass("label-success");
			$("#mensaje7").fadeOut();
		}else {
			$(".badge7").removeClass("label-info");
			$(".badge7").addClass("label-warning");
		}
}

function cuentaChecksA8(){
    var score = 0;
    $(".calc8:checked").each(function(){
        score+=parseInt($(this).length);
    });
    $(".cambiar8").text(score)

		var rb = $(".calc8:checked");
		if (rb.length == totalPreguntas) {
			$("#ver8").removeClass("panel-warning");
			$("#ver8").removeClass("panel-primary");
	    	$("#ver8").addClass("panel-success");
			$(".badge8").removeClass("label-warning");
			$(".badge8").removeClass("label-info");
			$(".badge8").addClass("label-success");
			$("#mensaje8").fadeOut();
		}else {
			$(".badge8").removeClass("label-info");
			$(".badge8").addClass("label-warning");
		}
}

function cuentaChecksA9(){
    var score = 0;
    $(".calc9:checked").each(function(){
        score+=parseInt($(this).length);
    });
    $(".cambiar9").text(score)

		var rb = $(".calc9:checked");
		if (rb.length == totalPreguntas) {
			$("#ver9").removeClass("panel-warning");
			$("#ver9").removeClass("panel-primary");
	    	$("#ver9").addClass("panel-success");
			$(".badge9").removeClass("label-warning");
			$(".badge9").removeClass("label-info");
			$(".badge9").addClass("label-success");
			$("#mensaje9").fadeOut();
		}else {
			$(".badge9").removeClass("label-info");
			$(".badge9").addClass("label-warning");
		}
}

function cuentaChecksA10(){
    var score = 0;
    $(".calc10:checked").each(function(){
        score+=parseInt($(this).length);
    });
    $(".cambiar10").text(score)

		var rb = $(".calc10:checked");
		if (rb.length == totalPreguntas) {
			$("#ver10").removeClass("panel-warning");
			$("#ver10").removeClass("panel-primary");
	    	$("#ver10").addClass("panel-success");
			$(".badge10").removeClass("label-warning");
			$(".badge10").removeClass("label-info");
			$(".badge10").addClass("label-success");
			$("#mensaje10").fadeOut();
		}else {
			$(".badge10").removeClass("label-info");
			$(".badge10").addClass("label-warning");
		}
}

function rgResult() {
    var rb = $(".calc10:checked");
    if (rb.length == totalPreguntas) {
        $("#mensaje").html("");
        var datos = "action=evalua&" + $("#formexamen").serialize();
        $.post("../controlador/examenControl.php", datos, function(data) {
            $('#mensaje').html(data);
        });
    } else {
        $("#ver10").removeClass("panel-primary");
        $("#ver10").addClass("panel-warning");
        $(".badge10").removeClass("label-info");
        $(".badge10").addClass("label-warning");
        alert('¡Contesta todas las preguntas!');
        return false;
    }
}

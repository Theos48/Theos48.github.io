<?php
require_once "../ruta.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta. '/Modelo/Beans/formulario.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta. '/Modelo/Bo/formularioBo.php';

switch ($_POST['action']) {
    case "mdformularioregistra":
    	$formulario = new formulario();
        $bo=new formularioBo();
    	$r=$bo->getFormularioRegistraBo($formulario);
    	print $r;
    	break;
    case "mdformulariologin":
        $formulario = new formulario();
        $bo=new formularioBo();
        $r=$bo->getFormularioLoginBo($formulario);
        print $r;
        break;
    case "mdformulariopregunta":
        $formulario = new formulario();
        $bo=new formularioBo();
        $r=$bo->getFormularioPregunta($formulario);
        print $r;
        break;
}
?>

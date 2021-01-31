<?php
require_once "../ruta.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta. '/Modelo/Beans/aspirante.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta. '/Modelo/Bo/aspiranteBo.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta. '/Modelo/Beans/formulario.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta. '/Modelo/Bo/formularioBo.php';

switch ($_REQUEST['action']) {    
    case "registra":
        $aspirante=new aspirante();
        $aspirante->nombre=$_POST['nombre'];
        $aspirante->apaterno=$_POST['apaterno'];
        $aspirante->amaterno=$_POST['amaterno'];
        $aspirante->fnacimiento=$_POST['fnacimiento'];
        $aspirante->folio=$_POST['folio'];
        $aspirante->clave=$_POST['clave'];
        $aspirante->correo=$_POST['correo'];
        $aspirante->tipo=$_POST['tipo'];        
        $bo=new aspiranteBo();
        $r = $bo->registrarAspiranteBo($aspirante);
        print($r);
        break;
    case "guarda":
        $aspirante=new aspirante();
        $aspirante->id=$_POST['id'];
        $aspirante->nombre=$_POST['nombre'];
        $aspirante->apaterno=$_POST['apaterno'];
        $aspirante->amaterno=$_POST['amaterno'];
        $aspirante->fnacimiento=$_POST['fnacimiento'];
        $aspirante->folio=$_POST['folio'];
        $aspirante->clave=$_POST['clave'];
        $aspirante->correo=$_POST['correo'];          
        $bo=new aspiranteBo();
        $r = $bo->actualizarAspiranteBo($aspirante);
        print($r);
        break;
    case "elimina":
        $aspirante = new aspirante();
        $aspirante->id=$_POST['id'];
         $bo=new aspiranteBo();
        $r=$bo->eliminaAspiranteBo($aspirante);
        print $r;
        break;
    case "actualiza":
        $aspirante = new aspirante();
        $aspirante->id=$_POST['id'];
        $bo=new aspiranteBo();
        $r=$bo->traeDatosAspiranteBo($aspirante);
        print $r;
        break;
    case "mdformularioregistra":
    	$formulario = new formulario();
        $bo=new formularioBo();
    	$r=$bo->getFormularioRegistraBo($formulario);
    	print $r;
        break;

/* Áreas */
    case "traearea":
        $id=$_POST['id'];
        $bo=new aspiranteBo();
        $r=$bo->traeDatosAreaBo($id);
    	print $r;
        break;
    case "guardaarea":        
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];          
        $bo=new aspiranteBo();
        $r = $bo->actualizarAreaBo($id, $nombre);
        print($r);
        break;
/* /Áreas */        
}
?>

<?php
require_once "../ruta.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta. '/Modelo/Beans/usuario.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta. '/Modelo/Bo/usuarioBo.php';

switch ($_POST['action']) {
    case "login":
        $usuario=new usuario();        
        $usuario->usuario=$_POST['usu'];
        $usuario->password=$_POST['pwd'];              
        $bo=new usuarioBo();
        $r=$bo->identificarUsuarioBo($usuario);
        print $r;          
        break;    
}
?>

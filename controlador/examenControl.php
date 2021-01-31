<?php
session_start();

require_once "../ruta.php";
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta. '/Modelo/Beans/examen.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta. '/Modelo/Bo/examenBo.php';

switch ($_REQUEST['action']) {    
    case "evalua":
        $examen=new examen();    
        $examen->suma=$_POST['sum']+$_POST['sum2']+$_POST['sum3']+$_POST['sum4']+$_POST['sum5']+$_POST['sum6']+$_POST['sum7']+$_POST['sum8']+$_POST['sum9']+$_POST['sum10'];  
        $examen->r1=$_POST['sum'];
        $examen->r2=$_POST['sum2'];
        $examen->r3=$_POST['sum3'];
        $examen->r4=$_POST['sum4'];
        $examen->r5=$_POST['sum5'];         
        $examen->r6=$_POST['sum6'];         
        $examen->r7=$_POST['sum7'];         
        $examen->r8=$_POST['sum8'];         
        $examen->r9=$_POST['sum9'];         
        $examen->r10=$_POST['sum10'];         
        $examen->id= $_SESSION['idaspirante'];
        $bo=new examenBo();
        $r = $bo->registrarResultadoBo($examen);
        print($r);
        break;
}
?>
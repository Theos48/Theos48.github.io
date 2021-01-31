<?php
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta.'/Modelo/Dao/conexion.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta.'/Modelo/Beans/examen.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta.'/Modelo/Dao/procesaParametros.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta.'/Modelo/Dao/examen/examenSql.php';
class examenDao
{
    private $con;
    private $mensaje;

    function __construct() {
        $this->con=  conexion::conectar();
    }
    function __destruct() {
        $this->con->close();
    }    

    function  registrarResultadoDao($examen)
    {    
        $datosArray1=array($examen->id);
        
        $Pp1 = procesaParametros::PrepareStatement(examenSql::traeAspiranteId(), $datosArray1);
        $query1= $this->con->query($Pp1);
        $query1->data_seek(0);
        $row=$query1->fetch_array();        
        $r=$row['presento'];
        
        if($r == 0){            
            $datosArray=array($examen->suma,$examen->r1,$examen->r2,$examen->r3,$examen->r4,$examen->r5,$examen->r6,$examen->r7,$examen->r8,$examen->r9,$examen->r10,$examen->id);         
            $st=  procesaParametros::PrepareStatement(examenSql::registrarResultado(),$datosArray);           

            $query=$this->con->query($st);  
            
            if($query!=false){ 
              $datosArray2=array($examen->id);
              $st2= procesaParametros::PrepareStatement(examenSql::actualizarPresento(),$datosArray2);            
              
              $query2=$this->con->query($st2);
              
              $mensaje='<div class="alert alert-dismissible alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Bien hecho!</strong> Ahora ya puedes ver los <a href="panel-aspirante.php">resultados</a> que obtuviste, buena suerte. :)
              </div>';                                                      
            }else{
                $mensaje='<div class="alert alert-dismissible alert-danger">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <h4>Error!</h4>
              <p>Ocurrio un error, intentalo de nuevo. :(</p>
              </div>';
            }
                              
        }else {
            $mensaje='<div class="alert alert-dismissible alert-warning">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <h4>Ops!</h4>
              <p>Ya presentaste el examen. :|</p>
              </div>';  
        }
        return $mensaje;       
    }
}
?>

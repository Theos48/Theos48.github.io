<?php
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta.'/Modelo/Dao/conexion.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta.'/Modelo/Beans/pregunta.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta.'/Modelo/Dao/procesaParametros.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta.'/Modelo/Dao/pregunta/preguntaSql.php';
class preguntaDao
{
    private $con;
    private $mensaje;

    function __construct() {
        $this->con=  conexion::conectar();
    }
    function __destruct() {
        $this->con->close();
    }    

    function  registrarPreguntaDao($pregunta)
    {        

        $datosArray=array($pregunta->txt,$pregunta->r1,$pregunta->val1,$pregunta->r2,$pregunta->val2,$pregunta->r3,$pregunta->val3,$pregunta->r4,$pregunta->val4,$pregunta->ida);

        $st=  procesaParametros::PrepareStatement(preguntasSql::registrarPregunta(),$datosArray);

        $query=$this->con->query($st);
        if($query!=false){            
          $mensaje='<div class="alert alert-dismissible alert-success">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Bien hecho!</strong> Tu pregunta ha sido registrada correctamente.
          </div>';                  
          return $mensaje;          
        }
          $mensaje='<div class="alert alert-dismissible alert-warning">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <h4>Error!</h4>
          <p>Ocurrio un error, intentalo de nuevo.</p>
          </div>';  
          return $mensaje;
    }
}
?>

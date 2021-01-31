<?php
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta.'/Modelo/Dao/conexion.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta.'/Modelo/Beans/aspirante.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta.'/Modelo/Dao/procesaParametros.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta.'/Modelo/Dao/aspirante/aspiranteSql.php';
class aspiranteDao
{
    private $con;
    private $mensaje;

    function __construct() {
        $this->con=  conexion::conectar();
    }
    function __destruct() {
        $this->con->close();
    }    

    function  registrarAspiranteDao($aspirante){        

        $datosArray=array($aspirante->nombre,$aspirante->apaterno,$aspirante->amaterno,$aspirante->fnacimiento,$aspirante->folio,$aspirante->clave,$aspirante->correo,$aspirante->tipo);

        $st=  procesaParametros::PrepareStatement(aspirantesSql::registrarAspirante(),$datosArray);

        $query=$this->con->query($st);
        if($query!=false){            
          $mensaje='<div class="alert alert-dismissible alert-success">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Bien hecho!</strong> Usuario registrado correctamente.
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
    
    function actualizarAspiranteDao($aspirante){
        $datosArray=array($aspirante->nombre,$aspirante->apaterno,$aspirante->amaterno,$aspirante->fnacimiento,$aspirante->folio,$aspirante->clave,$aspirante->correo,$aspirante->id);

        $st=  procesaParametros::PrepareStatement(aspirantesSql::actualizarAspirante(),$datosArray);

        $query=$this->con->query($st);
        if($query!=false){            
          $mensaje='<div class="alert alert-dismissible alert-success">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Bien hecho!</strong> Cambios guardados correctamente.
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
    
    function eliminarAspiranteDao($aspirante){
        $datosArray1 = array($aspirante->id);
        
        $st1 = procesaParametros::PrepareStatement(aspirantesSql::eliminarAspirante(), $datosArray1);
        
        $query1=$this->con->query($st1);
        if($query1!=false){
            $mensaje='<div class="alert alert-dismissible alert-success">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Todo bien!</strong> El usuario ha sido eliminado correctamente.
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
    
    function traeDatosAspiranteDao($datos){
      $datosArray = array ($datos->id);
      $Pp = procesaParametros::PrepareStatement(aspirantesSql::traerDatosIdSql(), $datosArray);
      $query= $this->con->query($Pp);                  
      $query->data_seek(0);
      $row=$query->fetch_array();
      $lista= new aspirante();
      $lista-> id =$row['idAspirante'];
      $lista-> nombre =$row['nombre'];
      $lista-> apaterno =$row['paterno'];      
      $lista-> amaterno = $row['materno'];
      $lista-> fnacimiento =$row['fnacimiento'];
      $lista-> folio =$row['folio'];
      $lista-> clave =$row['password'];
      $lista-> correo =$row['correo'];
      $lista-> tipo =$row['status'];
      return $lista;
    }

    function traeDatosAreaDao($id){
      $cad = "";
      $st = "SELECT * FROM area WHERE idArea = '$id'";

      $query= $this->con->query($st); 

        while ($row =  mysqli_fetch_array($query) ) {

          $cad = '
          <div class="container">
          <form id="formarea">
          <fieldset>
            <legend>Actualizar datos de área</legend>
          <div class="form-group">
            <div class="col-lg-12">
              <div class="form-group">
                <label class="control-label" for="inputDefault">Nombre</label>
                <input type="text" class="form-control" id="inputDefault" name="nombre" value="'.$row['nombre'].'">
              </div>
            </div>
          
          <div class="form-group">
            <div class="col-md-12">
              <input type="text" hidden name="id" value="'.$row['idArea'].'"> 
              <button type="button" class="btn btn-success btn-block" onclick="upArea()">Guardar cambios</button>
            </div>
          </div>

        </div>
        </fieldset>
        </form>
        </div>';
      }

    return $cad;
    }

    function actualizarAreaDao($id, $nombre){
      $st = "UPDATE area SET nombre='$nombre' WHERE idArea = '$id'";

      $query=$this->con->query($st);
        if($query!=false){            
          $result='<div class="alert alert-dismissible alert-success">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Bien hecho!</strong> Cambios guardados correctamente.
          </div>';                                    
        }else{
          $result='<div class="alert alert-dismissible alert-warning">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>¡Error!</strong> Ocurrio un error, inténtalo de nuevo.
          </div>'; 
        }
        return $result;
    }

}
?>
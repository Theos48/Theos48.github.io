<?php
ini_set('display_errors', 1);
error_reporting( E_ALL | E_STRICT );
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta.'/Modelo/Dao/conexion.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta.'/Modelo/Beans/usuario.php';

require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta.'/Modelo/Dao/procesaParametros.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta.'/Modelo/Dao/usuario/usuariosSql.php';
class usuarioDao
{
    private $con;
    private $mensaje;

    function __construct() {
        $this->con=  conexion::conectar();
    }
    function __destruct() {
        $this->con->close();
    }

    function  identificarUsuario($usuario)
    {
        $datosArray=array($usuario->usuario,$usuario->password);
        if( $usuario->usuario == '' || $usuario->password == ''){
           $mensaje='<div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <h4>Error!</h4>
          <p>El usuario y la contraseña no pueden estar vacios, intentalo de nuevo.</p>
          </div>';
        return $mensaje;
        }else{
            $st=  procesaParametros::PrepareStatement(usuariosSql::indentificarUsuario(),$datosArray);

        $query=$this->con->query($st);
        if($query->num_rows==0){
            $mensaje='<div class="alert alert-dismissible alert-warning">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <h4>Error!</h4>
          <p>Usuario y/o clave incorrectos, intentalo de nuevo.</p>
          </div>';
        return $mensaje;
        }
            $row = mysqli_fetch_array($query);        
            if ($row['status'] == 1 || $row['status'] == 0) {
                   session_start();
                   // creamos la variable de sesion y le asignamos el valor de la fila
                   $_SESSION['idaspirante'] = $row['idAspirante']; 
                   $_SESSION['nombre'] = $row['nombre']; 
                   $_SESSION['status'] = $row['status']; 
                   // redirecionamos al usuario dependiendo de su status
                    if ($_SESSION['status'] == 1) {                        
                        print "<script>window.location='panel-aspirante.php';</script>";
                    }else if ($_SESSION['status'] == 0) {                        
                        print "<script>window.location='panel-administracion.php';</script>";
                    }
            }else { 
              $mensaje="La cuenta de usuario est&acirc; inhabilitada";
              return $mensaje;
            }            
        }       
    }

    function  registrarUsuarioDao($usuario)
    {
        $datosArray=array($usuario->usuario,$usuario->password);

        $st=  procesaParametros::PrepareStatement(usuariosSql::registrarUsuario(),$datosArray);

        $query=$this->con->query($st);
        if($query!=false){
          $mensaje="Usuario registrado correctamente";          
          return $mensaje;
        }
            $mensaje="Ocurrio un error intentalo de nuevo";            
            return $mensaje;
    }
}
?>

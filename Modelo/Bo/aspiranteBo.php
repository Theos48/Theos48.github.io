<?php
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta. '/Modelo/Dao/aspirante/aspiranteDao.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta. '/vista/logicavista/vistaUsuario.php';

class aspiranteBo
{
    var $dao;
    function __construct() {
        $this->dao=new aspiranteDao();
        $this->varVista = new vistalogica();
    }
    
    function registrarAspiranteBo($aspirante){
      $resultado= $this->dao->registrarAspiranteDao($aspirante);
      return $resultado;
    }
    
    function eliminaAspiranteBo($aspirante){
      $resultado = $this->dao->eliminarAspiranteDao($aspirante);
      return $resultado;
    }
    
    function traeDatosAspiranteBo($aspirante){
      $resultado = $this->dao->traeDatosAspiranteDao($aspirante);
      return $this->varVista->vistaActualizar($resultado);
    }
    
    function actualizarAspiranteBo($aspirante){
        $resultado = $this->dao->actualizarAspiranteDao($aspirante);
        return $resultado;
    }

/* Áreas */
    function traeDatosAreaBo($id){
       $resultado = $this->dao->traeDatosAreaDao($id);
        return $resultado;
    }

    function actualizarAreaBo($id, $nombre){
        $resultado = $this->dao->actualizarAreaDao($id, $nombre);
        return $resultado;
    }
/* /Áreas */
}
?>

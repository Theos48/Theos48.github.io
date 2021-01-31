<?php
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta. '/Modelo/Dao/examen/examenDao.php';
class examenBo
{
    var $dao;
    function __construct() {
        $this->dao=new examenDao();
    }
    
    function registrarResultadoBo($examen){
      $resultado= $this->dao->registrarResultadoDao($examen);
      return $resultado;
    }
}
?>

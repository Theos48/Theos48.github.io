<?php
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta. '/Modelo/Dao/pregunta/preguntaDao.php';
class preguntaBo
{
    var $dao;
    function __construct() {
        $this->dao=new preguntaDao();
    }
    
    function registrarPreguntaBo($pregunta){
      $resultado= $this->dao->registrarPreguntaDao($pregunta);
      return $resultado;
    }
}
?>

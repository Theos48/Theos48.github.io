<?php
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta. '/Modelo/Dao/usuario/usuariosDao.php';
class usuarioBo
{
    var $dao;
    function __construct() {
        $this->dao=new usuarioDao();
    }

    function identificarUsuarioBo($usuario)
    {
      $resultado= $this->dao->identificarUsuario($usuario);
      return $resultado;
    }

    function registrarUsuarioBo($usuario){
      $resultado= $this->dao->registrarUsuarioDao($usuario);
      return $resultado;
    }
}
?>

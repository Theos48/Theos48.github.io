<?php

require_once $_SERVER['DOCUMENT_ROOT'] . ruta::ruta . "/vista/logicavista/traerFormularioUsuario.php";

class formularioBo {

    private $vista;

    function __construct() {
        $this->vista = new vistaUsuario();
    }

    function getFormularioRegistraBo($r) {
    	return $this->vista->getFormularioRegistra($r);
    }

    function getFormularioLoginBo($r) {
    	return $this->vista->getFormularioLogin($r);    
    }   
    
    function getFormularioPregunta($r){
      return $this->vista->getFormularioPregunta($r);  
    }

}

?>

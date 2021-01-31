<?php
class aspirante
{
    var $id;
    var $nombre;
    var $apaterno;
    var $amaterno;
    var $fnacimiento;
    var $folio;
    var $clave;
    var $correo;
    var $tipo;        

    private $data;
    
    public function __set($name, $value)   {
        $this->data[$name] = $value;    
    }

    public function __get($name) {
        if(array_key_exists($name, $this->data)){
            return $this->data[$name];
            return null;
        }
    }
}
?>

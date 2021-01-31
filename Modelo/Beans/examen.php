<?php
class examen
{
    var $suma; 
    var $r1;
    var $r2;
    var $r3;
    var $r4;
    var $r5;    
    var $r6;    
    var $r7;    
    var $r8;    
    var $r9;    
    var $r10;    
    var $id;
    var $pre;

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

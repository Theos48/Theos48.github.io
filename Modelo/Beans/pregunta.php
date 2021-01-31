<?php
class pregunta
{
    var $txt;
    var $r1;
    var $va1;
    var $r2;
    var $val2;
    var $r3;
    var $val3;
    var $r4;
    var $val4;
    var $ida;

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

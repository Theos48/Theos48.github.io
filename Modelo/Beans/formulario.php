<?php

class formulario {

    private $data;

    public function _set($name, $value) {
        $this->data[$name] = $value;
    }

    public function _get($name) {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
            return null;
        }
    }

}

?>

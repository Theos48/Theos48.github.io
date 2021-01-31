<?php
class usuariosSql
{
    public static function  indentificarUsuario()
    {
        $query="SELECT * FROM aspirante WHERE folio=? AND password=?";
        return $query;
    }

    public static function  registrarUsuario()
    {
        $query="INSERT INTO usuario(usuario,password)VALUES(?,?)";
        return $query;
    }
}
?>

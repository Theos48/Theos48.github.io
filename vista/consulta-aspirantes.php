<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title></title>
    <!--CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <!--Javascript-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/dt.js"></script>    
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</head>

<body>
<div class="container">
    <div class="col-md-12 ">
        <h3>Listado de aspirantes
            <a href="#" class="btn btn-danger pull-right menu" onclick="mdformregistra()"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Nuevo aspirante</a>
        </h3>  
    </div>
    
    <div class="col-md-12">
        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th>Folio</th>
                    <th>Nombre</th>
                    <th>A. paterno</th>
                    <th>A. materno</th>
                    <th>F. nacimiento</th>
                    <th>Usuario</th>
                    <th>Clave</th>
                    <th>Correo</th>
                    <th>Permisos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
            require_once 'acceso_mysqli.php';
            
            $consulta = "SELECT * FROM aspirante";
            
            if($resultado = $mysqli->query($consulta)){
                /* Obtener el array de objetos*/
                while($obj = $resultado->fetch_object())
                { ?>
                    <tr>
                        <td>
                            <?php print($obj->idAspirante);?>
                        </td>
                        <td>
                            <?php print($obj->nombre);?>
                        </td>
                        <td>
                            <?php print($obj->paterno);?>
                        </td>
                        <td>
                            <?php print($obj->materno);?>
                        </td>
                        <td>
                            <?php print($obj->fnacimiento);?>
                        </td>
                        <td>
                            <?php print($obj->folio);?>
                        </td>
                        <td>
                            <?php print($obj->password);?>
                        </td>                        
                        <td>
                            <?php print($obj->correo);?>
                        </td>
                        <td>
                            <?php print($obj->status);?>
                        </td>
                        <td>
                            <!--<a href="del.php?id=<?php print($obj->idAspirante);?>" onclick="return confirm('¿Seguro que desea eliminar este usuario?')" class="btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i></a>-->
                            <a href="#" onclick="modAspirante(<?php print($obj->idAspirante);?>)" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a href="#" onclick="delAspirante(<?php print($obj->idAspirante);?>)" class="btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    <?php }
            /* Liberar el conjunto de resultados*/
            $resultado->close();
            } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Folio</th>
                    <th>Nombre</th>
                    <th>A. paterno</th>
                    <th>A. materno</th>
                    <th>F. nacimiento</th>
                    <th>Usuario</th>
                    <th>Clave</th>
                    <th>Correo</th>
                    <th>Permisos</th>
                    <th>Acciones</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
</body>

</html>
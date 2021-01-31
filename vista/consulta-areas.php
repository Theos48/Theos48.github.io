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
    <div class="col-md-12">
        <h3>Listado de áreas</h3>  
    </div>
    
    <div class="col-md-12">
        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Editar</th>                    
                </tr>
            </thead>
            <tbody>
            <?php
            require_once 'acceso_mysqli.php';
            
            $consulta = "SELECT * FROM area";
            
            if($resultado = $mysqli->query($consulta)){
                /* Obtener el array de objetos*/
                while($obj = $resultado->fetch_object())
                { ?>
                    <tr>
                        <td>
                            <?php print($obj->idArea);?>
                        </td>
                        <td>
                            <?php print($obj->nombre);?>
                        </td>                        
                        <td>                            
                            <a href="#" onclick="modArea(<?php print($obj->idArea);?>)" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></a>                           
                        </td>
                    </tr>
                    <?php }
            /* Liberar el conjunto de resultados*/
            $resultado->close();
            } ?>
            </tbody>
            <tfoot>
                <tr>
                   <th>Id</th>
                    <th>Nombre</th>
                    <th>Editar</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
</body>

</html>
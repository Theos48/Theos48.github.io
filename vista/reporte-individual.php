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
        
		  <h3>Listado de resultados individual</h3>
    
  
    </div>
    <div class="col-md-12">
        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Reporte</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php
            require_once 'acceso_mysqli.php';
            
            $consulta = "SELECT * FROM aspirante where presento=1 AND status = 1";
            
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
                            
                            <a href="reporte.php?id=<?php print($obj->idAspirante);?>" target="_blank" class="btn btn-info"><i class="fa fa-line-chart" aria-hidden="true"></i></a> 
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
                    <th>Apellido paterno</th>
                    <th>Apeliido materno</th>
                    <th>Reporte</th>
                    
                </tr>
            </tfoot>
        </table>
    </div>
</div>
</body>

</html>
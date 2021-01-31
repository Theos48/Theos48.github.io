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
        <h3>Listado de preguntas</h3>  
    </div>
    
    <div class="col-md-12">
        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Pregunta</th>
                    <th>Respuesta 1</th>
                    <th>Valor</th>
                    <th>Respiesta 2</th>
                    <th>valor</th>
                    <th>Respuesta 3</th>
                    <th>Valor</th>
                    <th>Respuesta 4</th>
                    <th>Valor</th>
                    <th>Área</th>                    
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
            require_once 'acceso_mysqli.php';
            
            $consulta = "SELECT * FROM pregunta";
            
            if($resultado = $mysqli->query($consulta)){
                /* Obtener el array de objetos*/
                while($obj = $resultado->fetch_object())
                { ?>
                    <tr>
                        <td>
                            <?php print($obj->idPregunta);?>
                        </td>
                        <td>
                            <?php print($obj->texto);?>
                        </td>
                        <td>
                            <?php print($obj->respuesta1);?>
                        </td>
                        <td>
                            <?php print($obj->valor1);?>
                        </td>
                        <td>
                            <?php print($obj->respuesta2);?>
                        </td>
                        <td>
                            <?php print($obj->valor2);?>
                        </td>
                        <td>
                            <?php print($obj->respuesta3);?>
                        </td>
                        <td>
                            <?php print($obj->valor3);?>
                        </td>                        
                        <td>
                            <?php print($obj->respuesta4);?>
                        </td>
                        <td>
                            <?php print($obj->valor4);?>
                        </td>
                        <td>
                            <?php print($obj->idArea);?>
                        </td>
                        <td>
                            <a href="del.php?idpre=<?php print($obj->idPregunta);?>" onclick="return confirm('¿Seguro que desea eliminiar esta pregunta?')" class="btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i></a>
<!--                            <a href="#" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></a>-->
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
                    <th>Pregunta</th>
                    <th>Respuesta 1</th>
                    <th>Valor</th>
                    <th>Respiesta 2</th>
                    <th>valor</th>
                    <th>Respuesta 3</th>
                    <th>Valor</th>
                    <th>Respuesta 4</th>
                    <th>Valor</th>
                    <th>Ärea</th>
                    <th>Acciones</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
</body>

</html>
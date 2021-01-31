<?php
session_start();
require_once "acceso_mysqli.php";
$var = $_GET['id'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <script type="text/javascript" language="javascript" src="js/bootstrap.js"></script>
    <script src="js/jquery.js"></script>
    <script src="libs/Highcharts/js/highcharts.js"></script>
    <script src="libs/Highcharts/js/highcharts-3d.js"></script>
    <script src="libs/Highcharts/js/modules/exporting.js"></script>
    <script>
    $(function () {
  // Create the chart

  $('#container').highcharts({
      chart: {
          type: 'pie'
      },
      title: {
          text: 'Indice de asertividad.'
      },
      subtitle: {
          text: 'Detalles'
      },
      plotOptions: {
          series: {
              dataLabels: {
                  enabled: true,
                  format: '{point.name}: {point.y:.1f}%'
              }
          }
      },

      tooltip: {
          headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
          pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> total en el examen<br/>'
      },
      series: [{
          name: 'TELECOMM',
          colorByPoint: true,
          data: [
              <?php 
             
              $sql = $mysqli->query("select totalRespuestas*100/100 as aciertos, (1000-totalRespuestas)*(100)/1111 as errores from resultado where idAspirante=$var;");
          
              while($obj = $sql->fetch_object())
              { ?>
              ['Aciertos',<?php printf($obj->aciertos);?>],
              ['Errores',<?php printf($obj->errores);?>],
              
              <?php } $sql->close();?>
              
          ]
      }]
  });
});
    </script>
    
  </head>
  <body>
    <?php
   
    $consulta = "SELECT presento FROM aspirante WHERE idAspirante = $var;";
    $resultado = $mysqli->query($consulta);
    $obj = $resultado->fetch_object();
    $r = $obj->presento;
    $resultado->close();

    if(isset($_SESSION['nombre']) && $_SESSION['status'] == 0 && $r == 1) {
     
      $sql = "select resultado.fecha as faplicacion, resultado.totalRespuestas as aciertos, resultadoA1,resultadoA2,resultadoA3,resultadoA4,resultadoA5, resultadoA6, resultadoA7, resultadoA8, 
      resultadoA9, resultadoA10, porcentaje(resultadoA1,100) as porcientoA1, porcentaje(resultadoA2,100) as porcientoA2, porcentaje(resultadoA3,100) as porcientoA3, 
      porcentaje(resultadoA4,100) as porcientoA4, porcentaje(resultadoA5,100) as porcientoA5, porcentaje(resultadoA6,100) as porcientoA6, porcentaje(resultadoA7,100) as porcientoA7, 
      porcentaje(resultadoA8,100) as porcientoA8, porcentaje(resultadoA9,100) as porcientoA9, porcentaje(resultadoA10,100) as porcientoA10, 
      CONCAT(aspirante.nombre,' ',aspirante.paterno,' ',aspirante.materno) as alumno, aspirante.idAspirante as folio, institucion.nombre as escuela, 
      institucion.direccion as direccion, institucion.CCT as cct from resultado join aspirante using(idAspirante) join institucion using(idInstitucion) where idAspirante = $var;";

      if($r = $mysqli->query($sql)){
          /* Obtener el array de objetos*/

          $obj = $r->fetch_object();

    ?>
      <div class="container">          
          <div class="col-md-2 col-md-offset-10"><a href="#" onclick="javascript:window.print();"><i class="fa fa-print fa-3x" aria-hidden="true"></i> Imprimir</a>&nbsp;</div>          
    <div class="col-md-12">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">            
          REPORTE INDIVIDUAL DE RESULTADOS          
        </div>
      </div>
    </div>
    <div class="row-fluid">

      <div class="col-md-6">
        <div class="panel panel-default" id="container">
          </div>
        </div>


      <div class="col-md-6">
        <div class="row-fluid">
          <div class="panel panel-primary">
            <div class="panel-heading text-center">Datos del aspirante</div>
            <div class="panel-body">
              <table class="table table-hover ">
              <tbody>
              <tr>
              <td width="550px" class="text-right">Folio: </td>
              <td width="550px"><strong><?php printf($obj->folio);?></strong></td>
              </tr>
              <tr>
              <td class="text-right">Nombre del sustentante: </td>
              <td><strong><?php printf($obj->alumno);?></strong></td>
              </tr>
              <tr>
              <td class="text-right">Fecha de aplicación: </td>
              <td><strong><?php printf($obj->faplicacion);?></strong></td>
              </tr>            
              </tbody>
              </table>
            </div>
        </div>
        </div>
        <div class="row-fluid">
          <div class="panel panel-primary">
            <div class="panel-heading text-center">Dictamen general en el test de contratación</div>
            <div class="panel-body text-center">
            <?php
              $ans = 0;
              $ds = 0;
              $dss = 0;

              $desempeñoA1 = "";
              $desempeñoA2 = "";
              $desempeñoA3 = "";
              $desempeñoA4 = "";
              $desempeñoA5 = "";
              $desempeñoA6 = "";
              $desempeñoA7 = "";
              $desempeñoA8 = "";
              $desempeñoA9 = "";
              $desempeñoA10 = "";

              if($obj->porcientoA1 <= 79){
                 $ans += 0;
                 $desempeñoA1 = "ANS";
              }elseif($obj->porcientoA1 >= 80 && $obj->porcientoA1 <= 94){
                $ds += 1; 
                $desempeñoA1 = "DS";
              }elseif($obj->porcientoA1 >= 95 && $obj->porcientoA1 <= 100){
                $dss += 1;
                $desempeñoA1 = "DSS";
              }

              if($obj->porcientoA2 <= 79){
                 $ans += 0;
                 $desempeñoA2 = "ANS";
              }elseif($obj->porcientoA2 >= 80 && $obj->porcientoA2<= 94){
                $ds += 1; 
                $desempeñoA2 = "DS";
              }elseif($obj->porcientoA2 >= 95 && $obj->porcientoA2<= 100){
                $dss += 1;
                $desempeñoA2 = "DSS";
              }

              if($obj->porcientoA3 <= 79){
                 $ans += 0;
                 $desempeñoA3 = "ANS";
              }elseif($obj->porcientoA3 >= 80 && $obj->porcientoA3 <= 94){
                $ds += 1; 
                $desempeñoA3 = "DS";
              }elseif($obj->porcientoA3 >= 95 && $obj->porcientoA3 <= 100){
                $dss += 1;
                $desempeñoA3 = "DSS";
              }

              if($obj->porcientoA4 <= 79){
                 $ans += 0;
                 $desempeñoA4 = "ANS";
              }elseif($obj->porcientoA4 >= 80 && $obj->porcientoA4 <= 94){
                $ds += 1; 
                $desempeñoA4 = "DS";
              }elseif($obj->porcientoA4 >= 95 && $obj->porcientoA4 <= 100){
                $dss += 1;
                $desempeñoA4 = "DSS";
              }

              if($obj->porcientoA5 <= 79){
                 $ans += 0;
                 $desempeñoA5 = "ANS";
              }elseif($obj->porcientoA5 >= 80 && $obj->porcientoA5 <= 94){
                $ds += 1;
                $desempeñoA5 = "DS"; 
              }elseif($obj->porcientoA5 >= 95 && $obj->porcientoA5 <= 100){
                $dss += 1;
                $desempeñoA5 = "DSS";
               }

               if($obj->porcientoA6 <= 79){
                 $ans += 0;
                 $desempeñoA6 = "ANS";
              }elseif($obj->porcientoA6 >= 80 && $obj->porcientoA6 <= 94){
                $ds += 1;
                $desempeñoA6 = "DS"; 
              }elseif($obj->porcientoA6 >= 95 && $obj->porcientoA6 <= 100){
                $dss += 1;
                $desempeñoA6 = "DSS";
               }

               if($obj->porcientoA7 <= 79){
                 $ans += 0;
                 $desempeñoA7 = "ANS";
              }elseif($obj->porcientoA7 >= 80 && $obj->porcientoA7 <= 94){
                $ds += 1;
                $desempeñoA7 = "DS"; 
              }elseif($obj->porcientoA7 >= 95 && $obj->porcientoA7 <= 100){
                $dss += 1;
                $desempeñoA7 = "DSS";
               }

               if($obj->porcientoA8 <= 79){
                 $ans += 0;
                 $desempeñoA8 = "ANS";
              }elseif($obj->porcientoA8 >= 80 && $obj->porcientoA8 <= 94){
                $ds += 1;
                $desempeñoA8 = "DS"; 
              }elseif($obj->porcientoA8 >= 95 && $obj->porcientoA8 <= 100){
                $dss += 1;
                $desempeñoA8 = "DSS";
               }

               if($obj->porcientoA9 <= 79){
                 $ans += 0;
                 $desempeñoA9 = "ANS";
              }elseif($obj->porcientoA9 >= 80 && $obj->porcientoA9 <= 94){
                $ds += 1;
                $desempeñoA9 = "DS"; 
              }elseif($obj->porcientoA9 >= 95 && $obj->porcientoA9 <= 100){
                $dss += 1;
                $desempeñoA9 = "DSS";
               }

               if($obj->porcientoA10 <= 79){
                 $ans += 0;
                 $desempeñoA10 = "ANS";
              }elseif($obj->porcientoA10 >= 80 && $obj->porcientoA10 <= 94){
                $ds += 1;
                $desempeñoA10 = "DS"; 
              }elseif($obj->porcientoA10 >= 95 && $obj->porcientoA10 <= 100){
                $dss += 1;
                $desempeñoA10 = "DSS";
               }

               if($dss >= 4 && $ds+$dss == 10){
                 echo "<h4>Sobresaliente</h4>";
               }elseif($ds+$dss >= 8){                 
                 echo "<h4>Satisfactorio</h4>";
               }else{
                 echo "<h4>Aún no satisfactorio</h4>";
               }
            ?>              
            </div>
          </div>
        </div>

    </div>
</div>
    <div class="row-fluid">

      <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">Criterios para el otorgamiento del testimonio de desempeño</div>
          <div class="panel-body">
            <table class="table table-hover ">
              <tbody>
                <tr>
                  <td><strong>Testimonio de Desempeño Satisfactorio (TDS)</strong></td>
                  <td>Al menos ocho áreas con DS o DSS</td>
                </tr>
                <tr>
                  <td><strong>Testimonio de Desempeño Sobresaliente (TDSS)</strong></td>
                  <td>De las diez áreas al menos cuatro con DSS y las restantes con DS</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    
    <div class="row-fluid">
      <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">Desempeño en cada área</div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover">
                <thead>
                  <tr> 
                    <th>
                    </th>
                    <?php
                  $consulta = "SELECT * FROM area LIMIT 10";
            
                  if($resultado = $mysqli->query($consulta)){
                  /* Obtener el array de objetos*/
                      while($objarea = $resultado->fetch_object())
                      { ?>
                        <th><?php print($objarea->nombre);?></th>
                     <?php }
                  /* Liberar el conjunto de resultados*/
                  $resultado->close();
                  } ?>                    
                  </tr>                 
                </thead>
                <tbody>
                  <tr>
                    <td>
                      PORCENTAJE
                    </td>
                    <td><?php printf($obj->porcientoA1);?>%</td>
                    <td><?php printf($obj->porcientoA2);?>%</td>
                    <td><?php printf($obj->porcientoA3);?>%</td>
                    <td><?php printf($obj->porcientoA4);?>%</td>
                    <td><?php printf($obj->porcientoA5);?>%</td>
                    <td><?php printf($obj->porcientoA6);?>%</td>
                    <td><?php printf($obj->porcientoA7);?>%</td>
                    <td><?php printf($obj->porcientoA8);?>%</td>
                    <td><?php printf($obj->porcientoA9);?>%</td>
                    <td><?php printf($obj->porcientoA10);?>%</td>
                  </tr>
                  <tr>
                    <td>
                      ACIERTOS
                    </td>
                    <td><?php printf($obj->resultadoA1);?></td>
                    <td><?php printf($obj->resultadoA2);?></td>
                    <td><?php printf($obj->resultadoA3);?></td>
                    <td><?php printf($obj->resultadoA4);?></td>
                    <td><?php printf($obj->resultadoA5);?></td>
                    <td><?php printf($obj->resultadoA6);?></td>
                    <td><?php printf($obj->resultadoA7);?></td>
                    <td><?php printf($obj->resultadoA8);?></td>
                    <td><?php printf($obj->resultadoA9);?></td>
                    <td><?php printf($obj->resultadoA10);?></td>
                  </tr>
                  <tr>
                    <td>
                      DESEMPEÑO
                    </td>
                    <td><?php printf($desempeñoA1);?></td>
                    <td><?php printf($desempeñoA2);?></td>
                    <td><?php printf($desempeñoA3);?></td>
                    <td><?php printf($desempeñoA4);?></td>
                    <td><?php printf($desempeñoA5);?></td>
                    <td><?php printf($desempeñoA6);?></td>
                    <td><?php printf($desempeñoA7);?></td>
                    <td><?php printf($desempeñoA8);?></td>
                    <td><?php printf($desempeñoA9);?></td>
                    <td><?php printf($desempeñoA10);?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">Criterios para determinar los niveles de resultado</div>
          <div class="panel-body">
            <table class="table table-hover ">
              <tbody>
                <tr>
                  <td><strong>Aún no satisfactorio (ANS) </strong></td>
                  <td>0-79</td>
                </tr>
                <tr>
                  <td><strong>Satisfactorio (DS) </strong></td>
                  <td>80-94</td>
                </tr>
                <tr>
                  <td><strong>Sobresaliente (DSS)  </strong></td>
                  <td>95-100</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
     
    </div>
          </div>
    <?php
  }
  $r->close();
      }else {
       echo "<div class=\"alert alert-dismissible alert-info container\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <h4>Hey!</h4>
            <p>Aun no has presentado el examen, :)</p>
            </div>"; }
    ?>

  </body>
</html>

<?php
session_start();
const A1 = 5;
const A2 = 5;
const A3 = 5;
const A4 = 5;
const A5 = 5;
const A6 = 5;
const A7 = 5;
const A8 = 5;
const A9 = 5;
const A10 = 5;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css" media="screen" title="no title" charset="utf-8">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
    <script type="text/javascript" src="js/funcion.js"></script>
    <script type="text/javascript" src="js/examenjs.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script language="Javascript"  type="text/javascript" src="js/clockCountdown.js"></script>
<style>
/* agregamos una fuente de dafont, que simula unos leds */
@font-face {
	font-family: ledbdrev;
	src: url(./Fleftex_M.ttf) format("truetype");
}
/* aqui va el estilo que tendra el clock */

#clock{
	color: white;
}

.clockCountdownNumber{
	float:left;
	background:URL('img/numeros.png');
	display:block;
	width:34px;
	height:50px;
}

.clockCountdownSeparator_dias,
.clockCountdownSeparator_horas,
.clockCountdownSeparator_minutos,
.clockCountdownSeparator_segundos
{
	float:left;
	display:block;
	width:10px;
	height:50px;
}
.clockCountdownFootItem{
	width:80px;
	float:left;
	text-align:center;
}


</style>
  </head>
  <body>
    <?php
    require_once "acceso_mysqli.php";
    $var = $_SESSION['idaspirante'];
    $consulta = "SELECT presento FROM aspirante WHERE idAspirante = $var;";
    $resultado = $mysqli->query($consulta);
    $obj = $resultado->fetch_object();
    $r = $obj->presento;
    $resultado->close();

    if(isset($_SESSION['nombre']) && $_SESSION['status'] == 1 && $r == 0) {
    ?>
  <div class="container">
    <div class="row">
      <h3 class="text-center">Tiempo restante</h3>
    </div>
    <div class="row-fluid">
      <div class="col-md-4 col-md-offset-4" id='clock'></div>
      <br>
      <div class="col-md-4"></div>
      <br>
    </div>
<div class="row-fluid">


  <div class="page-header">
		  <h1>Examen</h1>
  </div>
  <!-- INICIO ÁREA 1-->
  
    <div class="row-fluid">
        <a id="primero">Selecciona una respuesta de cada pregunta.</a>
      <div class="panel panel-default" id="ver1"> 
         <?php $consulta = "SELECT nombre FROM area WHERE idArea = 1;";
          $resultado = $mysqli->query($consulta);            
          $row=$resultado->fetch_array();        
          $r=$row['nombre'];
          $resultado->close();
        ?>          
        <div class="panel-heading" id="ver-area1"><h3><strong><?php print($r);?></strong></h3>
          <div class="row">
            <div class="col-md-3 col-md-offset-9">
              <ul class="nav nav-pills">
                <li class="active"><span class="label label-info" >Preguntas</span><span class="badge"><?php print(A1); ?></span></li>
                <li class="active"><span class="label label-info badge1" >Contestadas</span><span class="badge cambiar1">0</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="panel-body" id="area1" >
              <?php
              $consulta = 'SELECT texto, respuesta1, valor1, respuesta2, valor2, respuesta3, valor3, respuesta4, valor4, idArea FROM pregunta WHERE idArea = 1 ORDER BY RAND() LIMIT '.A1.';';

              if($resultado = $mysqli->query($consulta)){
              /* Obtener el array de objetos*/
              $id=1;
              while($obj = $resultado->fetch_object())
              { ?>

                <div class="form-group">
                  <h4 class="text-justify"><?php print($id.".-  ".$obj->texto);?></h4>
                  <div class="row-fluid">
                    <div class="radio">
                      <label>
                        <input class="calc" name="'radioa<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor1);?>" />
                        <?php printf($obj->respuesta1);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc" name="'radioa<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor2);?>" />
                        <?php printf($obj->respuesta2);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc" name="'radioa<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor3);?>" />
                        <?php printf($obj->respuesta3);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc" name="'radioa<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor4);?>" />
                        <?php printf($obj->respuesta4);?>
                      </label>
                    </div>
                  </div>
                </div>

                  <?php $id++; }
          /* Liberar el conjunto de resultados*/
          $resultado->close();
          } ?>
          <div class="col-md-3 col-md-offset-9">
            <ul class="nav nav-pills">
              <li class="active"><span class="label label-info" >Preguntas</span><span class="badge"><?php print(A1); ?></span></li>
              <li class="active"><span class="label label-info badge1" >Contestadas</span><span class="badge cambiar1">0</span></li>              
            </ul>            
          </div>
            <div class="col-md-12">
                <br>
                 <a href="#primero" class="btn btn-default btn-block" id="primerenlace">Guardar</a>                
            </div>

        </div>
      </div>
    </div>
    <!-- FIN ÁREA 1-->

    <!-- INICIO ÁREA 2-->
    
    <div class="row-fluid">
        
        <div class="panel panel-default" id="ver2" hidden> 
          <?php $consulta = "SELECT nombre FROM area WHERE idArea = 2;";
          $resultado = $mysqli->query($consulta);            
          $row=$resultado->fetch_array();        
          $r=$row['nombre'];
          $resultado->close();
        ?>             
            <div class="panel-heading" id="ver-area2"><h3><strong><?php print($r);?></strong></h3>
          <div class="row">
            <div class="col-md-3 col-md-offset-9">
              <ul class="nav nav-pills">
                <li class="active"><span class="label label-info" >Preguntas</span><span class="badge"><?php print(A2); ?></span></li>
                <li class="active"><span class="label label-info badge2" >Contestadas</span><span class="badge cambiar2">0</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="panel-body" id="area2">
          <?php

          $consulta2 = 'SELECT * FROM pregunta  WHERE idArea = 2 ORDER BY RAND() LIMIT '.A2.';'; 

          if($resultado = $mysqli->query($consulta2)){
              /* Obtener el array de objetos*/
              $id=1;
              while($obj = $resultado->fetch_object())
              { ?>

                <div class="form-group">

                  <h4 class=" text-justify"><?php print($id.".-  ".$obj->texto);?></h4>
                  <div class="row-fluid">
                    <div class="radio">
                      <label>
                        <input class="calc2" name="'radiob<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor1);?>" />
                        <?php printf($obj->respuesta1);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc2" name="'radiob<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor2);?>" />
                        <?php printf($obj->respuesta2);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc2" name="'radiob<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor3);?>" />
                        <?php printf($obj->respuesta3);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc2" name="'radiob<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor4);?>" />
                        <?php printf($obj->respuesta4);?>
                      </label>
                    </div>
                  </div>
                </div>

                  <?php $id++; }
          /* Liberar el conjunto de resultados*/
          $resultado->close();
          } ?>
          <div class="col-md-3 col-md-offset-9">
            <ul class="nav nav-pills">
              <li class="active"><span class="label label-info" >Preguntas</span><span class="badge"><?php print(A2); ?></span></li>
              <li class="active"><span class="label label-info badge2" >Contestadas</span><span class="badge cambiar2">0</span></li>
            </ul>
          </div>
            <div class="col-md-12">
                <br>
                <a href="#primero" class="btn btn-default btn-block" id="segundoenlace">Guardar</a>                                                                                           
            </div>
        </div>
      </div>
    </div>
    <!-- FIN ÁREA 2-->

    <!-- INICIO ÁREA 3-->
    
    <div class="row-fluid">
        
        <div class="panel panel-default" id="ver3" hidden>  
          <?php $consulta = "SELECT nombre FROM area WHERE idArea = 3;";
          $resultado = $mysqli->query($consulta);            
          $row=$resultado->fetch_array();        
          $r=$row['nombre'];
          $resultado->close();
        ?>            
        <div class="panel-heading" id="ver-area3"><h3><strong><?php print($r);?></strong></h3>
          <div class="row">
            <div class="col-md-3 col-md-offset-9">
              <ul class="nav nav-pills">
                <li class="active"><span class="label label-info" >Preguntas</span><span class="badge"><?php print(A3); ?></span></li>
                <li class="active"><span class="label label-info badge3" >Contestadas</span><span class="badge cambiar3">0</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="panel-body" id="area3" >
          <?php

          $consulta3 = 'SELECT * FROM pregunta  WHERE idArea = 3 ORDER BY RAND() LIMIT '.A3.';'; 

          if($resultado = $mysqli->query($consulta3)){
              /* Obtener el array de objetos*/
              $id=1;
              while($obj = $resultado->fetch_object())
              { ?>


                <div class="form-group">
                  <h4 class=" text-justify"><?php print($id.".-  ".$obj->texto);?></h4>
                  <div class="row-fluid">
                    <div class="radio">
                      <label>
                        <input class="calc3" name="'radioc<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor1);?>" />
                        <?php printf($obj->respuesta1);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc3" name="'radioc<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor2);?>" />
                        <?php printf($obj->respuesta2);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc3" name="'radioc<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor3);?>" />
                        <?php printf($obj->respuesta3);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc3" name="'radioc<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor4);?>" />
                        <?php printf($obj->respuesta4);?>
                      </label>
                    </div>
                  </div>
                </div>

                  <?php $id++; }
          /* Liberar el conjunto de resultados*/
          $resultado->close();
          } ?>
          <div class="col-md-3 col-md-offset-9">
            <ul class="nav nav-pills">
              <li class="active"><span class="label label-info" >Preguntas</span><span class="badge"><?php print(A3); ?></span></li>
              <li class="active"><span class="label label-info badge3" >Contestadas</span><span class="badge cambiar3">0</span></li>
            </ul>
          </div>
            <div class="col-md-12">
                <br>
                <a href="#primero" class="btn btn-default btn-block" id="tercerenlace">Guardar</a>                                                             
                                                
            </div>
        </div>
      </div>
    </div>
    <!-- FIN ÁREA 3-->

    <!-- INICIO ÁREA 4-->
    
    <div class="row-fluid">
        <div class="panel panel-default" id="ver4" hidden>
          <?php $consulta = "SELECT nombre FROM area WHERE idArea = 4;";
          $resultado = $mysqli->query($consulta);            
          $row=$resultado->fetch_array();        
          $r=$row['nombre'];
          $resultado->close();
        ?>  
            
        <div class="panel-heading" id="ver-area4"><h3><strong><?php print($r);?></strong></h3>
          <div class="row">
            <div class="col-md-3 col-md-offset-9">
              <ul class="nav nav-pills">
                <li class="active"><span class="label label-info" >Preguntas</span><span class="badge"><?php print(A4); ?></span></li>
                <li class="active"><span class="label label-info badge4" >Contestadas</span><span class="badge cambiar4">0</span></li>
              </ul>
            </div>
          </div>
        </div>
          <div class="panel-body" id="area4" >
          <?php

          $consulta4 = 'SELECT * FROM pregunta  WHERE idArea = 4 ORDER BY RAND() LIMIT '.A4.';';

          if($resultado = $mysqli->query($consulta4)){
              /* Obtener el array de objetos*/
              $id=1;
              while($obj = $resultado->fetch_object())
              { ?>


                <div class="form-group">
                  <h4 class=" text-justify"><?php print($id.".-  ".$obj->texto);?></h4>
                  <div class="row-fluid">
                    <div class="radio">
                      <label>
                        <input class="calc4" name="'radiod<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor1);?>" />
                        <?php printf($obj->respuesta1);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc4" name="'radiod<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor2);?>" />
                        <?php printf($obj->respuesta2);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc4" name="'radiod<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor3);?>" />
                        <?php printf($obj->respuesta3);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc4" name="'radiod<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor4);?>" />
                        <?php printf($obj->respuesta4);?>
                      </label>
                    </div>
                  </div>
                </div>

                  <?php $id++; }
          /* Liberar el conjunto de resultados*/
          $resultado->close();
          } ?>
          <div class="col-md-3 col-md-offset-9">
            <ul class="nav nav-pills">
              <li class="active"><span class="label label-info" >Preguntas</span><span class="badge"><?php print(A4); ?></span></li>
              <li class="active"><span class="label label-info badge4" >Contestadas</span><span class="badge cambiar4">0</span></li>
            </ul>
          </div>
              <div class="col-md-12">
                  <br>
                  <a href="#primero" class="btn btn-default btn-block" id="cuartoenlace">Guardar</a>                                                
            </div>
        </div>
      </div>
    </div>
    <!-- FIN ÁREA 4-->

    <!-- INICIO ÁREA 5-->
    
    <div class="row-fluid">
        <div class="panel panel-default" id="ver5" hidden>
        <?php 
          $consulta = "SELECT nombre FROM area WHERE idArea = 5;";
          $resultado = $mysqli->query($consulta);            
          $row=$resultado->fetch_array();        
          $r=$row['nombre'];
          $resultado->close();
        ?>  
        <div class="panel-heading" id="ver-area5"><h3><strong><?php print($r);?></strong></h3>
          <div class="row">
            <div class="col-md-3 col-md-offset-9">
              <ul class="nav nav-pills">
                <li class="active"><span class="label label-info" >Preguntas</span><span class="badge"><?php print(A5); ?></span></li>
                <li class="active"><span class="label label-info badge5" >Contestadas</span><span class="badge cambiar5">0</span></li>
              </ul>
            </div>
          </div>
        </div>
          <div class="panel-body" id="area5" >
          <?php

          $consulta4 = 'SELECT * FROM pregunta  WHERE idArea = 5 ORDER BY RAND() LIMIT '.A5.';';

          if($resultado = $mysqli->query($consulta4)){
              /* Obtener el array de objetos*/
              $id=1;
              while($obj = $resultado->fetch_object())
              { ?>


                <div class="form-group">
                  <h4 class=" text-justify"><?php print($id.".-  ".$obj->texto);?></h4>
                  <div class="row-fluid">
                    <div class="radio">
                      <label>
                        <input class="calc5" name="'radiod<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor1);?>" />
                        <?php printf($obj->respuesta1);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc5" name="'radiod<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor2);?>" />
                        <?php printf($obj->respuesta2);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc5" name="'radiod<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor3);?>" />
                        <?php printf($obj->respuesta3);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc5" name="'radiod<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor4);?>" />
                        <?php printf($obj->respuesta4);?>
                      </label>
                    </div>
                  </div>
                </div>

                  <?php $id++; }
          /* Liberar el conjunto de resultados*/
          $resultado->close();
          } ?>
          <div class="col-md-3 col-md-offset-9">
            <ul class="nav nav-pills">
              <li class="active"><span class="label label-info" >Preguntas</span><span class="badge"><?php print(A5); ?></span></li>
              <li class="active"><span class="label label-info badge5" >Contestadas</span><span class="badge cambiar5">0</span></li>
            </ul>
          </div>
              <div class="col-md-12">
                  <br>
                  <a href="#primero" class="btn btn-default btn-block" id="quintoenlace">Guardar</a>                                                
            </div>
        </div>
      </div>
    </div>
    <!-- FIN ÁREA 5-->

    <!-- INICIO ÁREA 6-->
    
    <div class="row-fluid">
        <div class="panel panel-default" id="ver6" hidden>
            <?php 
              $consulta = "SELECT nombre FROM area WHERE idArea = 6;";
              $resultado = $mysqli->query($consulta);            
              $row=$resultado->fetch_array();        
              $r=$row['nombre'];
              $resultado->close();
            ?> 
        <div class="panel-heading" id="ver-area6"><h3><strong><?php print($r);?></strong></h3>
          <div class="row">
            <div class="col-md-3 col-md-offset-9">
              <ul class="nav nav-pills">
                <li class="active"><span class="label label-info" >Preguntas</span><span class="badge"><?php print(A6); ?></span></li>
                <li class="active"><span class="label label-info badge6" >Contestadas</span><span class="badge cambiar6">0</span></li>
              </ul>
            </div>
          </div>
        </div>
          <div class="panel-body" id="area6" >
          <?php

          $consulta4 = 'SELECT * FROM pregunta  WHERE idArea = 6 ORDER BY RAND() LIMIT '.A6.';'; 

          if($resultado = $mysqli->query($consulta4)){
              /* Obtener el array de objetos*/
              $id=1;
              while($obj = $resultado->fetch_object())
              { ?>


                <div class="form-group">
                  <h4 class=" text-justify"><?php print($id.".-  ".$obj->texto);?></h4>
                  <div class="row-fluid">
                    <div class="radio">
                      <label>
                        <input class="calc6" name="'radiod<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor1);?>" />
                        <?php printf($obj->respuesta1);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc6" name="'radiod<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor2);?>" />
                        <?php printf($obj->respuesta2);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc6" name="'radiod<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor3);?>" />
                        <?php printf($obj->respuesta3);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc6" name="'radiod<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor4);?>" />
                        <?php printf($obj->respuesta4);?>
                      </label>
                    </div>
                  </div>
                </div>

                  <?php $id++; }
          /* Liberar el conjunto de resultados*/
          $resultado->close();
          } ?>
          <div class="col-md-3 col-md-offset-9">
            <ul class="nav nav-pills">
              <li class="active"><span class="label label-info" >Preguntas</span><span class="badge"><?php print(A6); ?></span></li>
              <li class="active"><span class="label label-info badge6" >Contestadas</span><span class="badge cambiar6">0</span></li>
            </ul>
          </div>
              <div class="col-md-12">
                  <br>
                  <a href="#primero" class="btn btn-default btn-block" id="sextoenlace">Guardar</a>                                                
            </div>
        </div>
      </div>
    </div>
    <!-- FIN ÁREA 6-->

    <!-- INICIO ÁREA 7-->
    
    <div class="row-fluid">
        <div class="panel panel-default" id="ver7" hidden>
        <?php 
          $consulta = "SELECT nombre FROM area WHERE idArea = 7;";
          $resultado = $mysqli->query($consulta);            
          $row=$resultado->fetch_array();        
          $r=$row['nombre'];
          $resultado->close();
        ?> 
        <div class="panel-heading" id="ver-area7"><h3><strong><?php print($r);?></strong></h3>
          <div class="row">
            <div class="col-md-3 col-md-offset-9">
              <ul class="nav nav-pills">
                <li class="active"><span class="label label-info" >Preguntas</span><span class="badge"><?php print(A7); ?></span></li>
                <li class="active"><span class="label label-info badge7" >Contestadas</span><span class="badge cambiar7">0</span></li>
              </ul>
            </div>
          </div>
        </div>
          <div class="panel-body" id="area7" >
          <?php

          $consulta4 = 'SELECT * FROM pregunta  WHERE idArea = 7 ORDER BY RAND() LIMIT '.A7.';'; 

          if($resultado = $mysqli->query($consulta4)){
              /* Obtener el array de objetos*/
              $id=1;
              while($obj = $resultado->fetch_object())
              { ?>


                <div class="form-group">
                  <h4 class=" text-justify"><?php print($id.".-  ".$obj->texto);?></h4>
                  <div class="row-fluid">
                    <div class="radio">
                      <label>
                        <input class="calc7" name="'radiod<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor1);?>" />
                        <?php printf($obj->respuesta1);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc7" name="'radiod<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor2);?>" />
                        <?php printf($obj->respuesta2);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc7" name="'radiod<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor3);?>" />
                        <?php printf($obj->respuesta3);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc7" name="'radiod<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor4);?>" />
                        <?php printf($obj->respuesta4);?>
                      </label>
                    </div>
                  </div>
                </div>

                  <?php $id++; }
          /* Liberar el conjunto de resultados*/
          $resultado->close();
          } ?>
          <div class="col-md-3 col-md-offset-9">
            <ul class="nav nav-pills">
              <li class="active"><span class="label label-info" >Preguntas</span><span class="badge"><?php print(A7); ?></span></li>
              <li class="active"><span class="label label-info badge7" >Contestadas</span><span class="badge cambiar7">0</span></li>
            </ul>
          </div>
              <div class="col-md-12">
                  <br>
                  <a href="#primero" class="btn btn-default btn-block" id="septimoenlace">Guardar</a>                                                
            </div>
        </div>
      </div>
    </div>
    <!-- FIN ÁREA 7-->

    <!-- INICIO ÁREA 8-->
    
    <div class="row-fluid">
        <div class="panel panel-default" id="ver8" hidden>
        <?php 
          $consulta = "SELECT nombre FROM area WHERE idArea = 8;";
          $resultado = $mysqli->query($consulta);            
          $row=$resultado->fetch_array();        
          $r=$row['nombre'];
          $resultado->close();
        ?> 
        <div class="panel-heading" id="ver-area8"><h3><strong><?php print($r);?></strong></h3>
          <div class="row">
            <div class="col-md-3 col-md-offset-9">
              <ul class="nav nav-pills">
                <li class="active"><span class="label label-info" >Preguntas</span><span class="badge"><?php print(A8); ?></span></li>
                <li class="active"><span class="label label-info badge8" >Contestadas</span><span class="badge cambiar8">0</span></li>
              </ul>
            </div>
          </div>
        </div>
          <div class="panel-body" id="area8" >
          <?php

          $consulta4 = 'SELECT * FROM pregunta  WHERE idArea = 8 ORDER BY RAND() LIMIT '.A8.';'; 

          if($resultado = $mysqli->query($consulta4)){
              /* Obtener el array de objetos*/
              $id=1;
              while($obj = $resultado->fetch_object())
              { ?>


                <div class="form-group">
                  <h4 class=" text-justify"><?php print($id.".-  ".$obj->texto);?></h4>
                  <div class="row-fluid">
                    <div class="radio">
                      <label>
                        <input class="calc8" name="'radiod<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor1);?>" />
                        <?php printf($obj->respuesta1);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc8" name="'radiod<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor2);?>" />
                        <?php printf($obj->respuesta2);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc8" name="'radiod<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor3);?>" />
                        <?php printf($obj->respuesta3);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc8" name="'radiod<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor4);?>" />
                        <?php printf($obj->respuesta4);?>
                      </label>
                    </div>
                  </div>
                </div>

                  <?php $id++; }
          /* Liberar el conjunto de resultados*/
          $resultado->close();
          } ?>
          <div class="col-md-3 col-md-offset-9">
            <ul class="nav nav-pills">
              <li class="active"><span class="label label-info" >Preguntas</span><span class="badge"><?php print(A8); ?></span></li>
              <li class="active"><span class="label label-info badge8" >Contestadas</span><span class="badge cambiar8">0</span></li>
            </ul>
          </div>
              <div class="col-md-12">
                  <br>
                  <a href="#primero" class="btn btn-default btn-block" id="octavoenlace">Guardar</a>                                                
            </div>
        </div>
      </div>
    </div>
    <!-- FIN ÁREA 8-->

    <!-- INICIO ÁREA 9-->
    
    <div class="row-fluid">
        <div class="panel panel-default" id="ver9" hidden>
        <?php 
          $consulta = "SELECT nombre FROM area WHERE idArea = 9;";
          $resultado = $mysqli->query($consulta);            
          $row=$resultado->fetch_array();        
          $r=$row['nombre'];
          $resultado->close();
        ?> 
        <div class="panel-heading" id="ver-area9"><h3><strong><?php print($r);?></strong></h3>
          <div class="row">
            <div class="col-md-3 col-md-offset-9">
              <ul class="nav nav-pills">
                <li class="active"><span class="label label-info" >Preguntas</span><span class="badge"><?php print(A9); ?></span></li>
                <li class="active"><span class="label label-info badge9" >Contestadas</span><span class="badge cambiar9">0</span></li>
              </ul>
            </div>
          </div>
        </div>
          <div class="panel-body" id="area9" >
          <?php

          $consulta4 = 'SELECT * FROM pregunta  WHERE idArea = 9 ORDER BY RAND() LIMIT '.A9.';'; 

          if($resultado = $mysqli->query($consulta4)){
              /* Obtener el array de objetos*/
              $id=1;
              while($obj = $resultado->fetch_object())
              { ?>


                <div class="form-group">
                  <h4 class=" text-justify"><?php print($id.".-  ".$obj->texto);?></h4>
                  <div class="row-fluid">
                    <div class="radio">
                      <label>
                        <input class="calc9" name="'radiod<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor1);?>" />
                        <?php printf($obj->respuesta1);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc9" name="'radiod<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor2);?>" />
                        <?php printf($obj->respuesta2);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc9" name="'radiod<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor3);?>" />
                        <?php printf($obj->respuesta3);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc9" name="'radiod<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor4);?>" />
                        <?php printf($obj->respuesta4);?>
                      </label>
                    </div>
                  </div>
                </div>

                  <?php $id++; }
          /* Liberar el conjunto de resultados*/
          $resultado->close();
          } ?>
          <div class="col-md-3 col-md-offset-9">
            <ul class="nav nav-pills">
              <li class="active"><span class="label label-info" >Preguntas</span><span class="badge"><?php print(A9); ?></span></li>
              <li class="active"><span class="label label-info badge9" >Contestadas</span><span class="badge cambiar9">0</span></li>
            </ul>
          </div>
              <div class="col-md-12">
                  <br>
                  <a href="#primero" class="btn btn-default btn-block" id="novenoenlace">Guardar</a>                                                
            </div>
        </div>
      </div>
    </div>
    <!-- FIN ÁREA 9-->

    <!-- INICIO ÁREA 10-->
    
    <div class="row-fluid">
        <div class="panel panel-default" id="ver10" hidden>
        <?php 
          $consulta = "SELECT nombre FROM area WHERE idArea = 10;";
          $resultado = $mysqli->query($consulta);            
          $row=$resultado->fetch_array();        
          $r=$row['nombre'];
          $resultado->close();
        ?>             
        <div class="panel-heading" id="ver-area5"><h3><strong><?php print($r);?></strong></h3>
          <div class="row">
            <div class="col-md-3 col-md-offset-9">
              <ul class="nav nav-pills">
                <li class="active"><span class="label label-info" >Preguntas</span><span class="badge"><?php print(A10); ?></span></li>
                <li class="active"><span class="label label-info badge10" >Contestadas</span><span class="badge cambiar10">0</span></li>
              </ul>
            </div>
          </div>
        </div>
          <div class="panel-body" id="area10" >
          <?php

          $consulta5 = 'SELECT * FROM pregunta  WHERE idArea = 10 ORDER BY RAND() LIMIT '.A10.';'; 

          if($resultado = $mysqli->query($consulta5)){
              /* Obtener el array de objetos*/
              $id=1;
              while($obj = $resultado->fetch_object())
              { ?>


                <div class="form-group">
                  <h4 class=" text-justify"><?php print($id.".-  ".$obj->texto);?></h4>
                  <div class="row-fluid">
                    <div class="radio">
                      <label>
                        <input class="calc10" name="'radioe<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor1);?>" />
                        <?php printf($obj->respuesta1);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc10" name="'radioe<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor2);?>" />
                        <?php printf($obj->respuesta2);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc10" name="'radioe<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor3);?>" />
                        <?php printf($obj->respuesta3);?>
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="calc10" name="'radioe<?php print $id; ?>'" type="radio" value="<?php printf($obj->valor4);?>" />
                        <?php printf($obj->respuesta4);?>
                      </label>
                    </div>
                  </div>
                </div>

                  <?php $id++; }
          /* Liberar el conjunto de resultados*/
          $resultado->close();
          } ?>
          <div class="col-md-3 col-md-offset-9">
            <ul class="nav nav-pills">
              <li class="active"><span class="label label-info" >Preguntas</span><span class="badge"><?php print(A10); ?></span></li>
              <li class="active"><span class="label label-info badge10" >Contestadas</span><span class="badge cambiar10">0</span></li>
            </ul>
          </div>
          </div>

        <form id="formexamen"><!-- EVALUAR INICIO-->
          <input type="text" name="sum" hidden />
          <input type="text" name="sum2" hidden />
          <input type="text" name="sum3" hidden />
          <input type="text" name="sum4" hidden />
          <input type="text" name="sum5" hidden />

          <input type="text" name="sum6" hidden />
          <input type="text" name="sum7" hidden />
          <input type="text" name="sum8" hidden />
          <input type="text" name="sum9" hidden />
          <input type="text" name="sum10" hidden />

          <div class="form-group"> 
            <div class="col-md-12">
                <button type="button" class="btn  btn-danger btn-block" onclick="rgResult()">Finalizar examen</button>          
            </div>
          </div>
        </form>
        <div class="col-md-12" id="mensaje"></div><!-- EVALUAR FIN-->
    </div>
</div> 
<!-- FIN ÁREA 10-->
          


    

    </div> <!-- FIN DIV ROW-FLUID -->
    </div> <!-- FIN DIV CONTAINER -->


      <div class="row">&nbsp;</div>
      <?php
      }else {
         echo "<div class=\"alert alert-dismissible alert-warning container\">              
              <h1>Error!  :(</h1>
              </div>"; }
      ?>


  </body>
</html>

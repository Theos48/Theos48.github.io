<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="js/carga.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
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
      <div class="page-header">
    		  <h1>Recomendaciones</h1>
      </div>
      <div class="row-fluid">
        <ol>
          <li> Conteste todas las preguntas; si alguna de ellas la considera particularmente difícil, no se detenga demasiado. Al finalizar, si tiene tiempo, regrese a ellas y seleccione sus respuestas.</li>
          <li>No se inquiete, ni se presione. Si le sobra tiempo, revise y verifique sus respuestas. </li>
          <li> No intente copiar las respuestas o los reactivos; estas conductas no son éticas ni están permitidas. </li>
        </ol>
        <div class="col-md-4 col-md-offset-4">
            <a href="examen.php" class="btn btn-lg btn-success btn-block" id="comenzar">Comenzar</a>
        </div>
        <div class="col-md-4">&nbsp;</div>
        </div>
      </div>
      <?php
      }else {
         echo "<div class=\"alert alert-dismissible alert-success container\">
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
              <h4>Genial!</h4>
              <p>Ya presentaste el examen :)</p>
              </div>"; }
      ?>
  </body>
</html>

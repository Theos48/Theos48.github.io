<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TELECOMM | COATZACOALCOS</title>
    <!--CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <!--Javascript-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/carga.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <!--Javascript-->
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/aspirantejs.js"></script>
    <script src="js/preguntajs.js"></script>
    <script src="js/areajs.js"></script>
      
  </head>
  <body>
    <?php
    if(isset($_SESSION['nombre']) && $_SESSION['status'] == 0) {
      require_once "acceso_mysqli.php";
    ?>
    


    <nav class="navbar navbar-default navbar-fixed">
      <div class="container-fluid">
        <div class="navbar-header menu">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php">TELECOMM</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#"><i class="fa fa-angle-right fa-2x" aria-hidden="true"></i><span class="sr-only">(current)</span></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">             
              <li class="active"><a href="#">BIENVENIDO: <?php echo $_SESSION['nombre']; ?></a></li>
            <li><a href="logout.php">Salir</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-left menu">
            <li><a href="consulta-aspirantes.php"><i class="fa fa-users fa-2x" aria-hidden="true"></i> Aspirantes</a></li>
            <li><a href="consulta-preguntas.php"><i class="fa fa-question fa-2x" aria-hidden="true"></i> Preguntas</a></li>
            <li><a href="consulta-areas.php"><i class="fa fa-book fa-2x" aria-hidden="true"></i> Áreas</a></li>      
            <li><a href="reporte-individual.php"><i class="fa fa-pie-chart fa-2x" aria-hidden="true"></i> Resultados</a></li>                  
          </ul>
        </div>
      </div>
    </nav>   

   
    <div class="row-fluid" id="mensaje"></div>
   
    <div class="row-fluid"  id="detalles">
      

        <p class="text-center"><img src="img/miraclee.png" class="img-responsive"/></p>
      </div>
    </div>

    <div class="col-md-12 text-center">
      <blockquote>
        <h2>...</h2>
        <p>Una buena medida para contratar mejor.</p>
      </blockquote>
    </div>
      
      <div class="row-fluid text-center" style="background: #212121; margin-top: 200px">                   
          
           <div class="col-md-3 col-md-offset-9">
              <blockquote>
          <h2>Contacto...</h2>
          <p>Contactanos para obtener mas información.</p>
          <a href="https://www.gob.mx/telecomm/" target="_blank" class="btn btn-info">Contactar</a>           
        </blockquote>              
          </div>
      </div>

    <?php
    }else {
       echo "<h3 class=\"text-warning text-center\">Estas accediendo a una pagina restringida, para ver su contenido debes tener acceso.</h3>
       <br/>
       <p>
       <a href='index.php'><h3 class=\"text-center\">Aceptar</h3></a>
       </p>"; }
    ?>
  </body>
</html>

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name=”descripcion” content="ITESCO">
        <meta name=”keywords” content="TELECOMM, ITESCO, HERRAMIENTA">
        <title>TELECOMM | COATZACOALCOS</title>
        <!--CSS-->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <!--Javascript-->
        <script type="text/javascript" src="js/jquery.js"></script>        
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/usuariojs.js"></script>        
        <style media="screen">

            body{

                background-image: url(img/miracle.png)             
            }
            .errores{
                display: none;
            }
            .banner{

            }
            #cargando{
                position: absolute;
                width: 100%;
                height: 100%;
                background: #fff url(img/ajax-loader.gif) no-repeat center;
            }
        </style>
        <script type="text/javascript">
            $(window).load(function() {
                $('#cargando').hide();
            });
        </script>
    </head>
    <body>
        <div class="row-fluid text-center" style="background-color: #075E54;">
            &nbsp;
          
           <p class="text-center"><img src="img/telealgoo.png" width="800" class="img-responsive"/>
          </div>
          
        </div>
        <?php if (empty($_SESSION['nombre']) && empty($_SESSION['status'])) { // comprobamos que las variables de sesión estén vacías ?>        
            <div class="text-center" id="cargando">
            </div>
            <div class="row">
                <div class="row-fluid">            
                    <div class="col-md-4 col-md-offset-4" style="margin-top: 40px;" >
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="text-center">¡Bienvenido!</h4>  
                            </div>
                            <div class="row-fluid" id="mensaje">
                            </div>
                            <div class="panel-body" id="principal" >                                                                                                    
                                <form class="form-signin" id="formusuario">
                                    <h3 class="text-center">Inicia sesión o regístrate</h3>
                                    <h3 class="text-center"> </h3>
                                    <div class="errores" id="mensaje1">
                                        <p class="text-danger">Introduce tu usuario.</p>
                                    </div>
                                    <div class="input-group" id="campo1">
                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                        <input type="text" name="usu" id="itFolio" class="form-control btn-block" placeholder="Introduce tu usuario" autofocus />
                                    </div>
                                    <br>
                                    <div class="errores" id="mensaje2">
                                        <p class="text-danger">Introduce tu contraeña.</p>
                                    </div>
                                    <div class="input-group" id="campo2">
                                        <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
                                        <input type="password" name="pwd" id="itPassword" class="form-control btn-block" placeholder="Introduce tu contraseña" />
                                    </div>
                                    <br>
                                    <button type="button" style="background: #404040" class="btn btn-info btn-block" id="enviar" onclick="login()">Iniciar sesión</button>                                    
                                </form>
                                <br>

                                <button type="button" style="background: #404040" class="btn btn-info btn-block" <a data-target="#myModal" data-toggle="modal">Crear cuenta</a></button>                                    
                            </div>

                            <div class="panel-footer">
                                
                            </div>
                            <footer class="mainFooter" align="center">                                
                                <br>
                                <p align="center" >&copy; 2021 | TECNOLÓGICO NACIONAL DE MÉXICO CAMPUS COATZACOALCOS.</p>
                            </footer>



                            <div class="modal fade in" id="myModal" >
                                <div class="modal-dialog">
                                    <div class="modal-content" >
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title"><b></b>Registro de usuario</h4>
                                        </div>
                                        <div class="modal-body " >
                                            <div class="row-fluid" id="notificacion"></div>
                                            <form id="formaspirante"> 
                                                <fieldset>
                                                    <div class="form-group">
                                                        <div class="col-lg-4">
                                                            <div class="form-group" id="camponombre">
                                                                <label class="control-label" for="inputDefault">Nombre</label>
                                                                <input type="text" class="form-control" id="nombre" name="nombre">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group" id="campoapaterno">
                                                                <label class="control-label" for="inputDefault">Apellido paterno</label>
                                                                <input type="text" class="form-control" id="apaterno" name="apaterno">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group" id="campoamaterno">
                                                                <label class="control-label" for="inputDefault">Apellido materno</label>
                                                                <input type="text" class="form-control" id="amaterno" name="amaterno">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group" id="">
                                                                <label class="control-label" for="inputDefault">Fecha de nacimiento</label>
                                                                <input type="date" class="form-control" id="fnacimiento" name="fnacimiento">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group" id="campocorreo">
                                                                <label class="control-label" for="inputDefault">Correo</label>
                                                                <input type="text" class="form-control" id="correo" name="correo">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group" id="campousuario">
                                                                <label class="control-label" for="inputDefault">Usuario</label>
                                                                <input type="text" class="form-control" id="usuario" name="folio">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group" id="campoclave">
                                                                <label class="control-label" for="inputDefault">Clave de acceso</label>
                                                                <input type="password" class="form-control" id="clave" name="clave">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12" hidden>
                                                            <div class="form-group">
                                                                <label class="control-label" for="inputDefault">Tipo de usuario</label>
                                                                <select class="form-control" id="tipo" name="tipo">                                                                    
                                                                    <option value="1" selected>Aspirante</option>                
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-12 ">
                                                                <button type="button" style="background: #404040" class="btn btn-info btn-block" onclick="rgAspirante()">Registrar</button>
                                                            </div>
                                                        </div>
                                                    </div>   
                                                </fieldset>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <p class="text-right">¿Ya tienes una cuenta? <a href="#" data-dismiss="modal">Entrar</a></p>                                                                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        } else if ($_SESSION['status'] == 1) {
                            header("location: panel-aspirante.php");
                        } else {
                            header("location: panel-administracion.php");
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>

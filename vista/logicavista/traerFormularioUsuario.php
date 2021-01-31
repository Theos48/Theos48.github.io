<?php

class vistaUsuario {

  function getFormularioRegistra($datos) {
    $cad =  ' 
    <div class="container">
      <form id="formaspirante">
        <fieldset>
          <legend>Registro de aspirantes</legend>
      <div class="form-group">
        <div class="col-lg-4">
          <div class="form-group">
            <label class="control-label" for="inputDefault">Nombre</label>
            <input type="text" class="form-control" id="inputDefault" name="nombre">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <label class="control-label" for="inputDefault">Apellido paterno</label>
            <input type="text" class="form-control" id="inputDefault" name="apaterno">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <label class="control-label" for="inputDefault">Apellido materno</label>
            <input type="text" class="form-control" id="inputDefault" name="amaterno">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <label class="control-label" for="inputDefault">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="inputDefault" name="fnacimiento">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <label class="control-label" for="inputDefault">Correo</label>
            <input type="text" class="form-control" id="inputDefault" name="correo">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <label class="control-label" for="inputDefault">Folio</label>
            <input type="text" class="form-control" id="inputDefault" name="folio">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <label class="control-label" for="inputDefault">Clave de acceso</label>
            <input type="text" class="form-control" id="inputDefault" name="clave">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <label class="control-label" for="inputDefault">Tipo de usuario</label>
            <select class="form-control" id="select" name="tipo">
                <option selected></option>
                <option value="1">Aspirante</option>
                <option value="0">Administrador</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12 ">
            <button type="button" class="btn btn-primary btn-block" onclick="rgAspirante()">Registrar</button>
          </div>
        </div>
      </div>
    </fieldset>
  </form>
    </div>';
    return $cad;
  }

  function getFormularioLogin($datos) {
    $cad = '<form class="form-signin" id="formusuario">
    <h3 class="text-center">EGEL-ICOMPU</h3>
    <div class="errores" id="mensaje1">
        <p class="text-danger">Introduce tu usuario.</p>
    </div>
    <div class="input-group" id="campo1">
        <span class="input-group-addon"><i class="fa fa-user fa-2x" aria-hidden="true"></i></span>
        <input type="text" name="usu" id="itFolio" class="form-control btn-block" placeholder="Usuario" autofocus />
    </div>
    <br>
    <div class="errores" id="mensaje2">
        <p class="text-danger">Introduce tu contraeña.</p>
    </div>
    <div class="input-group" id="campo2">
        <span class="input-group-addon"><i class="fa fa-key fa-2x" aria-hidden="true"></i></span>
        <input type="password" name="pwd" id="itPassword" class="form-control btn-block" placeholder="Contraseña" />
    </div>
    <br>
    <button type="button" class="btn btn-danger btn-block" id="enviar" onclick="login()">Iniciar sesión</button>
    <br>
    <p class="text-right">¿Aún no estás registrado? <a href="#" onclick="mdformregistra()">Crear cuenta</a></p>
</form>';
    return $cad;
  }
  
  function getFormularioPregunta($datos){
       $cad =  '
           <div class="container">
            <form id="formpregunta">
                <fieldset>
                    <legend>Registro de preguntas</legend>
                    <div class="form-group">
                    <div class="col-lg-8">
                      <div class="form-group">
                          <label for="txtPregunta" class="control-label">Pregunta</label>
                          <textarea class="form-control" rows="6" id="txtpregunta" name="txt" maxlength="1000"></textarea>
                      </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                          <label class="control-label">Area</label>
                          <div class="col-lg-12">
                          <div class="radio">
                            <label>
                              <input name="ida" type="radio" value="1" />
                              A. Selección de sistemas computacionales para aplicaciones específicas
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input name="ida" type="radio" value="2" />
                              B. Nuevas tecnologías para la implementación de sistemas de cómputo
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input name="ida" type="radio" value="3" />
                              C. Desarrollo de hardware y su software asociado para aplicaciones específicas
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input name="ida" type="radio" value="4" />
                              D. Adaptación de hardware y/o software para aplicaciones específicas
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input name="ida" type="radio" value="5" />
                              E. Redes de cómputo para necesidades específicas
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input name="ida" type="radio" value="6" />
                              F. Área 6
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input name="ida" type="radio" value="7" />
                              G. Área 7
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input name="ida" type="radio" value="8" />
                              H. Área 8
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input name="ida" type="radio" value="9" />
                              I. Área 9
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input name="ida" type="radio" value="10" />
                              J. Área 10
                            </label>
                          </div>
                          </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="textArea" class="control-label">Respuesta inciso A</label>
                            <textarea class="form-control" rows="3" id="textArea" name="r1" maxlength="500"></textarea>
                            <span class="help-block"><p class="text-info">Escribe la primer posible respuesta.</p></span>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="textArea" class="control-label">Respuesta inciso B</label>
                            <textarea class="form-control" rows="3" id="textArea" name="r2" maxlength="500"></textarea>
                            <span class="help-block"><p class="text-info">Escribe la segunda posible respuesta.</p></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="textArea" class="control-label">Respuesta inciso C</label>
                            <textarea class="form-control" rows="3" id="textArea" name="r3" maxlength="500"></textarea>
                            <span class="help-block"><p class="text-info">Escribe la tercer posible respuesta.</p></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="textArea" class="control-label">Respuesta inciso D</label>
                            <textarea class="form-control" rows="3" id="textArea" name="r4" maxlength="500"></textarea>
                            <span class="help-block"><p class="text-info">Escribe la cuarta posible respuesta.<p/></span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                      <h3 class="text-info">Selecciona cual va ser la respuesta correcta, solo una debe ser la correcta.</h3>
                    </div>
                    <div class="col-lg-2 col-lg-offset-1">
                        <div class="form-group">
                          <label class="control-label">Valor del inciso A</label>

                          <div class="radio">
                            <label>
                              <input name="val1" type="radio" value="1" />
                              Correcta
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input name="val1" type="radio" value="0" checked/>
                              Incorrecta
                            </label>
                          </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-lg-offset-1">
                        <div class="form-group">
                          <label class="control-label">Valor del inciso B</label>

                          <div class="radio">
                            <label>
                              <input name="val2" type="radio" value="1" />
                              Correcta
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input name="val2" type="radio" value="0" checked/>
                              Incorrecta
                            </label>
                          </div>

                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="form-group">
                          <label class="control-label">Valor del inciso C</label>

                          <div class="radio">
                            <label>
                              <input name="val3" type="radio" value="1" />
                              Correcta
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input name="val3" type="radio" value="0" checked/>
                              Incorrecta
                            </label>
                          </div>

                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="form-group">
                          <label class="control-label">Valor del inciso D</label>

                          <div class="radio">
                            <label>
                              <input name="val4" type="radio" value="1" />
                              Correcta
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input name="val4" type="radio" value="0" checked/>
                              Incorrecta
                            </label>
                          </div>

                        </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <button type="button" class="btn btn-primary btn-block" onclick="rgPregunta()">Registrar</button>
                      </div>
                    </div>

                    </div>
                </fieldset>
            </form>
        </div>';
       return $cad;
  }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <script src="js/preguntajs.js"></script>
        <script src="js/jquery.js"></script>
    </head>
    <body>
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
        </div>
        <div class="row">&nbsp;</div>
        <div class="col-lg-8 col-lg-offset-2" id="mensaje"></div>
    </body>
</html>

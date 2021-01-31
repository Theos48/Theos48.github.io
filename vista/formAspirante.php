<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="js/aspirantejs.js"></script>
    <script src="js/jquery.js"></script>
  </head>
  <body>
    <div class="container" id="mensaje"></div>
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
    </div>
  </body>
</html>

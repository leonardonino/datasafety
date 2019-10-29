<div class="form-group">
  <label for="">Nombre completo.</label>
  <input type="text" class="form-control" name="nombre" <?php $validador->mostrar_nombre() ?>>
  <?php
  $validador->mostrar_error_nombre();
  ?>
</div>
<div class="form-group">
  <label for="">Teléfono de contacto.</label>
  <input type="number" class="form-control" name="telefono" <?php $validador->mostrar_telefono() ?>>
  <?php
  $validador->mostrar_error_telefono();
  ?>
</div>
<div class="form-group">
  <label for="">Correo electrónico.</label>
  <input type="email" class="form-control" name="email" <?php $validador->mostrar_email() ?>>
  <?php
  $validador->mostrar_error_email();
  ?>
</div>
<div class="form-group">
  <label for="">Tipo de documento.</label> <br>
  <select name="tipo_documento" id="">
    <option value="">C.C</option>
    <option value="">Cedula de extranjeria</option>
    <option value="">Pasaporte</option>
  </select>
</div>
<div class="form-group">
  <label for="">Número de documento.</label>
  <input type="number" class="form-control" name="documento" <?php $validador->mostrar_documento() ?>>
  <?php
  $validador->mostrar_error_documento();
  ?>
</div>
<div class="form-group">
  <label for="">Contraseña.</label>
  <input type="password" class="form-control" name="clave1">
  <?php
  $validador->mostrar_error_clave1();
  ?>
</div>
<div class="form-group">
  <label for="">Confirmar contraseña.</label>
  <input type="password" class="form-control" name="clave2">
  <?php
  $validador->mostrar_error_clave2();
  ?>
</div> <br>
<button type="submit" class="btn btn-default" name="registrar">Registrar</button>
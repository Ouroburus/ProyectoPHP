<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Empleado</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
<?php
include ("menu.php");
?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h1 class="text-center mb-4">Formulario de Empleado</h1>
      <form action="#" method="POST">
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" required>
        </div>

        <div class="form-group">
          <label for="apellido">Apellido</label>
          <input type="text" class="form-control" id="apellido" placeholder="Apellido" name="apellido" required>
        </div>

        <div class="form-group">
          <label for="tipo_documento">Tipo de Documento</label>
          <select class="form-control" id="tipo_documento" name="tipo_documento" required>
            <option value="dui">seleccione opcion</option>
            <option value="pasaporte"></option>
            <option value="licencia"></option>
          </select>
        </div>

        <div class="form-group">
          <label for="numero_documento">Nº de documento</label>
          <input type="text" class="form-control" id="numero_documento" placeholder="" name="" required>
        </div>

        <div class="form-group">
          <label for="telefono">Teléfono</label>
          <input type="tel" class="form-control" id="telefono" placeholder="Teléfono" name="telefono" required>
        </div>

        <div class="form-group">
          <label for="direccion">Dirección</label>
          <input type="text" class="form-control" id="direccion" placeholder="Dirección" name="direccion" required>
        </div>

        <div class="form-group">
          <label for="gmail">Correo electronico</label>
          <input type="email" class="form-control" id="gmail" placeholder="Correo electronico" name="gmail" required>
        </div>
 
        <div class="form-group">
          <label for="fecha_nacimiento">Fecha de Nacimiento</label>
          <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Enviar</button>
          <button type="reset" class="btn btn-secondary">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>

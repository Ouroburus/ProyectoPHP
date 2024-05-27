<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Proveedor</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  
<?php
include ("menu.php");
?>
  <div class="container mt-5">
    <div class="card bg-light w-50 mx-auto">
      <div class="card-header bg-primary text-white">
        <br><h2 class="mb-0">Formulario de Proveedor</h2>
      </div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <label for="nombre">Nombre de empresa</label>
            <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre de empresa">
          </div>
          <div class="form-group">
            <label for="direccion">Dirección:</label>
            <input type="text" class="form-control" id="direccion" placeholder="Ingrese la dirección del proveedor">
          </div>
          <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" class="form-control" id="telefono" placeholder="Ingrese el teléfono del proveedor">
          </div>
          <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" class="form-control" id="email" placeholder="Ingrese el correo electrónico del proveedor">
          </div>
           <div class="form-group">
            <label for="imagen">Imagen:</label>
            <input type="file" class="form-control-file" id="imagen">
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

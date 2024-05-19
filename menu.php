<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menú Vertical Bootstrap con Color</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .menu-vertical {
      background-color: #333; /* Fondo del menú en verde */
      color: #f8f9fa; /* Color del texto en blanco */
      height: 700px !important; /* Establece la altura del menú al 100% de su contenedor */
      font-size: 18px; /* Tamaño de letra */
    }
    .menu-vertical .list-group-item {
      border: none;
      background-color: #333;
    }
    .menu-vertical .list-group-item:hover {
      background-color: #f8f9fa ; /* Color de fondo al pasar el mouse */
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 p-0">
      <div class="list-group menu-vertical">
        <a href="#" class="list-group-item list-group-item-action">formulario cliente</a>
        <a href="#" class="list-group-item list-group-item-action">formulario empleado</a>
        <a href="#" class="list-group-item list-group-item-action">formulario producto</a>
        <a href="#" class="list-group-item list-group-item-action">formulario provedor</a>
      </div>
    </div>
   
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

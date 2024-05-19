<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menú </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      min-height: 100vh; /* Altura mínima del cuerpo igual a la altura de la ventana */
      position: relative; /* Para que los elementos absolutamente posicionados sean relativos a este */
    }

    .logo {
      background-image: url('img.jpg'); /* Ruta de la imagen del logo */
      background-size: contain; /* Ajusta el tamaño del logo */
      width: 300px; /* Ancho del logo */
      height: 200px; /* Alto del logo */
      position: absolute; /* Posicionamiento absoluto */
      top: 120px; /* Distancia desde la parte superior */
      left: 800px; /* Distancia desde la izquierda */
      z-index: 1; /* Asegura que el logo esté encima del fondo */
    }

    .menu-vertical {
      background-color: #333; /* Fondo del menú en verde */
      color: #ffffff; /* Color del texto en blanco */
      height: 700px !important; /* Establece la altura del menú al 100% de su contenedor */
      font-size: 18px; /* Tamaño de letra */
    }

    .menu-vertical .list-group-item {
      border: none;
      background-color: #333;
    }

    .menu-vertical .list-group-item:hover {
      background-color: #218838; /* Color de fondo al pasar el mouse */
    }

    .background-image {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('https://img.freepik.com/fotos-premium/fondo-verde-blanco-degradado-verde_873925-5430.jpg');
      background-size: cover;
      background-position: center;
      opacity: 0.5; /* Puedes ajustar la opacidad según lo desees */
      z-index: 0; /* Asegura que la imagen esté detrás de otros elementos */
    }
  </style>
</head>
<body>

<div class="background-image"></div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 p-0">
      <div class="list-group menu-vertical">
        <a href="form cliente.php" class="list-group-item list-group-item-action">formulario cliente</a>
        <a href="form empleado.php" class="list-group-item list-group-item-action">formulario empleado</a>
        <a href="form producto.php" class="list-group-item list-group-item-action">formulario producto</a>
        <a href="formprovedor.php" class="list-group-item list-group-item-action">formulario provedor</a>
      </div>
    </div>
    <div class="col-md-9">
<!-- Contenido principal aquí -->
  <h1 style="font-size: 36px; color: #333; font-weight: bold; margin-top: 50px;">¡Bienvenido!</h1>
  <p>Este es el contenido principal de la página.</p>
  </div>

  </div>
</div>

<div class="logo"></div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

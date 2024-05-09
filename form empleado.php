<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Empleado</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
  <style>
    /* Estilos adicionales para centrar el formulario */
    body, html {
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    body {
            background-image: url('https://static.vecteezy.com/system/resources/thumbnails/022/980/821/small/gradient-backgrounds-with-grainy-texture-png.png'); /* Cambia 'tu-imagen-de-fondo.jpg' por la ruta de tu imagen */
            background-size: cover;
            background-position: center;
        }
    .form-container {
      width: 600px;
    }

    .is-info input::placeholder {
      color: #d1d5db; /* Color de placeholder */
     }
  </style>
</head>
<body>

<div class="form-container">
  <section class="section">
    <div class="container">
        <br><br>
        <br><br><h1 class="title">Formulario de Empleado</h1>
      <form action="#" method="POST">
        <div class="field">
          <label class="label">Nombre</label>
          <div class="control">
            <input class="input" type="text" placeholder="Nombre" name="nombre" required>
          </div>
        </div>

        <div class="field">
          <label class="label">Apellido</label>
          <div class="control">
            <input class="input" type="text" placeholder="Apellido" name="apellido" required>
          </div>
        </div>

        <div class="field">
          <label class="label">Teléfono</label>
          <div class="control">
            <input class="input" type="tel" placeholder="Teléfono" name="telefono" required>
          </div>
        </div>

        <div class="field">
          <label class="label">Dirección</label>
          <div class="control">
            <input class="input" type="text" placeholder="Dirección" name="direccion" required>
          </div>
        </div>

        <div class="field">
          <label class="label">Gmail</label>
          <div class="control">
            <input class="input" type="email" placeholder="Gmail" name="gmail" required>
          </div>
        </div>

        <div class="field">
          <label class="label">Fecha de Nacimiento</label>
          <div class="control">
            <input class="input" type="date" name="fecha_nacimiento" required>
          </div>
        </div>

        <div class="field">
          <label class="label">Imagen</label>
          <div class="control">
            <input class="input" type="file" name="imagen">
          </div>
        </div>

        <div class="field is-grouped">
          <div class="control">
            <button class="button is-link">Enviar</button>
          </div>
          <div class="control">
            <button class="button is-link is-light">Cancelar</button>
          </div>
        </div>
      </form>
    </div>
  </section>
</div>

</body>
</html>

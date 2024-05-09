<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css"> 
    
    <!-- Enlace a Bulma CSS -->
    <style>
        body {
            background-image: url('https://static.vecteezy.com/system/resources/thumbnails/022/980/821/small/gradient-backgrounds-with-grainy-texture-png.png'); /* Cambia 'tu-imagen-de-fondo.jpg' por la ruta de tu imagen */
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
    <section class="hero is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                        <form action="#" method="POST" class="box">
                            <h1 class="title has-text-centered">Iniciar sesión</h1>
                            <div class="field">
                                <label for="username" class="label">Nombre de usuario</label>
                                <div class="control">
                                    <input type="text" class="input" id="username" name="username" placeholder="Nombre de usuario" required>
                                </div>
                            </div>
                            <div class="field">
                                <label for="password" class="label">Contraseña</label>
                                <div class="control">
                                    <input type="password" class="input" id="password" name="password" placeholder="Contraseña" required>
                                </div>
                            </div>
                            <div class="field">
                                <button type="submit" class="button is-primary is-fullwidth">Iniciar sesión</button>
                            </div>
                            <p class="has-text-centered">
                                ¿No tienes una cuenta? <a href="#">Regístrate aquí</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>



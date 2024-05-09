
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Empleado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
</head>
<body>
    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-one-third">
                    <div class="box">
                        <h1 class="title has-text-centered">Formulario de Empleado</h1>
                        <form action="procesar_empleado.php" method="post">
                            <div class="field">
                                <label class="label" for="nombre">Nombre:</label>
                                    <div class="control">
                                        <input class="input" type="text" id="nombre" name="nombre" required>
                                    </div>
                                </div>
                                <label class="label" for="nombre">Nombre:</label>
                                    <div class="control">
                                        <input class="input" type="text" id="nombre" name="nombre" required>
                                    </div>
                                    </div>
                                <div class="field">
                                    <label class="label" for="correo">Correo electrónico:</label>
                                    <div class="control">
                                        <input class="input" type="email" id="correo" name="correo" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label" for="contraseña">Contraseña:</label>
                                    <div class="control">
                                        <input class="input" type="password" id="contraseña" name="contraseña" required>
                                    </div>
                                </div>
                                <div class="field is-grouped is-grouped-centered">
                                    <div class="control">
                                        <input class="button is-primary" type="submit" value="Enviar">
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>


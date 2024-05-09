<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Producto</title>
    <link rel="stylesheet" href="styles.css"> <!-- Archivo CSS para estilos -->
         <style> /* Estilos para el formulario de producto */

            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }

            .section {
                padding: 20px;
            }

            .container {
                max-width: 600px;
                margin: 0 auto;
            }

            .title {
                text-align: center;
                margin-bottom: 20px;
            }

            .form {
                background-color: #ffffff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            }

            .field {
                margin-bottom: 20px;
            }

            .label {
                font-weight: bold;
                display: block;
                margin-bottom: 5px;
            }

            .input,
            input[type="file"],
            input[type="number"],
            input[type="date"] {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            .button {
                background-color: #007bff;
                color: #fff;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .button:hover {
                background-color: #0056b3;
            }
            </style>
</head>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Producto</title>
    <link rel="stylesheet" href="styles.css"> <!-- Enlace al archivo CSS -->
</head>
<body>
    <section class="section">
        <div class="container">
            <h1 class="title">Formulario Producto</h1>
            <form action="#" method="POST" class="form">
                <div class="form-group">
                    <div class="field">
                        <label class="label">Nombre del Producto</label>
                        <input class="input" type="text" placeholder="Nombre del Producto" name="nombre" required>
                    </div>
                    <div class="field">
                        <label class="label">Cantidad</label>
                        <input class="input" type="number" placeholder="Cantidad" name="cantidad" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="field">
                        <label class="label">Precio Unitario ($)</label>
                        <input class="input" type="number" step="0.01" placeholder="Precio Unitario" name="precio_unitario" required>
                    </div>
                    <div class="field">
                        <label class="label">Precio Total ($)</label>
                        <input class="input" type="number" step="0.01" placeholder="Precio Total" name="precio_total" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="field">
                        <label class="label">Proveedor</label>
                        <input class="input" type="text" placeholder="Proveedor" name="proveedor" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="field">
                        <label class="label">Fecha de Ingreso</label>
                        <input class="input" type="date" name="fecha_ingreso" required>
                    </div>
                    <div class="field">
                        <label class="label">Fecha de Caducidad</label>
                        <input class="input" type="date" name="fecha_caducidad" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="field is-grouped">
                        <div class="control">
                            <button type="submit" class="button is-primary">Enviar</button>
                            <br><br>
                        </div>
                        <div class="control">
                            <button type="button" class="button is-light">Cancelar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>


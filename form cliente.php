    <!DOCTYPE html>
    <html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario cliente</title>
        
    <link rel="stylesheet" href="estilo.css">
    <style>
    body {
            background-image: url('https://www.shutterstock.com/image-illustration/abstract-blurred-white-ice-blue-600nw-2283023549.jpg'); /* Cambia 'tu-imagen-de-fondo.jpg' por la ruta de tu imagen */
            background-size: cover;
            background-position: center;
        }

    </style>
    </head>
    <body>
     <br><br>
    <section class="section">
    <div class="container">
        <h1 class="title">Formulario Cliente</h1>
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
            <label class="label">Celular</label>
            <div class="control">
            
            
    <input class="input" type="tel" placeholder="celular" name="telefono_celular" required>
            
            </di>
                </div>
                    </div>

        <div class="field">
            <label class="label">Teléfono de Casa</label>
            <div class="control">
            <input class="input" type="tel" placeholder="Teléfono de Casa" name="telefono_casa" required>
            
        
            </div>
                </div>

        <div class="field">
            <label class="label">Dirección</label>
            <div class="control">
            <div class="select">
                <select name="pais" required>
                <option value="" disabled selected>País</option>
                <option value="Pais1">País 1</option>
                <option value="Pais2">País 2</option>
                <!-- Agrega más opciones de país según necesites -->
                </select>
            </div>
            <div class="select">
                <select name="departamento" required>
                <option value="" disabled selected>Departamento</option>
                <option value="Departamento1">Departamento 1</option>
                <option value="Departamento2">Departamento 2</option>
                <!-- Agrega más opciones de departamento según necesites -->
                </select>
            </div>
            <div class="select">
                <select name="municipio" required>
                <option value="" disabled selected>Municipio</option>
                <option value="Municipio1">Municipio 1</option>
                <option value="Municipio2">Municipio 2</option>
                <!-- Agrega más opciones de municipio según necesites -->
                </select>
            </div>
            <div class="select">
                <select name="municipio" required>
                <option value="" disabled selected>Distrito</option>
                <option value="Municipio1">Municipio 1</option>
                <option value="Municipio2">Municipio 2</option>
                <!-- Agrega más opciones de municipio según necesites -->
                </select>
            </div>
                <div class="field">
            <label class="label">ciudad</label>
            <div class="control">
            <input class="input" type="text" placeholder="Ciudad" name="calle_numero" required>
                </div>
            </div>

            <div class="field">
            <label class="label">Colonia</label>
            <div class="control">
            <input class="input" type="text" placeholder="colonia" name="calle_numero" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Barrio</label>
            <div class="control">
            <input class="input" type="text" placeholder="barrio" name="calle_numero" required>
            </div>
        </div>

        
        <div class="field">
            <label class="label">Canto</label>
            <div class="control">
            <input class="input" type="text" placeholder="canton" name="calle_numero" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Calle y número de casa</label>
            <div class="control">
            <input class="input" type="text" placeholder="Calle y número de casa" name="calle_numero" required>
            </div>
        </div>
       

        <div class="field">
            <label class="label">Gmail</label>
            <div class="control">
            <input class="input" type="email" placeholder="Gmail" name="gmail" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Imagen</label>
            <div class="control">
            <input class="input" type="file" name="imagen">
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

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario cliente</title>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
include ("menu.php");
?>

<div class="container mt-5">
    <h1 class="mb-4">Formulario Cliente</h1>
    <form action="#" method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
        </div>

        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required>
        </div>

        <div class="mb-3">
            <label for="telefono_celular" class="form-label">Celular</label>
            <input type="tel" class="form-control" id="telefono_celular" name="telefono_celular" placeholder="Celular" required>
        </div>

        <div class="mb-3">
            <label for="telefono_casa" class="form-label">Teléfono de Casa</label>
            <input type="tel" class="form-control" id="telefono_casa" name="telefono_casa" placeholder="Teléfono de Casa" required>
        </div>

        <div class="mb-3">
            <label for="pais" class="form-label">País</label>
            <select class="form-select" id="pais" name="pais" required>
                <option value="" disabled selected>País</option>
                <option value="Pais1">País 1</option>
                <option value="Pais2">País 2</option>
                <!-- Agrega más opciones de país según necesites -->
            </select>
        </div>

        <div class="mb-3">
            <label for="departamento" class="form-label">Departamento</label>
            <select class="form-select" id="departamento" name="departamento" required>
                <option value="" disabled selected>Departamento</option>
                <option value="Departamento1">Departamento 1</option>
                <option value="Departamento2">Departamento 2</option>
                <!-- Agrega más opciones de departamento según necesites -->
            </select>
        </div>

        <div class="mb-3">
            <label for="municipio" class="form-label">Municipio</label>
            <select class="form-select" id="municipio" name="municipio" required>
                <option value="" disabled selected>Municipio</option>
                <option value="Municipio1">Municipio 1</option>
                <option value="Municipio2">Municipio 2</option>
                <!-- Agrega más opciones de municipio según necesites -->
            </select>
        </div>

        <div class="mb-3">
            <label for="distrito" class="form-label">Distrito</label>
            <select class="form-select" id="distrito" name="distrito" required>
                <option value="" disabled selected>Distrito</option>
                <option value="Distrito1">Distrito 1</option>
                <option value="Distrito2">Distrito 2</option>
                <!-- Agrega más opciones de distrito según necesites -->
            </select>
        </div>

        <div class="mb-3">
            <label for="ciudad" class="form-label">Ciudad-Colonia-Barrio</label>
            <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad-Colonia-Barrio" required>
        </div>

        <div class="mb-3">
            <label for="calle" class="form-label">calle</label>
            <input type="text" class="form-control" id="calle" name="calle" placeholder="Calle" required>
        </div>

        <div class="mb-3">
            <label for="calle_numero" class="form-label"> Número de casa</label>
            <input type="text" class="form-control" id="calle_numero" name="calle_numero" placeholder="Número de casa" required>
        </div>

        <div class="mb-3">
            <label for="gmail" class="form-label">correo electronico</label>
            <input type="correo electronico" class="form-control" id="gmail" name="gmail" placeholder="correo electronico" required>
        </div>

       

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="button" class="btn btn-secondary">Cancelar</button>
        </div>
    </form>
</div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

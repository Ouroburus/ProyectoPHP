<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Producto</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
   
</head>
<body>
    
<?php
include ("menu.php");
?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-center">Formulario Producto</h1>
                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre del Producto</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Nombre del Producto" name="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="cantidad" class="form-label">Cantidad</label>
                                <input type="number" class="form-control" id="cantidad" placeholder="Cantidad" name="cantidad" required>
                            </div>
                            <div class="mb-3">
                                <label for="precio_unitario" class="form-label">Precio Unitario ($)</label>
                                <input type="number" step="0.01" class="form-control" id="precio_unitario" placeholder="Precio Unitario" name="precio_unitario" required>
                            </div>
                            <div class="mb-3">
                                <label for="precio_total" class="form-label">Precio Total ($)</label>
                                <input type="number" step="0.01" class="form-control" id="precio_total" placeholder="Precio Total" name="precio_total" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="proveedor" class="form-label">Proveedor</label>
                                <input type="text" class="form-control" id="proveedor" placeholder="Proveedor" name="proveedor" required>
                            </div>
                                                    
                                    <div class="form-group">
                                        <label for="categoria">Categoría:</label>
                                        <select class="form-control" id="categoria" name="categoria" required>
                                            <option value="">Selecciona una categoría</option>
                                            <option value="Electronica">Electrónica</option>
                                            <option value="Ropa">Ropa</option>
                                            <option value="Alimentos">Alimentos</option>
                                            <option value="Hogar">Hogar</option>
                                            <!-- Agrega más opciones según sea necesario -->
                                        </select>
                                    </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="fecha_ingreso" class="form-label">Fecha de Ingreso</label>
                                    <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" required>
                                </div>
                                <div class="col">
                                    <label for="fecha_caducidad" class="form-label">Fecha de Caducidad</label>
                                    <input type="date" class="form-control" id="fecha_caducidad" name="fecha_caducidad" required>
                                </div>
                            </div>
                                <div class="form-group">
                                <label for="descripcion">Descripción:</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea>
                                </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Factura</title>
    <style>
        form {
            width: 50%;
            margin: auto;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="date"], input[type="number"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .action-buttons {
            display: flex;
            gap: 5px;
        }
        button {
            padding: 10px;
        }
    </style>
    <script>
        function addRow() {
            var table = document.getElementById("productos");
            var row = table.insertRow(-1);
            row.innerHTML = `
                <td><input type="text" name="producto[]" required></td>
                <td><input type="number" name="cantidad[]" required></td>
                <td><input type="number" name="precio[]" required></td>
                <td><input type="number" name="total[]" required></td>
                <td>
                    <div class="action-buttons">
                        <button type="button" onclick="deleteRow(this)">Eliminar</button>
                    </div>
                </td>
            `;
        }

        function deleteRow(button) {
            var row = button.parentNode.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }

        function editRow(button) {
            var row = button.parentNode.parentNode.parentNode;
            var cells = row.getElementsByTagName("td");

            for (var i = 0; i < cells.length - 1; i++) {
                var cell = cells[i];
                var input = cell.getElementsByTagName("input")[0];
                input.removeAttribute("disabled");
            }
        }
    </script>
</head>
<body>
<?php
include ("menu.php");
?>
    <h2>Crear Factura</h2>
    <form method="POST" action="procesar_factura.php">
        <div class="form-group">
            <label for="cliente">Nombre del Cliente:</label>
            <input type="text" id="cliente" name="cliente" required>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" required>
        </div>
        <table id="productos">
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Total</th>
                <th>Accion</th>
            </tr>
            <tr>
                <td><input type="text" name="producto[]" required></td>
                <td><input type="number" name="cantidad[]" required></td>
                <td><input type="number" name="precio[]" required></td>
                <td><input type="number" name="total[]" required></td>
                <td>
                    <div class="action-buttons">
                        <button type="button" onclick="deleteRow(this)">Eliminar</button>
                    </div>
                </td>
            </tr>
        </table>
        <button type="button" onclick="addRow()">Añadir Producto/Servicio</button>
        <br><br>
        <button type="submit">Crear Factura</button>
    </form>

</body>
</html>

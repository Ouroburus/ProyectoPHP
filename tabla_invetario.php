<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Inventario</title>
    <style>
        table {
            width: 100%;
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
    </style>
</head>
<body>
    <h2>Inventario</h2>
    <table>
        <tr>
            <th>Nombre del Producto</th>
            <th>Descripción</th>
            <th>Cantidad</th>
            <th>Precio</th>
        
        </tr>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = ""; // Coloca tu contraseña aquí si tienes una configurada
        $dbname = "nombre_de_tu_base_de_datos"; // Asegúrate de que este nombre sea correcto

        // Crear conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        $sql = "SELECT id, nombre_producto, descripcion, cantidad, precio FROM inventario";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output de los datos de cada fila
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["nombre_producto"] . "</td>
                        <td>" . $row["descripcion"] . "</td>
                        <td>" . $row["cantidad"] . "</td>
                        <td>" . $row["precio"] . "</td>
                        <td class='action-buttons'>
                            <form method='POST' action='modificar_inventario.php'>
                                <input type='hidden' name='id' value='" . $row["id"] . "'>
                                <button type='submit'>Modificar</button>
                            </form>
                            <form method='POST' action='eliminar_inventario.php'>
                                <input type='hidden' name='id' value='" . $row["id"] . "'>
                                <button type='submit'>Eliminar</button>
                            </form>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No se encontraron resultados</td></tr>";
        }

        // Cerrar la conexión
        $conn->close();
        ?>
    </table>
</body>
</html>

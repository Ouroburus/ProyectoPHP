<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Empleados</title>
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
    </style>
</head>
<body>
    
<?php
include ("menu.php");
?>
    <h2>Lista de Empleados</h2>
    <table>
        <tr>
            <th>Nombre Completo</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Correo Electrónico</th>
        </tr>
        <?php
        $servername = "localhost";  // Cambia esto si tu servidor no está en localhost
        $username = "root";         // Tu nombre de usuario para la base de datos
        $password = "";             // Tu contraseña para la base de datos
        $dbname = "nombre_de_tu_base_de_datos"; // El nombre de tu base de datos

        // Crear conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        $sql = "SELECT nombre_completo, direccion, telefono, correo_electronico FROM empleados";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output de los datos de cada fila
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["nombre_completo"] . "</td>
                        <td>" . $row["direccion"] . "</td>
                        <td>" . $row["telefono"] . "</td>
                        <td>" . $row["correo_electronico"] . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No se encontraron resultados</td></tr>";
        }

        // Cerrar la conexión
        $conn->close();
        ?>
    </table>
</body>
</html>

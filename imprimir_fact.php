<?php
// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = ""; // Coloca tu contraseña aquí si tienes una configurada
$dbname = ""; // Asegúrate de que este nombre sea correcto

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el ID de la factura de la URL
$factura_id = $_GET['id'];

// Obtener los datos de la factura
$sql_factura = "SELECT * FROM facturas WHERE id = $factura_id";
$result_factura = $conn->query($sql_factura);
$factura = $result_factura->fetch_assoc();

// Obtener los detalles de la factura
$sql_detalles = "SELECT * FROM detalles_factura WHERE factura_id = $factura_id";
$result_detalles = $conn->query($sql_detalles);

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir Factura</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            color: #555;
        }
        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
            border-collapse: collapse;
        }
        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }
        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }
        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }
        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }
        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }
        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }
        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }
        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }
        .invoice-box table tr.item.last td {
            border-bottom: none;
        }
        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }
        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }
            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="invoice-box">
        <table>
            <tr class="top">
                <td colspan="4">
                    <table>
                        <tr>
                            <td class="title">
                                <h2>Factura</h2>
                            </td>
                            <td>
                                Factura #: <?php echo $factura['id']; ?><br>
                                Fecha: <?php echo $factura['fecha']; ?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="information">
                <td colspan="4">
                    <table>
                        <tr>
                            <td>
                                Cliente:<br>
                                <?php echo $factura['cliente']; ?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="heading">
                <td>Producto/Servicio</td>
                <td>Cantidad</td>
                <td>Precio Unitario</td>
                <td>Total</td>
            </tr>
            <?php
            $total_general = 0;
            while($row = $result_detalles->fetch_assoc()) {
                $total = $row['cantidad'] * $row['precio'];
                $total_general += $total;
                echo "<tr class='item'>
                        <td>" . $row['producto'] . "</td>
                        <td>" . $row['cantidad'] . "</td>
                        <td>$" . number_format($row['precio'], 2) . "</td>
                        <td>$" . number_format($total, 2) . "</td>
                      </tr>";
            }
            ?>
            <tr class="total">
                <td colspan="3"></td>
                <td>Total: $<?php echo number_format($total_general, 2); ?></td>
            </tr>
        </table>
    </div>
</body>
</html>

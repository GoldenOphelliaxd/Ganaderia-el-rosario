<?php
$conexion = new mysqli("localhost", "root", "", "ganaderia_el_rosario");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$query = "SELECT * FROM inventario";
$resultado = $conexion->query($query);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>{$fila['producto']}</td>
                <td>{$fila['cantidad']}</td>
                <td>{$fila['proveedor']}</td>
                <td>{$fila['subtotal']}</td>
                <td>{$fila['total']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5' class='text-center'>No hay datos en el inventario</td></tr>";
}

$conexion->close();
?>

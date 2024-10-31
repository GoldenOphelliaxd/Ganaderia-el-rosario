<?
<?php include("template/cabecera.php");?>
$conexion = new mysqli("localhost", "root", "", "ganaderia_el_rosario");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$num_empleado = $_POST['num_empleado'];
$contraseña = $_POST['contraseña'];

$query = "SELECT * FROM usuarios WHERE num_empleado = '$num_empleado' AND contraseña = '$contraseña'";
$resultado = $conexion->query($query);

if ($resultado->num_rows > 0) {
    header("Location: php/inventario.php");
} else {
    echo "Número de empleado o contraseña incorrectos.";
}

$conexion->close();
?>
<?php include("template/pie.php");?>
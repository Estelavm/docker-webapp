<?php
$conexion = new mysqli("mysql57-container", "root", "clave123", "webdb");


if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$resultado = $conexion->query("SELECT * FROM visitas");

echo "<h1>Registros desde MySQL</h1>";

while ($fila = $resultado->fetch_assoc()) {
    echo "<p>" . $fila["mensaje"] . "</p>";
}

$conexion->close();
?>

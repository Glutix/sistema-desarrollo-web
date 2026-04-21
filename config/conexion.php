<?php
require_once "global.php";

$conexion = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, 3306);

// Verificar conexión (forma correcta OO)
if ($conexion->connect_error) {
    die("Fallo la conexión a la base de datos: " . $conexion->connect_error);
}

// Configurar charset correctamente
$conexion->set_charset(DB_ENCODE);

echo "Conexión exitosa";

?>
<?php
require_once "global.php";

$conexion = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME,3306);

mysqli_query($conexion, "SET NAMES '".DB_ENCODE."'");


if (mysqli_connect_errno()) {
    printf("Fallo la conexion a la base de datos: %s\n", mysqli_connect_error());
    exit();
}

echo "Conexion exitosa";

?>
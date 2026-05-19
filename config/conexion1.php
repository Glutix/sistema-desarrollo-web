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

//ejecutarconsulta  
function ejecutarConsulta($sql)
{
    global $conexion; // acceder a la variable conexioin como global
    $query = $conexion->query($sql);
    return $query; // devuelve el resultado de la consulta
}

//Funcion para Ejecutar consulta SELECT con una unica fila
//Ejecutar consultasimple
function ejecutarConsultaSimpleFila($sql)
{
    global $conexion; // acceder a la variable conexioin como global
    $query = $conexion->query($sql);
    $row = $query->fetch_assoc(); // Obtiene la fila como un array asociativo
    return $row;
}

//Funcion para Insert y obtener el ID interado
function ejecutarConsulta_retornarID($sql)
{
    global $conexion; // acceder a la variable conexion como global
    $query = $conexion->query($sql);
    return $conexion->insert_id; // Devuelve el ID generado por el ultimo INSERT
}

function limpiarCadena($str)
{
    global $conexion;
    $str = $conexion->real_escape_string(trim($str));
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); // caracteristicas especiales en entidades HTML
}

?>

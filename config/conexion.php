<?php
require_once "global.php";

$conexion = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, 3307);

mysqli_query($conexion, "SET NAMES '" . DB_ENCODE . "'");

//Si tenemos un posible error en la conexión lo mostramos
if (mysqli_connect_errno()) {
	printf(
		"Falló conexión a la base de datos %s\n",
		mysqli_connect_error()
	);
	exit();
}
// Función para ejecutar consulta SELECT
function ejecutarConsulta($sql)
{
	global $conexion; // acceder a la variable conexión como global
	$query = $conexion->query($sql);
	return $query; // devuelve el resultado de la consulta
}
// Función para ejecutar consulta SELECT con una unica fila 
function ejecutarConsultaSimpleFila($sql)
{
	global $conexion; // acceder a la variable conexión como global
	$query = $conexion->query($sql);
	$row = $query->fetch_assoc(); //Obtiene la fila como un array asociativo
	return $row; // devuelve el resultado de la consulta
}
// Función para INSERT y obtener el ID insertado
function ejecutarConsulta_retornarID($sql)
{
	global $conexion; // acceder a la variable conexión como global
	$query = $conexion->query($sql);
	return $conexion->insert_id; // Devuelve el ID generado por el último INSERT
}

function limpiarCadena($sql)
{
	global $conexion;
	$sql = mysqli_real_escape_string($conexion, trim($sql));
	return htmlspecialchars($sql); // caracteres especiales a entidades HTML
}

//hacer función limpiarCadena
//hacer función ejecutarConsulta
//hacer funció ejecutarConsultaSimpleFila

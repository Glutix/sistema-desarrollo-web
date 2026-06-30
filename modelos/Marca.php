<?php
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

// Representa las operaciones CRUD de la tabla marca
class Marca
{
	//Implementamos nuestro constructor
	public function __construct() {}

	// Inserta una nueva marca
	public function insertar($nombre, $descripcion)
	{
		$sql = "INSERT INTO marca (nombre,descripcion,condicion)
		VALUES ('$nombre','$descripcion','1')";
		return ejecutarConsulta($sql);
	}

	// Actualiza una marca existente
	public function editar($idmarca, $nombre, $descripcion)
	{
		$sql = "UPDATE marca SET nombre='$nombre',descripcion='$descripcion' WHERE idmarca='$idmarca'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar marcas
	public function desactivar($idmarca)
	{
		$sql = "UPDATE marca SET condicion='0' WHERE idmarca='$idmarca'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar marcas
	public function activar($idmarca)
	{
		$sql = "UPDATE marca SET condicion='1' WHERE idmarca='$idmarca'";
		return ejecutarConsulta($sql);
	}

	// Obtiene una marca por su ID
	public function mostrar($idmarca)
	{
		$sql = "SELECT * FROM marca WHERE idmarca='$idmarca'";
		return ejecutarConsultaSimpleFila($sql);
	}

	// Recupera todas las marcas
	public function listar()
	{
		$sql = "SELECT * FROM marca";
		return ejecutarConsulta($sql);
	}
}

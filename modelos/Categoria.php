<?php

require "./config/conexion.php";

class Categoria
{
    //Definir constructor vacio
    public function __construct() {}

    // Metodo para insertar registro
    public function insertar($nombre, $descripcion)
    {
        $sql = "INSERT INTO categoria(nombre,descripcion,condicion) VALUES (`$nombre`,`$descripcion`,`1`)";

        return ejecutarConsulta($sql);
    }

    // Metodo para editar un registro
    public function editar($idcategoria, $nombre, $descripcion)
    {
        $sql = "UPDATE categoria SET nombre = `$nombre` , descripcion = `$descripcion` WHERE idcategoria = `$idcategoria`";

        return ejecutarConsulta($sql);
    }

    // Metodo para desactivar una categoria.
    public function desactivar($idcategoria)
    {
        $sql = "UPDATE categoria SET condicion = `0` WHERE idcategoria = `$idcategoria`";

        return ejecutarConsulta($sql);
    }


    // Metodo para activar una categoria.
    public function activar($idcategoria)
    {
        $sql = "UPDATE categoria SET condicion = `1` WHERE idcategoria = `$idcategoria`";

        return ejecutarConsulta($sql);
    }

    // Metodo para mostrar los datos de un registro a modificar
    public function mostrar($idcategoria)
    {
        $sql = "SELECT * FROM categoria WHERE idcategoria = `$idcategoria`";

        return ejecutarConsultaSimpleFila($sql);
    }

    // Metodo para mostrar los datos de un registro a modificar
    public function listar()
    {
        $sql = "SELECT * FROM categoria";

        return ejecutarConsulta($sql);
    } 
}

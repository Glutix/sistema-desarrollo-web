<?php
require_once "../modelos/Articulo.php";

$articulo = new Articulo();

$idarticulo = isset($_POST["idarticulo"]) ? limpiarCadena($_POST["idarticulo"]) : "";
$nombre = isset($_POST["nombre"]) ? limpiarCadena($_POST["nombre"]) : "";
$descripcion = isset($_POST["descripcion"]) ? limpiarCadena($_POST["descripcion"]) : "";
$codigo = isset($_POST["codigo"]) ? limpiarCadena($_POST["codigo"]) : "";
$stock = isset($_POST["stock"]) ? limpiarCadena($_POST["stock"]) : "";
$imagen = isset($_POST["imagen"]) ? limpiarCadena($_POST["imagen"]) : "";

switch ($_GET["op"]) {
	case 'guardaryeditar':
		if (empty($idarticulo)) {
			$rspta = $articulo->insertar($nombre, $descripcion, $stock, $codigo, $imagen);
			echo $rspta ? "Articulo registrada" : "Articulo no se pudo registrar";
		} else {
			$rspta = $articulo->editar($idarticulo, $nombre, $stock, $descripcion, $codigo, $imagen);
			echo $rspta ? "Articulo actualizada" : "Articulo no se pudo actualizar";
		}
		break;

	case 'desactivar':
		$rspta = $articulo->desactivar($idarticulo);
		echo $rspta ? "Articulo Desactivada" : "Articulo no se puede desactivar";
		break;

	case 'activar':
		$rspta = $articulo->activar($idarticulo);
		echo $rspta ? "Articulo activada" : "Articulo no se puede activar";
		break;

	case 'mostrar':
		$rspta = $articulo->mostrar($idarticulo);
		//Codificar el resultado utilizando json
		echo json_encode($rspta);
		break;

	case 'listar':
		$rspta = $articulo->listar();
		//Vamos a declarar un array
		$data = array();

		while ($reg = $rspta->fetch_object()) {
			$data[] = array(
				"0" => ($reg->condicion) ? '<button class="btn btn-warning" onclick="mostrar(' . $reg->idcategoria . ')"><i class="fa fa-pencil"></i></button>' .
					' <button class="btn btn-danger" onclick="desactivar(' . $reg->idcategoria . ')"><i class="fa fa-close"></i></button>' :
					'<button class="btn btn-warning" onclick="mostrar(' . $reg->idcategoria . ')"><i class="fa fa-pencil"></i></button>' .
					' <button class="btn btn-primary" onclick="activar(' . $reg->idcategoria . ')"><i class="fa fa-check"></i></button>',
				"1" => $reg->nombre,
				"2" => $reg->descripcion,
				"3" => ($reg->condicion) ? '<span class="label bg-green">Activado</span>' :
					'<span class="label bg-red">Desactivado</span>',
                "4" => $reg->stock,
                "5" => $reg->codigo,
                "6" => $reg->imagen,
			);
		}
		$results = array(
			"sEcho" => 1, //Información para el datatables
			"iTotalRecords" => count($data), //enviamos el total registros al datatable
			"iTotalDisplayRecords" => count($data), //enviamos el total registros a visualizar
			"aaData" => $data
		);
		echo json_encode($results);

		break;
}

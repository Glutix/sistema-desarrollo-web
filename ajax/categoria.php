<?php

require "./modelos/Categoria.php"

// creamos una instancia
$categoria = new Categoria();


$idcategoria = isset($_POST["idcategoria"]) ? limpiarCadena($_POST["idcategoria"]) : "";
$nombre = isset($_POST["nombre"]) ? limpiarCadena($_POST["nombre"]) : "";
$descripcion = isset($_POST["descripcion"]) ? limpiarCadena($_POST["descripcion"]) : "";

// vamos a utilizar una variable que viene de js llamada op
switch ($_GET["op"]) {
    case "guardaryeditar":
        if(empty($idcategoria)){
            $rpta = $categoria->insertar($nombre, $descripcion);
            echo $rpta ? "Categoria registrada" : "Categoria no se pudo registrar";
            break;
        }
        
        $rpta = $categoria->editar($idcategoria, $nombre, $descripcion);
        echo $rpta ? "Categoria actualizada" : "Categoria no se pudo actualizar";

        break;
    
    case "desactivar":
        $rpta = $categoria->desactivar($idcategoria);
        echo $rpta ? "Categoria desactivada" : "Categoria no se pudo desactivar";

        break;
    
    case "activar":
        $rpta = $categoria->activar($idcategoria);
        echo $rpta ? "Categoria activada" : "Categoria no se pudo activar";

        break;

    case "mostrar":
        $rpta = $categoria->mostrar($idcategoria);
        // Mostrar resultado en JSON

        echo json_encode($rpta);

        break;

    case 'listar':
		$rspta=$categoria->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idcategoria.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idcategoria.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idcategoria.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idcategoria.')"><i class="fa fa-check"></i></button>',
 				"1"=>$reg->nombre,
 				"2"=>$reg->descripcion,
 				"3"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
 				'<span class="label bg-red">Desactivado</span>'
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;

}

?>

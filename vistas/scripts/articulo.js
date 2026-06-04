var tabla;
import JsBarcode from "../../public/js/JsBarcode.all.min.js"

//Función que se ejecuta al inicio
function init() {
	mostrarform(false);
	listar();

	$("#formulario").on("submit", function (e) {
		guardaryeditar(e);
	})

    // cargar las lista de articulos y categoria

}

//Función limpiar
function limpiar() {
	$("#idarituclo").val("");
	$("#codigo").val("");

	$("#nombre").val("");
	$("#descripcion").val("");
    $("#stock").val("");
    
    $("#imagenmuestra").attr("src","");
    $("#imagenactual").val("");
    $("#print").hide("");


	// $("#idcategoria").val("");
}

//Función mostrar formulario
function mostrarform(flag) {
	limpiar();
	if (flag) {
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled", false);
		$("#btnagregar").hide();
	}
	else {
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
	}
}

//Función cancelarform
function cancelarform() {
	limpiar();
	mostrarform(false);
}

//Función Listar
function listar() {
	tabla = $('#tbllistado').dataTable(
		{
			"aProcessing": true,//Activamos el procesamiento del datatables
			"aServerSide": true,//Paginación y filtrado realizados por el servidor
			dom: 'Bfrtip',//Definimos los elementos del control de tabla
			buttons: [
				'copyHtml5',
				'excelHtml5',
				'csvHtml5',
				'pdf'
			],
			"ajax":
			{
				url: '../ajax/articulo.php?op=listar',
				type: "get",
				dataType: "json",
				error: function (e) {
					console.log(e.responseText);
				}
			},
			"bDestroy": true,
			"iDisplayLength": 5,//Paginación
			"order": [[0, "desc"]]//Ordenar (columna,orden)
		}).DataTable();
}

//Función para guardar o editar
function guardaryeditar(e) {
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled", true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/articulo.php?op=guardaryeditar",
		type: "POST",
		data: formData,
		contentType: false,
		processData: false,

		success: function (datos) {
			bootbox.alert(datos);
			mostrarform(false);
			tabla.ajax.reload();
		}

	});
	limpiar();
}

function mostrar(idarticulo) {
	$.post("../ajax/articulo.php?op=mostrar", { idarticulo: idarticulo }, function (data, status) {
		data = JSON.parse(data);
		mostrarform(true);

		$("#idarticulo").val(data.idarticulo);
		$("#codigo").val(data.codigo);
		
        $("#nombre").val(data.nombre);
		$("#descripcion").val(data.descripcion);
		$("#stock").val(data.stock);

		$("#imagenmuestra").show();
		$("#imagenmuestra").attr("src", "../files/articulo/" + data.imagen);
		$("#imagenactual").val(data.imagen);

		// $("#idcategoria").val(data.idcategoria);

        generarBarCode();

	})
}

//Función para desactivar registros
function desactivar(idarticulo) {
	bootbox.confirm("¿Está Seguro de desactivar el Articulo?", function (result) {
		if (result) {
			$.post("../ajax/articulo.php?op=desactivar", { idarticulo: idarticulo }, function (e) {
				bootbox.alert(e);
				tabla.ajax.reload();
			});
		}
	})
}

//Función para activar registros
function activar(idarticulo) {
	bootbox.confirm("¿Está Seguro de activar el Articulo?", function (result) {
		if (result) {
			$.post("../ajax/articulo.php?op=activar", { idarticulo: idarticulo }, function (e) {
				bootbox.alert(e);
				tabla.ajax.reload();
			});
		}
	})
}

// Funcion para generar codigo de barras
function generarBarCode(){
    codigo = $("#codigo").val();
    JsBarcode("#barcode", codigo);
    $("#print").show();
}

// Funcion para imprimir el codigo de barras
function imprimir(){
    $("#print").printArea();
}

init();
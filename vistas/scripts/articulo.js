var tabla;

//Función que se ejecuta al inicio
function init() {
	mostrarform(false);
	listar();

	$("#formulario").on("submit", function (e) {
		guardaryeditar(e);
	});

	// Previsualización de la imagen
	$("#imagen").change(function () {
		console.log("Se seleccionó una imagen");

		if (this.files && this.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				console.log("Imagen leída");

				$("#imagenmuestra")
					.attr("src", e.target.result)
					.show();
			};

			reader.readAsDataURL(this.files[0]);
		}
	});

	//Cargar categorías
	$.post("../ajax/articulo.php?op=selectCategoria", function (r) {
		$("#idcategoria").html(r);
		$('#idcategoria').selectpicker('refresh');
	});

	//Cargar marcas
	$.post("../ajax/articulo.php?op=selectMarca", function (r) {
		$("#idmarca").html(r);
		$('#idmarca').selectpicker('refresh');
	});
};

//Función limpiar
function limpiar() {
	$("#codigo").val("");
	$("#nombre").val("");
	$("#stock").val("");
	$("#descripcion").val("");
	$("#imagen").val("");
	$("#imagenmuestra").attr("src", "");
	$("#imagenmuestra").hide();
	$("#imagenactual").val("");
	$("#print").hide();
	$("#idarticulo").val("");
	$("#idcategoria").val("");
	$("#idmarca").val("");
}

//Función mostrar formulario
function mostrarform(flag) {
	limpiar();
	if (flag) {
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled", false);
		$("#btnagregar").hide();
	} else {
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
	tabla = $("#tbllistado")
		.dataTable({
			aProcessing: true, //Activamos el procesamiento del datatables
			aServerSide: true, //Paginación y filtrado realizados por el servidor
			dom: "Bfrtip", //Definimos los elementos del control de tabla
			buttons: ["copyHtml5", "excelHtml5", "csvHtml5", "pdf"],
			ajax: {
				url: "../ajax/articulo.php?op=listar",
				type: "get",
				dataType: "json",
				error: function (e) {
					console.log(e.responseText);
				},
			},
			bDestroy: true,
			iDisplayLength: 5, //Paginación
			order: [[0, "desc"]], //Ordenar (columna,orden)
		})
		.DataTable();
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
		},
	});
	limpiar();
}

function mostrar(idarticulo) {
	$.post(
		"../ajax/articulo.php?op=mostrar",
		{ idarticulo: idarticulo },
		function (data, status) {
			data = JSON.parse(data);
			mostrarform(true);

			$("#codigo").val(data.codigo);
			$("#nombre").val(data.nombre);
			$("#stock").val(data.stock);
			$("#imagenmuestra").show();
			$("#imagenmuestra").attr(
				"src",
				"../files/articulos/" + data.imagen
			);
			$("#imagenactual").val(data.imagen);
			$("#descripcion").val(data.descripcion);
			$("#idarticulo").val(data.idarticulo);
			$("#idcategoria").val(data.idcategoria);
			$("#idmarca").val(data.idmarca);
			generarbarcode();
		}
	);
}

//Función para desactivar registros
function desactivar(idarticulo) {
	bootbox.confirm(
		"¿Está Seguro de desactivar la Articulo?",
		function (result) {
			if (result) {
				$.post(
					"../ajax/articulo.php?op=desactivar",
					{ idarticulo: idarticulo },
					function (e) {
						bootbox.alert(e);
						tabla.ajax.reload();
					}
				);
			}
		}
	);
}

//Función para activar registros
function activar(idarticulo) {
	bootbox.confirm("¿Está Seguro de activar la Articulo?", function (result) {
		if (result) {
			$.post(
				"../ajax/articulo.php?op=activar",
				{ idarticulo: idarticulo },
				function (e) {
					bootbox.alert(e);
					tabla.ajax.reload();
				}
			);
		}
	});
}

// función para generar el código de barras
function generarbarcode() {
	codigo = $("#codigo").val();
	JsBarcode("#barcode", codigo);
	$("#print").show();
}
// función para imprimir el código de barras
function imprimir() {
	$("#print").printArea();
}

init();

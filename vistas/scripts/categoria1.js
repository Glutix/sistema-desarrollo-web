var table;

function init() {
  mostrarform(false);
  listar();

  $("#formulario").on("sumbit", function (e) {
    guardaryeditar(e);
  });
}

function limpiar() {
  $("#idcategoria").val("");
  $("#idnombre").val("");
  $("#descripcion").val("");
}

// funcioin para mostrar el form u ocultar.
function mostrarform(flag) {
  limpiar();

  if (flag) {
    $("#listadoderegistros").show();
    $("#formularioregistros").show();
    $("#btnguardar").prop("disabled", false);
    $("#btnagregar").hide();
  } else {
    $("#listadoderegistros").show();
    $("#formularioregistros").hide();
    $("#btnagregar").show();
  }
}

// funcion cancelar form
function cancelarform() {
  limpiar();
  mostrarform(false);
}

// funcion para listar contenido, vamos a trabajar con el DOM y datatable
function listar() {
  table = $("#tbllistado")
    .dataTable({
      aProcessing: true, // Activamos el procesamiento del datatables
      aServerSide: true, // Paginación y filtrado realizados por el servidor
      dom: "Bfrtip", // Definimos los elementos del control de tabla
      buttons: ["copyHtml5", "excelHtml5", "csvHtml5", "pdf" /*pdfHtml5*/], // Definimos los botones para exportar
      ajax: {
        url: "../ajax/categoria.php?op=listar",
        type: "get",
        dataType: "json",
        error: function (e) {
          console.log(e.responseText);
        },
      },
      bDestroy: true,
      iDisplayLength: 5, // Paginacion
      order: [[0, "desc"]], // Ordenar por columnas y de forma ASC/DESC
    })
    .DataTable();
}

function guardaryeditar(e) {}

function mostrar(idcategoria) {
  $.post(
    "../ajax/categoria.php?op=mostrar",
    { idcategoria: idcategoria },
    function (data, status) {
      data = JSON.parse(data);
      mostrarform(true);

      $("$nombre").val(data.nombre);
      $("$descripcion").val(data.descripcion);
      $("$idcategoria").val(data.idcategoria);
    },
  );
}

function desactivar(idcategoria) {
  bootbox.confirm(
    "¿Está seguro de desactivar la categoría?",
    function (result) {
      if (result) {
        // Lógica para desactivar la categoría
        $.post(
          "../ajax/categoria.php?op=desactivar",
          { idcategoria: idcategoria },
          function (e) {
            bootbox.alert(e);
            table.ajax.reload();
          },
        );
      }
    },
  );
}

function activar(idcategoria) {
  bootbox.confirm("¿Está seguro de activar la categoría?", function (result) {
    if (result) {
      // Lógica para activar la categoría
      $.post(
        "../ajax/categoria.php?op=activar",
        { idcategoria: idcategoria },
        function (e) {
          bootbox.alert(e);
          table.ajax.reload();
        },
      );
    }
  });
}

init();

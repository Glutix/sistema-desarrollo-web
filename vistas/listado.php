<?php

require "header.php";

?>

<!--Contenido-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h1 class="box-title">Categoria <button id="btnagregar" class="btn btn-success" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tblistado" class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                                <th>Opciones</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Estado</th>
                            </thead>
                            <tbody>

                            </tbody>

                            <tfoot>
                                <th>Opciones</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Estado</th>
                            </tfoot>

                        </table>

                    </div>


                    <div id="formularioregistros" class="panel-body" style="height: 400px;">
                        <form name="formulario" id="formulario" method="POST">
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Nombre</label>
                                <input type="hidden" name="idcategoria" id="idcategoria">
                                <input type="text" name="nombre" id="nombre" class="form-control" maxlength="50" placeholder="Ingrese nombre" require>
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Descripcion</label>
                                <input type="text" name="descripcion" id="descripcion" class="form-control" maxlength="256" placeholder="Descripcion">
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12>">
                                <button class="btn btn-primary" type="sumbit" id="btnGuardar"> <i class="fa fa-save"></i>Guardar</button>
                                <button tpye="buttom" class="btn btn-danger" onclick="cancelarform()"><i class="fa fa-arrow-circle-left"></i>Cancelar</button>
                            </div>

                        </form>
                    </div>

                    <!--Fin centro -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

</div><!-- /.content-wrapper -->
<!--Fin-Contenido-->


<?php

require "footer.php";

?>

<script type="text/javascript" src="scripts/categoria.js"></script>
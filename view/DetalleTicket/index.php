<?php
    require_once("../../config/conexion.php");
    if(isset($_SESSION["usu_id"])) {
?>
<!DOCTYPE html>
<html>
    <?php require_once("../MainHead/head.php"); ?>
	<title>SuppApp: Detalle Ticket</title>
</head>
<body class="with-side-menu">

    <?php require_once("../MainHeader/header.php");?>

	<div class="mobile-menu-left-overlay"></div>
	
	<?php require_once("../MainNav/nav.php");?>

	<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">

            <header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3 id="lblnomidticket">Detalle Ticket - 1</h3>
                            <div id="lblestado"></div>
                            <span class="label label-pill label-primary" id="lblnomusuario"></span>
                            <span class="label label-pill label-default" id="lblfechcrea"></span>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Detalle Ticket</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

            <div class="box-typical box-typical-padding">
                <div class="row">
                    <div class="col-lg-6">
                        <fieldset class="form-group">
                            <label class="form-label semibold" for="cat_nom"> Categoría</label>
                            <input type="text" class="form-control" id='cat_nom' name="cat_nom" readonly>
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset class="form-group">
                            <label class="form-label semibold" for="tick_titulo">Título</label>
                            <input type="text" class="form-control" id='tick_titulo' name="tick_titulo" readonly>
                        </fieldset>
                    </div>
                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label semibold" for="tickd_descripusu">Descripción</label>
                            <div class="summernote-theme-1">
                                <textarea id="tickd_descripusu" name="tickd_descripusu" class="summernote" name="name"></textarea>
                            </div>
                        </fieldset>
                    </div>
                </div>
				<!-- <table id="ticket_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
					<thead>
						<tr>
							<th style="width: 5%;">Nro.Ticket</th>
							<th style="width: 15%;">Categoria</th>
							<th class="d-none d-sm-table-cell" style="width: 40%;">Titulo</th>
							<th class="d-none d-sm-table-cell" style="width: 5%;">Estado</th>
							<th class="d-none d-sm-table-cell" style="width: 10%;">Fecha Creación</th>
							<th class="d-none d-sm-table-cell" style="width: 10%;">Fecha Asignación</th>
							<th class="d-none d-sm-table-cell" style="width: 10%;">Soporte</th>
							<th class="text-center" style="width: 5%;"></th>
						</tr>
					</thead>
					<tbody>

					</tbody>
				</table> -->
			</div>

            <section class="activity-line" id="lbldetalle">
                
            </section>

            <div class="box-typical box-typical-padding">
                <p>
                    Ingrese su duda o consulta
                </p>
                <div class="row">
                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label semibold" for="tickd_descrip">Descripción</label>
                            <div class="summernote-theme-1">
                                <textarea id="tickd_descrip" name="tickd_descrip" class="summernote" name="name"></textarea>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Enviar</button>
                        <button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-danger">Cerrar Ticket</button>
                    </div>
                </div>
            </div>

            
        </div>
	</div>
	<!-- Contenido -->

    <?php require_once("../MainJs/js.php"); ?>
	<script type="text/javascript" src="detalleticket.js"></script>

<!-- <script src="js/app.js"></script> -->
</body>
</html>
	<?php		
		} else {
			header("Location:".Conectar::ruta()."index.php");
		};
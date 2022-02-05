<?php
    require_once("../../config/conexion.php");
    if(isset($_SESSION["usu_id"])) {
?>
<!DOCTYPE html>
<html>
    <?php require_once("../MainHead/head.php"); ?>
	<title>SuppApp: Consultar Ticket</title>
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
							<h3>Basic Inputs</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">StartUI</a></li>
								<li><a href="#">Forms</a></li>
								<li class="active">Basic Inputs</li>
							</ol>
						</div>
					</div>
				</div>
			</header>
		</div>
	</div>
	<!-- Contenido -->

    <?php require_once("../MainJs/js.php"); ?>
	<script type="text/javascript" src="consultarticket.js"></script>

<script src="js/app.js"></script>
</body>
</html>
	<?php		
		} else {
			header("Location:".Conectar::ruta()."index.php");
		};
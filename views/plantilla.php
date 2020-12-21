
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php echo COMPANY?></title>
    <?php include "./views/include/Estilos.php"; ?>
</head>
<body>
	<?php
	$peticionAjax=false;
	require_once "./controllers/vistasControlador.php";
	$IV = new vistasControlador();

	$vistas = $IV->obtener_Vistas_Controlador();

	if ($vistas == "login" || $vistas=="404") {
		require_once "./views/contenidos/".$vistas."-view.php";
	} else {
	?>

	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->
		<?php include "./views/include/NavLateral.php"; ?>

		<!-- Page content -->
		<section class="full-box page-content">
		<!-- llamado a las vistas -->
		<?php include "./views/include/NavBar.php"; 
		
		include $vistas;
		?>

		</section>
	</main>
	
	<?php
	}
	include "./views/include/Script.php";
	?>

</body>
</html>
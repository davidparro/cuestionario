<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Cuestionario</title>
	<link rel="stylesheet" type="text/css" href="./css/estilo.css" />
</head>
<body>
	<h1>Datos del alumno</h1>
	<form method="post" action="" enctype="application/x-www-form-urlencoded">
	    <fieldset>
		<p><label>*NIF<label><input type="text" name="nif"></p>
		<p><label>*Nombre y apellido<label><input type="text" name="nombre"></p>
		<p><label>*Clave<label><input type="password" name="clave"></p>
		<p><label>e-mail<label><input type="text" name="mail"></p>
		<p><input class="enviar" type="submit" value="Alta alumno" name="envio2">
		&nbsp;&nbsp;&nbsp;<input class="enviar" type="reset" value="Borrar datos"/></p>
	    </fieldset>
	</form>
<?php include_once ("./inc/defines.inc.php"); ?>
<?php include_once ("./inc/funciones.inc.php"); ?>

<?php
	if (isset($_REQUEST['envio2'])) {
		if (empty($_REQUEST['nif']) || empty($_REQUEST['nombre']) || empty($_REQUEST['clave'])) {
			echo "<p>Debe rellenar todos los campos requeridos</p>";
		} else {
			$nif=$_REQUEST['nif'];
			validarNif($nif);
			$clave=$_REQUEST['clave'];
			$nombre=str_pad($_REQUEST['nombre'],30);

			
			
			
		}
	}
?>
	<h3><a href="index.html">Volver al inicio</a></h3>
</body>
</html>
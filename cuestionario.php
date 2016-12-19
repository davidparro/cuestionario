<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Cuestionario</title>
	<link rel="stylesheet" type="text/css" href="./css/estilo_cues.css" />
</head>

<body>
<?php 
require_once("./inc/funciones.inc.php");
require_once("./inc/define.inc.php");
$prueba=false;
if (empty($_REQUEST['nif']) || empty($_REQUEST['clave'])) {
	echo "<h2>Dni o clave vacíos</h2>";
	$prueba=false;
} else {
	$nif=$_REQUEST['nif'];
	$nif=devolverNifMay($nif);
	$clave=$_REQUEST['clave'];
	if(accesoTest($nif,$clave)==1){
		$prueba=true;
	} else {
		$prueba=false;
	}

	
	
}
?>

<?php if ($prueba){ ?>
	<p class="titulo">Responde a las siguientes preguntas. Sólo hay una respuesta válida salvo que se indique lo contrario</p>
	<form method="post" action="obetener_nota.php" enctype="application/x-www-form-urlencoded" />	  
		<fieldset>
			<?php include_once ("./inc/cuestionario.txt.php"); ?>
			<input type="hidden" name="nif" value="<?php echo $nif; ?>" /> <!-- enviamos el nif en un campo oculto -->
			<input class="enviar" type="submit" value="Enviar respuestas" />
		</fieldset>
	</form>
<?php } ?>

</body>
</html>
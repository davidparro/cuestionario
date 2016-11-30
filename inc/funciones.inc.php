<?php
	function comprobarNIF($dato) {
		// echo " Valor: ", constant('ERR_LETRA');  // si es visible
		$digContr = "TRWAGMYFPDXBNJZSQVHLCKE";
		$expresionReg ='/^[0-9]{7,8}[a-z]{1}$/i';
		if (!empty($dato)) {
	 		if (preg_match($expresionReg, $dato)) {
	 			$letra= strtoupper(substr($dato, -1));
	 			$num=(int)substr($dato, 0,-1);
	 			$resto=$num%23;
	 			$pos=strpos($digContr, $letra);
	 			if ($resto==$pos) {
	 				return 1;						// correcto, o return true
	 			} else {
	 				return ERR_LETRA;				// falla la letra
	 			}
	 		} else {
	 			return ERR_ER;						// ExpReg no es válida
	 		}
		} else { 
			return ERR_VACIO;
		}
	}
		
	function validarNif($nif) {
		if (strlen($nif)!=9) {
			return false;
		}
		$numero=substr($nif,0,8);
		$letra=substr($nif,8);
		$letra=strtoupper($letra);
		$letras="TRWAGMYFPDXBNJZSQVHLCKE";
		if (!is_numeric($numero)) {
			return false;
		}
		if ($letra!=substr($letras,$numero%23,1)) {
			echo "<p>La letra no se corresponde con el DNI</p>";
			return false;
		}
		return true;
	}
		
	function validarClave($clave) {
		if (strlen($clave)!=4) {
			echo "<p>La clave debe tener 4 dígitos</p>";
			return false;
		}
		if (!is_numeric($clave)) {
			echo "<p>La clave solo puede estar compuesta por números</p>";
			return false;
		}
		return true;
	}
	
	function validoClave($clave) {
		if ( strlen($clave)==4 and is_numeric($clave) ) {
			return true;
		}
		return false;
	}
	
	// function validarEmail () --> filter_var('bob@example.com', FILTER_VALIDATE_EMAIL);
?>
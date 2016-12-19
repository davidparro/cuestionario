<?php
	/*function comprobarNIF($dato) {
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
	}*/

	function validarNif($nif) {
		if (strlen($nif)>9) {
			return false;
		}
		$numero=substr($nif,0,strlen($nif-1));
		$letra=strtoupper(substr($nif,strlen($nif-1)));
		//$letra=strtoupper($letra);
		$letras="TRWAGMYFPDXBNJZSQVHLCKE";
		if (!is_numeric($numero)) {
			echo "<p>ER mal</p>";
			return false;
		}
		if ($letra!=substr($letras,$numero%23,1)) {
			echo "<p>La letra no se corresponde con el DNI</p>";
			return false;//
		}

		if (file_exists(MyFILE)) {

				$lineasFichero = file(MyFILE, FILE_IGNORE_NEW_LINES);
				for ($i=0; $i < sizeof($lineasFichero); $i++) { 
					$usuarios[] = explode('*',$lineasFichero[$i]);											
				}	
				for ($j=0; $j < sizeof($usuarios); $j++) { 
					if ($nif == $usuarios[$j][0]) {
						echo "NIF existe";
					return false;//NIF existente en el archivo
					}
				}
		}else{
			echo "no existe<a href=".MyFILE.">link</a>";
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
	
	 function validarEmail (){
         filter_var('bob@example.com', FILTER_VALIDATE_EMAIL);
     } 

    function accesoTest($nif,$clave){
        /*true(1), si no tiene nota. false(-1) usuario no existe. False (-2)
            clave incorrecta. False(-3) si ya tiene nota.*/
        if (file_exists(MyFILE)) {
            $lineasFichero = file(MyFILE, FILE_IGNORE_NEW_LINES);
            for ($i=0; $i < sizeof($lineasFichero); $i++) { 
                $usuarios[] = explode('*',$lineasFichero[$i]);									
            }
            //return $usuarios[2][0];
            for ($j=0; $j < sizeof($usuarios); $j++) { 
                if ($nif == $usuarios[$j][0] && $clave == $usuarios[$j][1]) {
                    if($usuarios[$j][4] == "Sin nota"){
                        return 1; //usuario es correcto
                    }else{
                        return -2; //Si ya tiene nota puesta
                    }
                }
            }
            return -1; //Usuario y contraseña no coinciden o usuario no encontrado
        }else{
            return -3; //fichero no existe
        }
    }

    function obtenerRespuestas($datos,$nif){
        /*obtenerRespuestas(array[datos]){}Guardamos en un array las respuestas del test y se
        comparan con el array de respuestas correctas para tener la nota. Llama a validarNota para
        guardarla.*/
        include_once ("./inc/correcion.inc.php");
        $puntuacion=0;
        for($i=0;$i<$correctas.length;$i++){
            if($datos[$i]==$correctas[$i]){
                $puntuacion++;
            }
        }
        validarNota($puntuacion,$nif);
        
    }
     function registrarUsuario($nif,$clave,$nombreape,$email,$fecha){
     	$email = (empty($email))?"Sin email":$email;
		
		$fichero = fopen(MyFILE, "a+");
		fwrite($fichero,"$nif*$clave*$nombreape*$email*Sin nota*$fecha\n");
		fclose($fichero);
		return true;
	
     }
     function cambiarNota($nif,$nuevaNota){
     	$nif = strtoupper($nif);
     	$cambiado = false;
     	if ($nuevaNota < MAX_NOTA){
     		if (file_exists(MyFILE)) {
				$fichero = fopen(MyFILE, "r");
				$nuevoFichero = [];
				while (!feof($fichero)) {
					$leerLinea = fgets($fichero);
					$resultados = explode("*", $leerLinea);
					if (strtoupper($resultados[0]) == $nif && trim($resultados[4]) == "Sin nota"){
						$resultados[4] = $nuevaNota;
						$cambiado = true;
					}
					$leerLinea = implode("*", $resultados);
					//Revisar lineas en blanco
					if (!empty($leerLinea)){
						array_push($nuevoFichero, $leerLinea);
					}
				}
				fclose($fichero);
				if (!$cambiado){
					echo "<p>No hay ningun registro con $nif o se encuentra con una nota ya asignada</p>";
					return false;
				}
				editarFichero($nuevoFichero);
				return true;
			}else{
				echo "<p>No existe el archivo <a href=".MyFILE.">link</a></p>";
				return false;
			}
     	}else{
     		echo "<p>Nota incorrecta</p>";
     		return false;
     	}
     }
     function editarFichero($nuevoFichero){
     	if (file_exists(MyFILE)) {
     		$fichero = fopen(MyFILE, "w");
     		$numeroLineas = count($nuevoFichero);
     		for ($i=0; $i < $numeroLineas; $i++) { 
     			fwrite($fichero, $nuevoFichero[$i] . "\n");
     		}
     		fclose($fichero);
     	}
     }

     function devolverNifMay($nif){
    	$numero=substr($nif,0,strlen($nif-1));
		$letra=strtoupper(substr($nif,strlen($nif-1)));
		$nifMay=$numero.$letra;
		return $nifMay;
     }
?>
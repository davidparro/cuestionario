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
					$empresas[] = explode('*',$lineasFichero[$i]);											
				}	
				for ($j=0; $j < sizeof($empresas); $j++) { 
					if ($nif == $empresas[$j][0]) {
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
        if (file_exists("./registro.dat.php")) {
            $lineasFichero = file("./registro.dat.php", FILE_IGNORE_NEW_LINES);
            for ($i=0; $i < sizeof($lineasFichero); $i++) { 
                $usuarios[] = explode('*',$lineasFichero[$i]);									
            }

            for ($j=0; $j < sizeof($usuarios); $j++) { 
                if ($usuario == $usuarios[$j][0] && $clave == $usuarios[$j][1]) {
                    if($usuarios[$j][3]== "-"){
                        return 1; //usuario es correcto
                    }else{
                        return -3; //Si ya tiene nota puesta
                    }
                }else{
                    return -2; //Clave o usuario incorrecto
                }
            }
            return -1; //Usuario no encontrado
        }else{
            return -4; //fichero no existe
        }
    }

    function obtenerRespuestas(array[datos]){
        /*obtenerRespuestas(array[datos]){}Guardamos en un array las respuestas del test y se
        comparan con el array de respuestas correctas para tener la nota. Llama a validarNota para
        guardarla.*/
    }
?>
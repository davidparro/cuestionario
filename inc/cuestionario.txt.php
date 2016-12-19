		<span>1. Un documento con extensión .html ó .htm ...</span>
		<input type="radio" name="preg1" id="preg1a" value="a" />
		<label for="preg1a">Sólo puede contener etiquetas del lenguaje HTML.</label>
		<input type="radio" name="preg1" id="preg1b" value="b" />
		<label for="preg1b">Además de etiquetas HTML puede contener scripts PHP.</label>
		<input type="radio" name="preg1" id="preg1c" value="c" />
		<label for="preg1c">Además de etiquetas HTML puede contener scripts de Javascript o de cualquier otro lenguaje de scripts que funcione del lado del cliente.</label>
		<input type="radio" name="preg1" id="preg1d" value="d" />
		<label for="preg1d">Puede contener y ejecutar scripts escritos en cualquier tipo de lenguaje.</label>
				
		<span>2. Un documento con extensión .php ...</span>
		<input type="radio" name="preg2" id="preg2a" value="a" />
		<label for="preg2a">Tiene que contener obligatoriamente scripts PHP.</label>
		<input type="radio" name="preg2" id="preg2b" value="b" />
		<label for="preg2b">No puede contener etiquetas de HTML.</label>
		<input type="radio" name="preg2" id="preg2c" value="c" />
		<label for="preg2c">No puede contener ningún script que utilice aplicaciones del lado del cliente.</label>
		<input type="radio" name="preg2" id="preg2d" value="d" />
		<label for="preg2d">Puede contener cualquiera de los elementos aludidos en las respuestas anteriores.</label>
				
		<span>3. Las líneas de comentario...</span>
		<input type="radio" name="preg3" id="preg3a" value="a" />
		<label for="preg3a">Son algo absurdo, propio de programadores novatos y conviene evitarlas.</label>
		<input type="radio" name="preg3" id="preg3b" value="b" />
		<label for="preg3b">Son un elementos imprescindible en los scripts. Si no se insertan el servidor puede dar continuamente errores.</label>
		<input type="radio" name="preg3" id="preg3c" value="c" />
		<label for="preg3c">Son una magnífica ayuda, tanto para la programación como para posteriores modificaciones de los scripts.</label>
		<input type="radio" name="preg3" id="preg3d" value="d" />
		<label for="preg3d">Ralentizan mucho la ejecución de PHP.</label>
				
		<span>4. Las variables definidas dentro de una función...</span>
		<input type="radio" name="preg4" id="preg4a" value="a" />
		<label for="preg4a">Conservan su valor incluso cuando se acaba la ejecución de la función.</label>
		<input type="radio" name="preg4" id="preg4b" value="b" />
		<label for="preg4b">Si se definen como estáticas conservan sus valores en cualquier parte del script.</label>
		<input type="radio" name="preg4" id="preg4c" value="c" />
		<label for="preg4c">Si se definen como estáticas, conservan su valor en sucesivas llamadas a esa misma función.</label>
		<input type="radio" name="preg4" id="preg4d" value="d" />
		<label for="preg4d">Solo pueden ser estáticas si la versión de PHP soporta variables superglobales.</label>
			
		<span>5. Pertenecen al ámbito de una variable superglobal... (marca todas las respuestas correctas)</span>
		<input type="checkbox" name="preg5[]" id="preg5a" value="a" />
		<label for="preg5a">Únicamente las variables predefinidas del sistema.</label>
		<input type="checkbox" name="preg5[]" id="preg5b" value="b" />
		<label for="preg5b">Cualquier instrucción contenida en el script.</label>
		<input type="checkbox" name="preg5[]" id="preg5c" value="c" />
		<label for="preg5c">Las funciones.</label>
		<input type="checkbox" name="preg5[]" id="preg5d" value="d" />
		<label for="preg5d">Las líneas de instrucciones no contenidas en ninguna función.</label>
		
		<span>6. Las variables superglobales... (marca todas las respuestas correctas)</span>
		<input type="checkbox" name="preg6[]" id="preg6a" value="a" />
		<label for="preg6a">Contienen información a las que no puede accederse más que a través de ellas.</label>
		<input type="checkbox" name="preg6[]" id="preg6b" value="b" />
		<label for="preg6b">No están disponibles en todas las versiones de PHP.</label>
		<input type="checkbox" name="preg6[]" id="preg6c" value="c" />
		<label for="preg6c">Deben ser declaradas expresamente como globales para ser utilizadas en una función.</label>
		<input type="checkbox" name="preg6[]" id="preg6d" value="d" />
		<label for="preg6d">Sólo añaden un factor de comodidad, pero su inexistencia no limita las posibilidades de programación en PHP.</label>
		
		<span>7. La directiva register_globals es...</span>
		<input type="radio" name="preg7" id="preg7a" value="a" />
		<label for="preg7a">La sintaxis que utiliza PHP para que una función pueda utilizar valores de una variable definida fuera de su ámbito.</label>
		<input type="radio" name="preg7" id="preg7b" value="b" />
		<label for="preg7b">Un elemento de la configuración del servidor Apache.</label>
		<input type="radio" name="preg7" id="preg7c" value="c" />
		<label for="preg7c">Es anticuada. Sólo tiene sentido en versiones de PHP anteriores a la 4.1.0</label>
		<input type="radio" name="preg7" id="preg7d" value="d" />
		<label for="preg7d">Un elemento que restringe o habilita una forma de recoger los nombres y los contenidos de variables.</label>
		
		<span>8. En PHP, las variables... (marca todas las respuestas correctas)</span>
		<input type="checkbox" name="preg8[]" id="preg8a" value="a" />
		<label for="preg8a">No requieren ser definidas antes de ser utilizadas.</label>
		<input type="checkbox" name="preg8[]" id="preg8b" value="b" />
		<label for="preg8b">Se adaptan a los contenidos y pueden cambiar de tipo a lo largo del programa.</label>
		<input type="checkbox" name="preg8[]" id="preg8c" value="c" />
		<label for="preg8c">Pueden cambiarse de tipo mediante instrucciones del lenguaje.</label>
		<input type="checkbox" name="preg8[]" id="preg8d" value="d" />
		<label for="preg8d">Cuando son cambiadas de tipo, pueden perder parte de la información que contienen.</label>
		
		<span>9. Los usuarios pueden enviar información al servidor...</span>
		<input type="radio" name="preg9" id="preg9a" value="a" />
		<label for="preg9a">Sólo a través de los formularios.</label>
		<input type="radio" name="preg9" id="preg9b" value="b" />
		<label for="preg9b">Añadiendola a la dirección de la página correspondiente.</label>
		<input type="radio" name="preg9" id="preg9c" value="c" />
		<label for="preg9c">De cualquiera de los modos anteriores.</label>
		<input type="radio" name="preg9" id="preg9d" value="d" />
		<label for="preg9d">Para que puedan hacerlo es necesario que register_globals=off.</label>
		
		<span>10. Un script puede recoger valores transferidos a través de un formulario...</span>
		<input type="radio" name="preg10" id="preg10a" value="a" />
		<label for="preg10a">Siempre que el método utilizado haya sido POST.</label>
		<input type="radio" name="preg10" id="preg10b" value="b" />
		<label for="preg10b">Mediante cualquiera de los métodos (GET o POST), siempre que utilice las variables adecuadas al método utilizado.</label>
		<input type="radio" name="preg10" id="preg10c" value="c" />
		<label for="preg10c">Sólo en el caso de que se hayan utilizado conjuntamente los métodos POST y GET.</label>
		<input type="radio" name="preg10" id="preg10d" value="d" />
		<label for="preg10d">Siempre que el método utilizado haya sido GET.</label>

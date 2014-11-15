<!DOCTYPE html>
<html>
<head>
	<title>Cliente PHP</title>
	<meta charset="utf-8"/>
</head>
<body>
	<?php class Peticiones {
		public function getAll(){
			$homepage = file_get_contents('http://localhost:3000//beers.json');
			$string = json_decode($homepage);
			$count = count($string);
			$cont = 0;
					
			echo "<b>Hay un total de $count cervezas registradas:</b><br> <br>";
			foreach($string as $clave=>$beer){
				echo "La cerveza nº". ++$clave ." se llama $beer->name. Se describe como una cerveza '$beer->description'   ";
				echo "<a href=\"http://localhost:3000/beers/$beer->id\">Ver</a>  ";
				echo "<a href=\"http://localhost:3000/beers/$beer->id/edit\">Editar</a>  ";
				echo "<a data-confirm=\"¿Está seguro(a)?\" data-method=\"DELETE\" href=\"http://localhost:3000/beers/$beer->id\" >Eliminar</a><br>";	

				//echo "<br><br><a href=\"localhost/otros_clientes/PHP/cliente.php\">Volver</a>";
			}
		}
		

		public function post(){
			echo "<h1>Crear una nueva cerveza - Cliente PHP</h1>";
			echo "<form action=\"http://localhost:3000/beers\" method=\"post\">";
			echo "<label>Nombre: </label> <input id=\"beer_name\" name= \"beer[name]\" type=\"text\"><br>";
			echo "<label>Descripción: </label> <input id=\"beer_description\" name=\"beer[description]\"type=\"text\"><br>";
			echo "<input type=\"submit\" value=\"Enviar\"><br>";
			echo "</form>";

			echo "<br><br><a href=\"localhost/otros_clientes/PHP/cliente.php\">Volver</a>";
		}

		public function put(){
			echo "<h1>Crear una nueva cerveza - Cliente PHP</h1>";
			echo "<form action=\"http://localhost:3000/beers\" method=\"put\">";
			echo "<label>Nombre: </label> <input id=\"beer_name\" name= \"beer[name]\" type=\"text\"><br>";
			echo "<label>Descripción: </label> <input id=\"beer_description\" name=\"beer[description]\"type=\"text\"><br>";
			echo "<input type=\"submit\" value=\"Enviar\"><br>";
			echo "</form>";	

			echo "<br><br><a href=\"localhost/otros_clientes/PHP/cliente.php\">Volver</a>";
		}

		public function delete(){

		}
	}
		
	?>
	
	<?php
		$peticiones = new Peticiones;
		$peticiones->getAll();
	?>

</body>
</html>
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
			echo "<h1>Mostrar las cervezas disponibles - Cliente PHP</h1>";		
			echo "<b>Hay un total de $count cervezas registradas:</b><br> <br>";
			echo "<table>\n<thead>\n<tr>\n<th>Nombre</th>\n<th>Descripción</th>\n</thead>\n<tbody>";
			foreach($string as $clave=>$beer){
				echo "<tr>\n";
				echo "<td>".++$clave .".  $beer->name </td>"; 
				echo "<td> $beer->description </td>";
				echo "<td><a href=\"http://localhost:3000/beers/$beer->id\">Ver</a></td>";
				echo "<td><a href=\"http://localhost:3000/beers/$beer->id/edit\">Editar</a></td>";
				echo "<td><a data-confirm=\"¿Está seguro(a)?\" data-method=\"DELETE\" href=\"http://localhost:3000/beers/$beer->id\" >Eliminar</a></td>";	
				echo "</tr>";
				//echo "<br><br><a href=\"localhost/otros_clientes/PHP/cliente.php\">Volver</a>";
			}
			echo "</tbdody>\n</table>";
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
		echo "<br><br><br>";
		echo "<a href=\"cliente_new.php\">Crear nuevo</a>";
	?>

</body>
</html>

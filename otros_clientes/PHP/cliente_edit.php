<!DOCTYPE html>
<html>
<head>
	<title>Cliente PHP</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$nombre = $_GET["nom"];
		$descripcion = $_GET["desc"];
		$id = $_GET["id"];

		echo "<h1>Crear una nueva cerveza - Cliente PHP</h1>";
		echo "<form action=\"cliente_put.php?id=".$id."\" method=\"post\">";
		echo "<label>Nombre: </label> <input id=\"beer_name\" name= \"nombre\" value=$nombre type=\"text\"><br>";
		echo "<label>Descripción: </label> <textarea id=\"beer_description\" name=\"descripcion\">$descripcion</textarea><br>";
		echo "<input type=\"submit\" value=\"Enviar\"><br>";
		echo "</form>";	

		echo "<br><br><a href=\"http://localhost/otros_clientes/PHP/cliente.php\">Volver</a>";
	
		
	?>
</body>
</html>
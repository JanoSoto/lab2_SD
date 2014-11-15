<!DOCTYPE html>
<html>
<head>
	<title>Cliente PHP</title>
	<meta charset="utf-8"/>
</head>
<body>
	<?php class Peticiones {
		public function get(){
			$homepage = file_get_contents('http://localhost:3000//beers.json');
			$string = json_decode($homepage);
			$count = count($string);
			$cont = 0;
		
			echo "<b>Hay un total de $count cervezas registradas:</b><br> <br>";
			foreach($string as $clave=>$beer){
				echo "La cerveza nº". ++$clave ." se llama $beer->name. Se describe como una cerveza '$beer->description' <br>";
			}
		}
		
		public function post(){
			echo "<h1>FUNCION POST</h1>";
		}
	}
		
	?>
	
	<?php
		$peticiones = new Peticiones;
		$peticiones->post();
	?>

</body>
</html>
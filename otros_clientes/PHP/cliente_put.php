<?php
	$nombre = $_POST["nombre"];
	$descripcion = $_POST["descripcion"];
	$id = $_GET["id"];

	$putData = http_build_query(
		array(
			"beer[name]" => "".$nombre,
			"beer[description]" => "".$descripcion 
		)
	);

	$opts = array('http' =>
	    array(
	        'method'  => 'PUT',
	        'header'  => 'Content-type: application/x-www-form-urlencoded',
	        'content' => $putData
	    )
	);

	$context = stream_context_create($opts);

	$result = file_get_contents('http://localhost:3000/beers/'.$id, false, $context);

	header('Location: cliente.php');

?>
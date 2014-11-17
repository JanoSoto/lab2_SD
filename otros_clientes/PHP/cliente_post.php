<?php
	$nombre = $_POST["nombre"];
	$descripcion = $_POST["descripcion"];

	$postData = http_build_query(
		array(
			"beer[name]" => "".$nombre,
			"beer[description]" => "".$descripcion 
		)
	);

	$opts = array('http' =>
	    array(
	        'method'  => 'POST',
	        'header'  => 'Content-type: application/x-www-form-urlencoded',
	        'content' => $postData
	    )
	);

	$context = stream_context_create($opts);

	$result = file_get_contents('http://localhost:3000/beers', false, $context);

	header('Location: cliente.php');
?>
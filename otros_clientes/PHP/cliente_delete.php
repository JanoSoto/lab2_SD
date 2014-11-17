<?php
	$id = $_GET["id"];

	$deleteData = http_build_query(
		array(
			"beer[name]" => "".$nombre,
			"beer[description]" => "".$descripcion 
		)
	);

	$opts = array('http' =>
	    array(
	        'method'  => 'DELETE',
	        'header'  => 'Content-type: application/x-www-form-urlencoded',
	        'content' => $deleteData
	    )
	);

	$context = stream_context_create($opts);

	$result = file_get_contents('http://localhost:3000/beers/'.$id, false, $context);

	header('Location: cliente.php');

?>
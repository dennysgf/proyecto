<?php	
	$host='localhost';
	$nombre_base='basecolegio';
	$usuario='root';
	$contrasenia='';

	$mysqli = new mysqli($host, $usuario, $contrasenia, $nombre_base);
	if ($mysqli->connect_errno) {
		echo "Falló la conexión: (". $mysqli->connect_errno .")". $mysqli->connect_error;
	}
	return $mysqli;
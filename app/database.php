<?php

	// Variables del servidor y phpmyadmin
	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "cinenred";

	// Variables para almacenar la conexion con la BD y la BD
	$conexion;

	try {

		$conexion = new PDO('mysql:host=' . $server . ';dbname=' . $database . '', $user, $password);
		$conexion->query("SET NAMES 'utf8'");
		
	} catch (PDOException $e) {
		
		print("¡Error!: " . $e->getMessage() . "<br/>");
		die();

	}

	// // Funcion para conectarse con la base de datos.
	//$conexion = mysql_connect($server, $user, $password) or die('No hay conexión con la base de datos.');

	// // Selecciona la base de datos.
	//$db = mysql_select_db($database, $conexion) or die('No existe la base de datos.');

?>
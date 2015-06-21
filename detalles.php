<?php 
	
	session_start();
	
	// Archivos requeridos
	require_once 'app/app.php';
	require_once 'app/database.php';

	if( isset($_GET['id']) ) {

		$id = $_GET['id'];

		// Consultas SQL
		$consulta = $conexion->query("select * from peliculas where id=" . $id . " ");
		$pelicula = $consulta->fetch(PDO::FETCH_OBJ);

	} else {
		$consulta = $conexion->query("select * from peliculas order by id desc");
		$pelicula = $consulta->fetch(PDO::FETCH_OBJ);
	}

	// Contenido del header y de la página.
	ob_start();
	include "view/detalles.view.php";
	$content = ob_get_clean();

	// Template
	template($content);

	// Cierre de la conexion con la Base de datos
	$conexion = null;

?>
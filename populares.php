<?php 

	session_start();

	// Archivos requeridos
	require_once 'app/app.php';
	require_once 'app/database.php';

	// Consultas SQL
	$peliculas = $conexion->query("SELECT * FROM peliculas WHERE calificacion = 5 ORDER BY id DESC");

	// Contenido del header y de la página.
	ob_start();
	include "view/popular.view.php";
	$content = ob_get_clean();

	// Template
	template($content);

	// Cierre de la conexion con la Base de datos
	$conexion = null;

?>
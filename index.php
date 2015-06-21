<?php
	
	session_start();
	
	// Archivos requeridos
	require_once 'app/app.php';
	require_once 'app/database.php';

	// Consultas SQL
	$peliculas_estreno = $conexion->query("select * from peliculas where etiqueta like '%Estrenos%' order by id desc limit 5");
	$peliculas_masvistas = $conexion->query("select * from peliculas where etiqueta like '%Mas%Vistas%' order by id desc limit 5");

	// Contenido del header y de la página.
	ob_start();
	include "view/index.view.php";
	$content = ob_get_clean();

	// Template
	template($content);

	// Cierre de la conexion con la Base de datos
	$conexion = null;

?>
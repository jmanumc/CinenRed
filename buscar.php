<?php

	session_start();

	// Archivos requeridos
	require_once 'app/app.php';
	require_once 'app/database.php';

	$busqueda;

	if( isset($_POST['buscar']) && $_POST['buscar'] != "" ) {

		$busqueda = $_POST['buscar'];

		// Se crea la consulta
		$consulta = "
			SELECT * FROM peliculas WHERE 
			titulo   LIKE '%" . $busqueda . "%' or
			genero   LIKE '%" . $busqueda . "%' or
			director LIKE '%" . $busqueda . "%' or
			reparto  LIKE '%" . $busqueda . "%' or
			ano      LIKE '%" . $busqueda . "%' or
			etiqueta LIKE '%" . $busqueda . "%';
		";

		// Se ejecuta la consulta
		$peliculas = $conexion->query($consulta);

	}

	if( $_POST['buscar'] == "" ) {

		$busqueda = "Todo";

		// Consulta SQL
		$peliculas = $conexion->query("SELECT * FROM peliculas ORDER BY ano DESC");

	}

	// Contenido del header y de la página.
	ob_start();
	include "view/buscar.view.php";
	$content = ob_get_clean();

	// Template
	template($content);

	// Cierre de la conexion con la Base de datos
	$conexion = null;

?>
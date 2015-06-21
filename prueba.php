<?php
	
	// Archivos requeridos
	require_once '../app/app.php';

	// Contenido de la página
	ob_start();
		include '../view/prueba.view.php';
	$content = ob_get_clean();
	
	// Template
	template($content, $path);

	// Cierre de la conexion con la Base de datos
	$conexion = null;

?>
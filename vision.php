<?php

	session_start();
	
	// Archivos requeridos
	require_once 'app/app.php';

	// Contenido del header y de la página.
	ob_start();
	include "view/vision.view.php";
	$content = ob_get_clean();

	// Template
	template($content);

?>
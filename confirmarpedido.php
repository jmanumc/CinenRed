<?php 

	session_start();
	
	// Archivos requeridos
	require_once 'app/app.php';

	$mi_carrito = $_SESSION['carrito'];

	// Contenido del header y de la página.
	ob_start();
	include "view/confirmarpedido.view.php";
	$content = ob_get_clean();

	// Template
	template($content);

?>
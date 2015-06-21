<?php 

	session_start();
	
	// Archivos requeridos
	require_once 'app/app.php';

	$mi_carrito = $_SESSION['carrito'];
	$nombre_cliente = $_POST['name'];
	$correo_cliente = $_POST['email'];

	// Correo para el cliente
	$titulo_cliente = "CinenRed - Detalles de su compra";
	$mensaje_cliente = "Hola cliente";
	mail($correo_cliente, $titulo_cliente, $mensaje_cliente);

	// Correo para el CinenRed
	$titulo_admin = "CinenRed - Detalles de compra realizada";
	$mensaje_admin = "Hola Administrador";
	mail("j-manuel-mtz23@hotmail.com", $titulo_admin, $mensaje_admin);

	// Contenido del header y de la página.
	ob_start();
	include "view/comprar.view.php";
	$content = ob_get_clean();

	// Template
	template($content);

?>
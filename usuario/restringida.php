<?php
	
	session_start();
	
	// Archivos requeridos
	require_once '../app/app.php';

	if($_SESSION['miSession']['permisos'] == 1) {

		echo "Tiene permiso<br>";
		echo $_SESSION['miSession']['nombre'] . '<br>';
		echo $_SESSION['miSession']['usuario'] . '<br>';
		echo $_SESSION['miSession']['permisos'] . '<br>';

	} else {

		echo "No tiene permiso.";

		// Contenido del header y de la página.
		ob_start();
		include "../view/usuario/restringida.view.php";
		echo ob_get_clean();

	}

?>
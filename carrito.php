<?php

	session_start();
	
	// Archivos requeridos
	require_once 'app/app.php';

	$_SESSION['cantidad_peliculas'] = 0;

	// Si existe el ID que viene por POST
	if( isset($_POST['id']) ) {
		
		$id = $_POST['id'];
		$titulo = $_POST['titulo'];
		$precio = $_POST['precio'];
		$cantidad = $_POST['cantidad'];
		$mi_carrito[] = array('id' => $id, 'titulo' => $titulo, 'precio' => $precio, 'cantidad' => $cantidad);

	}

	// Si existe la variable de sesion "carrito"
	if( isset($_SESSION['carrito']) ) {
		
		// "Carrito" le devuelve la información a "mi_carrito"
		$mi_carrito = $_SESSION['carrito'];

		// Si existe el ID que viene por POST
		if( isset($_POST['id']) ) {
			$id = $_POST['id'];
			$titulo = $_POST['titulo'];
			$precio = $_POST['precio'];
			$cantidad = $_POST['cantidad'];
			$posicion = -1;

			// Recorre todas las peliculas en el carrito
			for ($i = 0; $i < count($mi_carrito); $i++) {

				// Si la variable "id" es igual al id de otro producto en el carrito 
				if($id == $mi_carrito[$i]['id']) {
					$posicion = $i;
				}

			}

			if($posicion <> -1) {

				$cuanto = $mi_carrito[$posicion]['cantidad'] + $cantidad;
				// $mi_carrito[$posicion] = array('id' => $id, 'titulo' => $titulo, 'precio' => $precio, 'cantidad' => $cuanto);
				$mi_carrito[$posicion]['cantidad'] = $cuanto;

			} else {

				$mi_carrito[] = array('id' => $id, 'titulo' => $titulo, 'precio' => $precio, 'cantidad' => $cantidad);

			}

		}

	}

	if( isset($_POST['indice_cantidad']) ) {

		$indice = $_POST['indice_cantidad'];
		$nueva_cantidad = $_POST['nueva_cantidad'];

		if($nueva_cantidad == 0) {
			$mi_carrito[$indice] = null;
		} else {
			$mi_carrito[$indice]['cantidad'] = $nueva_cantidad;
		}

	}

	if( isset($_POST['indice_eliminar']) ) {

		$indice = $_POST['indice_eliminar'];
		$mi_carrito[$indice] = null;

	}

	// Si existe el arreglo "mi_carrito"
	if ( isset($mi_carrito) ) {

		// Almacenanos mi_carrito en una variable de sesion
		$_SESSION['carrito'] = $mi_carrito;

		for ($i = 0; $i < count($mi_carrito); $i++) {

			$_SESSION['cantidad_peliculas'] = $_SESSION['cantidad_peliculas'] + $mi_carrito[$i]['cantidad'];

		}

	}


	// Contenido del header y de la página.
	ob_start();
	include "view/carrito.view.php";
	$content = ob_get_clean();

	// Template
	template($content);

?>
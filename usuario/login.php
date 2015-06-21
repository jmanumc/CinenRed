<?php
	
	session_start();
	
	// Archivos requeridos
	require_once '../app/app.php';
	require_once '../app/database.php';

	$nombreUsuario = $_POST['user'];
	$contraseniaUsuario = $_POST['password'];

	// Consultas SQL
	$usuarios = $conexion->query("select * from usuarios");

	$puerta = 'continuar';

	while ($usuario = $usuarios->fetch(PDO::FETCH_LAZY) and $puerta = 'continuar') {
		if(isset($nombreUsuario) and isset($contraseniaUsuario)) {
			if($usuario['usuario'] == $nombreUsuario and $usuario['contrasena'] == $contraseniaUsuario) {

				echo 'Bienvenido ' . $usuario['nombre'];
				$miSession = array(
					'id'         => $usuario['id'],
					'nombre'     => $usuario['nombre'],
					'usuario'    => $usuario['usuario'],
					'contrasena' => $usuario['contrasena'],
					'fecha'      => $usuario['fecha'],
					'permisos'   => $usuario['permisos']
				);
				$_SESSION['miSession'] = $miSession;

				// Contenido del header y de la página.
				ob_start();
				include "../view/usuario/login.view.php";
				echo ob_get_clean();

				$puerta = 'salir';
				exit;

			} else {
				$resultado = 'no';
			}
		}
	}

	if($resultado == 'no') {
		echo "El usuario o contraseña es incorrecto o aun no te has registrado.";
	}

	// Cierre de la conexion con la Base de datos
	$conexion = null;

?>
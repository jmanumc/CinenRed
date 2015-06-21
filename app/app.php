<?php

	// Rutas de la aplicación
	$path = array(
	    'home'      => 'http://localhost/cinenred/',
	    'app'       => 'http://localhost/cinenred/app/',
	    'css'       => 'http://localhost/cinenred/css/',
	    'fonts'     => 'http://localhost/cinenred/fonts/',
	    'js'        => 'http://localhost/cinenred/js/',
            'view'      => 'http://localhost/cinenred/view/',
            'poster'    => 'http://localhost/cinenred/img/posters/',
            'user'      => 'http://localhost/cinenred/usuario/'
	);

	function template($content) {

        global $path;
        /*
        *
        *	Muestra el template en el navegador 
        *	y añade lo que este almacenado en la variable $content,
        *	de esta manera se muestra una página con su contenido
        *	correspondiente.
        *	
        */
        ob_start();
        include 'app/template.php';
        echo ob_get_clean();

	}

?>
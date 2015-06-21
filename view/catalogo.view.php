<header>
	<h2>Todas las peliculas</h2>
</header>
<div class="catalogo">
	<?php 
		while ($pelicula = $peliculas->fetch(PDO::FETCH_LAZY)) {
			
			include "view/pelicula.view.php";

		} 
	?>
</div>
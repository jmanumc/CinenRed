<header>
	<h2>Populares</h2>
</header>
<div class="catalogo">
	<?php 
		while ($pelicula = $peliculas->fetch(PDO::FETCH_LAZY)) {
			
			include "view/pelicula.view.php";

		} 
	?>
</div>
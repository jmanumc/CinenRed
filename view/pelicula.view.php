<article>
	<div class="poster-wrapper">
		<a href="<?php echo $path['home'] . 'detalles.php?id=' . $pelicula->id ?>">
			<img src="<?php echo $pelicula->poster ?>" alt="<?php echo $pelicula->titulo ?>">
		</a>
	</div>
	<div class="info-wrapper">
		<div class="titulo">
			<a href="<?php echo $path['home'] . 'detalles.php?id=' . $pelicula->id ?>">
				<h1><?php echo $pelicula->titulo ?></h1>
			</a>
		</div>
		<div class="ano">
			<p><a href="#"><?php echo $pelicula->ano ?></a></p>
		</div>
		<div class="calificacion">
			<?php for($i = $pelicula->calificacion; $i > 0; $i--) { ?>
					<span class="fa fa-star"></span>
			<?php } ?>
			<?php for($i = $pelicula->calificacion; $i < 5; $i++) { ?>
					<span class="fa fa-star start-null"></span>
			<?php } ?>
		</div>
		<div class="sinopsis">
			<p><?php echo $pelicula->sinopsis ?></p>
		</div>
		<form action="<?php echo $path['home'] ?>carrito.php" method="post" name="carrito">
			<input type="hidden" name="id" value="<?php echo $pelicula->id ?>">
			<input type="hidden" name="titulo" value="<?php echo $pelicula->titulo ?>">
			<input type="hidden" name="poster" value="<?php echo $pelicula->poster ?>">
			<input type="hidden" name="precio" value="<?php echo $pelicula->precio ?>">
			<input type="hidden" name="cantidad" value="1">
			<button type="submit">
				<span class="fa fa-shopping-cart"></span>&nbsp;$<?php echo $pelicula->precio ?>&nbsp;MXN
			</button>
		</form>
	</div>
</article>
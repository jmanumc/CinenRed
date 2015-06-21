<header>
	<h2>Bienvenido</h2>
</header>
<div class="slide-wrapper">
	<header>
		<h3>Películas de estreno</h3>
	</header>
	<div class="slide">

		<?php
			while ($pelicula = $peliculas_estreno->fetch(PDO::FETCH_LAZY)) {
		?>
				<article>
					<div class="poster">
						<a href="<?php echo $path['home'] . 'detalles.php?id=' . $pelicula->id ?>">
							<img src="<?php echo $pelicula->poster ?>" alt="<?php echo $pelicula->titulo ?>" width="100" height="150">
						</a>
					</div>
					<div class="titulo"><?php echo $pelicula->titulo ?></div>
				</article>
		<?php
			}
		?>

	</div>
</div>
<div class="slide-wrapper">
	<header>
		<h3>Películas mas vistas</h3>
	</header>
	<div class="slide">
		<?php 
			while ($pelicula = $peliculas_masvistas->fetch(PDO::FETCH_LAZY)) { 
		?>
				<article>
					<div class="poster">
						<a href="<?php echo $path['home'] . 'detalles.php?id=' . $pelicula->id ?>">
							<img src="<?php echo $pelicula->poster ?>" alt="<?php echo $pelicula->titulo ?>" width="100" height="150">
						</a>
					</div>
					<div class="titulo"><?php echo $pelicula->titulo ?></div>
				</article>
		<?php 
			}
		?>
	</div>
</div>
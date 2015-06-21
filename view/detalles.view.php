<div class="detalles">
	<div class="poster">
		<img src="<?php echo $path['home'] . $pelicula->poster ?>" alt="<?php echo $pelicula->titulo ?>">
	</div>
	<div class="info">
		<div class="btn-carrito">
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
		<div class="titulo">
			<h1><?php echo $pelicula->titulo ?></h1>
		</div>
		<div class="ano">
			<p><b>Año:&nbsp;</b><?php echo $pelicula->ano ?></p>
		</div>
		<div class="genero">
			<p><b>Genero:&nbsp;</b><?php echo $pelicula->genero ?></p>
		</div>
		<div class="duracion">
			<p><b>Duración:&nbsp;</b><?php echo $pelicula->duracion ?></p>
		</div>
		<div class="sinopsis">
			<div class="header"><p><b>Sinopsis:</b></p></div>
			<div><?php echo $pelicula->sinopsis ?></div>
		</div>
		<div class="director">
			<div class="header"><p><b>Director:</b></p></div>
			<div><?php echo $pelicula->director ?></div>
		</div>
		<div class="reparto">
			<div class="header"><p><b>Reparto:</b></p></div>
			<div><?php echo $pelicula->reparto ?></div>
		</div>
	</div>
</div>
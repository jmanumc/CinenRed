<!DOCTYPE html>
<html lang="es">
<head>
	<title>CinenRed</title>

	<!-- Meta Tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Fonts -->
	<link href="<?php echo $path['fonts'] ?>open-sans/open-sans.css" rel="stylesheet" type="text/css">
	<link href='<?php echo $path['fonts'] ?>pacifico/pacifico.css' rel='stylesheet' type='text/css'>
	<link href='<?php echo $path['fonts'] ?>icomoon/style.css' rel='stylesheet'>

	<!-- Stylesheet -->
	<link rel="stylesheet" href="<?php echo $path['css'] ?>normalize.css">
	<link rel="stylesheet" href="<?php echo $path['css'] ?>style.css">
</head>
<body>

	<!-- Header -->
		<header id="header">
			<div class="close-wrapper">
				<button type="button" class="close"><i class="fa fa-lg fa-close"></i></button>
			</div>
			<div class="logo-wrapper">
				<a href="<?php echo $path['public'] ?>">
					<img src="img/logo.png" alt="Logotipo" class="logo">
				</a>
			</div>
			<hr>
			<nav id="accordion" class="accordion-wrapper">
				<ul class="accordion">
					<li>
						<a href="<?php echo $path['home'] ?>" class="link"><i class="fa fa-home"></i>&nbsp;Inicio</a>
					</li>
					<li>
						<div class="link">
							<i class="fa fa-ticket"></i>&nbsp;Peliculas&nbsp;<i class="fa fa-chevron-down"></i>
						</div>
						<ul class="submenu">
							<li><a href="<?php echo $path['home'] ?>catalogo.php">Ver todas</a></li>
							<li><a href="<?php echo $path['home'] ?>recientes.php">Recientes</a></li>
							<li><a href="<?php echo $path['home'] ?>estrenos.php">Estrenos</a></li>
							<li><a href="<?php echo $path['home'] ?>populares.php">Populares</a></li>
							<li><a href="<?php echo $path['home'] ?>masvistas.php">Mas vistas</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo $path['home'] ?>mision.php" class="link">
							<i class="fa fa-book"></i>&nbsp;Misión
						</a>
					</li>
					<li>
					<li>
						<a href="<?php echo $path['home'] ?>vision.php" class="link">
							<i class="fa fa-group"></i>&nbsp;Visión
						</a>
					</li>
				</ul>
			</nav>
		</header>

	<!-- Main -->
		<main class="content">	
			<header class="header-wrapper">
				<div class="header">
					<div class="transparencia">
						<div class="close-wrapper">
							<button type="button" class="close">
								Menú&nbsp;<span class="fa fa-bars"></span>
							</button>
						</div>
						<div class="title-wrapper">
							<h1>Cinen<span>Red</span></h1>
						</div>
						<div class="presentacion">
							<h2>La Mejor experiencia</h2>
							<p>Contamos con la mas grande biblioteca de películas de la mejor calidad y 
							variedad al mejor precio para que se entretenga con toda su familia
							que podrás disfrutar desde tu móvil, tableta o computadora.</p>
						</div>
					</div>
				</div>
				<div class="headbar">
					<ul id="menu" class="menu">
						<!-- <li>
							<span class="fa fa-user link"></span>
							<div class="login-wrapper submenu">
								<form action="<?php //echo $path['user'] ?>login.php" method="post">
									<label for="user">Usuario:</label>
									<input type="text" name="user" id="user" placeholder="Escribe tu nombre de usuario">
									<label for="password">Contraseña:</label>
									<input type="password" name="password" id="password" placeholder="Escribe tu contraseña">
									<input type="submit" value="Iniciar Sesion">
								</form>
								<p>¿No tienes una cuenta <a href="#">Registrate aqui</a>?</p>
							</div>
						</li> -->
						<li>
							<span class="fa fa-search link"></span>
							<div class="search-wrapper submenu">
								<form action="<?php echo $path['home'] ?>buscar.php" method="post">
									<input type="text" name="buscar" id="search" placeholder="Buscar por titulo, genero, director..." size="50">
									<button type="submit"><span class="fa fa-search"></span></button>
								</form>
							</div>
						</li>
					</ul>
					<div class="carrito">
						<span class="num-products">
							<?php 
								if( isset($_SESSION['cantidad_peliculas']) ) {
									echo $_SESSION['cantidad_peliculas'] . " Productos";
								} else {
									echo "0 Productos";
								}
							?>
						</span>
						<a href="<?php $path['home'] ?>carrito.php" title="Ver carrito de compras">
							<span class="fa fa-3x fa-shopping-cart"></span>
						</a>
					</div>
				</div>
			</header>
			<section class="main">
					
				<?php echo $content ?>

			</section>
		</main>

	<!-- Footer -->
		<footer class="content">

			<!-- Footer Large -->
				<div class="footer-large">
					<div>
						<h3>Acerca de</h3>
						<p>Somos una empresa mexicana dedicada con la intención de entregarte películas totalmente nuevas y de la mejor calidad.</p>
					</div>
					<div>
						<h3>Peliculas en descuento</h3>
						<ul>
							<li><a href="http://localhost/cinenred/detalles.php?id=16">Bob esponja un heroe fuera del agua</a></li>
							<li><a href="http://localhost/cinenred/detalles.php?id=20">50 sombra de grey</a></li>
							<li><a href="http://localhost/cinenred/detalles.php?id=11">El destino de jupiter</a></li>
							<li><a href="http://localhost/cinenred/detalles.php?id=10">Al filo del manana</a></li>
							<li><a href="http://localhost/cinenred/detalles.php?id=6">Quiero matar a mi jefe 2</a></li>
						</ul>
					</div>
					<div>
						<h3>Redes Sociales</h3>
						<ul class="social">
							<li><a href="#"><span class="icon-facebook"></span>Facebook</a></li>
							<li><a href="#"><span class="icon-twitter"></span>Twitter</a></li>
							<li><a href="#"><span class="icon-google"></span>Google-plus</a></li>
							<li><a href="#"><span class="icon-youtube"></span>Youtube</a></li>
						</ul>
					</div>
				</div>
		
			<!-- Footer Small -->
				<div class="footer-small">
					Todos los derechos reservados para <a href="http://localhost/cinenred/">Cinenred.com</a>.
				</div>

		</footer>

	<!-- Script -->
	<script src="<?php echo $path['js'] ?>jquery-2.1.3.min.js"></script>
	<script src="<?php echo $path['js'] ?>main.js"></script>

</body>
</html>
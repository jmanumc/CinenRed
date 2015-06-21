<header>
	<h2>Confirmar Pedido</h2>
</header>
<div class="carrito">
	<table>
		<thead>
			<tr>
				<th>Película</th>
				<th>Precio</th>
				<th>Cantidad</th>
				<th>Subtotal</th>
			</tr>
		</thead>
		<tbody>

			<?php 
				if( isset($mi_carrito) ) {

					$total = 0;

					for ($i = 0; $i < count($mi_carrito); $i++) {

						if($mi_carrito[$i] <> null) {
			?>
							<tr>
								<td><?php echo $mi_carrito[$i]['titulo'] ?></td>
								<td><i class="fa fa-usd"></i><?php echo $mi_carrito[$i]['precio'] ?></td>
								<td><?php echo $mi_carrito[$i]['cantidad'] ?></td>
								<?php 
									$subtotal = $mi_carrito[$i]['precio'] * $mi_carrito[$i]['cantidad'];
									$total = $total + $subtotal;
								?>
								<td><i class="fa fa-usd"></i><?php echo $subtotal ?></td>
							</tr>
			<?php
						}
					}
				}
			?>

		</tbody>
		<thead>
			<tr>
				<th></th>
				<th></th>
				<th>Total</th>
				<th><i class="fa fa-usd"></i><?php if( isset($total) ) { echo $total; } ?></th>
			</tr>
		</thead>
	</table>
	<div class="datos">
		<form action="#" method="post" name="cliente">
			<div class="form-group">
				<label for="name">Nombre:</label>
				<input type="text" name="name" id="name" placeholder="Escribe tu nombre" required>
			</div>
			<div class="form-group">
				<label for="email">Correo Electrónico:</label>
				<input type="email" name="email" id="email" placeholder="Escribe tu correo electronico" required>
			</div>
			<button type="submit" class="btn-confirmar">
				<i class="fa fa-check"></i>&nbsp;Comprar
			</button>
		</form>
	</div>
</div>
<header>
	<h2>Listado de compras</h2>
</header>
<div class="carrito">
	<table>
		<thead>
			<tr>
				<th>Pelicula</th>
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
								<td><i class="fa fa-usd"></i><?php echo $mi_carrito[$i]['precio'] ?>&nbsp;<sup>MXN</sup></td>
								<td>
									<form action="" method="post" name="actualizar_cantidad">
										<input type="hidden" name="indice_cantidad" value="<?php echo $i ?>">
										<input type="text" name="nueva_cantidad" id="cantidad" size="4" maxlength="2" value="<?php echo $mi_carrito[$i]['cantidad'] ?>">
										<button type="submit" name="actualizar" class="carrito-admin">
											<i class="fa fa-refresh"></i>
										</button>
									</form>
								</td>
								<?php 
									$subtotal = $mi_carrito[$i]['precio'] * $mi_carrito[$i]['cantidad'];
									$total = $total + $subtotal;
								?>
								<td>
									<i class="fa fa-usd"></i><?php echo $subtotal ?>&nbsp;<sup>MXN</sup>
									<form action="" method="post" name="eliminar_pelicula">
										<input type="hidden" name="indice_eliminar" value="<?php echo $i ?>">
										<button type="submit" name="eliminar" class="carrito-admin">
											<i class="fa fa-remove"></i>
										</button>
									</form>
								</td>
							</tr>
			<?php
						}
					}
				}
			?>

		</tbody>
		<thead>
			<tr>
				<th>
					<form action="confirmarpedido.php" method="post">
						<button type="submit" class="btn-confirmar">
							<i class="fa fa-check"></i>&nbsp;Confirmar Pedido
						</button>
					</form>
				</th>
				<th></th>
				<th>Total</th>
				<th><i class="fa fa-usd"></i><?php if( isset($total) ) { echo $total; } ?>&nbsp;<sup>MXN</sup></th>
			</tr>
		</thead>
	</table>
</div>
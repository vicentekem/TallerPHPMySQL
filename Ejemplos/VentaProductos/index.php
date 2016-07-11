<!--
piezas de computadora

producto             n°venta 00001
cantidad 				fecha
							

productos:  Teclado digital(20) , mouse(22) ,pantalla monitor(150) 

<=50 - 8%
<50 && <=100 10%
>100 - 20%

nombre del producto - cantidad - precio - fecha


mostar
subtotal 
descuento
precio neto
-->
<?php
	
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Venda de productos</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<header class="cabecera">
		<h1 class="titulo">Venta de Productos</h1>
	</header>
	<section>
		
		<form action="index.php" method="get">
			
			<table class="tabla">
				
				<tr>
					<td><label for="producto">Producto: </label></td>
					<td><select name="producto"  id="producto">
						<option value="teclado">teclado digital</option>
						<option value="mouse">mouse</option>
						<option value="monitor">monitor</option>
						
					</select></td>
					<td><span>Fecha:</span></td>
					<td>
						<?php
							
						
						?>
						
					</td>
				</tr>
				<tr>
					<td><label for="cantidad">Cantidad</label></td>
					<td><input type="text" name="cantidad" id="cantidad"></td>
					<td><span>Hora</span></td>
					<td>
						<?php
							
							
							
						?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td colspan="2">
					<input type="submit" value="procesar" class="btn">
					</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td><span>Nombre del producto</span></td>
					<td><?php ?></td>
					<td><span>Cantidad</span></td>
					<td><?php ?></td>
				</tr>
				<tr>
					<td><span>Fecha</span></td>
					<td><?php ?></td>
					<td><span>Precio</span></td>
					<td><?php ?></td>
				</tr>
				<tr>
					<td><span>Subtotal</span></td>
					<td><?php ?></td>
					
				</tr>
				<tr>
					<td><span>Descuento</span></td>
					<td><?php ?></td>
					
				</tr>
				<tr>
					<td>Total a Pagar</td>
					<td><?php ?></td>
					
				</tr>
			</table>
			
		</form>
		
	</section>
</body>
</html>















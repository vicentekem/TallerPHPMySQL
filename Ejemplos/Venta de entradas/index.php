<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Venta de entradas</title>
</head>
<link rel="icon" href="imagenes/icon.jpg">
<link rel="stylesheet" href="estilos/estilo.css">
<script src="js/ventas.js"></script>
<body>
	<header>
		<h1 class="titulo">Ventas De Entradas</h1>
		
	</header>
	<section class="principal">
		<div class="imagen">
			<form action="procesar.php" method="get" class="content" name="datoVenta" id="form">
			
			<p>
				<label for="comprador">comprador: </label>
				<input type="text" id="comprador" class="campo" name="comprador">
			</p>
			
			<p>
				<label>Fecha Actual: </label>
				<input type="text" class="disable"
				value = <?php
					   
					$hoy = getdate(time()-60*60*24);
					echo $hoy['mday']."/".$hoy['mon']."/".$hoy['year'];
				
					   ?>
				disabled>
			</p>
			
			<p>
				<label for="adultos">N° de entradas adultos: </label>
				<input type="text" class="campo" id="adultos" name="NroEntradasA">
			</p>
			
			<p>
				<label for="niños">N° de entradas niños:</label>
				<input type="text" class="campo" name="NroEntradasN" id="niños">
			</p>
			
			<p>
				<input type="submit" value="Adquirir" class="btn" id="btn" >
			
			</p>
			
		</form>
			
		</div>
		<div id="mensaje">
						
		</div>		
	</section>
</body>
</html>
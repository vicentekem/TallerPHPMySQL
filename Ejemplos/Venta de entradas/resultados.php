<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="estilos/estilo.css">
	<style>
		a
		{
			text-decoration: none;
			display: flex;
			justify-content: center;
			align-items: center;
			margin: auto;
		}
	</style>
</head>
<body>
	<div class="imagen">
		<div class="content">
			<?php

			session_start();
			if(count($_SESSION)!=0)
			{
			echo "<p>Comprador: ".$_SESSION['nombre']."</p>";
			echo "<p>Costo por adultos: ".$_SESSION['costoA']."</p>";
			echo "<p>Costo por Niños: ".$_SESSION['costoN']."</p>";
			echo "<p>Dia de venta: ".$_SESSION['dia']."</p>";
			echo "<p>Monto total a pagar: ".($_SESSION['costoA']+$_SESSION['costoN'])."</p>";
			}
		
		?>
		<p>
			<a href="index.php" class="btn">Regresar</a>
		</p>
		
			
		</div>
		
	</div>
	
</body>
</html>
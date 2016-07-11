<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	
		$producto='papa';
		$productos=array('papa','tomate','cebolla','maiz');
		$unidades = array(
			'papa' => 20,
			'tomate' => 30,
			'cebolla' => 25,
			'maiz' => 15
		);
		$precios = array(
			'papa' => 1.5,
			'tomate' => 2.0,
			'cebolla' => 1.8,
			'maiz' => 0.8
		);
		if(in_array($producto,$productos))
		{
			$precio_total = $unidades[$producto]*$precios[$producto];
			$mensaje = "el total de ".
				$unidades[$producto]
				." undidades de ".$producto
				." es igual a {$precio_total}";
			echo $mensaje;
			
		}
		else
		{
			echo 'Stock agotado';
		}
	
	?>
	
</body>
</html>





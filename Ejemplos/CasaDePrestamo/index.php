<?php
	
	include('funciones.php');
	$mensajeError1='';
	$mensajeError2='';
	$montoMensual='';
	$cuotas = 0;
	$display='none';
	
	if(isset($_REQUEST['cliente'])){
		$cliente = $_REQUEST['cliente'];
		$monto = $_REQUEST['monto'];
		$cuotas = $_REQUEST['cuotas'];
		$impuesto = ObtenerImpuesto($cuotas);
		$display = 'table';
		
		$mensajeError1 = ObtenerMensaje($cliente,"ingrese un nombre correcto",1);
		
		$mensajeError2 = ObtenerMensaje($monto,"ingrese el monto correctamente",2);
		
		$montoMensual = ($monto*$impuesto)/$cuotas;		
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Casa de Prestamo</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<header>
		<h1 class="titulo">Casa de Prestamo</h1>
	</header>
	<section>
		<form action="index.php" method="get" class="form" name="form">
			<table class="table">
				<tr class="row">
					<td>Cliente</td>
					<td><input type="text" name="cliente" class="campo"></td>
					<td><?php 
						
						echo $mensajeError1;
						
						?></td>
				</tr>
				<tr class="row">
					<td>Monto Prestado</td>
					<td><input type="text" name="monto" class="campo"></td>
					<td><?php 
						
						echo $mensajeError2;
						
						?></td>
				</tr>
				<tr class="row">
					<td>N° Cuotas</td>
					<td>
						<select name="cuotas" id="cuotas">
							<option value="3">3</option>
							<option value="6">6</option>
							<option value="9">9</option>
							<option value="12">12</option>
						</select>
					</td>
					
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" value="cotizar" class="btn" >
					</td>
				</tr>
			</table>
		</form>
		
		<table class="resultados" style="display: <?php echo $display;?>" >
			<thead>
				<tr>
					<th>Cuotas</th>
					<th>Fechas De Pago</th>
					<th>Monto Mensual</th>
				</tr>				
			</thead>
			<tbody>
			<?php 
				if($mensajeError1=='' and $mensajeError2==''){
				for($i=1;$i<=$cuotas;$i++){ ?>
				<tr>
					<td><?php echo "cuota $i :" ?></td>
					<td><?php 
						$fecha = date('d-m-y');
						echo date('y/m/d',strtotime("$fecha + $i month"));				 
						?></td>
					<td><?php echo "S/{$montoMensual}" ?></td>
					
				</tr>			
			<?php }} ?>

			</tbody>
		</table>
	
	</section>
</body>
</html>













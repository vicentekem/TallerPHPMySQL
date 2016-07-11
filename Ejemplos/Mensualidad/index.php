<!-- 

A-850
B-750
C-650
D-500
<12-0%
13-15->10%
16-17->15%
18-19->25%
20 -> 50%

-->
<?php
	$mensualidad = 0;
	$descuento = 0;
	$monto_total = 0;

	if(isset($_GET['nombre']))
	{
		if(!empty($_GET['nombre']) || 
			!empty($_GET['promedio'])||
		  $_GET['categoria']!="selecionar"
		  )
		{
			$error = 0;
			switch($_GET['categoria'])
			{
				case 'A':$mensualidad=850;break;
				case 'B':$mensualidad=750;break;
				case 'C':$mensualidad=650;break;
				case 'D':$mensualidad=500;break;
				default:$mensualidad=0;
			}
			
			if($_GET['promedio']<=12)
			{
				$descuento = 0;			
			}
			else if($_GET['promedio']>=13 && $_GET['promedio']<=15)
			{
				$descuento = $mensualidad*0.1;			
			}
			else if($_GET['promedio']>=16 && $_GET['promedio']<=17)
			{
				$descuento = $mensualidad*0.15;
			}
			else if($_GET['promedio']>=18 && $_GET['promedio']<=19)
			{
				$descuento = $mensualidad*0.25;			
			}
			else if($_GET['promedio']==20)
			{
				$descuento = $mensualidad*0.50;			
			}
			else
			{
				$error=1;
			}
			$monto_total = $mensualidad - $descuento;
			
		}
		else
		{
			$error=1;
		}	
	
	}
	else
	{
		$error=1;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mensualidad Universitaria</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<header>
		<img src="imagenes/jovenes.png" alt="no se pudo cargar la imgaen"  class="banner">
	
	</header>
	<section>
		<h1>Mensualidad de universidad</h1>	
		<form action="index.php" method="get">
			<table>
				<tr>
					<td><label for="nombre">Nombre de Alumno</label></td>
					<td><input type="text" id="nombre" name="nombre" ></td>
					<td><?php 
						if($error==1){
						echo 'Debe registrar nombre del alumno';
						}else 
						{
							echo "";
						}
						?></td>
				</tr>
				<tr>
					<td><label for="categoria">Categoria</label></td>
					<td><select name="categoria" id="categoria">
						<option value="selecionar">Seleccionar Categoria</option>
						<option value="A">Categoria A</option>
						<option value="B">Categoria B</option>
						<option value="C">Categoria C</option>
						<option value="D">Categoria D</option>
					</select></td>
					<td><?php 
						if($error==1){
						echo 'Debe de Selecionar una categoria';
						}else 
						{
							echo "";
						}
						?></td>
				</tr>
				<tr>
					<td><label for="promedio">Promedio</label></td>
					<td><input type="text" name="promedio" id="promedio"></td>
					<td><?php 
						if($error==1){
						echo 'Debe ingresar el promedio correctamente';
						}else 
						{
							echo "";
						}
						?></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Procesar"></td>
					<td></td>
				</tr>
				<tr>
					<td><span>Monto mensualidad</span></td>
					<td><span><?php echo number_format($mensualidad,2);?></span></td>
					<td></td>
				</tr>
				<tr>
					<td><span>Monto descuento</span></td>
					<td><span><?php echo number_format($descuento,2);?></span></td>
					<td></td>
				</tr>
				<tr>
					<td><span>Monto a cancelar</span></td>
					<td><span><?php echo number_format($monto_total,2);?></span></td>
					<td></td>
				</tr>
			</table>
			
		</form>
		
	</section>
</body>
</html>



















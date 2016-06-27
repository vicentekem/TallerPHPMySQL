<!-- 
	20(saco de arroz de 10 kg - 10%)
	15-19(saja de leche de 24 latas grandes - 12%)
	10-14(aceite 5 litros - 6%)
	5-9(saco de axucar de 50kg - 13%)
	1-4(Canastacon productos diversos kg - 15%)
	
	campos:
	-nombre cliente
	-monto total
	-numero de ticket
	-boton Procesar
	resultados:
	monto a cancelar 
	obsequio obtenido
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<section class="principal">
		<header>
			<h1>
				Obsequios a clientes
			</h1>
		</header>
		<form action="index.php">
			<table>
				<tr>
					<td><label for="cliente">Cliente: </label></td>
					<td><input type="text" class="campo" id="cliente" name="cliente" ></td>
				</tr>
				<tr>
					<td><label for="monto">Monto total</label></td>
					<td><input type="text" class="campo" id="monto" name="monto" ></td>
				</tr>
				<tr>
					<td><label for="ticket">Ticket</label></td>
					<td><input type="text" class="campo" id="ticket" name="ticket" ></td>
				</tr>
				<tr>
					<td><label for=""></label></td>
					<td><input type="submit" class="btn"></td>
				</tr>
				
			</table>
			
		</form>
		
	</section>
		
</body>
</html>















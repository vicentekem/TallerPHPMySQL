<!--
campos:
alumno
notas
nota1,nota2,nota3,nota4
boton promediar
resultados:
Alumno
promedio
nota mas alta
nota mas baja
condicion(aprobado/desaprobado)

-->
<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Promedio de notas</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<div class="main">
		<header class="cabecera">
			<h1>Promedio de notas</h1>
		</header>
		<section>
			<form action="Promedio.php">
				
				<fieldset>
					<legend>Datos De alumno</legend>
					<p><label for="nombre">Alumno: </label><input type="text" name="nombre" id="nombre">
					<span>
						<?php
							
						?></span>
						</p>
					
					<fieldset>
						<legend>Notas</legend>
						<table class="notas">
							<tr>
								<td><label for="nota1">Nota 1</label></td>
								<td><input type="text" id="nota1" name="nota1"></td>
								<td><span>
									<?php
										
									?>
								</span></td>
							</tr>
							<tr>
								<td><label for="nota1">Nota 2</label></td>
								<td><input type="text" id="nota2" name="nota2"</td>
								<td><span>
									<?php
										
									?>
								</span></td>
							</tr>
							<tr>
								<td><label for="nota1">Nota 3</label></td>
								<td><input type="text" id="nota3" name="nota3"</td>
								<td><span>
									<?php
										
									?>
								</span></td>
							</tr>
							<tr>
								<td><label for="nota1">Nota 4</label></td>
								<td><input type="text" id="nota4" name="nota4"</td>
								<td><span>
									<?php
										
									?>
								</span></td>
							</tr>
						</table>
					</fieldset>
					<p><input type="submit" class="btn" value="Promediar"></p>
				</fieldset>
				<table class="resultados">
					<tr>
						<td>Alumno: </td>
						<td><?php  ?></td>
					</tr>
					<tr>
						<td>Promedio: </td>
						<td><?php  ?></td>
					</tr>
					<tr>
						<td>Nota mas alta: </td>
						<td><?php  ?></td>
					</tr>
					<tr>
						<td>Nota mas baja: </td>
						<td><?php  ?></td>
					</tr>
					<tr>
						<td>Condición: </td>
						<td><?php  ?></td>
					</tr>					
				</table>
			</form>
		</section>
	</div>
</body>
</html>

















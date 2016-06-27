<?php

if(isset($_GET['comprador']))
{
	$nombre=$_GET['comprador'];
	$EA=$_GET['NroEntradasA'];
	$EN=$_GET['NroEntradasN'];
	
	$hoy = time()-60*60*24;
	$dia = date('l',$hoy);
	
	switch($dia)
	{
		case 'Monday':$PA=10;$PN=5;break;
		case 'Tuestday':$PA=8;$PN=4;break;
		case 'Wednesday':
		case 'Thursday':
		case 'Friday':$PA=16;$PN=8;break;
		case 'Saturday':
		case 'Sunday':$PA=50;$PN=45;break;
		default : $PA=0;$PN=0;
	}
	session_start();
	$_SESSION['nombre'] = $nombre;
	$_SESSION['costoA'] = $EA*$PA;
	$_SESSION['costoN'] = $EN*$PN;
	$_SESSION['dia'] =$dia;
	header("Location:resultados.php");
	
}
else
{
	header("Location:index.php");
}

	
?>











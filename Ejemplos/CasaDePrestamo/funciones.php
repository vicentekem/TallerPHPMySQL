<?php

function ObtenerMensaje($valor,$msm,$tipo = 0){
	
	$mensaje = "";
	switch($tipo)
	{
		case 0: 
		if(trim($valor)=="")
		{
		$mensaje = "<span style='color:red'>$msm</span>";
		}
		break;
		case 1: 
		if(trim($valor)=="" or 
		  !preg_match('/[a-z]/i',trim($valor)) or
		  preg_match('/[1-9]/',trim($valor)) ) 
		{
		$mensaje = "<span style='color:blue'>$msm</span>";
		}
		break;	
		case 2: 
		if(trim($valor)=="" or 
		  preg_match('/[a-z]/i',trim($valor)) or
		  !preg_match('/[1-9]/',trim($valor)) )
		{
		$mensaje = "<span style='color:blue'>$msm</span>";
		}
		break;	
			
	}
		
	
	return $mensaje;
}
function ObtenerImpuesto($cuotas)
{
	switch($cuotas)
	{
		case 3: $impuesto = 1.05;break;
		case 6: $impuesto = 1.07;break;
		case 9: $impuesto = 1.10;break;
		case 12: $impuesto = 1.20;break;
			
	}
	return $impuesto;
}
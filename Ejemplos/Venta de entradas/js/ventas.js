function main(){
	
	var btn = document.getElementById("btn");
 	
	var valores = [];
	
	btn.addEventListener('click',function(e){
		
		//anula la funcion que tiene por defecto el boton de envio 
		
		e.preventDefault(); 
		
		//se obtienen los datos del formulario con id form
		valores=getDataOfForm("form");
		if(comprobar(valores))
		{
			document.datoVenta.submit();
		}
		else
		{
			
			var cm= document.getElementById("mensaje");
			cm.innerHTML = "<p class='error'>Asegurese de completar todos los datos correctamente</p>";
			
		}
	
		
	});
	
	
}
function comprobar(valores)
{
	var condicion=true;
	for(var i=0;i<valores.length;i++)
	{
		if(valores[i].trim()=="")
		{
			condicion = false;
		}
	}
	
	return condicion;
}
function getDataOfForm(id){
	
	var Campos = document.querySelectorAll("#"+id+" .campo");
	
	var valores = [];
	
	for(var i=0;i<Campos.length;i++)
	{
		valores[i] = Campos[i].value;	
	}
	return valores;
}


window.addEventListener('load',main);
<?php 
require_once("clases/vehiculo.php");
require_once("clases/usuario.php");


if (isset($_POST['boton']))
{
	if ($_POST['boton']=="ingresar")
	{
		vehiculo::ingresar($_POST['patente']);
	}
}

if (isset($_POST['boton']))
{
	if ($_POST['boton']=="login")
	{
		if (usuario::login($_POST['usuario'], $_POST['pass'])!=false)
		{
			
			echo("ok");
		}
		else
		{
			echo("error");
		}
		
	}
}


?>
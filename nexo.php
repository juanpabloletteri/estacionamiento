<?php 
require("clases/vehiculo.php");

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
		usuario::login($_POST['usuario'], $_POST['pass']);
	}
}


?>
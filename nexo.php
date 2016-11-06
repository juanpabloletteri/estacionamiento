<?php 
require_once("clases/vehiculo.php");
require_once("clases/usuario.php");

session_start();

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
		$devolucion=usuario::login($_POST['usuario'], $_POST['pass']);

		if ($devolucion!=false)
		{
			$_SESSION['usuario']=$_POST['usuario'];
			//$_SESSION['id']=$devolucion['id'];
			echo("ok");
		}
		else
		{
			echo("error");
		}
		
	}
}


?>
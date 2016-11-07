<?php 
session_start();


require_once("clases/vehiculo.php");
require_once("clases/usuario.php");

if (isset($_POST['boton']))
{
	if ($_POST['boton']=="ingresar")
	{
		$auto=vehiculo::TraerUnVehiculo($_POST['patente']);

		if ($auto->id==NULL)
		{
			echo ("INGRESAR");
			vehiculo::ingresar($_POST['patente']);
		}
		else
		{
			echo("COBRAR");
			$horas=(strtotime('now') - strtotime($auto->ingreso))/60/60 ;
			var_dump($horas);
		}

		//var_dump(vehiculo::TraerUnVehiculo($_POST['patente']));	

		//vehiculo::BuscarUnVehiculo($_POST['patente']);
		;
	}

	else if ($_POST['boton']=="login")
	{
		$devolucion=usuario::login($_POST['usuario'], $_POST['pass']);

		if ($devolucion!=false)
		{
			$_SESSION['usuario']=$_POST['usuario'];
			//$_SESSION['id']=$devolucion[0]['id'];
			echo("ok");
		}
		else
		{
			echo("error");
		}
		
	}

	else if ($_POST['boton']=="salir")
	{
		session_unset();
		session_destroy();
		echo "salir";
	}
}

?>
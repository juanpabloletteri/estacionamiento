<?php 
session_start();

require_once("clases/vehiculo.php");
require_once("clases/usuario.php");
require_once("clases/historial.php");

if (isset($_POST['boton']))
{
	if ($_POST['boton']=="ingresar")
	{
		$auto=vehiculo::TraerUnVehiculo($_POST['patente']);

		if ($auto->id==NULL)
		{
			echo ("ingresar");
			vehiculo::ingresar($_POST['patente']);
		}
		else
		{
			//echo("cobrar");
			$horas=(strtotime('now') - strtotime($auto->ingreso))/60/60 ;
			//var_dump($horas);ç
			$monto=CalcularMonto($horas);
			vehiculo::registrar($_POST['patente'],$horas,$monto);
			vehiculo::retirar($_POST['patente']);
			//var_dump($monto);
			echo($monto);
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
			$_SESSION['usuario']=$devolucion[0]['usuario'];
			$_SESSION['admin']=$devolucion[0]['admin'];			
			//var_dump($_SESSION);
			echo("ok");
		}
		else
		{
			echo("error");
		}
		
	}

	elseif ($_POST['boton']=="tabla") 
	{
		echo(historial::ConstruirTabla()) ;
	}

	else if ($_POST['boton']=="salir")
	{
		session_unset();
		session_destroy();
		echo "salir";
	}
}

function CalcularMonto($horas)
{
	$monto=10;
	if ($horas > 0 && $horas <= 1)
	{
		return $monto;
	}
	elseif ($horas > 1 && $horas <= 2)
	{
		return $monto*2;
	}
	elseif ($horas > 2 && $horas <= 3)
	{
		return $monto*3;
	}
	elseif ($horas > 3 && $horas <= 4)
	{
		return $monto*4;
	}
	elseif ($horas > 4 && $horas <= 5)
	{
		return $monto*5;
	}
	elseif ($horas > 5 && $horas <= 6)
	{
		return $monto*6;
	}
	elseif ($horas > 6 && $horas <= 7)
	{
		return $monto*7;
	}
	elseif ($horas > 7 && $horas <= 8)
	{
		return $monto*8;
	}
	elseif ($horas > 8)
	{
		return $monto*10;
	}
}

?>
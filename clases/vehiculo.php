<?php
include("clases/AccesoDatos.php");

class vehiculo
{
	public $patente;

	public static function ingresar($patente)
	{
		$ingreso=date("Y-m-d H:i:s");

		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into 
			autos (patente,ingreso)
			values(:patente,:ingreso)");
		$consulta->bindValue(':patente',$patente, PDO::PARAM_STR);
		$consulta->bindValue(':ingreso',$ingreso, PDO::PARAM_STR);
		$consulta->execute();
		return $objetoAccesoDato->RetornarUltimoIdInsertado();
	}

	public static function TraerTodosLosVehiculos()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select * from autos");
		$consulta->execute();			
		$arrAutos= $consulta->fetchAll(PDO::FETCH_CLASS, "vehiculo");	
		return $arrAutos;
	}

}

?>
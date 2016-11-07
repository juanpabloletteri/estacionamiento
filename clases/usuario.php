<?php
require_once("clases/AccesoDatos.php");

class usuario
{
	public $usuario;
	public $pass;

	public static function login($usuario, $pass)
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				select * 
				from login 
				where usuario = :usuario 
				and 
				pass = :pass" 
				);
			$consulta->bindValue(':usuario',$usuario, PDO::PARAM_STR);
			$consulta->bindValue(':pass',$pass, PDO::PARAM_STR);
			$consulta->execute();
			$resultado = $consulta->fetchAll();
			return $resultado;
	}
}


?>

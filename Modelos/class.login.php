<?php
class Login{
	private $usuario;
	private $clave;
	
	function __construct($usuario,$clave){
		$this->usuario = $usuario;
		$this->clave = $clave;
	}
	
	function verificar(){
		$sql = "select * from usuarios where login = '$this->usuario' and clave = md5('$this->clave')"; 

		$conexion = new Conexion();
		
		$array = $conexion->buscar($sql);
		
		return $array;
	}
}
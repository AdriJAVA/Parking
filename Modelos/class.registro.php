<?php
class Registro{
	private $login;
	private $clave;
	
	function __construct($usuario,$clave){
		$this->login = $login;
		$this->clabe = $clave;
	}
	
	function registrarse(){
		$sql = "insert into usuarios(usuario,clave,tipo) VALUES('$this->usuario',md5('$this->clave'),'U')";
	
		$conexion = new Conexion();
	
		$array = $conexion->buscar($sql);
	}
	
}
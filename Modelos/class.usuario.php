<?php
class Usuario{
	
	private $login;
	private $clave;
	private $tipo;
	
	function __construct($login,$clave,$tipo){
		$this->login = $login;
		$this->clave = $clave;
		$this->tipo = $tipo;
	}
	
	function getNombre(){
		return $this->login;
	}
	
	function getTipo(){
		return $this->tipo;
	}
	
	function insertar(){
		$sql = "insert into usuarios(login,clave,tipo) VALUES('$this->login',md5('$this->clave'),'$this->tipo')";
			
		$conexion = new Conexion();
		
		$conexion->cud($sql);
		
		$conexion->cerrar();
	}
	
	static function listar($tipo){
		$conexion = new Conexion();
		
		$sql = "select * from usuarios  where tipo = '$tipo'";
		
		$arrayUsuarios = $conexion->buscar($sql);
		
		$conexion->cerrar();
		
		return $arrayUsuarios;
	}
	
	static function borrar($login){
		
		$sql = "delete from usuarios where login =  '$login'";
		
		$conexion = new Conexion();
		
		$conexion->cud($sql);
		
		$conexion->cerrar();
	}
}
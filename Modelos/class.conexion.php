<?php

class Conexion{
	
	private $link;
	
	function __construct(){
		$host="localhost";
		$user="root";
		$pass="rootmysql";
		$database = "parking";
		$this->link = mysqli_connect($host,$user,$pass,$database);
	}
	
	public function cerrar(){
		mysqli_close($this->link);
	}

	public function cud($sql){
		$resultado = mysqli_query($this->link,$sql);
		
		if($resultado){
			return true;
		}else{
			return false;
		}
	}
		
	public function buscar($sql){
		$resultado = mysqli_query($this->link, $sql);
		if($resultado){
			$miArray = array();
			while($row = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
				$miArray[] = $row;
			}
			return $miArray;
		}else{
			return false;
		}
	}
}

?>
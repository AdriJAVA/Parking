<?php
class Plaza{
	
	private $planta;
	private $plaza;
	private $estado;
	
	function __construct($planta,$plaza,$estado){
		$this->planta = $planta;
		$this->plaza = $plaza;
		$this->estado = $estado;
	}
	
	function crear(){
		$sql = "insert into park(planta,plaza,estado) VALUES('$this->planta','$this->plaza','$this->estado')";
			
		$conexion = new Conexion();
	
		$conexion->cud($sql);
	
		$conexion->cerrar();
	}
	
	static function reservar($planta,$plaza){
		$conexion = new Conexion();
		
		$sql = "update park set estado='O' where plaza= '$plaza' and planta= '$planta'";
		echo $sql;
		
		$arrayPlazas = $conexion->cud($sql);
		
		$conexion->cerrar();
		
	}
	
	static function cambiar($planta,$plaza,$estado){
		$conexion = new Conexion();
		
		if($estado == 'L'){
			$estado = 'O';
		}else{
			$estado = 'L';
		}
		
		$sql = "update park set estado='$estado' where plaza= '$plaza' and planta= '$planta'";
		echo $sql;
	
		$arrayPlazas = $conexion->cud($sql);
	
		$conexion->cerrar();
	
	}
	
	static function listar(){
		$conexion = new Conexion();
		
		$sql = "select * from park";
		
		$arrayPlazas = $conexion->buscar($sql);
		
		$conexion->cerrar();
		
		return $arrayPlazas;
	}
	
	static function borrar($planta,$plaza){
		$sql = "delete from park where planta =  '$planta' and plaza = '$plaza' and estado = 'L'";
		
		$conexion = new Conexion();
		
		$conexion->cud($sql);
		
		$conexion->cerrar();
	}
}

?>
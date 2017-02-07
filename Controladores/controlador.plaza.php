<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
require_once '../Modelos/class.conexion.php';
require_once '../Modelos/class.usuario.php';
require_once '../Modelos/class.plaza.php';

$usuario = unserialize($_SESSION['usuario']);
$tipo = $usuario->getTipo();


//RESERVAR PLAZA
if(isset($_GET['rplaza']) & isset($_GET['rplanta'])){
	
	
	$planta = $_GET['rplanta'];
	
	$plaza = $_GET['rplaza'];
	
	Plaza::reservar($planta,$plaza);
	
	header('Location: ../Vistas/opciones.php?c=1');
}

//CAMBIAR ESTADO
if(isset($_GET['cplaza']) & isset($_GET['cplanta']) & ($tipo === 'A' | $tipo === 'G')){


	$planta = $_GET['cplanta'];

	$plaza = $_GET['cplaza'];
	
	$estado = $_GET['cestado'];

	Plaza::cambiar($planta,$plaza,$estado);

	header('Location: ../Vistas/opciones.php?c=2');
}

//ELIMINAR PLAZA
if(isset($_GET['dplaza']) & isset($_GET['dplanta']) & ($tipo === 'A' | $tipo === 'G')){

	$planta = $_GET['dplanta'];
	
	$plaza = $_GET['dplaza'];
	
	Plaza::borrar($planta,$plaza);
	
	header('Location: ../Vistas/opciones.php?c=2');
}
//CREAR PLAZA
if(isset($_POST['enviar'])){
	if(isset($_POST['planta']) & isset($_POST['plaza']) & ($tipo === 'A' | $tipo === 'G')){
		
		$planta = $_POST['planta'];
		$plaza = $_POST['plaza'];
		
		$plaza = new Plaza($planta,$plaza,'L');;
		
		$plaza->crear();
		
		header('Location: ../Vistas/opciones.php?c=2');
	}
}
?>
<?php
if(!isset($_SESSION))
{
	session_start();
}

require_once '../Modelos/class.conexion.php';
require_once '../Modelos/class.usuario.php';

$usuario = unserialize($_SESSION['usuario']);
$tipo = $usuario->getTipo();

if(isset($_GET['d']) & $tipo === "A"){
	$gestor = $_GET['d'];
	
	Usuario::borrar($gestor);
	
	header('Location: ../Vistas/opciones.php?c=4');
}

if(isset($_POST['enviar']) & $tipo === "A"){
	if(isset($_POST['nombre']) & isset($_POST['clave'])){
		
		$nombre = $_POST['nombre'];
		$clave = $_POST['clave'];
		
		$usuario = new Usuario($nombre,$clave,'G');;
		
		$usuario->insertar();
		
		header('Location: ../Vistas/opciones.php?c=4');
	}
}
?>
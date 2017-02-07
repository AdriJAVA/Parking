<?php
require_once '../Modelos/class.conexion.php';
require_once '../Modelos/class.usuario.php';

if(isset($_POST['registrarse'])){
	$nombre= $_POST['login'];
	$clave = $_POST['clave'];
	
	$usuario = new Usuario($nombre,$clave,'U');;
	
	$usuario->insertar();
	
	header('Location: index.php');
}
?>

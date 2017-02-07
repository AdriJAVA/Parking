<?php
if(!isset($_SESSION))
{
	session_start();
}

require_once '../Modelos/class.conexion.php';
require_once '../Modelos/class.usuario.php';

$usuario = unserialize($_SESSION['usuario']);
$tipo = $usuario->getTipo();

if(isset($_GET['d']) & ($tipo == "G" | $tipo == "A")){

	$gestor = $_GET['d'];

	Usuario::borrar($gestor);

	header('Location: ../Vistas/opciones.php?c=3');
}

?>
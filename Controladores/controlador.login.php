<?php 
session_start();
if(isset($_POST['entrar'])){
	$nombre= $_POST['login'];
	$clave = $_POST['clave'];
	
	$login = new Login($nombre,$clave);
	
	$array = $login->verificar();
	
	if(count($array) > 0){
		$usuario = new Usuario($array[0]['login'],$array[0]['clave'],$array[0]['tipo']);
		$_SESSION['usuario'] = serialize($usuario);
		header('Location: opciones.php?c=1');
	}else{
		echo "<script>alert('Usuario o contraseña incorrecta')</script>";
	}
}
?>

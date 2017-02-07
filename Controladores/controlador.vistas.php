<?php
$tipo = $usuario->getTipo();

//VER PLAZAS - TODOS LOS USUARIOS
if($_GET['c'] == 1 ){

	$arrayPlazas = Plaza::listar();
	
	require '../Vistas/OpcionesVistas/verPlazas.php';

}

//MODIFICAR PLAZAS - SOLO ADMINISTRADORES Y GESTORES
if($_GET['c'] == 2 && ($tipo === 'A' | $tipo === 'G')){

	$arrayPlazas = Plaza::listar();

	require '../Vistas/OpcionesVistas/modificarPlazas.php';

}

//MODIFICAR USUARIOS - SOLO ADMINISTRADORES Y GESTORES
else if($_GET['c'] == 3 && ($tipo === 'A' | $tipo === 'G')){
	
	$arrayUsuarios = Usuario::listar('U');
	
	require '../Vistas/OpcionesVistas/modificarUsuario.php';
}

//MODIFICAR GESTORES - SOLO ADMINISTRADORES
else if($_GET['c'] == 4 && $tipo === 'A'){
	
	$arrayGestores = Usuario::listar('G');
		
	require '../Vistas/OpcionesVistas/modificarGestor.php';
}


//CERRAR SESION
else if($_GET['c'] == 5){
	session_destroy();
	header('Location: ../Vistas/index.php');
}
?>
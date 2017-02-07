<?php 
require_once '../Modelos/class.conexion.php';
require_once '../Modelos/class.plaza.php';
require_once '../Modelos/class.usuario.php';
require_once '../Modelos/class.login.php';
require_once '../Controladores/controlador.login.php';

if(isset($_SESSION['usuario'])){
$usuario = unserialize($_SESSION['usuario']);


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Menu</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap.css" />
<style>
.row{
	margin-top: 50px;
	color: white;
}

.navbar-default{
	background-color: #337ab7;
	float: none;
	text-align: center;
}

.navbar-default .navbar-nav>li>a{
	color:white;
}

.navbar-default .navbar-text {
    color: white;
}

</style>
</head>
<body>
<h1 class="text-center" style="font-size: 60px;">Parking Manager</h1>
    <?php 
    	require_once 'menu.php';
    ?>
    
    <div class="col-md-8  col-md-offset-2">
    <?php
    if(isset($_GET['c'])){
    	require_once '../Controladores/controlador.vistas.php';
    }
    			
    			?>
    </div>
</body>
</html>

<?php 
}else{
	header('Location: index.php');
}
?>
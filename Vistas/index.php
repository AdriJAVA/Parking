<?php 
require_once '../Modelos/class.conexion.php';
require_once '../Modelos/class.usuario.php';
require_once '../Modelos/class.login.php';
require_once '../Controladores/controlador.login.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap.css" />
<style>
.row{
margin-top: 200px;
}
</style>
</head>
<body>
	<div class="container">
      <div class="row">
       <form action="?" method="POST" class="col-md-4 col-xs-8 col-md-offset-4 col-xs-offset-2">
       <h1 class="text-center">Login</h1>
           <div class="form-group">
               <input type="text" name="login" class="form-control input-lg" placeholder="Usuario">
           </div>
           <div class="form-group">
               <input type="password" name="clave" class="form-control input-lg" placeholder="Contraseña">
           </div>
           <div class="form-group">
            <button name="entrar" class="btn btn-primary btn-lg btn-block">Entrar</button>
             <a href="registro.php" class="btn btn-primary btn-lg btn-block" role="button">Registrarse</a>
           </div>
       </form>
       </div>
   </div>   
</body>
</html>
<?php

if(isset($usuario)){
	
	$menu = '<div class="container">
     <div class="row">
		<div class="col-md-8  col-md-offset-2">
			<nav class="navbar navbar-default"r>
				<ul class="nav navbar-nav centered">
					<li><a href="?c=1">Reservar plaza</a></li>';
			
	if($usuario->getTipo() === "G"){
		$menu .= '
					<li><a href="?c=2">Modificar plazas</a></li>
					<li><a href="?c=3">Modificar usuarios</a></li>
				';
	
		}	
		
	if($usuario->getTipo() === "A"){
			$menu .= '
					<li><a href="?c=2">Modificar plazas</a></li>
					<li><a href="?c=3">Modificar usuarios</a></li>
					<li><a href="?c=4">Modificar gestores</a></li>
				';
		
		}
			
		
		$menu .= '
				</ul>	
			<ul class="nav navbar-nav navbar-right">
				<h4 class="navbar-text">' .  strtoupper($usuario->getNombre()) . '  </h4>
  				<li><a href="?c=5" class="btn" style="margin-right: 15px;">
          				<span class="glyphicon glyphicon-log-out"></span>
        			</a>
				</li>

			</ul>	
			</nav>
		</div>
		</div>
	 </div>';
	
		echo $menu;
}else{
	header('Location: menu.php');
}
?>


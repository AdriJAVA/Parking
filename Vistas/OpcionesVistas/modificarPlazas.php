<meta charset="UTF-8"/>
<?php
require_once '../Controladores/controlador.plaza.php';


$listaPlazas = "<table class='table'>
				<thead>
					<tr>
						<th>Planta</th>
						<th>Plaza</th>
						<th>Estado</th>
						<th  class='text-center'>Acción</th>
					</tr>
				</thead>";

foreach($arrayPlazas as $row){
		$listaPlazas .= "<tr>
					 <td>" . $row['planta'] . "</td>
					 <td>" . $row['plaza'] . "</td>
					 <td>".  $row['estado'] . "</td>
					 <td><div class='text-right'><a class='btn btn-warning' href='../Controladores/controlador.plaza.php?cplanta=" .$row['planta'] . 
						 	"&cplaza=" . $row['plaza']   . "&cestado=" . $row['estado'] . "'>Cambiar estado</a></div></td>
					 <td><div class='text'><a class='btn btn-danger' href='../Controladores/controlador.plaza.php?dplanta=" .$row['planta'] . 
						 		"&dplaza=" . $row['plaza']   . "'>Eliminar</a></div></td>
					 
						</tr>";
				 	 
	}


$listaPlazas.= "</table>";

echo $listaPlazas;
?>


<form action ="../Controladores/controlador.plaza.php" method="post" >
  <div class="form-inline">
    <input type="number" class="form-control" name="planta" placeholder="Planta">
    <input type="number" class="form-control" name="plaza" placeholder="Plaza">
    <button name="enviar" class="btn btn-success">A&ntildeadir</button>
  </div>
</form>

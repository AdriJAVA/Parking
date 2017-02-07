<meta charset="UTF-8"/>
<?php


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
					 <td>".  $row['estado'] . "</td>"; 
					 if( $row['estado'] == "L"){
						 $listaPlazas .= "<td><div class='text-right'><a class='btn btn-success' href='../Controladores/controlador.plaza.php?rplanta=" .$row['planta'] . 
						 		"&rplaza=" . $row['plaza']   . "'>Reservar</a></div></td>";
		 			}else{
		 				 $listaPlazas .= "<td><div class='text-right'><a class='btn btn-danger' disabled>No disponible</a></div></td>";
		 			}
				 	$listaPlazas ."</tr>";
	}


$listaPlazas.= "</table>";

echo $listaPlazas;
?>

<?php
	$lista = "<table class='table'>
				<thead>
					<tr>
						<th>Usuario</th>
						<th>Tipo</th>
					</tr>
				</thead>";
	
	foreach($arrayUsuarios as $row){
		$lista .= "<tr>
					 <td>" . $row['login'] . "</td>
					 <td>" . $row['tipo'] . "</td>	
					 <td><div class='text-right'><a class='btn btn-danger' href='../Controladores/controlador.usuario.php?d=" .$row['login'] . "' >Eliminar</a></div></td>
				 </tr>";
	}
	
	
	$lista.= "</table>";
	
	echo $lista;
	
	
?>
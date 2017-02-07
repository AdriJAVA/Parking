<meta charset="UTF-8"/>
<?php


$lista = "<table class='table'>
				<thead>
					<tr>
						<th>Gestor</th>
						<th>Tipo</th>
						<th class='text-center'>Acción</th>
					</tr>
				</thead>";

foreach($arrayGestores as $row){
		$lista .= "<tr>
					 <td>" . $row['login'] . "</td>
					 <td>" . $row['tipo'] . "</td>
					 <td><div class='text-right'><a class='btn btn-danger' href='../Controladores/controlador.gestor.php?d=" .$row['login'] . "' >Eliminar</a></div></td>
				 </tr>";
	}


$lista.= "</table>";

echo $lista;
?>

<form action ="../Controladores/controlador.gestor.php" method="post" >
  <div class="form-inline">
    <input type="text" class="form-control" name="nombre" placeholder="Nombre del Gestor">
    <input type="password" class="form-control" name="clave" placeholder="Clave">
    <button name="enviar" class="btn btn-success">A&ntildeadir</button>
  </div>
</form>
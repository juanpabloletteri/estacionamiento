<?php
	require_once('clases/vehiculo.php');

	$ArrayDePersonas = vehiculo::TraerTodosLosVehiculos();

	echo "<table class='table table-hover table-responsive'>
			<thead>
				<tr>
					<th>  ID   </th>
					<th>  Patente   </th>				
					<th>  Ingreso     </th>
					<th>  Egreso   </th>
					<th>  Monto        </th>
				</tr> 
			</thead>";   	

		foreach ($ArrayDePersonas as $personaAux)
		{
			echo " 	<tr>
						<td>".$personaAux->id."</td>
						<td>".$personaAux->patente."</td>
						<td>".$personaAux->ingreso."</td>
						<td>".$personaAux->egreso."</td>
						<td>".$personaAux->acobrar."</td>
						<td><button name='Borrar' onclick='Borrar(".$personaAux->id.")'>   <span class='glyphicon glyphicon-remove-circle'>&nbsp;</span>Borrar</button></td>
						<td><button name='Modificar' onclick='Modificar(".$personaAux->id.")'><span class='glyphicon glyphicon-edit'>&nbsp;</span>Modificar</button></td>
					</tr>";
		}	
	echo "</table>";	
//var_dump($ArrayDePersonas);


?>
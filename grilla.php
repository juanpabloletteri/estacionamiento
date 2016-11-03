<?php
	require_once('clases/vehiculo.php');

	$ArrayDePersonas = vehiculo::TraerTodosLosVehiculos();

	echo "<table class='table table-hover table-responsive'>
			<thead>
				<tr>
					<th>  Patente   </th>				
					<th>  Ingreso     </th>
					<th>  Egreso   </th>
					<th>  Monto        </th>
				</tr> 
			</thead>";   	

		foreach ($ArrayDePersonas as $personaAux){

			echo " 	<tr>
						
						
						<td>".$personaAux->patente."</td>
						<td>".$personaAux->ingreso."</td>
						<td>".$personaAux->egreso."</td>
						<td><button class='btn btn-danger' name='Borrar' onclick='Borrar(".$personaAux->GetId().")'>   <span class='glyphicon glyphicon-remove-circle'>&nbsp;</span>Borrar</button></td>
						<td><button class='btn btn-warning' name='Modificar' onclick='Modificar(".$personaAux->GetId().")'><span class='glyphicon glyphicon-edit'>&nbsp;</span>Modificar</button></td>
					</tr>";
		}	
	echo "</table>";		
?>
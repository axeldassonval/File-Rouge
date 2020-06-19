<div class="row">
		<div class="col-12">
			<table>
			<thead class="thead-dark">
					<tr>
						<td colspan="1">ID</td>
						<td colspan="1">Nom</td>
						<td colspan="1">Prenom</td>
						<td colspan="1">Reference</td>
						<td colspan="1">Email</td>
						<td colspan="1">Matricule</td>
						<td colspan="1">Coefficient</td>
					</tr>
				</thead>

					<?php
					foreach ($client as $row)
					{
						if ($row->CLI_TYPE == 1) {$type = "Professionnel";}else{ $type = "Particulier";}
						echo"<tr>";
							echo"<td>".$row->CLI_ID."</td>";
							echo"<td>".$row->CLI_NOM."</td>";
							echo"<td>".$row->CLI_PRENOM."</td>";
							echo"<td>".$row->CLI_REF."</td>";
							echo"<td>".$row->CLI_MAIL."</td>";
							echo"<td>".$type."</td>";
							echo"<td>".$row->CLI_COEFFICIENT."</td>";
							echo"<td><a href=".site_url('client/supprimer_client/'.$row->CLI_ID)."><button class='btn btn-danger'><i class='fas fa-pencil-alt'></i> Supprimer</button></a></td>";
							echo"<td><a href=".site_url('client/modifier_client/'.$row->CLI_ID)."><button class='btn btn-dark'><i class='fas fa-pencil-alt'></i> Modification</button></a></td>";
						echo"</tr>";
					}
					?>

			</table>
		</div>
	</div>


	<h1>Liste du personnel</h1>

	<div class="row">
		<div class="col-12">
			<table>
			<thead class="thead-dark">
					<tr>
						<td colspan="1">ID</td>
						<td colspan="1">Nom</td>
						<td colspan="1">Prenom</td>
						<td colspan="1">Service</td>
						<td colspan="1">email</td>
						<td colspan="1">Matricule</td>
						<td colspan="1">Coeficient</td>
					</tr>
				</thead>

					<?php
					foreach ($personnel as $row)
					{
						echo"<tr>";
							echo"<td>".$row->PER_ID."</td>";
							echo"<td>".$row->PER_NOM."</td>";
							echo"<td>".$row->PER_PRENOM."</td>";
							echo"<td>".$row->PER_SERVICE."</td>";
							echo"<td>".$row->PER_EMAIL."</td>";
							echo"<td>".$row->PER_MATRICULE."</td>";
							echo"<td>".$row->PER_COEFICIENT."</td>";
							echo"<td><a href=".site_url('personnel/supprimer_personnel/'.$row->PER_ID)."><button class='btn btn-danger'><i class='fas fa-pencil-alt'></i> Supprimer</button></a></td>";
							echo"<td><a href=".site_url('personnel/modifier_personnel/'.$row->PER_ID)."><button class='btn btn-dark'><i class='fas fa-pencil-alt'></i> Modification</button></a></td>";
						echo"</tr>";
					}
					?>

			</table>
		</div>
	</div>
	<div class="accordion col-12" id="accordionExample">
		<div class="card">
			<div class="card-header" id="headingOne">
				<h2 class="mb-0">
					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
						Ajouter un employer
					</button>
				</h2>
			</div>

			<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
				<div class="card-body">
					<?php echo form_open("Personnel/ajouter_personnel"); ?>
						<div>
							<h5>Nom</h5>
							<input type="text" name="nom" id="nom">
							<?php echo form_error('nom'); ?>
						</div>
						<div>
							<h5>Prenom</h5>
							<input type="text"name="prenom" id="prenom">
							<?php echo form_error('prenom'); ?>
						</div>
						<div>
							<h5>Service</h5>
							<select name="service" id="service">
								<option value="comptabilité"> Comptabilité </option>
								<option value="gestion"> Gestion </option>
								<option value="comercial"> Comercial </option>
							</select>
							<?php echo form_error('service'); ?>
						</div>
						<div>
							<h5>Email</h5>
							<input type="text"name="email" id="email">
							<?php echo form_error('email'); ?>
						</div>
						<div>
							<h5>Matricule</h5>
							<input type="text"name="matricule" id="matricule">
							<?php echo form_error('matricule'); ?>
						</div>
						<div>
							<h5>Coeficient</h5>
							<input type="number"name="coeficient" id="coeficient">
							<?php echo form_error('coeficient'); ?>
						</div>
						<div>
							<h5>Identifiant</h5>
							<input type="text"name="identifiant" id="identifiant">
							<?php echo form_error('identifiant'); ?>
						</div>
						<div>
							<h5>Mot de passe</h5>
							<input type="password"name="mdp" id="mdp">
							<?php echo form_error('mdp'); ?>
						</div>
						<br>
						<button class="bouton_valider">Ajouter</button>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
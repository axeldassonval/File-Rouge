
			<div class="centre-page col-12 row">
				<div class="col-10 row">
				<?php foreach ($data as $row)
				{
					echo '<div class="card carte-produit col-3">';
						echo '<a href='.site_url('produit/detail_produit/'.$row->PRO_ID).'><img class="card-img-top" src="../../assets/images/body/batterie.png" alt="Card image cap"></a>';
						echo '<ul class="list-group list-group-flush">';
							echo '<a href='.site_url('produit/detail_produit/'.$row->PRO_ID).'><li class="list-group-item"><h5>'.$row->PRO_LIBELLE.'</h5></li></a>';
							echo '<li class="list-group-item">'.$row->PRO_MARQUE.'</li>';
							echo '<li class="list-group-item">'.$row->PRO_PRIX.'€</li>';
						echo '</ul>';
						echo '<div class="card-body bouton-pannier">';
							echo '<button type="button" class="btn btn-success bouton-pannier">Ajout Pannier</button>';
						echo '</div>';
					echo '</div>';
				} ?>
				</div>
				<div class="col-2"id="menu">
						<p>Option de choix:</p>
						<div class=" col-12"id="menu-option">
								<h6>Instrument à:</h6>
								<input type="checkbox" id="scales" name="scales">
								<label for="scales">Corde</label><br>
								<input type="checkbox" id="horns" name="horns">
								<label for="horns">Percussion</label><br>
								<input type="checkbox" id="horns" name="horns">
								<label for="horns">Clavier</label><br>
								<input type="checkbox" id="horns" name="horns">
								<label for="horns">Vent</label><br>
								<h6>Equipment:</h6>
								<input type="checkbox" id="scales" name="scales">
								<label for="scales">Studio</label><br>
								<input type="checkbox" id="horns" name="horns">
								<label for="horns">Son</label><br>
								<input type="checkbox" id="horns" name="horns">
								<label for="horns">Eclairage</label><br>
								<input type="checkbox" id="horns" name="horns">
								<label for="horns">Protection</label><br>
								<input type="checkbox" id="scales" name="scales">
								<label for="scales">Consomable</label><br>
						</div>
				</div>
			</div>

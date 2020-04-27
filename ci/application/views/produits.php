<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/principal.css');?>">
		<!-- lien boostrap-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		</head>
	<body class="container" >
	<!-- lien navigation -->

		<div class="bodyCentre row">

			<?php
				include "include/nav_barre.php"
			?>
			<div class="centre-page col-12 row">
				<div class="col-10">
					<div class="card carte-produit" >
							<img class="card-img-top" src="../../assets/images/body/batterie.png" alt="Card image cap">
							<ul class="list-group list-group-flush">
								<li class="list-group-item"><h5>nom</h5></li>
								<li class="list-group-item">marque</li>
								<li class="list-group-item">prix</li>
							</ul>
							<div class="card-body bouton-pannier">
								<button type="button" class="btn btn-success bouton-pannier">Ajout Pannier</button>
							</div>
					</div>
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
			<?php
				include "include/footer.php"
			?>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
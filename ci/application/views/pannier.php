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
				<table class="table-striped">
					<thead>
						<tr>
							<td><h5>Image</h5></td>
							<td><h5>Nom</h5></td>
							<td><h5>Marque</h5></td>
							<td><h5>Categorie</h5></td>
							<td><h5>Prix</h5></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><img class="card-img-top" src="../../assets/images/body/batterie.png" alt="Card image cap"></td>
							<td>Ensemble Batterie</td>
							<td>Pearl</td>
							<td>Perccussion</td>
							<td>530€</td>
						</tr>
						<tr>
							<td><img class="card-img-top" src="../../assets/images/body/batterie.png" alt="Card image cap"></td>
							<td>Ensemble Batterie</td>
							<td>Pearl</td>
							<td>Perccussion</td>
							<td>530€</td>
						</tr>
					</tbody>
					<tfoot>
						<td></td>
						<td></td>
						<td></td>
						<td class="case-total">total prix :</td>
						<td class="case-total">1060€</td>
					</tfoot>
				</table>
				<button type="button" class="btn btn-outline-success commande-valider">Valider</button>
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
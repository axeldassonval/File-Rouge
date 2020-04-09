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

			<div class="imagePromo centre">
				<img src="<?= base_url('assets/images/body/pub_guitare.png');?>" class="img-fluid imagePub image1">
				<img src="<?= base_url('assets/images/body/banniere_livraison.png');?>" class="img-fluid imagePub">
			</div>

			<img src="<?= base_url('assets/images/body/banniere_centre.png');?>" class="col-12 " id="banderolMilieu">

			<h2 class="col-12">Nos catégories</h2>

			<div class="col-xl-6 col-12 centre">
				<h3 class="titre">Instruments</h3>
				<img class="img-fluid " src="<?= base_url('assets/images/body/instrument.png');?>">
			</div>

			<div class="col-xl-6 col-12 centre">
				<h3 class="titre">Accessoires</h3>
				<img class="img-fluid " src="<?= base_url('assets/images/body/accessoire.png');?>">
			</div>

				<div class="col-xl-6 col-12 centre" id="most">
					<h3 class="titre">Nos Meilleur Vente</h3>

					<img class=" instru" src="<?= base_url('assets/images/body/guitare.png');?>">
					<img class=" instru" src="<?= base_url('assets/images/body/saxo.png');?>">
					<img class="instru" src="<?= base_url('assets/images/body/clavier.png');?>">

				</div>

				<div class="col-xl-6 col-12 centre">
					<h3 class="titre">Nos Partenaire</h3>
					<img class="" src="<?= base_url('assets/images/body/partenaires.png');?>" id="partenaire">
				</div>

		</div>

		<?php
			include "include/footer.php"
		?>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>
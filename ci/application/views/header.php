<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<!-- lien boostrap-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<!--css-->
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/principal.css');?>">

		</head>
	<body class="container" >
	<!-- lien navigation -->

		<div class="bodyCentre row justify-content-end">
			<div id="navBarre" class="row col-12">
				<div class="col-4"id="image_entete">
					<a href="<?= site_url('acceuil/home'); ?>">
						<img id="imageEntete" src="<?= base_url('assets/images/header/logo_village_green.png');?>">
					</a>
				</div>
				<div class="col-8">
					<div class="doite col-12">
						<nav class="navbare navbar-expand-lg navbar-light ">
							<button class=" boutton_navbare navbar-toggler dropdown-toggle" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
								<span class=""> Information Clients</span>
							</button>
							<div class=" alignement collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav">
									<li class="nav-item active">
										<a class="nav-link" href="<?= site_url('information/infos'); ?>">Infos</a>
									</li>
									<li class="nav-item active">
										<?php if($this->session->connecter != "oui") {?>
											<a class="nav-link" href="<?= site_url('login/connexion'); ?>">Connexion</a>
										<?php }elseif ($this->session->employer == 1){ ?>
											<a class="nav-link" href="<?= site_url('client/espace_pro'); ?>">Espace Professionnel</a>
										<?php }else { ?>
											<a class="nav-link" href="<?= site_url('client/espace_personnelle'); ?>">Espace Client</a>
										<?php } ?>

									</li>
									<li class="nav-item active">
										<a class="nav-link" href="<?= site_url('commande/pannier'); ?>"><img src="<?= base_url('assets/images/header/picto-panier.png');?>" alt=""></a>
									</li>
									<li class="nav-item active">
										<img src="<?= base_url('assets/images/header/picto-pays.png');?>" alt="pictograme drapeau français">
									</li>
								</ul>
							</div>
						</nav>
					</div>
					<div class="col-12">
						<nav id="" class=" navbar-expand-lg navbar-dark ">
							<button class="boutton_navbare navbar-toggler dropdown-toggle" type="button" data-toggle="collapse" data-target="#navbarNav2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
								Service
							</button>
							<div class="alignement collapse navbar-collapse" id="navbarNav2">
								<ul class="navbar-nav">
									<li class="nav-item active">
										<a class="nav-link" href="<?= site_url('produit/liste_produits'); ?>">Produits</a>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="<?= site_url('information/infos'); ?>">Service</a>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="<?= site_url('information/infos'); ?>">Aide</a>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="<?= site_url('histoire/villagegreen'); ?>">A propos</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
					<div class="col-12">
						<nav id="" class=" navbar-expand-lg navbar-dark ">
							<button class="boutton_navbare navbar-toggler dropdown-toggle" type="button" data-toggle="collapse" data-target="#navbarNav3" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
								<span class="">Produits</span>
							</button>
							<div class="alignement collapse navbar-collapse" id="navbarNav3">
								<ul class="navbar-nav">
									<li class="nav-item active">
										<a class="nav-link" href="<?= site_url('produit/liste_produits'); ?>">Guit/Bass </a>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="<?= site_url('produit/liste_produits'); ?>">Batteries</a>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="<?= site_url('produit/liste_produits'); ?>">Clavier</a>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="<?= site_url('produit/liste_produits'); ?>">Studio</a>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="<?= site_url('produit/liste_produits'); ?>">Sono</a>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="<?= site_url('produit/liste_produits'); ?>">Eclairage</a>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="<?= site_url('produit/liste_produits'); ?>">DJ</a>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="<?= site_url('produit/liste_produits'); ?>">Cases</a>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="<?= site_url('produit/liste_produits'); ?>">Accessoires</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
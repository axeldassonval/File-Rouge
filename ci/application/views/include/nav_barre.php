<div id="navBarre" class="row col-12">
	<div class="col-4"id="image_entete">
		<a href="<?= site_url('acceuil/home'); ?>">
			<img id="imageEntete" src="<?= base_url('assets/images/header/logo_village_green.png');?>">
		</a>
	</div>
	<div class="col-8">
		<!--barre de navigation-->
		<div class="col-12">
			<nav id="navbar" class="navbar navbar-expand-lg  navbar-dark">
				<!-- defini la barre de bouton et les bouton -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav1">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- lien navigation -->
				<div class="collapse navbar-collapse collapsibleNavbar" id="nav1">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('information/infos'); ?>">Infos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('client/inscription'); ?>">Espace client</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('commande/pannier'); ?>"><img src="<?= base_url('assets/images/header/picto-panier.png');?>" alt=""></a>
						</li>
						<li class="nav-item">
							<img src="<?= base_url('assets/images/header/picto-pays.png');?>" alt="pictograme drapeau français">
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="col-12">
			<nav id="navbar2"  class="navbar navbar-expand-lg navbar-dark">
				<!-- defini la barre de bouton et les bouton -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav2">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- lien navigation -->
				<div class="collapse navbar-collapse collapsibleNavbar"id="nav2">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('liste/produits'); ?>">Produits</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('information/infos'); ?>">Service</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('information/infos'); ?>">Aide</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('histoire/villagegreen'); ?>">A propos</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="col-12">
			<nav id="navbar3"  class="navbar navbar-expand-lg navbar-dark">
				<!-- defini la barre de bouton et les bouton -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav3">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- lien navigation -->
				<div class="collapse navbar-collapse collapsibleNavbar"id="nav3">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('liste/produits'); ?>">Guit/Bass </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('liste/produits'); ?>">Batteries</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('liste/produits'); ?>">Clavier</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('liste/produits'); ?>">Studio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('liste/produits'); ?>">Sono</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('liste/produits'); ?>">Eclairage</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('liste/produits'); ?>">DJ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('liste/produits'); ?>">Cases</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('liste/produits'); ?>">Accessoires</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</div>
<?php if ($this->session->connecter != "oui") {
	redirect('/acceuil/home', 'refresh');
} ?>

<div class="col-10">
	<div class="col-12">
		<h5>Votre Pannier</h5>
		<p>"Vide"</p>
	</div>
	<div class="col-12">
		<h5>Historique De Commande</h5>
		<p>"Vide"</p>
	</div>
	<div class="col-12">
		<h5>Iformation Personnelle</h5>
		<p><?php echo $this->session->nom; ?></p>
		<p><?php echo $this->session->prenom; ?></p>
		<p><?php echo $this->session->ref; ?></p>
		<p><?php echo $this->session->type; ?></p>
		<p><?php echo $this->session->inscription; ?></p>
		<p><?php echo $this->session->adresse; ?></p>
		<p><?php echo $this->session->ville; ?></p>
		<p><?php echo $this->session->code_postal; ?></p>
	</div>
	<div class="col-12">
		<h5>Information De Securité</h5>
		<p><?php echo $this->session->mail; ?></p>
		<p><?php echo $this->session->mdp; ?></p>
	</div>
	<div class="col-12">
		<h5>Votre Conseillé</h5>
	</div>
</div>
<div class="col-2">
	<a href="<?= site_url('login/deconexion'); ?>"><button>Deconexion</button></a>
</div>
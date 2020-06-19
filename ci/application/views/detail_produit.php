<div class="row">
	<div class="col-12">
		<h5>Photo</h5><br>
		<img class="card-img-top" src="../../assets/images/body/batterie.png" alt="Card image cap"> <br>
	</div>
	<br>
	<div class="col-6">
		<h5>Libelle</h5><br>
		<p><?=$data->PRO_LIBELLE?></p><br>
	</div>
	<br>
	<div class="col-6">
		<h5>Marque</h5><br>
		<p><?=$data->PRO_MARQUE?></p><br>
	</div>
	<br>
	<div class="col-6">
		<h5>Référence</h5><br>
		<p><?=$data->PRO_REF?></p><br>
	</div>
	<br>
	<div class="col-6">
		<h5>Categorie</h5><br>
		<p><?=$data->CAT_ID?></p><br>
	</div>
	<div class="col-6">
		<h5>Description</h5><br>
		<p><?=$data->PRO_DESCRIPTION?></p><br>
	</div>
	<br>
	<div class="col-6">
		<h5>Prix</h5><br>
		<p><?=$data->PRO_PRIX?></p><br>
	</div>
	<a href="<?= site_url('produit/modifier_produits/'.$data->PRO_ID) ?>"><button class='btn btn-dark'><i class='fas fa-pencil-alt'></i> Modification</button></a>
	<a href="<?= site_url('produit/supprimer_produits/'.$data->PRO_ID) ?>"><button class='btn btn-danger'><i class='fas fa-pencil-alt'></i> Supprimer</button></a>
</div>

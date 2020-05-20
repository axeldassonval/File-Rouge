<?php echo form_open("Produit/modifier_produits/".$data->PRO_ID); ?>
<div>
	<h5>Libelle</h5>
	<input type="text" name="libelle" id="libelle" value="<?=$data->PRO_LIBELLE?>">
	<?php echo form_error('libelle'); ?>
</div>
<div>
	<h5>Marque</h5>
	<input type="text"name="marque" id="marque" value="<?=$data->PRO_MARQUE?>">
	<?php echo form_error('marque'); ?>
</div>
<div>
	<h5>Reference</h5>
	<input type="text" name="reference" id="reference" value="<?=$data->PRO_REF?>">
	<?php echo form_error('reference'); ?>
</div>
<div>
	<h5>Categorie</h5>
	<input type="text"name="categorie" id="categorie" value="<?=$data->CAT_ID?>">
	<?php echo form_error('categorie'); ?>
</div>
<div>
	<h5>Description</h5>
	<input type="text"name="description" id="description" value="<?=$data->PRO_DESCRIPTION?>">
	<?php echo form_error('description'); ?>
</div>
<div>
	<h5>Prix</h5>
	<input type="number"name="prix" id="prix" value="<?=$data->PRO_PRIX?>"> €
	<?php echo form_error('prix'); ?>
</div>
<div>
	<h5>Stock</h5>
	<input type="number"name="stock" id="stock" value="<?=$data->PRO_STOCK_PHYSIQUE?>">
	<?php echo form_error('stock'); ?>
</div>

<button>Modifier</button>
<?php echo form_close(); ?>
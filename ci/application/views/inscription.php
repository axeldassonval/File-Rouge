<?php echo form_open("client/inscription"); ?>


	<div class="row alignetoi separateur">
		<span class="col-12 titre">Créez vos identifiants</span>
		<div class="col-12 ">
			<div>
				<span>Email</span><br>
				<input type="text"name="email" id="email">
				<?php echo form_error('email'); ?>
			</div>
			<div>
				<span>Mot de passe</span><br>
				<input type="text"name="mdp" id="mdp">
				<?php echo form_error('mdp'); ?>
				<?php echo form_error('verif_mdp'); ?>
			</div>
			<div>
				<span>Verification</span><br>
				<input type="text"name="verif_mdp" id="verif_mdp">
				<?php echo form_error('mdp'); ?>
				<?php echo form_error('verif_mdp'); ?>
			</div><br>
		</div>


	</div>
	<div class="row alignetoi ">
		<span class="col-12 titre ">Information Personnel</span><br>
		<div class="col-12 col-md-5">
			<div>
				<span>Nom</span><br>
				<input type="text" name="nom" id="nom" >
				<?php echo form_error('nom'); ?>
			</div>
			<div>
				<span>Prenom</span><br>
				<input type="text"name="prenom" id="prenom" >
				<?php echo form_error('prenom'); ?>
			</div>
			<div>
				<span>Adresse</span><br>
				<input type="text"name="adresse" id="adresse">
				<?php echo form_error('adresse'); ?>
			</div>
		</div>
		<div class="col-12 col-md-5">
			<div>
				<span>Type</span><br>
				<select name="type" id="type">
					<option value="Professionnel"> Professionnel </option>
					<option value="Particulier"> Particulier </option>
				</select><br>
				<?php echo form_error('type'); ?>
			</div>
			<div>
				<span>Ville</span><br>
				<input type="text"name="ville" id="ville">
				<?php echo form_error('ville'); ?>
			</div>
			<div>
				<span>Code Postal</span><br>
				<input type="text"name="code_postal" id="code_postal">
				<?php echo form_error('code_postal'); ?>
			</div>
		</div>
		<div class="col-12">
			<button class="bouton_valider">Valider</button>
		</div>
	</div>
<?php echo form_close(); ?>

<img class=" basdepage" src="<?= base_url('assets/images/body/espaceclient/bas_de_pages.png');?>">
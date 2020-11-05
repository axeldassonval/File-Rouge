<div class="bordure">
	<nav class="nav nav-tabs">
	<a class="nav-item nav-link active text-body" href="#p1" data-toggle="tab">Client</a>
	<a class="nav-item nav-link adroite text-body" href="#p2" data-toggle="tab">Employer</a>
	</nav>
	<div class="tab-content">
		<div class="tab-pane active" id="p1">
		<?php echo form_open("Login/connexion"); ?>
			<div class="connexion">
				<span class="titre_connexion">S'identifier</span><br>
				<span>E-mail</span><br>
				<input type="text" id="email" name="email"><br>
				<?php echo form_error('email'); ?>
				<span>Mot de passe</span><br>
				<input type="password" id="mdp" name="mdp"><br>
				<?php echo form_error('mdp'); ?>
				<button class="bouton_connexion">S'identifier</button> <br>
				<a class="petit" href="<?= site_url('client/inscription'); ?>">S'inscrire ?</a>
				<a class="adroite petit" href="">Mot de passe oublier</a>
			</div>
			<?php echo form_close(); ?>
		</div>

		<div class="tab-pane" id="p2">
			<?php echo form_open("Login/connexion_employer"); ?>
			<div class="connexion">
				<span class="titre_connexion">S'identifier</span><br>
				<span>E-mail</span><br>
				<input type="text" id="email" name="email"><br>
				<?php echo form_error('email'); ?>
				<span>Mot de passe</span><br>
				<input type="password" id="mdp" name="mdp"><br>
				<?php echo form_error('mdp'); ?>
				<button class="bouton_employer">S'identifier</button> <br>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
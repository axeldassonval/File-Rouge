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
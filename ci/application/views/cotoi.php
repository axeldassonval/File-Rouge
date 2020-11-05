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
<?php $this->layout('layoutAdmin', ['title' => 'Admin']) ?>


<?php $this->start('main_content') ?>

<h1>Insertion d'une nouvelle entreprise</h1>

<div class="row">
	<div class="col-md-6 col-md-offset-3">

		<form class="form-container" method="POST" action="<?= $this->url('adminSubmit2'); ?>">


			<div class="form-group <?php if(isset($errors['name'])) echo 'has-error' ?>">
				<label for="name">Nom :</label>
				<input type="name" class="form-control" id="name" name="name" placeholder="Nom" value="">
				<?php if(isset($errors['name'])): ?>
				<span class="help-block"><?= $errors['name']; ?></span>
				<?php endif; ?>
			</div>

			<div class="form-group <?php if(isset($errors['adress'])) echo 'has-error' ?>">
				<label for="adress">Adresse :</label>
				<input type="adress" class="form-control" id="adress" name="adress" placeholder="Adresse" value="">
				<?php if(isset($errors['adress'])): ?>
				<span class="help-block"><?= $errors['adress']; ?></span>
				<?php endif; ?>
			</div>

			<div class="form-group <?php if(isset($errors['zipcode'])) echo 'has-error' ?>">
				<label for="zipcode">Code Postal :</label>
				<input type="zipcode" class="form-control" id="zipcode" name="zipcode" placeholder="Code Postal" value="">
				<?php if(isset($errors['email'])): ?>
				<span class="help-block"><?= $errors['zipcode']; ?></span>
				<?php endif; ?>
			</div>
			<div class="form-group <?php if(isset($errors['city'])) echo 'has-error' ?>">
				<label for="city">Ville :</label>
				<input type="city" class="form-control" id="city" name="city" placeholder="Villle" value="">
				<?php if(isset($errors['email'])): ?>
				<span class="help-block"><?= $errors['city']; ?></span>
				<?php endif; ?>
			</div>
			<div class="form-group <?php if(isset($errors['siret'])) echo 'has-error' ?>">
				<label for="siret">N&deg SIRET :</label>
				<input type="siret" class="form-control" id="siret" name="siret" placeholder="Siret" value="">
				<?php if(isset($errors['email'])): ?>
				<span class="help-block"><?= $errors['siret']; ?></span>
				<?php endif; ?>
			</div>

			<div class="form-group <?php if(isset($errors['emailCompany'])) echo 'has-error' ?>">
				<label for="emailCompany">EmailCompany  de l'entreprise:</label>
				<input type="emailCompany" class="form-control" id="emailCompany" name="emailCompany" placeholder="EmailCompany de l'entreprise" value="">
				<?php if(isset($errors['emailCompany'])): ?>
				<span class="help-block"><?= $errors['emailCompany']; ?></span>
				<?php endif; ?>
			</div>

			<div class="form-group <?php if(isset($errors['password'])) echo 'has-error' ?>">
				<label for="password">Mot de passe :</label>
				<input type="password" class="form-control" id="password" name ="password" placeholder="Password">
				<?php if(isset($errors['password'])): ?>
				<span class="help-block"><?= $errors['password']; ?></span>
				<?php endif; ?>
			</div>
			<div class="form-group">
				<label for="confirmPassword">Confirmer le mot de passe :</label>
				<input type="password" class="form-control" id="confirmPassword" name ="confirmPassword" placeholder="Password">
			</div>
	  		<button type="submit" class="btn btn-primary">Envoyer</button>

		</form>
	</div>
</div>


<?php $this->stop('main_content') ?>

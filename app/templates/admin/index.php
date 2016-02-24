<?php $this->layout('layoutAdmin', ['title' => 'Admin']) ?>


<?php $this->start('main_content') ?>

<h1>Insertion d'un nouveau salarié </h1>

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<form class="form-container" method="POST" action="<?= $this->url('adminSubmit1'); ?>">
		  	<div class="form-group <?php if(isset($errors['gender'])) echo 'has-error' ?>">
			    <label for="gender">Civilité :</label>
			    <select class="form-control" id="gender" name="gender" placeholder="gender" value="">
			    	<option>Melle</option>
			    	<option>Mme</option>
			    	<option>Mr</option>

			    </select>
			    <?php if(isset($errors['gender'])): ?>
			    	<span class="help-block"><?= $errors['gender']; ?></span>
				<?php endif; ?>
	 		 </div>
		 		 	<div class="form-group <?php if(isset($errors['firstname'])) echo 'has-error' ?>">
					    <label for="firstname">Prénom :</label>
					    <input type="firstname" class="form-control" id="firstname" name="firstname" placeholder="firstname" value="">
					    <?php if(isset($errors['firstname'])): ?>
					    	<span class="help-block"><?= $errors['firstname']; ?></span>
						<?php endif; ?>
		 		 	</div>
		 		 		<div class="form-group <?php if(isset($errors['lastname'])) echo 'has-error' ?>">
						    <label for="lastname">Nom :</label>
						    <input type="lastname" class="form-control" id="lastname" name="lastname" placeholder="lastname" value="">
						    <?php if(isset($errors['lastname'])): ?>
						    	<span class="help-block"><?= $errors['lastname']; ?></span>
							<?php endif; ?>
			 		 		</div>
			  			<div class="form-group <?php if(isset($errors['email'])) echo 'has-error' ?>">
						    <label for="email">Email :</label>
						    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="">
						    <?php if(isset($errors['email'])): ?>
						    	<span class="help-block"><?= $errors['email']; ?></span>
							<?php endif; ?>
				 		 </div>
			  		<div class="form-group <?php if(isset($errors['password'])) echo 'has-error' ?>">
					    <label for="password">Password :</label>
					    <input type="password" class="form-control" id="password" name ="password" placeholder="Password">
					    <?php if(isset($errors['password'])): ?>
					    	<span class="help-block"><?= $errors['password']; ?></span>
						<?php endif; ?>
			  		</div>
	  		<div class="form-group">
			    <label for="confirmPassword">Password :</label>
			    <input type="password" class="form-control" id="confirmPassword" name ="confirmPassword" placeholder="Password">
	  		</div>
	  			<div class="form-group <?php if(isset($errors['role'])) echo 'has-error' ?>">
					    <label for="role">role :</label>
					    <select class="form-control" id="role" name ="role" placeholder="role">
						    <option value="1">Salarie</option>
						    <option value="2">Entreprise</option> 
   							<option value="3">Admin</option>
   						</select>
   						<br>
					    <?php if(isset($errors['role'])): ?>
					    	<span class="help-block"><?= $errors['role']; ?></span>
						<?php endif; ?>
					</div>
	  		<button type="submit" name="salarie" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>


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
	  		<button type="submit" name="entreprise" class="btn btn-primary">Envoyer</button>
		</form>
	</div>
</div>


<?php $this->stop('main_content') ?>

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
							<option value="salarie">Salarie</option>
							<option value="entreprise" >Entreprise</option> 
							<option value="admin">Admin</option>
						</select>
						<br>
						<?php if(isset($errors['role'])): ?>
							<span class="help-block"><?= $errors['role']; ?></span>
						<?php endif; ?>
					</div>
					<div class="form-group <?php if(isset($errors['role'])) echo 'has-error' ?>">
						<label for="role">entreprise :</label>
						<select class="form-control" id="role" name ="role" placeholder="role">
							<?php foreach ($variable as $key => $value) {}?>

								<option value=""></option>
							<?php?>
							
						</select>
					
						<?php if(isset($errors['role'])): ?>
							<span class="help-block"><?= $errors['role']; ?></span>
						<?php endif; ?>
					</div>

	  		<button type="submit" name="salarie" class="btn btn-primary">Submit</button>

		</form>
	</div>
</div>
<?php $this->stop('main_content') ?>
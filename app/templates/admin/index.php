<?php $this->layout('layoutAdmin', ['title' => 'Admin']) ?>


<?php $this->start('main_content') ?>

<h1>Insertion d'un nouveau salarié </h1>

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<form class="form-container" method="POST" action="<?= $this->url('registerUser'); ?>">
		  	<div class="form-group <?php if(isset($errors['gender'])) echo 'has-error' ?>">
			    <label for="gender">Civilité :</label>
			    <input type="gender" class="form-control" id="gender" name="gender" placeholder="gender" value="">
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
						    <?php if(isset($errors['email'])): ?>
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
	  		<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>


<h1>Insertion d'une nouvelle entreprise</h1>

<input type="text" id="" name="name" placeholder="Nom">
<input type="text" id="" name="adress" placeholder="adresse">
<input type="text" id="" name="zipcode" placeholder="zipcode">
<input type="text" id="" name="country" placeholder="ville">
<input type="text" id="" name="siret" placeholder="SIRET">
<input type="email" id="" name="emailcompany" placeholder="email">
	  		<div class="form-group">
			    <label for="confirmPassword">Password :</label>
			    <input type="password" class="form-control" id="confirmPassword" name ="confirmPassword" placeholder="Password">
	  		</div>
	  		<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>



<?php $this->stop('main_content') ?>

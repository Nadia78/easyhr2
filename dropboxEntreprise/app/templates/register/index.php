<?php $this->layout('layout', ['title' => 'register']) ?>

<?php $this->start('main_content') ?>


<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<form class="form-container" method="POST" action="<?= $this->url('registerUser'); ?>">
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
<?php $this->stop('main_content') ?>
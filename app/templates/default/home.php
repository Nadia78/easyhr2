<?php $this->layout('layoutHome', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
	<h2>Let's code.</h2>
	<?php print_r($w_user); ?>
	<?php if(isset($email)): ?>
	<p>Bienvenue <?= $this->e($email); ?></p>
	<?php endif; ?>
	
<?php $this->stop('main_content') ?>

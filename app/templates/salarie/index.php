<?php $this->layout('layoutSalarie', ['title' => 'Salarie']) ?>



<?php $this->start('main_content') ?>
<div id="table">
	<h2>Bienvenue <?= $this->e($w_user['genre'])?> <?= $this->e($w_user['firstname'])?> sur votre espace Easyhr</h2>

	<p>
		Il vous reste :<br>

			-$numberCG  jours de congés payées.<br>
			-$numberRTT jours de RTT.<br>
			-numberF heures de formation.<br>

		<select>
			<option value ="CP">CP</option>
			<option value ="RTT">RTT</option>
			<option value ="CSS">CSS</option>
			<option value ="Maternité">Maternité</option>
			<option value ="Paternité">Paternité</option>
		</select>
		<form action="" method="POST">
		<input type="date" name="" value="" id="">
		<button>Envoyer</button>
		</form>

	<h3>Ci-dessous la liste de vos documents </h3>
<?php
$dir    = '__DIR__."/../../dropbox"';
$files1 = scandir($dir);
$dir2 = '__DIR__."/../../dropbox/1"';
$files2 = scandir($dir2);
// = scandir($dir, 1);


print_r($files2);
//if($w_user['id']== $key)
foreach ($files1 as $key => $value):?>
<a href="<?= $dir; ?>">

<?php 
echo '<br>';
echo $value; 
echo '</br>';?>
</a>
<?php endforeach; 
//endif;
?>


</p>
	
</div>
<?php $this->stop('main_content') ?>

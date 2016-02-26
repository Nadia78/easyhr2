<?php $this->layout('layoutSalarie', [
//'title' => 'Salarie'],
//['files'=> $files];
]) ?>



<?php $this->start('main_content') ?>
<div id="table">
	<h2>Bienvenue <?= $this->e($w_user['genre'])?> <?= $this->e($w_user['firstname'])?> sur votre espace Easyhr</h2>

	<p>
		Il vous reste :<br>

			-$numberCG  jours de congés payées.<br>
			-$numberRTT jours de RTT.<br>
			-numberF heures de formation.<br></p>

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
<div>
	<h3>Ci-dessous la liste de vos documents </h3>
<?php
$id=$w_user['id'];
$dir    = '__DIR__."/../../dropbox"';
$files1 = scandir($dir);
$chemin= 'easyhr2/dropbox/'.$id.'Javascript_-_l.pdf';

print_r($files1);
foreach ($files1 as $key => $value):?>
<a href="<?= $this->url('dropbox') ?>">

<?php 
echo '<br>';
echo $value; 
echo '</br>';?>
</a>
<?php endforeach;
?>
</div>


	
</div>
<?php $this->stop('main_content') ?>

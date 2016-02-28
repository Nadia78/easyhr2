<?php $this->layout('layoutSalarie', [
//'title' => 'Salarie'],
//['files'=> $files];
]) ?>



<?php $this->start('main_content') ?>

	<div class="container">

		<div class="row">
			<div class="col-md-9 col-md-offset-4">

		<h3>Ci-dessous le solde de vos congés :</h3>
						


		
		<div>	
		
		<ul>
				<li>$numberCG  jours de congés payées.</li>
				<li>$numberRTT jours de RTT.</li>
				<li>numberF heures de formation.</li>

		</ul>

		
		<div>

		<h3>Renseignez vos prises de congés et absences ci-dessous :</h3>

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
	</div>
	</div>
	</div>
<?php $this->stop('main_content') ?>

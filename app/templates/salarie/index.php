<?php $this->layout('layoutSalarie')
//'title' => 'Salarie'],
//['files'=> $files];
?>



<?php $this->start('main_content') ?>

	<div class="container">

		<div class="row">
			<div class="col-md-9 col-md-offset-4">

		<h3>Ci-dessous le solde de vos congés :</h3>

		<div>	
		
		<ul>
				<li><?= $this->e($w_user['cp'])?>  jours de congés payées.</li>
				<li><?= $this->e($w_user['rtt'])?> jours de RTT.</li>
				<li><?= $this->e($w_user['formation'])?> heures de formation.</li>

		</ul>

		
		<div>
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
		</div>
	
		<h3>Ci-dessous la liste de vos documents </h3>
					<?php foreach ($files as $key =>$value):?>
						<a class="documentLink" target="_blank" href="<?='../dropbox/'.$w_user['id'].'/'.$value; ?>" >
							<?= $value; ?> 
						</a>
						<br />
					<?php endforeach;?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $this->stop('main_content'); ?>

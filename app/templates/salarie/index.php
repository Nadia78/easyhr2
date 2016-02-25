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





	</p>
	
</div>
<?php $this->stop('main_content') ?>

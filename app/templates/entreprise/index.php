<?php $this->layout('layoutEntreprise')//, ['title' => 'Accueil']) ?>


<?php $this->start('main_content') ?>
	<div class="container">

		<div class="row">
			<div class="col-md-9 col-md-offset-4">
			<h3>Informations générales</h3>
			<TABLE BORDER="1"> 
			  <CAPTION> Détails par employé</CAPTION> 
			  <TR> 
				 <TH> Noms </TH> 
				 <TH> Montant du salaire Brut</TH> 
				 <TH> Absences du mois</TH> 
				 <TH> Motif </TH> 
				 <TH> Heures de formation</TH> 
				 <TH> Réunion</TH> 
			  </TR> 
			  <TR> 
			  <!-- echo $nom -->
				 <TD> Mr François DUPONT </TD> 
			 	 <TD> Salaire </TD> 
				 <TD> 1 </TD> 
				 <TD> Arrêt Maladie </TD> 
				 <TD> 12 </TD> 
				 <TD> générale </TD> 
			  </TR> 
			</TABLE>
		
			</div>
		</div>
</div>
			


<?php $this->stop('main_content') ?>



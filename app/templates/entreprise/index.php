<?php $this->layout('layoutEntreprise')//, ['title' => 'Accueil']) ?>


<?php $this->start('main_content') ?>
<div>
			<TABLE BORDER="1"> 
			  <CAPTION> Informations générales </CAPTION> 
			  <TR> 
				 <TH> Noms </TH> 
				 <TH> Montant du salaire Brut</TH> 
				 <TH> Absences du mois</TH> 
				 <TH> Motif </TH> 
			  </TR> 
			  <TR> 
			  <!-- echo $nom -->
				 <TD> Mr François DUPONT </TD> 
			 	 <TD> Salaire </TD> 
				 <TD> 1 </TD> 
				 <TD> Arrêt Maladie </TD> 
			  </TR> 
			</TABLE>
		

</div>
			
<div id='calendar'>
</div>

<?php $this->stop('main_content') ?>



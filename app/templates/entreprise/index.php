<?php $this->layout('layoutEntreprise')//, ['title' => 'Accueil']) ?>


<?php $this->start('main_content') ?>
	<div class="container">

		<div class="row">
			<div class="col-md-9 col-md-offset-4">
			<h3>Informations générales</h3>
			<TABLE id="table2" BORDER="1"> 
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
			  <TR> 
			  <!-- echo $nom -->
				 <TD> Mme Laura LEMERCIER </TD> 
			 	 <TD> Salaire </TD> 
				 <TD> 1 </TD> 
				 <TD> Arrêt Maladie </TD> 
				 <TD> 2 </TD> 
				 <TD> générale </TD> 
			  </TR> 
			  <TR> 
			  <!-- echo $nom -->
				 <TD> Mr Adam WALID</TD> 
			 	 <TD> Salaire </TD> 
				 <TD> 2 </TD> 
				 <TD> Congés </TD> 
				 <TD> 3 </TD> 
				 <TD> générale </TD> 
			  </TR> 
			  			  <TR> 
			  <!-- echo $nom -->
				 <TD> Mme Suzanne  </TD> 
			 	 <TD> Salaire </TD> 
				 <TD> 1 </TD> 
				 <TD> Arrêt Maladie </TD> 
				 <TD> 2 </TD> 
				 <TD> générale </TD> 
			  </TR> 
			  <TR> 
			  <!-- echo $nom -->
				 <TD> Mr Juste LEBON </TD> 
			 	 <TD> Salaire </TD> 
				 <TD> 1 </TD> 
				 <TD> Congé </TD> 
				 <TD> 2 </TD> 
				 <TD> générale </TD> 
			  </TR> 
			  <TR> 
			  <!-- echo $nom -->
				 <TD> Mr Gérard FRANC</TD> 
			 	 <TD> Salaire </TD> 
				 <TD> 1 </TD> 
				 <TD> RTT </TD> 
				 <TD> 2 </TD> 
				 <TD> générale </TD> 
			  </TR> 
			</TABLE>
			<div>
			<h3>Documents fiscaux et sociaux</h3>
				<ul>
					<li><a href="../../dropboxEntreprise">DADS</a></li>
					<li><a href="../../dropboxEntreprise">Liasse Fiscale</a></li>
					<li><a href="../../dropboxEntreprise">Compte de résultat Mutuelle</a></li>
				</ul>
			</div>
		
			</div>
		</div>
</div>


<?php $this->stop('main_content') ?>



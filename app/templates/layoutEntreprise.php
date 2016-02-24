
<!DOCTYPE html>
<html>
<head>
	
	<title>Espace Entreprise</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- Bootstrap Core CSS -->

	<link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/loginEntreprise.css') ?>">
	
	<!-- <link rel='stylesheet' href='fullcalendar/fullcalendar.css' /> -->
	<link rel="stylesheet" href="<?= $this->assetUrl('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.css') ?>">
	
	<!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.css' /> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.min.js"></script>
	<script src="<?= $this->assetUrl('js/main.js') ?>"></script>

	<link rel="stylesheet" href="<?= $this->assetUrl('main.css') ?>">

	<!-- <script src='lib/jquery.min.js'></script>
	<script src='lib/moment.min.js'></script> -->
	<!-- <script src='fullcalendar/fullcalendar.js'></script> -->
</head>
<body>
	<div class="page-header">
		<img src="#">
	  <p>Bienvenue dans l'espace $nom de l'entreprise de EasyHr</p>
	</div>

	<div class="container">

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				
				<ul id="menu-demo2">
					<li><a href="#">General</a>
						<ul>
							<li><a href="#">Département 1</a></li>
							<li><a href="#">Département 2</a></li>
							<li><a href="#">Département 3 </a></li>
							<li><a href="#">Département 4</a></li>
						</ul>
					</li>
					<li><a href="#">Personnel</a>
						<ul>
							<li><a href="#">Entree</a></li>
							<li><a href="#">Sortie</a></li>
							<li><a href="#">Effectif</a></li>
						</ul>
					</li>
					<li><a href="#">Documents</a>
						<ul>
							<li><a href="#">Doc 1</a></li>
							<li><a href="#">Doc 2</a></li>
							<li><a href="#">Doc 3</a></li>
							
						</ul>
					</li>
					<li><a href="#">Notifications</a>
						<ul>
							
							<li><a href="#">Notif 1</a></li>
							<li><a href="#">Notif 2</a></li>
							<li><a href="#">Notif 3</a></li>
							<li><a href="#">Notif 4</a></li>
						</ul>
					</li>

					<li><a href="#">Partenaires</a>
						<ul>
							<li><a href="#">Partenaire 1</a></li>
							<li><a href="#">Partenaire 2</a></li>
							<li><a href="#">Partenaire 3</a></li>
							<li><a href="#">Partenaire 4</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

<div id="table">
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
 <TD> 2000 € </TD> 
 <TD> 1 </TD> 
 <TD> Arrêt Maladie </TD> 
  </TR> 
</TABLE> 
</div>
<div id='calendar'>
</div>
</body>
</html>
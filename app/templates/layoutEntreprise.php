
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
	
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.css' />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.min.js"></script>
	<script src="<?= $this->assetUrl('js/main.js') ?>"></script>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/main.css') ?>">

</head>
<body>
	<div class="page-header">
		
	  <h3>Bienvenue <?= $this->e($w_user['firstname'])?> dans l'espace $nom de l'entreprise de EasyHr<img src="#"></h3>
	</div>

	<div class="container">

		<div class="row">
			<div class="col-md-8 col-md-offset-3">
				
				<ul id="menu-demo2">
					<li><a href="#">General</a>
						<ul>
							<li><a href="#">Commercial</a></li>
							<li><a href="#">Informatique</a></li>
							<li><a href="#">RH</a></li>
						</ul>
					</li>
					<li><a href="#">Personnel</a>
						<ul>
							<li><a href="#">Effectifs</a></li>
							<li><a href="#">Entrées</a></li>
							<li><a href="#">Sorties</a></li>
						</ul>
					</li>
					<li><a href="#">Documents</a>
						<ul>
							<li><a href="#">Social</a></li>
							<li><a href="#">Fiscal</a></li>
							<li><a href="#">Mutuelle/Retraite/PEE</a></li>		
						</ul>
					</li>
					<li><a href="#">Notifications</a>
						<ul>		
							<li><a href="#">Notif 1</a></li>
							<li><a href="#">Notif 2</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<a href="<?= $this->url('logout');?>">Déconnexion</a>
		</div>
		</div>
		<div id='calendar'></div>
		<?= $this->section('main_content') ?>
</body>
</html>
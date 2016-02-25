<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css') ?>">

	<link rel="stylesheet" href="<?= $this->assetUrl('css/loginEntreprise.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css') ?>">

	<link rel="stylesheet" href="<?= $this->assetUrl('css/main.min.css') ?>">


	<title>Admin</title>
</head>
<body>
	<div class="container">

		<div class="row">
			<div class="col-md-9 col-md-offset-2">
				
				<ul id="menu-demo2">
					<li><a href="#">Insertion</a>

					</li>
					<li><a href="#">Informations générales</a>
						<ul>
							<li><a href="#">Entreprises</a></li>
							<li><a href="#">Salariés</a></li>
						</ul>
					</li>
					<li><a href="#">Prise en main</a>
						<ul>
							<li><a href="#">Actualités</a></li>
							<li><a href="#">Documents</a></li>
							<li><a href="#">Mutuelle/Retraite/PEE</a></li>		
						</ul>
					</li>
					<li><a href="#">Notifications</a>
						<ul>		
							<li><a href="#">Notif 1</a></li>
							<li><a href="#">Notif 2</a></li>
						</ul>
					</li>
					<li><a href="#">Partenaires</a>
						<ul>
							<li><a href="#">Interim</a></li>
							<li><a href="#">Cabinet de recrutement</a></li>
							<li><a href="#">Pôle emploi</a></li>
							<li><a href="#">Partenaire 4</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

<?= $this->section('main_content') ?>



</body>
</html>
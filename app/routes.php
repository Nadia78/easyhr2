<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
		['GET', '/entreprise', 'Entreprise#index', 'entreprise'],
		['GET', '/salarie', 'Salarie#index', 'salarie'],
		['GET', '/admin', 'Admin#index', 'admin'],

		['POST', '/loginEntreprise', 'Entreprise#loginEntreprise', 'loginEntreprise'],
		['POST', '/loginSalarie', 'Salarie#loginUser', 'loginSalarie'],
		

		['POST', '/adminSubmitSalarie', 'Admin#registerSalarie', 'adminSubmit1'],
		['POST', '/adminSubmitEntreprise', 'Admin#registerEntreprise', 'adminSubmit2'],

		['POST', '/salarie', 'Salarie#index', 'salarie2'],

		
		['POST', '/loginUser/', 'Login#loginUser', 'loginUser'],
		['GET', '/logout/', 'Login#logout', 'logout'],

		['GET', '/register/', 'Register#index', 'register'],
		['POST', '/registerUser/', 'Register#registerUser', 'registerUser'],

		['GET', '/private/', 'Default#privateHome', 'privateHome'],
		['GET', '/bo/', 'Default#backOffice', 'bo'],

	);
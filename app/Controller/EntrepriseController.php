<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\EntrepriseManager;
use \W\Manager\userManager;
use \W\Security\AuthentificationManager;

class EntrepriseController extends Controller
{

	public function index()
	{
		$this->show('entreprise/index');
	}

	public function loginUSE() {

		// affecter une variable à chaque valeur clé
		$email=trim(htmlentities($_POST['email']));
		$password=trim(htmlentities($_POST['password']));

		// initialisation d'un tableau d'erreurs
		$errors = [];
		// Instanciation de UserManager
		$entrepriseManager = new EntrepriseManager();
		

		$resultEntreprise = $entrepriseManager->getEntrepriseByUsernameOrEmail($email);

		if($resultEntreprise){
			//Instanciation d'un objet de type Authentification
			$authentificationManager= new AuthentificationManager();
			//
			if ($authentificationManager->isValidLoginInfo($email, $password)) {
				$authentificationManager->logUserIn($resultUser);
				// Redirection
				$this->redirectToRoute('entreprise');
			}
			else {
				$errors['login'] = "Wrong password";
			}

		}
		else {
			$errors['login'] = "Cette adresse e-mail n'existe pas";
		}
		//
		$this->show('login/index', ['errors' => $errors]);
	}
		public function logout()
	{
		//
		$authentificationManager= new AuthentificationManager();
		$authentificationManager->logUserOut($resultUser);

		// redirection

		$this->redirectToRoute('salarie');
		
	}

}
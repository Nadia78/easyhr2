<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\userManager;
use \W\Security\AuthentificationManager;

class LoginController extends Controller
{

	public function index()
	{
		$this->show('login/index');
	}

	public function loginUser() {

		// affecter une variable à chaque valeur clé
		$email=trim(htmlentities($_POST['email']));
		$password=trim(htmlentities($_POST['password']));

		// initialisation d'un tableau d'erreurs
		$errors = [];
		// Instanciation de UserManager
		$userManager = new UserManager();
		$userManager->setTable('users');

		$resultUser = $userManager->getUserByUsernameOrEmail($email);

		if($resultUser){
			//Instanciation d'un objet de type Authentification
			$authentificationManager= new AuthentificationManager();
			//
			if ($authentificationManager->isValidLoginInfo($email, $password)) {
				$authentificationManager->logUserIn($resultUser);
				// Redirection
				$this->redirectToRoute('privateHome');
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
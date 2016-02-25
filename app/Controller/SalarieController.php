<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\userManager;
use \W\Security\AuthentificationManager;

class SalarieController extends Controller
{

	public function index()
	{  	
		$user=$this->getUser();
		echo $user['id'];

		$dir    = __DIR__.'/../../dropbox/'. $user['id'];
		$files = scandir($dir);
		
		// print_r($files);
	
		

		$this->show('salarie/index', ['files'=>$files]);
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
				$this->redirectToRoute('salarie');
			}
			else {
				$errors['login'] = "Wrong password";
			}

		}
		else {
			$errors['login'] = "Cette adresse e-mail n'existe pas";
		}
		
		$this->show('home', ['errors' => $errors]);
	}
	
	public function logout(){
		//
		$authentificationManager= new AuthentificationManager();
		$authentificationManager->logUserOut($resultUser);

		// redirection

		$this->redirectToRoute('home');
		
	}
}
<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use W\Security\AuthentificationManager;
use \DateTime;

class AdminController extends Controller
{

	public function index()
	{
		$this->show('admin/index');
	}

	public function registerSalarie(){
			/*
			*/
			// affecter une variable à chaque valeur clé

				$gender=trim(htmlentities($_POST['gender']));
				$email=trim(htmlentities($_POST['email']));
				$password=trim(htmlentities($_POST['password']));
				$confirmPassword=trim(htmlentities($_POST['confirmPassword']));
				// recup role select
				$role=trim(htmlentities($_POST['role']));
				$firstname=trim(htmlentities($_POST['firstname']));
				$lastname=trim(htmlentities($_POST['lastname']));
				
				debug($_POST);

				// initialisation d'un tableau d'erreurs
				$errors = [];

				// Instanciation de UserManager
				$userManager = new UserManager();
				$userManager->setTable('users'); // bug du framework mettre le nom de la table 

				// Check de l'email

				if(empty($email)|| (filter_var($email, FILTER_VALIDATE_EMAIL))=== false) {
					$errors['email']= "Vérifiez votre adresse e-mail.";
				}
				elseif ($userManager->emailExists($email)) { //Check en bdd si email existe
					$errors['email']= "Cette adresse email existe déjà.";
				}

				// check password
				if($password != $confirmPassword) {
					$errors['password']= "Les mots de passe ne sont pas identique.";
				}
				elseif (strlen($password) <= 6) {
					$errors['password']= "Votre mot de passe doit faire plus de 6 caractères.";
				}

				// S'il n'y pas d'erreurs
				if(empty($errors)) {
					// Crypter lemot de passe
					$hashedPassword= password_hash($password, PASSWORD_DEFAULT);

					// Objet DateTime
					$date = new DateTime();
					

					// Enregistrement en bdd et renvoie un tableau
					$resultUser = $userManager->insert([
						'genre'=>$gender,
						'firstname'=>$firstname,
						'lastname'=>$lastname,
						'email'=> $email,
						'password' => $hashedPassword,
						// choix sur une liste 
						'role' => $role,
						'created_at' => $date->format('Y-m-d H:i:s'),
						'updated_at' => $date->format('Y-m-d H:i:s')

						]);
					// debug($resultUser);

					//Teste que le tableau est rempli 
					if($resultUser){
						// Authentifier l'utilisateur
						$authentificationManager = new authentificationManager();
						$authentificationManager->logUserIn($resultUser);

						// Redirection
						$this->redirectToRoute('salarie');
					}
				}
				else {
					$this->show('admin/index', ['errors' => $errors]);
				}		
	}
	public function registerEntreprise(){
			/*
			*/
			// affecter une variable à chaque valeur clé

				$gender=trim(htmlentities($_POST['gender']));
				$email=trim(htmlentities($_POST['email']));
				$password=trim(htmlentities($_POST['password']));
				$confirmPassword=trim(htmlentities($_POST['confirmPassword']));
				// recup role select
				$role=trim(htmlentities($_POST['role']));
				$firstname=trim(htmlentities($_POST['firstname']));
				$lastname=trim(htmlentities($_POST['lastname']));
				
				debug($_POST);

				// initialisation d'un tableau d'erreurs
				$errors = [];

				// Instanciation de UserManager
				$userManager = new UserManager();
				$userManager->setTable('users'); // bug du framework mettre le nom de la table 

				// Check de l'email

				if(empty($email)|| (filter_var($email, FILTER_VALIDATE_EMAIL))=== false) {
					$errors['email']= "Vérifiez votre adresse e-mail.";
				}
				elseif ($userManager->emailExists($email)) { //Check en bdd si email existe
					$errors['email']= "Cette adresse email existe déjà.";
				}

				// check password
				if($password != $confirmPassword) {
					$errors['password']= "Les mots de passe ne sont pas identique.";
				}
				elseif (strlen($password) <= 6) {
					$errors['password']= "Votre mot de passe doit faire plus de 6 caractères.";
				}

				// S'il n'y pas d'erreurs
				if(empty($errors)) {
					// Crypter lemot de passe
					$hashedPassword= password_hash($password, PASSWORD_DEFAULT);

					// Objet DateTime
					$date = new DateTime();
					

					// Enregistrement en bdd et renvoie un tableau
					$resultUser = $userManager->insert([
						'email'=> $email,
						'password' => $hashedPassword,
						// choix sur une liste 
						'role' => $role,
						'created_at' => $date->format('Y-m-d H:i:s'),
						'updated_at' => $date->format('Y-m-d H:i:s')

						]);
					// debug($resultUser);

					//Teste que le tableau est rempli 
					if($resultUser){
						// Authentifier l'utilisateur
						$authentificationManager = new authentificationManager();
						$authentificationManager->logUserIn($resultUser);

						// Redirection
						$this->redirectionToRoute('entreprise');
					}
				}
				else {
					$this->show('admin/index', ['errors' => $errors]);
				}		
	}
}

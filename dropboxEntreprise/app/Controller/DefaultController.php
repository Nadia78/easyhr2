<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}

	public function privateHome()
	{
		$user = $this->getUser();
		debug($user);	
	}
		public function backOffice()
	{
		// limite l'accès aux users ayant le role admin
		$this->allowTo('admin');
		// $this->allowTo(['admin', 'member']); ->pour autoriser plusieurs rôles

		echo 'Backoffice';	
	}

}
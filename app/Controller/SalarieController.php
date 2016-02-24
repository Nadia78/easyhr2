<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\userManager;
use \W\Security\AuthentificationManager;

class SalarieController extends Controller
{

	public function index()
	{
		$this->show('salarie/index');
	}

	
}
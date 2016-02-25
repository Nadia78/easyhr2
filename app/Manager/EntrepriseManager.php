<?php

namespace Manager;

use W\Manager\ConnectionManager;

class EntrepriseManager extends \W\Manager\Manager {

	public function emailExists($email){


		$dbh = ConnectionManager::getDbh();
		$sql = "SELECT email  FROM  entreprises WHERE email = :email LIMIT 1";
		$sth = $dbh->prepare($sql);
		$sth->bindValue(":email", $email);
		if ($sth->execute()){
			$foundUser = $sth->fetch();
			if ($foundUser){
				return true;
			}
		}

		return false;
		

	}
	
	public function getEntrepriseByUsernameOrEmail($usernameOrEmail){


		$dbh = ConnectionManager::getDbh();
		$sql = "SELECT * FROM entreprises WHERE email = :email LIMIT 1";
		$sth = $dbh->prepare($sql);
		
		$sth->bindValue(":email", $usernameOrEmail);
		if ($sth->execute()){
			$foundUser = $sth->fetch();
			if ($foundUser){
				return $foundUser;
			}
		}

		return false;
	}

	public function isValidLoginInfo($usernameOrEmail, $plainPassword)
	{

		

		
		$usernameOrEmail = strip_tags(trim($usernameOrEmail));
		$foundEntreprise = $this->getEntrepriseByUsernameOrEmail($usernameOrEmail);
		if (!$foundUser){
			return 0;
		}

		if (password_verify($plainPassword, $foundUser[$app->getConfig('security_password_property')])){
			return (int) $foundUser[$app->getConfig('security_id_property')];
		}

		return 0;
	}
}

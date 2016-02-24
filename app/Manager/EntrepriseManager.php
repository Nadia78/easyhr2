<?php

namespace Manager;


/**
 * Classe requise par l'AuthentificationManager, éventuellement à extender par la UserManager de l'appli
*/
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
		$sql = "SELECT * FROM entreprises WHERE name = :username OR email = :email LIMIT 1";
		$sth = $dbh->prepare($sql);
		$sth->bindValue(":username", $usernameOrEmail);
		$sth->bindValue(":email", $usernameOrEmail);
		if ($sth->execute()){
			$foundUser = $sth->fetch();
			if ($foundUser){
				return $foundUser;
			}
		}

		return false;
	}

}
<?php
class Connexion{
	public function connexionBDD(){
	try{
			 $nomServeur='mysql1004.mochahost.com';
			 $nomUtilisateur = 'nfinic_guichets ';
			 $pwdUtilisateur = 'guichets';
			 $nomBDD ='nfinic_gabup';			
				$con[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
				$bdd = new PDO("mysql:host=$nomServeur;dbname=$nomBDD", $nomUtilisateur, $pwdUtilisateur,$con);
				return $bdd;
		 	}catch(PDOException $err){
		 		echo'voici le probleme '. $err->getMessage();
		 	}
	}
}
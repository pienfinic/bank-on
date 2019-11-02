<?php

class AppBDD {

	private $conBDD;
	public function __construct($connexion) {
		$this -> conBDD = $connexion;
	}

	public function connectivite() {
		try {
			$req = $this -> conBDD -> prepare("SELECT * FROM banques  ");
			$req -> execute();
			$tableau = array();
			while ($donnees = $req -> fetch()) {
				$tableau[] = array("etat" => $donnees['status']);
			}
			echo json_encode($tableau);
		} catch(Exception $er) {
			echo "errer de recherche" . $er -> getMessage();
		}

	}

	public function changeStatus($id){
			try{
				$req = $this->conBDD -> prepare("UPDATE banques SET status = status*(-1) WHERE idBanque = :id ");
				$req->execute(array(
				'id'=>$id
				));
			}catch(exception $er){
				echo "probleme ".$er-> getMessage();
			}
		}

}

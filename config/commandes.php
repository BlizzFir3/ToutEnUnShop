<?php
	function ajouter($image, $nom, $prix, $description) {
		if (require("connexion.php")) {
			$req = $access->prepare("INSERT INTO produits (image, nom, prix, description) VALUES ($image, $nom, 
				$prix, $description)");
			$req->execute(array($image, $nom, $prix, $desc));
			$req->closeCursor();
		}
	}

	function afficher(){
		if (require("connexion.php")) {
			$req = $access->prepare("SELECT * FROM produits ORDER BY id DESC");
			$req->execute();
			$data = $req->fetchAll(PDO::FETCH_OBJ);
			$req->closeCursor();
			return $data;
		}
	}

	function supprimer($id){
		if (require("connexion.php")) {
			$req = $access->prepare("DELETE * FROM produits WHERE id=?");
			$req->execute(array($id));
		}
	}

?>
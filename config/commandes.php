<?php
	function ajouter($image, $nom, $prix, $description) {
		if (require("connexion.php")) {
			$req = $access->prepare("INSERT INTO produits (image, nom, prix, description) VALUES (:image, :nom, 
				:prix, :description)");
			$req->execute(array(":image" 		=> $image,
								":nom" 			=> $nom,
								":prix" 		=> $prix,
								":description" 	=> $description));
			$req->closeCursor();
		}
	}

	function afficher(){
		if (require("connexion.php")) {
			$req = $access->prepare("SELECT * FROM produits ORDER BY id DESC");
			$req->execute();
			$data = $req->fetchAll(PDO::FETCH_OBJ);
			return $data;
		}
		$req->closeCursor();
	}

	function supprimer($id){
		if (require("connexion.php")) {
			$req = $access->prepare("DELETE FROM produits WHERE id=?");
			$req->execute([$id]);
		}
	}

	/*function modifier($image, $nom, $prix, $description, $id) {
		if (require("connexion.php")) {
			$req = $access->prepare("INSERT INTO produits (image, nom, prix, description) VALUES (:image, :nom, 
				:prix, :description)");
			$req->execute(array(":image" 		=> $image,
								":nom" 			=> $nom,
								":prix" 		=> $prix,
								":description" 	=> $description));
			$req->closeCursor();
		}
	}*/

	function getAdmin($email, $mdp) {
		if (require("connexion.php")) {
			$req = $access->prepare("SELECT * FROM admin WHERE email = :email AND mdp = :mdp");
			$req->execute(array(":email" 	=> $email,
								":mdp" 		=> $mdp));


			if ($req->rowCount() == 1) {
				$data = $req->fetch();

				return $data;
			} else {
				return false;
			}
		}
		$req->closeCursor();
	}

	function getProduit($id) {
		if (require("connexion.php")) {
			$req = $access->prepare("SELECT * FROM produits WHERE id =?");
			$req->execute(array($id));
			

			if ($req->rowCount() == 1) {
				$data = $req->fetchAll(PDO::FETCH_OBJ);

				return $data;
			} else {
				return false;
			}
		}
		$req->closeCursor();
	}

	function modifierProduit($id, $image, $nom, $prix, $description){
		if (require("connexion.php")) {
			$req = $access->prepare("UPDATE produits  SET image = :image, nom = :nom, prix = :prix, description = :description WHERE id = :id");
			$req->execute(array(":image" 		=> $image,
								":nom" 			=> $nom,
								":prix" 		=> $prix,
								":description" 	=> $description,
								":id" 			=> $id));
			$req->closeCursor();
		}
	}
?>
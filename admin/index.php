<?php
	require("../config/commandes.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ajout de produit</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
<div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
		<form method="post">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Lien de l'image</label>
				<input type="text" class="form-control" name="image" required>
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Nom du produit</label>
				<input type="name" class="form-control" name="nom" required>
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Prix</label>
				<input type="number" step="0.01" class="form-control" name="prix" required>
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Description</label>
				<textarea class="form-control" name="description" required></textarea>
			</div>
			<button type="submit" name="valider" class="btn btn-primary">Ajouter le produit</button>
		</form>
	  </div>
	</div>
</div>
</body>
</html>

<?php

	if(isset($_POST['valider'])) {
		if(isset($_POST['image']) and isset($_POST['nom']) and isset($_POST['prix']) and isset($_POST['description'])) {
			if(!empty($_POST['image']) and !empty($_POST['nom']) and !empty($_POST['prix']) and !empty($_POST['description'])) {
				$image			= htmlspecialchars(strip_tags($_POST['image']));
				$nom 			= htmlspecialchars(strip_tags($_POST['nom']));
				$prix 			= htmlspecialchars(strip_tags($_POST['prix']));
				$description	= htmlspecialchars(strip_tags($_POST['description']));

				try {
					ajouter($image, $nom, $prix, $description);
				} catch (Exception $e) {
					echo 'ERROR: '. $e->getMessage();
				}
			}
		}
	}

?>
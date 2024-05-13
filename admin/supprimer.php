<?php
	require("../config/commandes.php");

	$mesProduits=afficher();
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
				<label for="exampleInputPassword1" class="form-label">Identifiant du produit</label>
				<input type="number" step="0.01" class="form-control" name="idProduit" required>
			</div>
			<button type="submit" name="valider" class="btn btn-primary">Supprimer le produit</button>
		</form>
	  </div>
	  <br></br>
	  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
		<?php foreach($mesProduits as $unProduit): ?>
				<div class="col">
				<div class="card shadow-sm">
					<title><?= $unProduit->nom ?></title>
					<img src="<?= $unProduit->image ?>" width="200" height="200"/>
					<div class="card-body">
					<p class="bold"><?= $unProduit->nom ?></p>
					<p class="center">id = <?= $unProduit->id?></p>
					</div>
				</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
</body>
</html>

<?php

	if(isset($_POST['valider'])) {
		if(isset($_POST['idProduit'])) {
			if(!empty($_POST['idProduit']) and is_numeric($_POST['idProduit'])) {
				$idProduit = htmlspecialchars(strip_tags($_POST['idProduit']));

				try {
					supprimer($idProduit);
				} catch (Exception $e) {
					echo 'ERROR: '. $e->getMessage();
				}
			}
		}
	}

?>
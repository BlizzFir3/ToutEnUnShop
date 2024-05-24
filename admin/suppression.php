<?php
	ob_start();
	session_start();
	if (!isset($_SESSION["zWupjTBoui6o91iNt"]) || empty($_SESSION["zWupjTBoui6o91iNt"])){
		header("Location: ../login.php");
	}

	if(!isset($_GET['id']) || empty($_GET['id']) || !is_numeric($_GET['id'])){
		header("Location: supprimer.php");
	}
	require("../config/commandes.php");

	$idProduit = htmlspecialchars(strip_tags($_GET['id']));

	try {
		supprimer($idProduit);
		header("Location: supprimer.php");
	} catch (Exception $e) {
		echo 'ERROR: '. $e->getMessage();
	}

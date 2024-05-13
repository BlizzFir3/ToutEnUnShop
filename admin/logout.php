<?php
	session_start();
	if (isset($_SESSION["zWupjTBoui6o91iNt"])) {
		$_SESSION["zWupjTBoui6o91iNt"] = array();
		session_destroy();
		header("Location: ../index.php");
	} else {
		$_SESSION["zWupjTBoui6o91iNt"] = array();
		session_destroy();
		header("Location: ../login.php");
	}
?>
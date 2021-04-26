<?php 
	// Sebelum
	// setcookie("username",null,time()-60);
	// setcookie("nama",null,time()-60);

	// Sesudah
	session_start();
	$_SESSION["username"] = "";
	unset($_SESSION["username"]);
	session_unset();
	session_destroy();

	header("Location: index.php");
?>
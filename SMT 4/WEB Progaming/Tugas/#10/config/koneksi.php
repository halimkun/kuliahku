<?php 

	$dsn = "mysql:host=localhost;dbname=latihan_db";
	$options = [
		PDO::ATTR_PERSISTENT => true,
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	];

	try {
		$dbh = new PDO($dsn, 'root', '', $options);
	} catch (PDOException $e) {
		// jika error program akan berhenti dan menampilkan pesan error
		die($e->getMessage());
	}

 ?>
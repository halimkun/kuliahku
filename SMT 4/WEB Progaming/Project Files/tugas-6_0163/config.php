<?php 
	$dbname = "penjualan_0163";
	$tablename = "pesan";
	
	// $conn = mysqli_connect(.............);
	$conn = new mysqli("localhost", "root", "", $dbname);
	
	// if(!$conn) {
	if ($conn->connect_error) {
		echo "Koneksi Error";	
	}
 ?>
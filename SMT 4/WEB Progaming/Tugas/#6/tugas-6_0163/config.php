<?php 
	$dbname = "penjualan_0163";
	$tabelPesan = "pesan";
	
	$conn = mysqli_connect("localhost", "root", "", $dbname);
	
	if (!$conn) {
		echo "Koneksi Error";	
	}
?>


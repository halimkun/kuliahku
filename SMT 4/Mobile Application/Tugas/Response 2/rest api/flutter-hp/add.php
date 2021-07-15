<?php

include 'conn.php';

// $idhp     = $_POST['idhp'];
$tipehp   = $_POST['tipehp'];
$layathp  = $_POST['layarhp'];
$prochp   = $_POST['prochp'];
$meminthp = $_POST['meminthp'];
$ramhp    = $_POST['ramhp'];
$bathp    = $_POST['bathp'];
$hargahp  = $_POST['hargahp'];

$conn->query(
	"INSERT INTO produk VALUES (
		null,
		'".$tipehp."',
		'".$layathp."',
		'".$prochp."',
		'".$meminthp."',
		'".$ramhp."',
		'".$bathp."',
		'".$hargahp."'
	)"
)

?>
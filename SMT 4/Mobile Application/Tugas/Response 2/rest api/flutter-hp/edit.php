<?php

include 'conn.php';

$idhp     = $_POST['idhp'];
$tipehp   = $_POST['tipehp'];
$layarhp  = $_POST['layarhp'];
$prochp   = $_POST['prochp'];
$meminthp = $_POST['meminthp'];
$ramhp    = $_POST['ramhp'];
$bathp    = $_POST['bathp'];
$hargahp  = $_POST['hargahp'];

$conn->query("UPDATE produk SET
		tipehp='$tipehp',
		layarhp=" .floatval($layarhp).",
		prochp='$prochp',
		meminthp=$meminthp,
		ramhp=$ramhp,
		bathp=$bathp,
		hargahp=$hargahp

		WHERE idhp=" .$idhp
);

?>
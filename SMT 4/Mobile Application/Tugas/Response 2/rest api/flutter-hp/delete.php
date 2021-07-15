<?php
include 'conn.php';

$idhp = $_POST['idhp'];

$conn->query("DELETE FROM produk WHERE idhp=".$idhp);

?>
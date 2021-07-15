<?php

$conn = new mysqli("localhost", "root", "root", "flutter_hp");

if ($conn->connect_error) {
	die("koneksi database error");
}
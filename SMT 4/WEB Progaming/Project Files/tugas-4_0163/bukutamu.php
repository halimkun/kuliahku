<?php
	if (!empty($nama_file)) {
		$nama_file = $nama_file;
	} else {
		$nama_file = "";
	}

	if (!empty($nama)) {
		$nama = $nama;
	} else {
		$nama = "";
	}

	if (!empty($email)) {
		$email = $email;
	} else {
		$email = "";
	}

	if (!empty($komentar)) {
		$komentar = $komentar;
	} else {
		$komentar = "";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./style.css">
	<title>0163- Buku Tamu</title>
</head>
<body>
	<div class="container">
		<center><h1>Buku Tamu</h1></center>
		<table>
			<img src="./uploaded/<?=$nama_file?>" alt="<?=$nama_file?>">
			<tr>
				<td>Nama </td> <td>:</td> <td><?= $nama ?></td>
			</tr>
			<tr>
				<td>Email </td> <td>:</td> <td><?= $email ?></td>
			</tr>
			<tr>
				<td>Komentar </td> <td>:</td> <td><?= $komentar ?></td>
			</tr>
		</table>
	</div>
</body>
</html>
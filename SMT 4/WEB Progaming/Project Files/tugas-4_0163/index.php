<?php 
	if (isset($_POST['submit'])) {
		$nama = htmlentities(strip_tags(trim($_POST['nama'])));
		$email = htmlentities(strip_tags(trim($_POST['email'])));
		$komentar = htmlentities(strip_tags(trim($_POST['komentar'])));

		$pesan_error="";

		if (empty($nama)) {
			$pesan_error .= "Nama belum diisi <br>;";
		}
		if (empty($email)) {
			$pesan_error .= "Email belum diisi <br>;";
		} elseif (!preg_match("/.+@.+\..+/",$email) ) {
			$pesan_error .= "Format email tidak sesuai <br>;";
		}

		$upload_error = $_FILES['file_upload']['error'];
		if ($upload_error !== 0) {
			$arr_upload_error = [
				1 => 'File yang diupload melebihi upload_max_filesize di php.ini',
				2 => 'File yang diunggah melebihi MAX_FILE_SIZE yang ditentukan dalam HTML',
				3 => 'File yang diunggah hanya diunggah sebagian',
				4 => 'Tidak ada file yang diupload',
				6 => 'Kehilangan folder sementara',
				7 => 'Gagal menulis file ke disk.',
				8 => 'Ekstensi PHP menghentikan pengunggahan file.',
			];
			$pesan_error .= $arr_upload_error[$upload_error];
		} else {
			$nama_folder = "uploaded";
			$nama_file = $_FILES['file_upload']['name'];
			$path_file = "$nama_folder/$nama_file";

			if (file_exists($path_file)) {
				$pesan_error .= "File dengan nama $nama_file sudah ada di server <br>";
			} 

			$ex_name = $_FILES['file_upload']['name'];
			$ex = pathinfo($ex_name, PATHINFO_EXTENSION);
			if ($ex !== "jpg") {
				$pesan_error .= "File tidak di perbolehkan, { hanya .jpg } <br>";
			}

			$ukuran_file = $_FILES['file_upload']['size'];
			if ($ukuran_file > 524288) {
				$pesan_error .= "Ukuran file yang anda pilih melebihi 500 KB <br>";
			}

			$check = getimagesize($_FILES['file_upload']['tmp_name']);
			if ($check === false) {
				$pesan_error .= "Mohon upload file gambar (gif, png, atau jpg)";
			}
		}

		if ($pesan_error === "") {
			$nama_folder="uploaded";
			$tmp = $_FILES["file_upload"]["tmp_name"];
			$nama_file = $_FILES["file_upload"]["name"];
			move_uploaded_file($tmp, "$nama_folder/$nama_file");
			include("bukutamu.php");
			die();
		}
	} else {
		$pesan_error = "";
		$nama = "";
		$email = "";
		$komentar="";
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($_FILES) && empty($_POST)) {
		$postMax = ini_get('post_max_size');
		$pesan_error = "Ukuran file melewati batas maksimal ({$postMax}B)";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./style.css">
	<title>0163 - Form Upload</title>
</head>
<body>
	<div class="container">
		<center><h1>Buku Tamu</h1></center>
		<form action="index.php" method="post" enctype="multipart/form-data">
			<fieldset>
				<legend>Buku Tamu</legend>
				<p>
					<label for="nama">Nama : </label>
					<input type="text" name="nama" id="nama" value="<?= $nama ?>" >
				</p>
				<p>
					<label for="email">Email : </label>
					<input type="email" name="email" id="email" value="<?= $email ?>" >
				</p>
				<p>
					<label for="komentar">Komentar : </label>
					<textarea rows="5" name="komentar" id="komentar"><?= $komentar ?></textarea>
				</p>
				<p>
					<label for="file_upload">Display Picture : </label>
					<input type="hidden" name="MAX_FILE_SIZE" value="524288">
					<input type="file" name="file_upload" id="file_upload" accept=".jpg">
				</p>
				<?php if($pesan_error !== "") : ?>
					<?= "<div class='error' style='color: tomato;'>$pesan_error</div>" ?>
				<?php endif; ?>
				<br>
				<p>
					<button type="submit" name="submit"> Posing Komentar </button>
				</p>
			</fieldset>
		</form>
	</div>
</body>
</html>
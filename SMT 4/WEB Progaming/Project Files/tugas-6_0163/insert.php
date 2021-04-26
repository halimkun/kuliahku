<?php 
	include 'config.php';

	if (isset($_POST['kirim'])) {
		$nama = $_POST['nama'];
		$tgl_masuk = $_POST['tgl_masuk'];
		$email = $_POST["email"];
		$subject = $_POST["subject"];
		$pesan = $_POST["pesan"];

		$sql = "INSERT INTO pesan VALUES(NULL, '$nama', '$tgl_masuk', '$email', '$subject', '$pesan')";
		
		// mysqli_query($conn, $sql);

		if ($conn->query($sql) === TRUE) {
			header("Location: index.php");
		} else {
			echo "INPUT GAGAL " . mysqli_error($conn);
		}

	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>PENJUALAN INSERT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta http-equiv="X-UA-Compatible" content="IE=7">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="p-5 mb-4 bg-light">
      <div class="container-fluid py-3 text-center">
        <h1 class="display-5 fw-bold">Input Data</h1>
        <p class="fs-5">Insert Data kedalam database.</p>
      </div>
    </div>
	<div class="container">
		<div class="mt-2">
			<form action="" method="post" autocomplete="off">
				<label for="nama">Nama : </label>
				<input class="form-control mb-2" required placeholder="Nama anda" type="text" name="nama" id="nama">
				<label for="tgl_masuk">Tanggal masuk : </label>
				<input class="form-control mb-2" required type="date" name="tgl_masuk" id="tgl_masuk">
				<label for="email">Email : </label>
				<input class="form-control mb-2" required placeholder="example@example.com" type="email" name="email" id="email">
				<label for="subject">Subject : </label>
				<input class="form-control mb-2" required placeholder="Subject here . . ." type="text" name="subject" id="subject">
				<label for="pesan">Pesan : </label>
				<textarea class="form-control mb-2" required placeholder="" type="text" name="pesan" id="pesan"></textarea>

				<div class="float-end mt-2">
					<input class="btn btn-primary" type="submit" name="kirim" value="Kirim Data">
					<a href="./index.php" class="btn btn-dark">Daftar Pesan</a>
				</div>
			</form>
		</div>
	</div>
	<div style="margin-bottom:150px;"></div>
	<div class="clear"></div>
</body>
</html>
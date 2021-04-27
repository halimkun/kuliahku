<?php 
	include 'config.php';

	$sql = "SELECT * FROM $tabelPesan ORDER BY tanggal_masuk DESC";
	$hasil = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>PENJUALAN _ 0163</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta http-equiv="X-UA-Compatible" content="IE=7">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="p-5 mb-4 bg-light rounded-3 mt-3">
		<div class="container-fluid py-3 text-center">
			<h1 class="display-5 fw-bold">Daftar Pesan</h1>
			<p class="fs-5">Daftar pesan yang diambil dari database.</p>
		</div>
		</div>
		<center>
			<table class="mt-3 table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th>kode</th>
						<th style="width: 15%;">nama</th>
						<th style="width: 10%;">tgl masuk</th>
						<th>email</th>
						<th>subject</th>
						<th style="width: 35%;">pesan</th>
					</tr>
				</thead>
				<tbody>
				<?php if($hasil->num_rows > 0) : ?>
					<?php foreach ($hasil as $key => $val) : ?>
						<tr>
							<td><?= $val['kode_pesan'] ?></td>
							<td><?= $val['nama'] ?></td>
							<td><?= $val['tanggal_masuk'] ?></td>
							<td><?= $val['email'] ?></td>
							<td><?= $val['subject'] ?></td>
							<td><?= $val['pesan'] ?></td>
						</tr>
					<?php endforeach; ?>
				<?php else : ?>
					<tr>
						<td colspan="6" class="text-center" >Data Kosong</td>
					</tr>
				<?php endif; ?>
				</tbody>
			</table>
		</center>
		<a href="./insert.php" class="btn btn-dark float-end">Tambah Data</a>
	</div>
	<div style="margin-bottom:150px;"></div>
	<div class="clear"></div>
</body>
</html>

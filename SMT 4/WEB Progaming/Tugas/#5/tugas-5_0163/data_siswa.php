<?php 
	// Sebelum
	// if (!isset($_COOKIE["username"])) {
	// 	header("Location: index.php");
	// }

	// Sesudah
	session_start();
	if (!isset($_SESSION["username"])) {
		header("Location: index.php");
	}
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<title>0163 _ tugas 5</title>
 </head>
 <body>
 		<div class="container">
 			<nav class="menu">
 				<ul>
 					<li><a href="data_siswa.php">Data Siswa</a></li>
 					<li><a href="nilai_siswa.php">Nilai Siswa</a></li>
 					<li><a href="alamat_sekolah.php">Alamat Sekolah</a></li>
 					<li><a href="logout.php">Logout</a></li>
 				</ul>
 			</nav>
 			<div style="margin-top:50px; margin-bottom:50px;">
				<h1>Selamat Datang, <br><?= $_SESSION["nama"]?></h1>
			</div>
			<h3>Data Siswa</h3>
 			<center>
			 <table>
 				<thead>
					<tr>
						<th>NO.</th>
						<th>Nama</th>
						<th>Umur</th>
						<th>Tempat Lahir</th>
					</tr>
				 </thead>
 				<tbody>
				 <tr>
 					<td>01</td>
 					<td>M Faisal Halim</td>
 					<td>20</td>
 					<td>kab. Pekalonga</td>
 				</tr>
 				<tr>
 					<td>02</td>
 					<td>Nizar Ardansyah</td>
 					<td>19</td>
 					<td>Kab. Pekalongan</td>
 				</tr>
 				<tr>
 					<td>03</td>
 					<td>M Farid Permadi</td>
 					<td>20</td>
 					<td>Pekalongan</td>
 				</tr>
 				<tr>
 					<td>04</td>
 					<td>Surya Agung</td>
 					<td>20</td>
 					<td>Pekalongan</td>
 				</tr>
				 <tr>
 					<td>05</td>
 					<td>Muh Fatikh Yulian</td>
 					<td>21</td>
 					<td>Pekalongan</td>
 				</tr>
				 </tbody>
 			</table>
			 </center>
 		</div>


 </body>
 </html>
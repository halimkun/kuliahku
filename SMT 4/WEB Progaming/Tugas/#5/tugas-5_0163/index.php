<?php 
if (isset($_POST["submit"])) {
	$username = htmlentities(strip_tags(trim($_POST["username"])));
	$password = htmlentities(strip_tags(trim($_POST["password"])));
	$pesan_error="";

	if (empty($username)) {
		$pesan_error .= "username belum diisi<br>";
	}
	if (empty($password)) {
		$pesan_error .= "password belum diisi<br>";
	}

	if ($username != "admin" OR $password != "rahasia") {
		$pesan_error .= "Username dan / atau Password tidak sesuai";
	}

	if ($pesan_error === "") {

		// Sebelum
		// setcookie("username","admin");
		// setcookie("nama","Faisal Halim");

		// Sesudah
		session_start();
		$_SESSION["username"]="admin";
		$_SESSION["nama"]="Faisal Halim";
		
		header("Location: data_siswa.php");
	}
}

else {
	$pesan_error = "";
	$username = "";
	$password = "";
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
 		<h1>Selamat Datang</h1>
 		<h3 class="sub-head">Website Latihan</h3>
 		<?php 
 		if ($pesan_error !== "") {
 			echo "<div class=\"error\">$pesan_error</div>";
 		}
 		 ?>
 		 <form action="index.php" method="post">
 		 	<fieldset>
 		 		<legend> Login</legend>
 		 		<p>
 		 			<label for="username">Username</label><br>
 		 			<input type="text" name="username" class="input_username" id="username" value="<?= $username?>">

 		 		</p>
 		 		<p>
 		 			<label for="password" class="pass-label">Password</label><br>
 		 			<input type="password" name="password" class="input_pass" id="password" value="<?= $password?>">
 		 		</p>
 		 		<p>
 		 			<input type="submit" name="submit" class="btn-submit" value="Log in">
 		 		</p>
 		 	</fieldset>
 		 </form>
 	</div>	
 </body>
 </html>
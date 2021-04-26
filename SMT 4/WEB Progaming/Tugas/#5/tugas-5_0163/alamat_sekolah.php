<?php 
	session_start();
	if (!isset($_SESSION["username"])) {
		header("Location: index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>0163 _ tugas 5</title>
</head>
<body>
    <div class="container">
        <div style="margin-top:50px; margin-bottom:50px;">
            <h1>Selamat Datang, <br><?= $_SESSION["nama"]?></h1>
        </div>
        <p>Selamat datang di 
            <br> <span>STMIK Widya Pratama Pekalongan</span>
            <br> <small>Jl. Patriot No. 25 Pekalongan</small>
        </p>
    </div>
</body>
</html>
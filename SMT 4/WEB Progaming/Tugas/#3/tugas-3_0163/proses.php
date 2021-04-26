<?php
    if (!isset($_POST['kirim'])) {
        header("Location: index.php");
    }

    $nama = trim($_POST['nama']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $pesan = trim($_POST['pesan']);

    $query_nama = "nama=" . urlencode($nama);
    $query_email = "email=" . urlencode($email);
    $query_subject = "subject=" . urlencode($subject);
    $query_pesan = "pesan=" . urlencode($pesan);
    $isi_form = "&$query_nama&$query_email&$query_subject&$query_pesan";

    if (empty($nama)) {
        $kesalahan = urlencode("Nama Harus Diisi !");
        header("Location: index.php?kesalahan={$kesalahan}{$isi_form}");
        die();
    }
    if (empty($email)) {
        $kesalahan = urlencode("Email Harus Diisi !");
        header("Location: index.php?kesalahan={$kesalahan}{$isi_form}");
        die();
    }
    if (empty($subject)) {
        $kesalahan = urlencode("Subjek Harus Diisi !");
        header("Location: index.php?kesalahan={$kesalahan}{$isi_form}");
        die();
    }
    if (empty($pesan)) {
        $kesalahan = urlencode("Pesan Harus Diisi !");
        header("Location: index.php?kesalahan={$kesalahan}{$isi_form}");
        die();
    }

    $isi_form = $_POST;
    echo gettype($isi_form) . "<br>";
    echo $isi_form['namaku'] . "<br>" . $isi_form['nimku'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Proses - 0163 _ Tugas 3</title>

    <!-- Compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="mt-5">
            <ul>
                <li>Nama : <?= $nama ?></li>
                <li>Email : <?= $email ?></li>
                <li>Subjek : <?= $subject ?></li>
                <li>Pesan : <?= $pesan ?></li>
            </ul>
            <hr>
            <ul>
                <li>Nama : <?= $_POST['namaku'] ?></li>
                <li>NIM : <?= $_POST['nimku'] ?></li>
            </ul>
        </div>
    </div>
</body>
</html>
<?php

    // =========== DATA MAHASISWA ============== //

    $namaku = "MUHAMAD FAISAL HALIM";
    $nimku = "19.240.0163";

    // ========== PENGKOINDISIAN FORM ========== //

    if (isset($_GET['kesalahan'])) {
        $kesalahan = $_GET["kesalahan"];
    } else {
        $kesalahan = "";
    }

    // ======================================== //

    if (isset($_GET['nama'])) {
        $nilai_nama = $_GET["nama"];
    } else {
        $nilai_nama = "";
    }
    if (isset($_GET['email'])) {
        $nilai_email = $_GET["email"];
    } else {
        $nilai_email = "";
    }
    if (isset($_GET['subject'])) {
        $nilai_subject = $_GET["subject"];
    } else {
        $nilai_subject = "";
    }
    if (isset($_GET['pesan'])) {
        $nilai_pesan = $_GET["pesan"];
    } else {
        $nilai_pesan = "";
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation - 0163 _ Tugas 3</title>

    <!-- Compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container mt-5">
        <h2>Contact</h2>
        <?php if(isset($_GET['kesalahan'])) : ?>
            <div class="alert alert-danger"><?= $kesalahan ?></div>
        <?php endif; ?>
        <div class="row mt-5">
            <form class="col s12" action="proses.php" method="post">

                <input type="hidden" value="<?= $namaku ?>" name="namaku">
                <input type="hidden" value="<?= $nimku ?>" name="nimku">

                <div class="row">
                    <div class="mb-3">
                        <label class="form-label" for="nama">Nama</label>
                        <input id="nama" name="nama" type="text" class="form-control" value="<?= $nilai_nama ?>" >
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input id="email" name="email" type="email" class="form-control" value="<?= $nilai_email ?>" >
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label class="form-label" for="subject">Subject</label>
                        <input id="subject" name="subject" type="text" class="form-control" value="<?= $nilai_subject ?>" >
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label class="form-label" for="pesan">Pesan</label>
                        <textarea id="pesan" rows="3" name="pesan" class="form-control"><?= $nilai_pesan ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <button type="submit" name="kirim" class="btn btn-info"> Kirim Pesan</button>
                        <button type="reset" name="reset" class="btn btn-warning"> Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
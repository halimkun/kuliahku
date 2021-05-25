<?php
    include 'config.php';

    if (isset($_GET['id'])) {
        $nim = $_GET['id'];
        $data = mysqli_fetch_assoc($conn->query("SELECT * FROM mahasiswa WHERE nim = '$nim';"));
        $data = json_decode(json_encode($data));
    } else {
        header("Location: index.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EDIT DATA MAHASISWA</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css"> -->
</head>
    <body>
        <div class="container mb-5">
            <div class="mb-3"></div>
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5 text-center">
                    <h1 class="display-5 fw-bold">Data Mahasiswa</h1>
                    <p class="fs-5">Edit Data Mahasiswa <strong class="text-primary">STMIK Widya Pratama Pekalongan</strong></p>
                </div>
            </div>

            <nav aria-label="breadcrumb" class="bg-light rounded-3 text-white">
                <ol class="breadcrumb p-2">
                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="./index.php">Mahasiswa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>

            <form class="row g-3" action="./aksi.php" method="post">
                <div class="col-md-3">
                    <label for="validationDefault01" class="form-label">NIM</label>
                    <input type="text" class="form-control" id="validationDefault01" readonly required value="<?=$data->nim?>" name="nim">
                </div>
                <div class="col-md-6">
                    <label for="validationDefault02" class="form-label">NAMA</label>
                    <input type="text" class="form-control" id="validationDefault02" required value="<?=$data->nama?>" name="nama">
                </div>
                <div class="col-md-3">
                    <label for="tglLahir" class="form-label">TGL LAHIR</label>
                    <input type="date" class="form-control" id="tglLahir" required value="<?=$data->tgl_lahir?>" name="tgl_lahir">
                </div>
                <div class="col-md-3">
                    <label for="validationDefault03" class="form-label">TEMPAT LAHIR</label>
                    <input type="text" class="form-control" id="validationDefault03" required value="<?=$data->tempat_lahir?>" name="tmpt_lahir">
                </div>
                <div class="col-md-4">
                    <label for="validationDefault04" class="form-label">FAKULTAS</label>
                    <input type="text" class="form-control" id="validationDefault04" required value="<?=$data->fakultas?>" name="fakultas">
                </div>
                <div class="col-md-4">
                    <label for="validationDefault05" class="form-label">JURUSAN / PROGDI</label>
                    <input type="text" class="form-control" id="validationDefault05" required value="<?=$data->jurusan?>" name="jurusan">
                </div>
                <div class="col-md-1">
                    <label for="validationDefault06" class="form-label">IPK</label>
                    <input type="number" maxlength="4.0" min="0.0" step="0.01" class="form-control" id="validationDefault06" required value="<?=$data->ipk?>" name="ipk">
                </div>
                <div class="col-12">
                    <input type="submit" class="btn btn-primary" value="Simpan Data" name="ubah-data">
                </div>
            </form>
        </div>

        <footer class="footer mt-auto py-3 bg-light pt-5 mt-5">
            <div class="container">
                <span class="text-muted">&copy; Muhamad Faisal Halim - 19.240.0163</span>
            </div>
        </footer>

        <!-- jQuery 3 -->
        <script src="assets/js/jquery.min.js"></script>

        <script>
            tglLahir.max = new Date().toISOString().split("T")[0];
            tglLahir.min = '1980-01-01';
        </script>

    </body>
</html>
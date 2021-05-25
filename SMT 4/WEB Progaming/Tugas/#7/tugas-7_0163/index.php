<?php
    include "config.php";
    $datas = $conn->query("SELECT * FROM mahasiswa ORDER BY nim DESC");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DAFTAR MAHASISWA</title>
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
                <p class="fs-5">Daftar Mahasiswa <strong class="text-primary">STMIK Widya Pratama Pekalongan</strong></p>
            </div>
        </div>

        <nav aria-label="breadcrumb" class="bg-light rounded-3 text-white">
            <ol class="breadcrumb p-2">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="./index.php">Mahasiswa</a></li>
                <li class="breadcrumb-item active" aria-current="page">Index</li>
            </ol>
        </nav>

        <div class="box">
            <div class="row">
                <div class="col">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="cari_mahasiswa" placeholder="Search . . .">
                        <button class="btn btn-dark" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <div class="col">
                    <a href="./tambah.php" class="btn btn-primary"><i class="fa fa-plus"></i></a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover" id="tabel_mahasiswa">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">NIM</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">TEMPAT LAHIR</th>
                            <th scope="col">TGL LAHIR</th>
                            <th scope="col">FAKULTAS</th>
                            <th scope="col">JURUSAN</th>
                            <th scope="col">IPK</th>
                            <th scope="col"><div class="fa fa-cog"></div></th>
                        </tr>
                    </thead>
                    <tbod>
                        <?php foreach ($datas as $data) : ?>
                            <tr>
                                <td class="text-center"><?= $data['nim'] ?></td>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['tempat_lahir'] ?></td>
                                <td><?= $data['tgl_lahir'] ?></td>
                                <td><?= $data['fakultas'] ?></td>
                                <td><?= $data['jurusan'] ?></td>
                                <td><?= $data['ipk'] ?></td>
                                <td class="text-center">
                                    <a href="./edit.php?id=<?= $data['nim']?>"><i class="fa fa-pen"></i></a> |
                                    <a onclick="javascript: return confirm('Yakin ingin menghapus data dengan \nNama : <?=$data['nama']?> \nNIM : <?=$data['nim']?>')" href="./aksi.php?hapus=<?= $data['nim']?>"><i class="fa fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbod>
                </table>
            </div>
        </div>

    </div>

    <footer class="footer mt-auto py-3 bg-light pt-5 mt-5">
        <div class="container">
            <span class="text-muted">&copy; Muhamad Faisal Halim - 19.240.0163</span>
        </div>
    </footer>

    <!-- jQuery 3 -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Fungsi Cari data -->
    <script>
        $(document).ready(function(){
            $("#cari_mahasiswa").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#tabel_mahasiswa tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

</body>
</html>
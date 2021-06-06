<?php include "./Pesan.php";
    $dataset = new Pesan(
        "19.240.0163", 
        "Faisal Halim", 
        "Pekalongan",
        "04 Juni 2001",
        "Informatika", 
        "Mobile Applications", 
        "..." 
    );
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">

    <style>
        body {
            margin-bottom: 100px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <table class="table table-responsive table-stripped table-hover table-bordered">
            <tr class="text-center">
                <th>NIM</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tgl Lahir</th>
                <th>Fakultas</th>
                <th>Jurusan</th>
                <th>IPK</th>
            </tr>
            <tr>
                <td><?= $dataset->getNim() ?></td>
                <td><?= $dataset->getNama() ?></td>
                <td><?= $dataset->getTmptLahir() ?></td>
                <td><?= $dataset->getTglLahir() ?></td>
                <td><?= $dataset->getFakultas() ?></td>
                <td><?= $dataset->getJurusan() ?></td>
                <td><?= $dataset->getIpk() ?></td>
            </tr>
        </table>
    </div>

</body>
</html>

<?php

    include "config.php";

    if (isset($_POST['tambah-data'])){ // input data
        $nim        = mysqli_real_escape_string($conn, $_POST['nim']);
        $nama       = mysqli_real_escape_string($conn, $_POST['nama']);
        $tgl_lahir  = mysqli_real_escape_string($conn, $_POST['tgl_lahir']);
        $tmpt_lahir = mysqli_real_escape_string($conn, $_POST['tmpt_lahir']);
        $fakultas   = mysqli_real_escape_string($conn, $_POST['fakultas']);
        $jurusan    = mysqli_real_escape_string($conn, $_POST['jurusan']);
        $ipk        = mysqli_real_escape_string($conn, $_POST['ipk']);

        $sql = "INSERT INTO mahasiswa VALUES ('$nim', '$nama', '$tmpt_lahir', '$tgl_lahir', '$fakultas', '$jurusan', '$ipk');";
        $conn->query($sql);

        if ($conn->affected_rows > 0) {
            echo '
                <script>
                    alert("Input Data Berhasil.!");
                    window.location.href="./index.php";
                </script>
            ';
        } else {
            echo "GAGAL Menambahkan Data ! <br>";
            echo $conn->error;
        }

        $conn->close();

    } elseif (isset($_POST['ubah-data'])){ // merubah data
        $nim        = mysqli_real_escape_string($conn, $_POST['nim']);
        $nama       = mysqli_real_escape_string($conn, $_POST['nama']);
        $tgl_lahir  = mysqli_real_escape_string($conn, $_POST['tgl_lahir']);
        $tmpt_lahir = mysqli_real_escape_string($conn, $_POST['tmpt_lahir']);
        $fakultas   = mysqli_real_escape_string($conn, $_POST['fakultas']);
        $jurusan    = mysqli_real_escape_string($conn, $_POST['jurusan']);
        $ipk        = mysqli_real_escape_string($conn, $_POST['ipk']);

        $sql = "UPDATE mahasiswa SET nama='{$nama}', tempat_lahir='{$tmpt_lahir}', tgl_lahir='{$tgl_lahir}', 
                     fakultas='{$fakultas}', jurusan='{$jurusan}', ipk='{$ipk}' WHERE nim='{$nim}';";
        $conn->query($sql);

        if ($conn->affected_rows > 0) {
            echo '
                <script>
                    alert("Berhasil Merubah Data.!");
                    window.location.href="./index.php";
                </script>
            ';
        } else {
            echo "Gagal Merubah Data. ! ! ! <br>";
            echo $conn->error;
        }
        $conn->close();
    } elseif (isset($_GET['hapus'])) { // hapus data
        $conn->query("DELETE FROM mahasiswa WHERE nim='{$_GET['hapus']}'");

        if ($conn->affected_rows > 0) {
            echo '
                <script>
                    alert("Berhasil Menghapus Data.!");
                    window.location.href="./index.php";
                </script>
            ';
        } else {
            echo "Gagal Menghapus Data. ! ! ! <br>";
            echo "ID Yang Anda Masukan Salah ! ! !";
            echo $conn->error;
        }
        $conn->close();
    } else { // jika statement diatas tidak terpenuhi, (file ini tidak bisa diakses secara langsung)
        header("Location: index.php");
    }
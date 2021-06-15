<?php require_once './../config/koneksi.php';

    // mencegah file diakses secara langsung
    if (empty($_POST)) {
        header('Location: ./../admin/index.php?page=barang');
    }

    // mempersiapkan query
    $stmt = $dbh->prepare("UPDATE barang SET 
                            nama_bgr= :nama, stok_bgr= :stok, harga_bgr= :harga, gambar_bgr= :gambar
                            WHERE kode_bgr= :kode");
    
    // binding value untuk menghindari SQLInjection
    $stmt->bindValue('nama', $_POST['nama_input']);
    $stmt->bindValue('stok', $_POST['stok_input']);
    $stmt->bindValue('harga', $_POST['harga_input']);
    $stmt->bindValue('kode', $_POST['kode_input']);
    
    // jika user tidak mengupload gambar baru
    if ($_FILES['gambar_input']['error'] == 4) {
        // gunakan gambar lama
        $stmt->bindValue('gambar', $_POST['gambar_default'], PDO::PARAM_STR);
    } else { // jika user mengupload gambar baru
        // persiapkan dan upload file
        $ekstensi = explode(".", $_FILES['gambar_input']['name']);
        $gambar = "brg-".round(microtime(true)).".".end($ekstensi);
        $sumber = $_FILES['gambar_input']['tmp_name'];
        $upload = move_uploaded_file($sumber, "../assets/img/barang/".$gambar);

        // bindingkan ke gambar
        $stmt->bindValue('gambar', $gambar, PDO::PARAM_STR);
    }

    // semua siap di jalankan untuk disimpan
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) {
        // jika berhasil disimpan tampilkan konfirmasi dan 
        // alihkan halaman
        echo "<script>alert('Data berhasil diedit')</script>";
        echo "<script>window.location.replace('./../admin/index.php?page=barang');</script>";
    } else {
        // jika gagal disimpan tampilkan konfirmasi gagal 
        echo "<script>alert('Data gagal disimpan')</script>";
    }
?>
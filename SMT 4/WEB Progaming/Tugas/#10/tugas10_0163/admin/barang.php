<?php include '../config/koneksi.php';
	
	if (@$_GET['act'] == '') {
		if (@$_POST['submit']) {
			// upload file handle
			$ekstensi = explode(".", $_FILES['gambar_input']['name']);
			$gambar = "brg-".round(microtime(true)).".".end($ekstensi);
			$sumber = $_FILES['gambar_input']['tmp_name'];
			$upload = move_uploaded_file($sumber, "../assets/img/barang/".$gambar);
			
			// cek jika user menginputkan kode barang
			if (isset($_POST['kode_input'])) {
				$stmt = $dbh->prepare("INSERT INTO barang 
										(kode_bgr, nama_bgr, stok_bgr, harga_bgr, gambar_bgr) 
										VALUES (:kode, :nama, :stok, :harga, :gambar)");
				
				$stmt->bindValue('kode', $_POST['kode_input'], PDO::PARAM_INT);
			} else {
				// jika kode barang kosong akan menjalankan fungsi auto_increment
				$stmt = $dbh->prepare("INSERT INTO barang 
										(nama_bgr, stok_bgr, harga_bgr, gambar_bgr) 
										VALUES (:nama, :stok, :harga, :gambar)");
			}

			// binding value untuk menghindari SQLInjection
			$stmt->bindValue('nama', $_POST['nama_input'], PDO::PARAM_STR);
			$stmt->bindValue('stok', intval($_POST['stok_input']), PDO::PARAM_INT);
			$stmt->bindValue('harga', intval($_POST['harga_input']), PDO::PARAM_INT);
			$stmt->bindValue('gambar', $gambar, PDO::PARAM_STR);

			// jalankan queri
			$stmt->execute();

			// ambil rowCount jika > 0 maka berhasil diinput
			if ($stmt->rowCount() > 0) {
				echo "<script>alert('Data berhasil disimpan')</script>";
			}else{
				echo "<script>alert('Data gagal disimpan')</script>";
			}
		}
 ?>
<h1 class="h3 mb-4 text-gray-800">Data Barang</h1>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">
			<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahProduct">
				Tambah
			</button>
		</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No.</th>
						<th>Kode Barang</th>
						<th>Nama Barang</th>
						<th>Stok Barang</th>
						<th>Harga Barang</th>
						<th>Gambar Barang</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$result = $dbh->query("SELECT * FROM barang");
						$no = 1;
						while($data = $result->fetch(PDO::FETCH_ASSOC)){
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $data['kode_bgr']; ?></td>
						<td><?php echo $data['nama_bgr']; ?></td>
						<td><?php echo $data['stok_bgr']; ?></td>
						<td><?php echo $data['harga_bgr']; ?></td>
						<td align="center"> 
							<img src="../assets/img/barang/<?php echo $data['gambar_bgr']; ?>" width=70px>
						</td>
						<td align="center"> 
							<a href="" id="edit_brg" data-toggle="modal" data-target="#editProduct" data-kode="<?php echo $data['kode_bgr']; ?>" data-nama="<?php echo $data['nama_bgr']; ?>" data-stok="<?php echo $data['stok_bgr']; ?>" data-harga="<?php echo $data['harga_bgr']; ?>" data-gambar="<?php echo $data['gambar_bgr']; ?>">
								<button class="btn btn-info btn-sm"> <i class="fa fa-edit"></i> Edit </button>
							</a>
							<a href="?page=barang&act=hapus&id=<?php echo $data['kode_bgr']; ?>" onclick="return confirm('Yakinnnn data akan dihapusss!!')">
								<button class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus </button>
							</a>
						</td>
					</tr>
					<?php 
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
	<!-- Modal Tambah -->
	<div class="modal fade" id="tambahProduct" tabindex="-1" role="dialog" aria-labelledby="tambahProductLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="tambahProductLabel">Tambah Barang</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post" action="" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="form-group">
							<label for="inputID">Kode Barang</label>
							<input type="text" class="form-control" id="inputID" placeholder="Masukkan ID" name="kode_input">
							<small class="text-info"><strong>Jika kode kosong</strong>, akan diisi otomatis oleh sistem</small>
						</div>
						<div class="form-group">
							<label for="inputNama">Nama Barang</label>
							<input type="text" class="form-control" id="inputNama" placeholder="Masukkan Nama" name="nama_input" required>
						</div>
						<div class="form-group">
							<label for="inputStok">Stok Barang</label>
							<input type="number" class="form-control" id="inputStok" placeholder="Masukkan STOK" name="stok_input" required>
						</div>
						<div class="form-group">
							<label for="inputHarga">Harga Barang</label>
							<input type="number" class="form-control" id="inputHarga" placeholder="Masukkan Harga" name="harga_input" required>
						</div>
						<div class="form-group">
							<label for="inputGambar">Gambar Barang</label>
							<input type="file" class="form-control" id="inputGambar" placeholder="Masukkan Harga" name="gambar_input" >
						</div>
					</div>
					<div class="modal-footer">
						<button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
						<input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Modal Edit -->
	<div class="modal fade" id="editProduct" tabindex="-1" role="dialog" aria-labelledby="editProductLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="tambahProductLabel">Edit Barang</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form id="form-edit" enctype="multipart/form-data">
					<div class="modal-body" id="modal-edit">
						<div class="form-group">
							<label for="inputID">Kode Barang</label>
							<input type="hidden" name="kode_input" id="editIdHidden">
							<input type="text" class="form-control" id="editID" placeholder="Masukkan ID" readonly>
						</div>
						<div class="form-group">
							<label for="inputNama">Nama Barang</label>
							<input type="text" class="form-control" id="editNama" placeholder="Masukkan Nama" name="nama_input" required>
						</div>
						<div class="form-group">
							<label for="inputStok">Stok Barang</label>
							<input type="number" class="form-control" id="editStok" placeholder="Masukkan STOK" name="stok_input" required>
						</div>
						<div class="form-group">
							<label for="inputHarga">Harga Barang</label>
							<input type="number" class="form-control" id="editHarga" placeholder="Masukkan Harga" name="harga_input" required>
						</div>
						<div class="form-group">
							<label for="inputGambar">Gambar Barang</label>
							<div style="padding-bottom: 5px">
								<img src="" id="pict" width="80px">
							</div>
							<input type="hidden" class="form-control" id="editGambarHidden" name="gambar_default">
							<input type="file" class="form-control" id="editGambar" placeholder="Masukkan Harga" name="gambar_input" >
						</div>
					</div>
					<div class="modal-footer">
						<input type="submit" name="edit" value="Simpan" class="btn btn-primary btn-sm">
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="../assets/js/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).on("click", "#edit_brg", function(){
			var idbrg = $(this).data('kode');
			var nmbrg = $(this).data('nama');
			var stokbrg = $(this).data('stok');
			var hargabrg = $(this).data('harga');
			var gmbrbrg = $(this).data('gambar');
			$("#modal-edit #editIdHidden").val(idbrg);
			$("#modal-edit #editID").val(idbrg);
			$("#modal-edit #editNama").val(nmbrg);
			$("#modal-edit #editStok").val(stokbrg);
			$("#modal-edit #editHarga").val(hargabrg);
			$("#modal-edit #pict").attr("src", "../assets/img/barang/"+gmbrbrg);

			$("#editGambarHidden").val(gmbrbrg);

		})

		$(document).ready(function(e){
			$("#form-edit").on("submit", (function(e){
				e.preventDefault();
				$.ajax({
					url : '../controller/proses_edit_barang.php',
					type : 'POST',
					data : new FormData(this),
					contentType : false,
					cache : false,
					processData : false,
					success: function(msg){
						$('.table').html(msg);
					}
				})
			}));
		})
	</script>
</div>
<?php  
	} else if(@$_GET['act']== 'hapus'){
		$kode = $_GET['id'];
		$hapus = $dbh->prepare("DELETE FROM barang WHERE kode_bgr = :kode"); // persiapkan SQL agar bisa di bind
		$hapus->bindValue('kode', $kode, PDO::PARAM_INT); // menghindari SQLI
		$hapus->execute(); // jalankan Query
		if ($hapus->rowCount() > 0) { // ambil row count untuk pengkondisian berhasil.
			echo "<script>alert('Data berhasil dihapus')</script>";
			echo "<script>windows.location.replace='?page=barang'</script>";
		}		
	}
?>
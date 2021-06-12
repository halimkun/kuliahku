<?php require './produk.php';
	
	class Elektronik extends Produk
	{
		private $stok;
		
		function __construct($nama, $deskripsi, $harga, $stok)
		{
			parent::__construct($nama, $deskripsi, $harga);
			$this->stok = $stok;
		} 

		public function setStok($stok)
		{
			$this->stok = $stok;
		}

		public function getStok()
		{
			return $this->stok;
		}

		public function getHarga()
		{
			return $this->harga + 150000;
		}
	}

	$prod = new Elektronik("Kulkas Model M1", "Kulkas Dingin 2 Pintu", 2300000, 12);

	echo "<strong>Nama produk</strong> : " . $prod->getNama() . "<br>";
	echo "<strong>Deskripsi</strong> : " . $prod->getDesc() . "<br>";
	echo "<strong>Harga</strong> : " . $prod->getHarga() . "<br>";
	echo "<strong>Jumlah Stok</strong> : " . $prod->getStok() . "<br>";
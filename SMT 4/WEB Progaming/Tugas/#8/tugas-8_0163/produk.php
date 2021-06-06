<?php 
    class Produk 
    {
        private $nama;
        private $deskripsi;
        private $harga;

        public function __construct($nama, $desc, $harga)
        {
            $this->nama = $nama;
            $this->deskripsi = $desc;
            $this->harga = $harga;
        }

        public function setNama($nama)
        {
            $this->nama  = $nama;
        }

        public function getNama()
        {
            return $this->nama;
        }

        public function setDesc($desc)
        {
            $this->deskripsi  = $desc;
        }

        public function getDesc()
        {
            return $this->deskripsi;
        }

        public function setHarga($harga)
        {
            $this->harga  = $harga;
        }

        public function getHarga()
        {
            return $this->harga;
        }

    }

    $produk1 = new Produk("Samsing A32", "HP Samsung Terbaik", 4999000);
    $produk1->setNama("Xiaomi Black Shark");
    echo $produk1->getNama();


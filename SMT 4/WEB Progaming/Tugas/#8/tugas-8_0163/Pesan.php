<?php 
    class Pesan
    {
        private $nim;
        private $nama;
        private $tmpt_lahir;
        private $tgl_lahir;
        private $fakultas;
        private $jurusan;
        private $ipk;

        public function __construct($nim, $nama, $tmpt_lahir, $tgl_lahir, $fakultas, $jurusan, $ipk)
        {
            $this->nim          = $nim;
            $this->nama         = $nama;
            $this->tmpt_lahir   = $tmpt_lahir;
            $this->tgl_lahir    = $tgl_lahir;
            $this->fakultas     = $fakultas;
            $this->jurusan      = $jurusan;
            $this->ipk          = $ipk;
        }

        public function getNim()
        {
            return $this->nim;
        }

        public function setNim($nim)
        {
            $this->nim = $nim;
        }

        public function getNama()
        {
            return $this->nama;
        }

        public function setNama($nama)
        {
            $this->nama = $nama;
        }

        public function getTmptLahir()
        {
            return $this->tmpt_lahir;
        }

        public function setTmptLahir($tmpt_lahir)
        {
            $this->tmpt_lahir = $tmpt_lahir;
        }

        public function getTglLahir()
        {
            return $this->tgl_lahir;
        }

        public function setTglLahir($tgl_lahir)
        {
            $this->tgl_lahir = $tgl_lahir;
        }

        public function getFakultas()
        {
            return $this->fakultas;
        }

        public function setFakultas($fakultas)
        {
            $this->fakultas = $fakultas;
        }

        public function getJurusan()
        {
            return $this->jurusan;
        }

        public function setJurusan($jurusan)
        {
            $this->jurusan = $jurusan;
        }

        public function getIpk()
        {
            return $this->ipk;
        }

        public function setIpk($ipk)
        {
            $this->ipk = $ipk;
        }

    }
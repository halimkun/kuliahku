<?php include './Pesan.php';

	class Saran extends Pesan
	{
		private $saran;

		public function __construct($nim, $nama, $tmpt_lahir, $tgl_lahir, $fakultas, $jurusan, $ipk, $saran)
		{
			parent::__construct($nim, $nama, $tmpt_lahir, $tgl_lahir, $fakultas, $jurusan, $ipk, $saran);
			$this->saran = $saran;	
		}

		public function setSaran($saran)
		{
			$this->saran = $saran;
		}

		public function getSaran()
		{
			return $this->saran;
		}

	}

	$saran = new Saran("19.240.0163", "M Faisal Halim", "Pekalongan", "4 Juni 2001", "Informatka", "Mobile Application", "..." , "Ini adalah saran");

	echo "<strong>NIM : </strong>" . $saran->getNim() . "<br/>";
	echo "<strong>Nama : </strong>" . $saran->getNama() . "<br/>";
	echo "<strong>Tempat Lahir : </strong>" . $saran->getTmptLahir() . "<br/>";
	echo "<strong>Tgl Lahir : </strong>" . $saran->getTglLahir() . "<br/>";
	echo "<strong>Fakultas : </strong>" . $saran->getFakultas() . "<br/>";
	echo "<strong>Jurusan : </strong>" . $saran->getJurusan() . "<br/>";
	echo "<strong>IPK : </strong>" . $saran->getIpk() . "<br/>";
	echo "<strong>Saran : </strong>" . $saran->getSaran() . "<br/>";
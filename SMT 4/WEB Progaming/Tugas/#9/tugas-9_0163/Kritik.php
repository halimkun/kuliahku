<?php include './Pesan.php';

	class Kritik extends Pesan
	{
		private $kritik;

		function __construct($nim, $nama, $tmpt_lahir, $tgl_lahir, $fakultas, $jurusan, $ipk, $kritik)
		{
			parent::__construct($nim, $nama, $tmpt_lahir, $tgl_lahir, $fakultas, $jurusan, $ipk, $kritik);
			$this->kritik = $kritik;
		}

		public function setKritik($kritik)
		{	
			$this->kritik = $kritik;
		}

		public function getKritik()
		{
			return $this->kritik;
		}

	}

	$kritik = new Kritik("19.240.0163", "M Faisal Halim", "Pekalongan", "4 Juni 2001", "Informatka", "Mobile Application", "..." , "Ini adalah kritik");

	echo "<strong>NIM : </strong>" . $kritik->getNim() . "<br/>";
	echo "<strong>Nama : </strong>" . $kritik->getNama() . "<br/>";
	echo "<strong>Tempat Lahir : </strong>" . $kritik->getTmptLahir() . "<br/>";
	echo "<strong>Tgl Lahir : </strong>" . $kritik->getTglLahir() . "<br/>";
	echo "<strong>Fakultas : </strong>" . $kritik->getFakultas() . "<br/>";
	echo "<strong>Jurusan : </strong>" . $kritik->getJurusan() . "<br/>";
	echo "<strong>IPK : </strong>" . $kritik->getIpk() . "<br/>";
	echo "<strong>Saran : </strong>" . $kritik->getKritik() . "<br/>";
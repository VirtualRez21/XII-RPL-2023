<?php

class Sekolah{
	public $nama;
	public $tempatLahir;
	public $tanggalLahir;
	public $jenisKelamin;
	public $agama;

	public function __construct($nama = "nama lengkap", $tempatLahir = "tempat lahir", $tanggalLahir = "tanggal lahir", $jenisKelamin = "jenis kelamin", $agama = "agama"){
		$this->nama = $nama;
		$this->tempatLahir = $tempatLahir;
		$this->tanggalLahir = $tanggalLahir;
		$this->jenisKelamin = $jenisKelamin;
		$this->agama = $agama;
	}

	public function lihatData($jenisObjek){
		echo "Nama $jenisObjek: ".$this->nama."<br>";
		echo "Tempat Lahir: ".$this->tempatLahir."<br>";
		echo "Tanggal Lahir: ".$this->tanggalLahir."<br>";
		echo "Jenis Kelamin: ".$this->jenisKelamin."<br>";
		echo "Agama: ".$this->agama."<br>";
		// echo "$jenisProperty: ".$isiProperty;
	}
}

class Guru extends Sekolah{
	public $mapel = "nama mapel";

	public function lihatDataGuru(){
		$this->lihatData("Guru");
		echo "Mapel: ".$this->mapel."<br>";
	}
}

class Siswa extends Sekolah{
	public $kelas = "nama kelas";

	public function lihatDataSiswa(){
		$this->lihatData("Siswa");
		echo "Kelas: ".$this->kelas."<br>";
	}
}

$guru = new Sekolah();
$guru->nama = "Muchlis Mardais";
$guru->tempatLahir = "tgr";
$guru->tanggalLahir ="17-09-2030";
$guru->jenisKelamin = "laki- laki";
$guru->agama= "islam";
$guru->mapel = "Pemrograman Web";

$guru2 = new Sekolah("Muchlis Mardais", "tgr", "17-09-2030", "laki-laki", "Islam");
$guru2->mapel = "Pemrograman Web";

$siswa = new Sekolah();
$siswa->nama = "Pebika Pratama";
$siswa->tempatLahir = "berau";
$siswa->tanggalLahir = "18-09-2003";
$siswa->jenisKelamin = "perempuan";
$siswa->agama = "kristen";
$siswa->kelas = "XII RPL";

$siswa2 = new Sekolah("Pebika Pratama", "berau", "18-09-2003", "perempuan", "kristen");
$siswa2->kelas = "XII RPL";

var_dump($guru);
echo "<br><br>";
var_dump($siswa);
echo "<br><br>";

// echo "Nama Guru: ".$guru->nama."<br>";
// echo "Tempat Lahir: ".$guru->tempatLahir."<br>";
// echo "Tanggal Lahir: ".$guru->tanggalLahir."<br>";
// echo "Jenis Kelamin: ".$guru->jenisKelamin."<br>";
// echo "Agama: ".$guru->agama."<br>";
// echo "Mapel: ".$guru->mapel;

// echo "Nama Siswa: ".$siswa->nama."<br>";
// echo "Tempat Lahir: ".$siswa->tempatLahir."<br>";
// echo "Tanggal Lahir: ".$siswa->tanggalLahir."<br>";
// echo "Jenis Kelamin: ".$siswa->jenisKelamin."<br>";
// echo "Agama: ".$siswa->agama."<br>";
// echo "Kelas: ".$siswa->kelas;

echo "<br><br>";
$guru->lihatData("Guru");
echo "<br><br>";
$siswa->lihatData("Siswa");

echo "<br><br>";
$guru2->lihatData("Guru");
echo "<br><br>";
$siswa2->lihatData("Siswa");

$guru3 = new Guru("Uyiz", "Tenggarong", "21-Juni-2023", "Laki-Laki", "Islam");
$guru3->mapel = "Web";
// $guru3->lihatData("Guru");
$guru3->lihatDataGuru();

$siswa3 = new Siswa("Uyiz", "Tenggarong", "21-Juni-2023", "Laki-Laki", "Islam");
$siswa3->kelas = "XII RPL";
// $guru3->lihatData("Guru");
$siswa3->lihatDataSiswa();

?>

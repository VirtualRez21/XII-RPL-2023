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

	public function lihatData($jenisObjek, $jenisProperty, $isiProperty){
		echo "Nama $jenisObjek: ".$this->nama."<br>";
		echo "Tempat Lahir: ".$this->tempatLahir."<br>";
		echo "Tanggal Lahir: ".$this->tanggalLahir."<br>";
		echo "Jenis Kelamin: ".$this->jenisKelamin."<br>";
		echo "Agama: ".$this->agama."<br>";
		echo "$jenisProperty: ".$isiProperty;
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
$guru->lihatData("Guru", "Mapel", $guru->mapel);
echo "<br><br>";
$siswa->lihatData("Siswa", "Kelas", $siswa->kelas);

echo "<br><br>";
$guru2->lihatData("Guru", "Mapel", $guru2->mapel);
echo "<br><br>";
$siswa2->lihatData("Siswa", "Kelas", $siswa2->kelas);

?>

<?php

class Sekolah{
	public $nama = "nama lengkap";
	public $tempatLahir = "tempat lahir";
	public $tanggalLahir = "tanggal lahir";
	public $jenisKelamin = "jenis kelamin";
	public $agama = "agama";


}

$guru = new Sekolah();
$guru->nama = "Muchlis Mardais";
$guru->tempatLahir = "tgr";
$guru->tanggalLahir ="17-09-2030";
$guru->jenisKelamin = "laki- laki";
$guru->agama= "islam";
$guru->mapel = "Pemrograman Web";

$siswa = new Sekolah();
$siswa->nama = "Pebika Pratama";
$siswa->tempatLahir = "berau";
$siswa->tanggalLahir = "18-09-2003";
$siswa->jenisKelamin = "perempuan";
$siswa->agama = "kristen";
$siswa->kelas = "XII RPL";

var_dump($guru);
echo "<br><br>";
var_dump($siswa);
echo "<br><br>";

echo "Nama Guru: ".$guru->nama."<br>";
echo "Tempat Lahir: ".$guru->tempatLahir."<br>";
echo "Tanggal Lahir: ".$guru->tanggalLahir."<br>";
echo "Jenis Kelamin: ".$guru->jenisKelamin."<br>";
echo "Agama: ".$guru->agama."<br>";
echo "Mapel: ".$guru->mapel;

echo "<br><br>";

echo "Nama Siswa: ".$siswa->nama."<br>";
echo "Tempat Lahir: ".$siswa->tempatLahir."<br>";
echo "Tanggal Lahir: ".$siswa->tanggalLahir."<br>";
echo "Jenis Kelamin: ".$siswa->jenisKelamin."<br>";
echo "Agama: ".$siswa->agama."<br>";
echo "Kelas: ".$siswa->kelas;


?>

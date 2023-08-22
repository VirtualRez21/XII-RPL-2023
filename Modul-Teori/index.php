<?php

	echo "Hellow World!";

	$kata = "SMK Ketopong";
	$tahun = 2023;

	echo "$kata tahun $tahun";
	echo var_dump($tahun);

	$a = 10;
	$b = 22;
	$c = $a + $b; // penambahan
	$d = $b - $a; // pengurangan
	$e = $a * $b; // perkalian
	$f = $b / $a; // pembagian
	$g = $b % $a; // modulus

	echo "<br>".$c."<br>";
	echo $d."<br>";
	echo $e."<br>";
	echo $f."<br>";
	echo $g."<br>";

	// AND
	$a = FALSE;
	$b = FALSE;
	$c = !$a;
	echo "<br>".$c."<br>";

	$d = 100;
	$e = 100;
	$f = $d == $e;
	echo "<br>".$f."<br>";

	$g = 100;
	$h = 10;
	$i = $g != $h;
	echo "<br>".$i."<br>";

	$j = 10;
	$k = 10;
	$l = $j >= $k;
	echo "<br>".$l."<br>";

	$m = 100;
	$n = 200;

	if($m == $n){
		echo "kondisi benar";
	}
	elseif($m > $n){
		echo "m lebih besar dari n";
	}
	elseif($m < $n){
		echo "m lebih kecil dari n";
		if($m == 100){
			echo "<br>nilai m benar adalah 100";
		}
	}
	else{
		echo "kondisi salah";
	}

	echo "<br>"."0"."<br>";
	echo "<br>"."1"."<br>";
	echo "<br>"."2"."<br>";

	for ($i=0; $i < 10; $i++) { 
		echo "<br>".$i."<br>";
	}

	// for ($i=1; $i <= 10; $i++) { 

	// 	if ($i % 2 == 0) {
	// 		echo "$i merupakan bilangan genap<br>";
	// 	}
	// 	else{
	// 		echo "$i merupakan bilangan ganjil<br>";
	// 	}
	// }

	$looping = 1;
	while ($looping <= 10) {
		echo "<br>".$looping."<br>";
		$looping++;
	}

	$looping2 = 1;
	while (TRUE) {
		if ($looping2 == 20) {
			echo "Anda sampai di angka ".$looping2."<br>";
			break;
			// continue;

		}
		else{
			echo "Angka sekarang adalah ".$looping2."<br>";
		}
		$looping2++;
	}

	$siswa1 = "windi";
	$siswa2 = "panji";

	$siswa = array("windi", "panji", "pebi", "nazairin", "uyiz");

	foreach ($siswa as $value) {
		echo "<br>".$value."<br>";
	}

	for ($i=0; $i < count($siswa); $i++) { 
		echo "<br>".$siswa[$i]."<br>";
	}

	function perkalian($nilai1, $nilai2){
		
		$hasil = $nilai1 * $nilai2;
		
		echo "hasil perkalian adalah ".$hasil."<br>";
	}

	perkalian(2, 100);
	perkalian(3, 300);

	function pertambahan($nilai1, $nilai2){
		$hasil = $nilai1 + $nilai2;

		echo "hasil pertambahan adalah ".$hasil."<br>";
	}

	pertambahan(30, 20);
	pertambahan(40, 10);

	$arr = array(
			'nama' => 'nazairin',
			'hobi' => 'bernafas',
			'umur' => 20
	);
	var_dump($arr);
	echo "<br>".$arr['nama']."<br>";
	echo "<br>".$arr['hobi']."<br>";
	echo "<br>".$arr['umur']."<br>";

	foreach ($arr as $key => $value) {
		echo "<br>".$value."<br>";
	}

	foreach ($arr as $key => $value) {
		echo "<br>".$arr[$key]."<br>";
	}

	$namanegara  = array("korea", "jepang","indonesia", "australia", "brazil");

	$arrindonesia = array(
			'nama' => 'indonesia',
			'ibukota' => 'jakarta',
			'presiden' => 'joko widodo'


		);
	var_dump($namanegara);
	echo "<br>";
	var_dump($arrindonesia);


	// $i = 1;
	// while (TRUE) {
	// 	if ( $i == 100) {
	// 		echo "anda sampai diangka seratus<br>";
	// 		break;
	// 	}
	// 	else{
	// 		echo $i."<br>";
	// 	}
	// 	$i++;
	// }

	// $siswa = array("agus", "uyiz", "yanto", "reza", "adit");
	// foreach ($siswa as $nama) {
	// 	echo "$nama<br>";
	// }

	// $siswa2 = array('nama' => "agus", 'kelas' => "XII");
	// foreach ($siswa2 as $key => $value) {
	// 	// echo "$key<br>";
	// 	echo "$value<br>";
	// }

	// $arr = array(
	// 	array("Volvo",22,18),
	// 	array("BMW",15,13),
	// 	array("Saab",5,2),
	// 	array("Land Rover",17,15)
	// );

	// foreach ($arr as $key) {
	// 	foreach ($key as $value) {
	// 		echo "$value<br>";
	// 	}
	// }

	// function perkalian($nilai1, $nilai2){
	// 	$hasil = $nilai1 * $nilai2;
	// 	echo "hasil perkalian adalah ".$hasil."<br>";
	// }

	// perkalian(2,100);

	// function perkalian2($nilai1, $nilai2){
	// 	$hasil = $nilai1 * $nilai2;
	// 	return $hasil;
	// }

	// echo "hasil perkalian adalah ".perkalian2(2,100)."<br>";

	// $orang = array(
	// 	'nama' => 'andi adinata',
	// 	'hobi' => 'nyanyi',
	// 	'umur' => 22,
	// 	'saudara' => array('aaaa', 'bbbb', 'cccc')
	// 	);

	// var_dump($orang);

	// echo "nama orang: ".$orang['nama']."<br>";
	// echo "hobi orang: ".$orang['hobi']."<br>";
	// echo "umur orang: ".$orang['umur']."<br>";

	// foreach ($orang['saudara'] as $value) {
	// 	echo "saudara: ".$value."<br>";
	// }
	// echo "<br><br>";


	// $orang2 = array(
	// 	'name' => 'andreas',
	// 	'hobby' => 'singing',
	// 	'age' => 22,
	// 	'bro' => array('petrus', 'megawati', 'jokowi')
	// 	);

	// var_dump($orang2);

	// echo "nama orang: ".$orang2['name']."<br>";
	// echo "hobi orang: ".$orang2['hobby']."<br>";
	// echo "umur orang: ".$orang2['age']."<br>";

	// foreach ($orang2['bro'] as $value) {
	// 	echo "saudara: ".$value."<br>";
	// }
	// echo "<br><br>";

	for ($i=10; $i <= 30; $i++) { 
		echo $i."<br>";
	}
	
?>

<?php
require 'fungsiWelcome.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>BELAJAR PEMROGRAMAN WEB</title>
	<script type="text/javascript">
		<?php
		hello();
		?>
	</script>
</head>
<body>
	<form action="index.php" method="POST">
		<label>Username</label>
		<input type="text" name="username" required>
		<br><br>
		<label>Password</label>
		<input type="password" name="password" required>
		<br><br><br>
		<input type="submit" name="submit">
	</form>

</body>
</html>
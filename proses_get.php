<?php

$kode_nelayan = $_GET['kode_nelayan'];
$NIK = $_GET['NIK'];
$Nama_nelayan = $_GET['Nama_nelayan'];
$alamat = $_GET['alamat'];
$jk = $_GET['jk'];
$sk = $_GET['sk'];
$Agama = $_GET['Agama'];
$Jenis_Alat_Tangkap = $_GET['Jenis_Alat_Tangkap'];

echo "<h1>Form Nelayan</h1>";
echo "kode nelayan : ".$kode_nelayan."<br>";
echo "NIK : ".$NIK."<br>";
echo "Nama nelayan : ".$Nama_nelayan."<br>";
echo "Alamat : ".$alamat."<br>";
echo "Jenis kelamin : ".$jk."<br>";
echo "Status Kawin: ".$sk."<br>";
echo "Agama : ".$Agama."<br>";
echo "Jenis Alat Tangkap : ".$Jenis_Alat_Tangkap."<br>";


?>
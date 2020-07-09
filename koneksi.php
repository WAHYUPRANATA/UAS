<?php
//Melakukan koneksi ke database
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbDatabase="akun";
//$db = mysql_connect("$dbHost", "$dbUser", "$dbPass") or die ("koneksi gagal nih, cek apakah variabel sudah benar apa belum");

//memilih database
//mysql_select_db("$dbDatabase", $db) or die ("Gagal memilih database");
$koneksi = mysqli_connect($dbHost,$dbUser,$dbPass,$dbDatabase);
	if ($koneksi) {
	// echo "koneksi sukses";
}else
{
	die ("eror:".mysqli_connect_error());
}
?>

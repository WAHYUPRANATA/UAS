<?php
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
		include 'koneksi.php';
	
	$result=mysqli_query($koneksi,"select * from login where username='$username' AND password='$password'", $db);
		//melihat apakah username dan password yang dimasukkan benar
$rowCheck = mysqli_num_rows($result);

//jika benar maka
if($rowCheck > 0){
	while($row = mysqli_fetch_array($result)){

	$_SESSION ['username'] = $row ['username'];
	$_SESSION ['login'] = true;

	//Memberitahu jika login sukses
	//echo 'login berhasil..!!';

	//redirect ke halaman lain untuk lebih memastikan
	header( "Location: http://localhost/UAS/index2.php" );
	}
}else{
	header( "Location: http://localhost/UAS/form.php" );
}
?>
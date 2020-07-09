<?php 
include "koneksi.php";
	//untuk mengambil variabel dari form edit 
	$id_barang = $_POST['id_barang']; 
	$warna_barang = $_POST['warna_barang'];
	$harga = $_POST['harga'];
	$Jumlah = $_POST['Jumlah'];
	$ukuran = $_POST['ukuran'];
	$diskon = $_POST['diskon'];
	$gambar = $_POST['gambar'];
	$kategori = $_POST['kategori'];
	if($gambar==null){
		$sql="UPDATE product_edit set  id_barang='$id_barang', warna_barang='$warna_barang' , harga ='$harga', Jumlah = '$Jumlah', ukuran = '$ukuran', diskon ='$diskon', kategori='$kategori' where id_barang = '$id_barang' ";
	}else{
	$sql="UPDATE product_edit set  id_barang='$id_barang', warna_barang='$warna_barang' , gambar='$gambar', harga ='$harga' , Jumlah = '$Jumlah', ukuran = '$ukuran', diskon ='$diskon', kategori='$kategori' where id_barang = '$id_barang' ";	
	}
	
// die($sql);
	$edit = mysqli_query($koneksi,$sql);
		
		
if ($edit == true){ 
?>
 <script> alert('update data berhasil'); </script> 
 <?php
}else {
?> <script> alert('update data gagal'); </script>
<?php
} ?> 
<meta http-equiv="refresh" content="0; url=index2.php?isi=product" />
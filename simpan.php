<?php
include "koneksi.php";
	
$simpan = mysqli_query($koneksi,"INSERT INTO product_edit(id_barang,warna_barang,harga,jumlah,ukuran,diskon,gambar,kategori)
VALUES('$_POST[id_barang]', '$_POST[warna_barang]','$_POST[harga]','$_POST[jumlah]','$_POST[ukuran]','$_POST[diskon]','$_POST[gambar]','$_POST[kategori]')");


if ($simpan == true){
?>
<script>
alert('penyimpanan data berhasil');
</script>
<?php
}else {
?>
<script>
alert('penyimpanan data gagal');
</script>
<?php
}
?>
<meta http-equiv="refresh" content="0; url=index2.php?isi=product" />
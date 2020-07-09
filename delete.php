<?php 
include "koneksi.php";
 $id_barang = $_GET ['id']; 
 $sql="DELETE from product_edit where id_barang = '$id_barang'";
 // echo $sql;
$hapus = mysqli_query($koneksi,$sql);
if ($hapus == true){
?>
 <script>
 alert('penghapusan data berhasil');
 </script> 
 <?php 

 }
else { 
 ?> <script> alert('penghapusan data gagal');
 </script>  
 <?php }
?>
 <meta http-equiv="refresh" content="0; url=index2.php?isi=product" />

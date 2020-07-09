<?php
include "koneksi.php";
function golek($keyword){
    global $koneksi;
    $query="SELECT * FROM product_edit
            WHERE
            warna_barang LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' OR
            jumlah LIKE '%$keyword%'
            ";
    return query($query);
}
?>
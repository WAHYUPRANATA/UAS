<?php
$koneksi = mysqli_connect("localhost", "root", "", "akun");
function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
} 
function berburu($keyword){
    $query="SELECT * FROM product_edit
            WHERE
            id_barang LIKE '%$keyword%' OR
            warna_barang LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' OR
            jumlah LIKE '%$keyword%' OR
            ukuran LIKE '%$keyword%' OR
            diskon LIKE '%$keyword%'
            ";
    return query($query);
}
?>
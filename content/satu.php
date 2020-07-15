<?php
require 'function.php';
$koleksi = query("SELECT * FROM product_edit");

if (isset($_POST["cari"])) {
    $koleksi=berburu($_POST["keyword"]);
 }
?>		
					<div class="product-status-wrap">
							<h4>Products List <img class="main-logo" src="img/logo/list.png" alt="" /></h4>
							<!-- <style>
			input[type=text] {
			width: 130px;
			-webkit-transition: width 0.4s ease-in-out;
			transition: width 0.4s ease-in-out;
			}

			/* When the input field gets focus, change its width to 100% */
			input[type=text]:focus {
			width: 100%;
			}
	</style> -->
	<form action="" method="POST">
        <input type="text" name="keyword" size="30" autofocus placeholder="cari masalah??" autocomplete="off">
    </form>
                            <div class="add-product"> 
                                <a href="index2.php?isi=add-product">Add Product</a>
							</div>
							

							
							
                            <table id='example' class='table'>
							<thead>
                                
								<tr>
                                    <th>Id</th>
                                    <th>Warna Barang</th>
									<th>Harga</th>
									<th>Jumlah</th>
                                    <th>Ukuran</th>
									<th>Diskon</th>
									<th>Image</th>
                                   
									</tr>
									</thead>
									<tbody>
								<?php
								include "koneksi.php";
							
								$tampilkan = mysqli_query($koneksi,"SELECT * FROM product_edit");

								// if (isset($_POST["cari"])) {
								// 	$hewan=golek($_POST["keyword"]);
								//  }
								while($r = mysqli_fetch_array($tampilkan)){
								?>
								
								
                                <tr>
                                    <td><?php echo $r['id_barang']?></td>
                                    <td><?php echo $r['warna_barang']?></td>
									<td><?php echo $r['harga']?></td>
									<td><?php echo $r['jumlah']?></td>
									<td><?php echo $r['ukuran']?></td>
									<td><?php echo $r['diskon']?></td>
								    <td><img src="img/<?php echo $r['gambar'];?>" height="50"></td>
									
                                   <td>
										<a href="index2.php?isi=edit-product&id=<?php echo $r['id_barang'];?>"class="btn btn-warning">Edit</a>
										<a href='delete.php?id=<?php echo $r['id_barang'];?>' onclick="return confirm('apakah anda akan menghapus data ?')"class="btn btn-danger">Hapus</td>
										<?php
										

										}
										?>
                                    </td>
                                </tr>
                            
								</tbody>
						</table>
						
						</div>

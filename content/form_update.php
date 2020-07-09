<?php
$id_barang = $_GET ['id'];
include "koneksi.php";
$sql="SELECT * FROM product_edit where id_barang = '$id_barang'";
// echo $sql;
// die ($sql);
$tampilkan = mysqli_query($koneksi,$sql);
while($r = mysqli_fetch_assoc($tampilkan)){
	// print_r($r);
	$warna_barang = $r['warna_barang'];
	$harga = $r['harga'];
	$Jumlah = $r['jumlah'];
	$ukuran = $r['ukuran'];
	$diskon = $r['diskon'];
	$gambar = $r['gambar'];
	$kategori = $r['kategori'];
}
?>
<form action = "prosesedit.php" method="POST">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> Product Edit</a></li>                            
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    
                                                        
                                                    
                                                    
														<div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="id_barang" value='<?php echo $id_barang?>'>
														</td>
														</div>
														<div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>								
                                                        <input type="text" class="form-control" name="warna_barang" value='<?php echo $warna_barang?>'> 
                                                    </td>
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="harga" value='<?php echo $harga?>'> </td>
                                                    </div>
                                                    
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-qrcode" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="Jumlah" value='<?php echo $Jumlah?>'> </td>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-ticket" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="ukuran" value='<?php echo $ukuran?>'> </td>
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="diskon" value='<?php echo $diskon?>'> </td>
                                                    </div>
													<?php
													if($gambar){
													?>
													<div class="input-group mg-b-pro-edt">
                                                        
                                                       <img src="img/<?php echo $gambar;?>" height="40px" width="40px">
													</td>
                                                    </div>
													<?php }?>
													<div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-tag" aria-hidden="true"></i></span>	
														
													<input type="file" name="gambar" id="gambar" value = "<?php echo $gambar;?>"> </td>
													</div>
																
                                                        <select name="kategori" class="form-control pro-edt-select form-control-primary">
														
														
															<option value="Pria" <?php if ($kategori=='Pria'){echo 'selected=\'selected\'';}?>>Pria</option>
															<option value="Wanita" <?php if ($kategori=='Wanita'){echo 'selected=\'selected\'';}?>>Wanita</option>
															
															
														</select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                    <input type="submit" value="Simpan">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    
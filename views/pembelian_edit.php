<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_pembelian WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">form Edit Data Pembelian Obat</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk Edit data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="jenispembelian" class="col-sm-3 control-label">Jenis Pembelian</label>
                             <div class="col-sm-9">
								<input type="text" name="jenis pembelian" value="<?=$data['jenis_pembelian']?>"class="form-control" id="inputEmail3" placeholder="Jenis Pembelian" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="namapembeli" class="col-sm-3 control-label">Nama Pembeli</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama pembeli" value="<?=$data['nama_pembeli']?>"class="form-control" id="inputEmail3" placeholder="Nama Pembeli">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kodeobat" class="col-sm-3 control-label">Kode Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode obat" value="<?=$data['kode_obat']?>" class="form-control" id="inputPassword3" placeholder="Kode Obat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jumlahpembelian" class="col-sm-3 control-label">Jumlah Pembelian</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah pembelian" value="<?=$data['jumlah_pembelian']?>" class="form-control" id="inputPassword3" placeholder="Jumlah Pembelian">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="hargabeli" class="col-sm-3 control-label">Harga Beli</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga beli" value="<?=$data['harga_beli']?>" class="form-control" id="inputPassword3" placeholder="Harga Beli">
                            </div>
                        </div>
						
						<!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal Pembelian</label>
                            <!--untuk tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2021;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <!--end tanggal--> 
						
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pembelian</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pembelian&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data pembelian
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $jenispembelian=$_POST['jenis_pembelian'];
	$namapembeli=$_POST['nama_pembeli'];
	$kodeobat=$_POST['kode_obat'];
    $jumlahpembelian=$_POST['jumlah_pembelian'];
    $hargabeli=$_POST['harga_beli'];
	$tanggalpembelian=$_POST['tanggal_pembelian'];
    $tanggalpembelian=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];
    //buat sql
    $sql="UPDATE tb_pembelian SET jenis_pembelian ='$jenispembelian', nama_pembeli='$namapembeli', kode_obat='$kodeobat', jumlah_pembelian='$jumlahpembelian', harga_beli='$hargabeli',  tanggal_pembelian='$tanggalpembelian' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit pembelian Error");
    if ($query){
        echo "<script>window.location.assign('?page=pembelian&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>




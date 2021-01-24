<?php
$jenispembelian=$_GET['jenispembelian'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_pembelian WHERE jenis_pembelian ='$jenispembelian'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tanggal Pembelian Obat</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="jenispembelian" class="col-sm-3 control-label">Jenis Pembelian</label>
                            <div class="col-sm-9">
								<input type="text" name="jenispembelian" value="<?=$data['jenis_pembelian']?>" class="form-control" id="inputEmail3" placeholder="Jenis Pembelian" readonly="true">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="namapembeli" class="col-sm-3 control-label">Nama Pembeli</label>
                            <div class="col-sm-9">
                                <input type="text" name="namapembeli" value="<?=$data['nama_pembeli']?>" class="form-control" id="inputEmail3" placeholder="Nama Pembeli" readonly="true">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="kodeobat" class="col-sm-3 control-label">Kode Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="kodeobat" value="<?=$data['kode_obat']?>" class="form-control" id="inputEmail3" placeholder="Kode Obat" readonly="true">
                            </div>
                        </div> 

                        <div class="form-group">
                            <label for="hargabeli" class="col-sm-3 control-label">Harga Beli</label>
                            <div class="col-sm-9">
                                <input type="text" name="hargabeli" value="<?=$data['harga_beli']?>" class="form-control" id="inputEmail3" placeholder="Harga Beli" readonly="true">
                            </div>
                        </div> 

                        <div class="form-group">
                            <label for="jumlahpembelian" class="col-sm-3 control-label">Jumlah Pembelian</label>
                            <div class="col-sm-3">
                                <input type="text" name="jumlahpembelian" value="<?=$data['jumlah_pembelian']?>" class="form-control" id="inputEmail3" placeholder="Jumlah Pembelian">
                            </div>
                        </div> 

                        <div class="form-group">
                            <label for="tanggalpembelian" class="col-sm-3 control-label">Tanggal Pembelian</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggalpembelian" class="form-control" id="inputEmail3" placeholder="Tanggal Pembelian">
                            </div>
                        </div> 
						
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Tanggal</button>
								<a href="?page=pembelian&actions=tampil" class="btn btn-danger"><span class="fa fa-ban"></span> Batal</a>
                            </div>
                        </div>
                    </form>


                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
	$tglpembelian =$_POST['tanggalpembelian'];
		$potTgl = substr($tanggalpembelian,8,2);
		$potBln = substr($tanggalpembelian,5,2);
		$potThn = substr($tanggalpembelian,0,4);
	
    //buat sql
    $sql="UPDATE tb_pembelian SET tgl_pembelian='$tglpembelian' WHERE jenis_pembelian='$jenispembelian'";
	$sqlProduk="UPDATE Produk SET WHERE jenis_pembelian='$jenispembelian'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Produk Error");
	$queryProduk=  mysqli_query($koneksi, $sqlProduk) or die ("SQL Simpan Produk Error");
    if ($query){
        echo "<script>window.location.assign('?page=pembelian&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
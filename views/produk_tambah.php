<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Obat</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                    
						<div class="form-group">
                            <label for="kode_obat" class="col-sm-3 control-label">Kode Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode_obat" class="form-control" id="inputEmail3" placeholder="Inputkan Kode Obat" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="nama_obat" class="col-sm-3 control-label">Nama Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_obat" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Obat" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="harga_obat" class="col-sm-3 control-label">Harga Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga_obat" class="form-control" id="inputEmail3" placeholder="Inputkan Harga Obat" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="jumlah_obat" class="col-sm-3 control-label">Jumlah Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah_obat" class="form-control" id="inputEmail3" placeholder="Inputkan Jumlah Obat" required>
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=produk&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Obat
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $kode_obat   = $_POST['kode_obat'];
    $nama_obat   = $_POST['nama_obat'];
	$harga_obat  = $_POST['harga_obat'];
	$jumlah_obat = $_POST['jumlah_obat'];
    
	
    //buat sql
    $sql="INSERT INTO tb_produkobat VALUES ('','$kode_obat','$nama_obat','$harga_obat','$jumlah_obat')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Obat Error");
    if ($query){
        echo "<script>window.location.assign('?page=produk&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>

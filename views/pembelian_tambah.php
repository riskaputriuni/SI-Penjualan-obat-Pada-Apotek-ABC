<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Pembelian Obat</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="jenis_pembelian" class="col-sm-3 control-label">Jenis Pembelian</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_pembelian" class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Pembelian" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="nama_pembeli" class="col-sm-3 control-label">Nama Pembeli</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pembeli" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pembeli" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="kode_obat" class="col-sm-3 control-label">Kode Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode_obat" class="form-control" id="inputEmail3" placeholder="Inputkan Kode Obat" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="harga_beli" class="col-sm-3 control-label">Harga Beli</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga_beli" class="form-control" id="inputEmail3" placeholder="Inputkan Harga Beli" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="jumlah_pembelian" class="col-sm-3 control-label">Jumlah Pembelian</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah_pembelian" class="form-control" id="inputEmail3" placeholder="Inputkan Jumlah Pembelian" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_pembelian" class="col-sm-3 control-label">Tanggal Pembelian</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal_pembelian" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Pembelian" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Pembelian</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pembelian&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pembelian
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $jenis_pembelian=$_POST['jenis_pembelian'];
	$nama_pembeli=$_POST['nama_pembeli'];
	$kode_obat=$_POST['kode_obat'];
    $harga_beli=$_POST['harga_beli'];
    $jumlah_pembelian=$_POST['jumlah_pembelian'];
    $tanggal_pembelian=$_POST['tanggal_pembelian'];

    //buat sql
    $sql="INSERT INTO tb_pembelian VALUES ('','$jenis_pembelian','$nama_pembeli','$kode_obat','$harga_beli','$jumlah_pembelian','$tanggal_pembelian')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Pembelian Error");
    if ($query){
        echo "<script>window.location.assign('?page=pembelian&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
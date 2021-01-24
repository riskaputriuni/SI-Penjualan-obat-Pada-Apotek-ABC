<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Obat</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail produk-->
                    <?php
                    $sql = "SELECT *FROM tb_produkobat WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubah data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Kode Obat</td> <td><?= $data['kode_obat'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Obat</td> <td><?= $data['nama_obat'] ?></td>
                        </tr>
                        <tr>
                            <td>Harga Obat</td> <td><?= $data['harga_obat'] ?></td>
                        </tr>
						<tr>
                            <td>Jumlah Obat</td> <td><?= $data['jumlah_obat'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=produk&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Obat </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>


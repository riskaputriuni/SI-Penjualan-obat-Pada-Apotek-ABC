<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Pembelian Obat</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail produk-->
                    <?php
                    $sql = "SELECT *FROM tb_pembelian WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubah data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Jenis Pembelian</td> <td><?= $data['jenis_pembelian'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Supplier</td> <td><?= $data['nama_pembeli'] ?></td>
                        </tr>
                        <tr>
                            <td>Kode Obat</td> <td><?= $data['kode_obat'] ?></td>
                        </tr>
						<tr>
                            <td>Harga Pembelian</td> <td><?= $data['harga_beli'] ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Pembelian</td> <td><?= $data['jumlah_pembelian'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal pembelian</td> <td><?= $data['tanggal_pembelian'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=pembelian&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data pembelian </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>


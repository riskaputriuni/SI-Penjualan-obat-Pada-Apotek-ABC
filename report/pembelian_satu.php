<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pembelian Obat</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail produk-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tb_pembelian WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Penjualan Obat Pada Apotek ABC </h2>
                        <h4>Jalan Besar Desa Mekar Sari, Kabupaten Asahan, Sumatera Utara, 21261</h4>
                        <hr>
                        <h3>DATA PEMBELIAN PRODUK</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                                    <td>Jenis Pembelian</td> <td><?= $data['jenis_pembelian'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Pembeli</td> <td><?= $data['nama_pembeli'] ?></td>
                                </tr>
                                <tr>
                                    <td>Kode Obat</td> <td><?= $data['kode_obat'] ?></td>
                                </tr>
                                <tr>
                                    <td>Harga Beli</td> <td><?= $data['harga_beli'] ?></td>
                                </tr>
								<tr>
                                    <td>Jumlah Pembelian</td> <td><?= $data['jumlah_pembelian'] ?> hari</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Pembelian</td> <td><?= $data['tanggal_pembelian'] ?> hari</td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
                                       Buntu Pane  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kelompok 1<strong></u><br>
                                        Penjualan Obat Pada Apotek ABC
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>

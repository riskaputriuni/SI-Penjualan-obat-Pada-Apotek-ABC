<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Obat</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail produk-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tb_produkobat WHERE id='" . $_GET ['id'] . "'";
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
                        <h3>DATA PRODUK</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Kode Obat</td> <td><?= $data['kode_obat'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Nama Obat</td> <td><?= $data['nama_obat'] ?></td>
                                </tr>
                                <tr>
                                    <td>Harga Obat</td> <td><strong><?= $data['harga_obat'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jumlah Obat</td> <td><?= $data['jumlah_obat'] ?></td>
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
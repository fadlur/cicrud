<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $title;?></h3>
                </div>
                <div class="panel-body">
                <?php 
                $nama_produk = "";
                $id = "";
                $harga = "";
                $deskripsi_produk = "";
                foreach ($itemproduk->result() as $key) {
                    $id = $key->id;
                    $nama_produk = $key->nama_produk;
                    $harga = $key->harga;
                    $deskripsi_produk = $key->deskripsi_produk;
                }
                ?>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?php echo base_url();?>assets/images/produk.png" class="thumnail" alt="gambar" width="100%">
                        </div>
                        <div class="col-md-8">
                            <table class="table table-bordered">
                                <tr>
                                    <td>Nama</td>
                                    <td>
                                        <?php echo $nama_produk;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top">
                                        Harga
                                    </td>
                                    <td>
                                        <?php echo number_format($harga);?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>
                                        <?php echo $deskripsi_produk;?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
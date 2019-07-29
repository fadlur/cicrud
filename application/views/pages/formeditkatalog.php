<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $title; ?></h3>
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
                    <form action="<?php echo site_url('pages/update');?>" method="post">
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" value="<?php echo $nama_produk;?>">
                            <input type="hidden" name="id" value="<?php echo $id;?>">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" class="form-control" value="<?php echo $harga;?>">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Produk</label>
                            <textarea name="deskripsi_produk" rows="5" class="form-control"><?php echo $deskripsi_produk;?></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
    <?php
        foreach ($itemproduk->result() as $key) {
        ?>
    <div class="col-sm-3 col-md-3">
        <div class="thumbnail">
            <img src="<?php echo base_url();?>assets/images/produk.png" alt="<?php echo $key->nama_produk; ?>">
            <div class="caption">
                <h3><?php echo $key->nama_produk; ?></h3>
                <p><?php echo $key->deskripsi_produk; ?></p>
                <div class="alert alert-success">
                    Rp. <?php echo number_format($key->harga); ?>
                </div>
                <p>
                    <a href="<?php echo site_url('pages/detail').'/'.$key->id;?>" class="btn btn-primary" role="button">Detail</a>
                </p>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
    </div>
</div>



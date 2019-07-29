<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Panel title</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <th>NO</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>
                                <a href="<?php echo site_url('pages/create');?>">Tambah</a>
                            </th>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        foreach ($itemproduk->result() as $key) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $no++;?>
                                </td>
                                <td>
                                    <?php echo $key->nama_produk; ?>
                                </td>
                                <td>
                                    <?php echo $key->harga; ?>
                                </td>
                                <td>
                                <a href="<?php echo site_url('pages/edit').'/'.$key->id;?>" class="btn btn-sm btn-primary">
                                   Edit
                                </a>
                                <a href="<?php echo site_url('pages/delete').'/'.$key->id;?>" class="btn btn-sm btn-danger">
                                   Hapus
                                </a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



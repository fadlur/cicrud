<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-list"></span> Form Registrasi</h3>
              </div>
              <div class="panel-body">
                  <form action="<?php echo site_url('login/prosesregistrasi');?>" method="post">
                      <div class="form-group">
                        <label for="nama">Nama Depan</label>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Nama Depan">
                            </div>
                            <div class="col-md-6 col-sm-6">
                              <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Nama Belakang">
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="phone">No Tlp</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="nomer tlp">
                      </div>
                      <hr>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="email">
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="password">
                      </div>
                      <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" value="Daftar">
                      </div>
                  </form>
                  <?php if ($message!=null): ?>
                      <div class="alert alert-warning"><?php echo $message;?></div>
                  <?php endif; ?>
              </div>
            </div>
        </div>
    </div>
</div>
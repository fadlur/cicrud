<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-4">
            <div class="panel panel-default">
    			<div class="panel-heading"><span class="glyphicon glyphicon-log-in"></span> Login</div>
    			<div class="panel-body">
    				<?php echo $this->session->flashdata('message');?>
    				<form action="<?php echo site_url('login'); ?>" method="post">
    					<div class="form-group">
    						<?php echo form_error('email'); ?>
    						<label for="email">Email</label>
    						<input type="email" class="form-control" id="email" name="email">
    					</div>
    					<div class="form-group">
    						<?php echo form_error('password'); ?>
    						<label for="password">Password</label>
    						<input type="password" class="form-control" id="password" name="password">
    					</div>
    					<div class="form-group">
    						<label>
    							<?php echo form_checkbox('remember','1',FALSE);?> Remember me
    						</label>
    					</div>
    					<div class="form-group">
    						<button class="btn-primary btn form-control" id="loginbutton">Login</button>
                            <p>
                                Belum mempunyai akun? <a href="<?php echo site_url('login/registrasi');?>">Daftar disini</a>
                            </p>
    					</div>
    				</form>
    			</div>
    		</div>
        </div>
    </div>
</div>
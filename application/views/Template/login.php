<?php $this->load->view('Template/__partials/head');?>
<body>

    <div class="d-flex" id="wrapper">
        <!-- Page Content -->
        <div id="page-content-wrapper">
		<?php $this->load->view('Template/__partials/navbar');?>
            <div class="row mt-5">
				<div class="col-4 mx-auto">

				<?php if ($this->session->flashdata('user_login')): ?>
					<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_login').'</p>'; ?>
				<?php endif; ?>

				<?php if ($this->session->flashdata('user_registered')): ?>
					<?php echo '<p class="alert alert-success text-center">'.$this->session->flashdata('user_registered').'</p>'; ?>
				<?php endif; ?>

				<?php if ($this->session->flashdata('login_failed')): ?>
					<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
				<?php endif; ?>

				<?php if ($this->session->flashdata('user_logout')): ?>
					<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('user_logout').'</p>'; ?>
				<?php endif; ?>
					<div class="card">
						<div class="card-body">
							<?php echo form_open('admin/user'); ?>
								<h2 class="text-center">
									<i class="fas fa-users"></i>
									Login
								</h2>
								<div class="form-group">
									<input name="username" type="text" class="form-control" placeholder="Enter username">
								</div>
								<div class="form-group">
									<input name="password" type="password" class="form-control" placeholder="Password">
								</div>
								<button class="btn btn-primary btn-block">
									Login
								</button>
							</form>
							<div class="form-group mt-2">
								Not registerd yet?<a href="<?php echo site_url('admin/user/register')?>">Register</a>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
	<!-- /#wrapper -->
	<?php $this->load->view('Template/__partials/js');?>
</body>

</html>

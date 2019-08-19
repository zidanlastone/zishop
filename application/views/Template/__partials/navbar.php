<nav class="navbar navbar-expand-lg navbar-dark bg-primary border-bottom">
	<?php if ($this->session->userdata('logged_in') === true ): ?>
		<button class="btn btn-primary" id="menu-toggle"><i id="button-icon" class="fas fa-chevron-right"></i></button>
	<?php else: ?>
		<a class="navbar-brand" href="#">ZiShop</a>
	<?php endif; ?>

	<button class="navbar-toggler" type="button" data-toggle="collapse"
		data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
		aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
			<li class="nav-item active">
				<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			</li>
			<?php if ($this->session->userdata('logged_in') == true ): ?>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php echo $this->session->userdata('username');?>
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">account settings</a>
						<a class="dropdown-item" href="<?php echo site_url('admin/user/logout');?>">Logout</a>
					</div>
				</li>
			<?php else:?>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('admin/user');?>">Login</a>
				</li>
			<?php endif; ?>
		</ul>
	</div>
</nav>

<!-- Sidebar -->
	<div class="bg-primary border-right" id="sidebar-wrapper">
		<div class="sidebar-heading text-white">ZiShop</div>
		<div class="list-group list-group-flush">
			<a href="<?php echo site_url('admin/overview');?>" class="list-group-item list-group-item-action bg-primary text-white-50">
				<i class="fas fa-chart-line font-2 mr-2"></i>
				Dashboard
			</a>
			<a href="<?php echo site_url('admin/products');?>" class="list-group-item list-group-item-action bg-primary text-white-50">
				<i class="fas fa-tags font-2 mr-2"></i>
				Products
			</a>
			<?php if (($this->session->userdata('logged_in') == true) && ($this->session->userdata('role') == 1)): ?>
			<a href="<?php echo site_url('admin/user/list');?>" class="list-group-item list-group-item-action bg-primary text-white-50">
				<i class="fas fa-users font-2 mr-2"></i>
				Users
			</a>
			<?php endif; ?>
		</div>
	</div>
	<!-- /#sidebar-wrapper -->

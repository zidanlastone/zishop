<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ZiShop</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/node_modules/mdi/css/materialdesignicons.min.css">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" />
	</head>

	<body>
	<div class="body-wrapper">

		<?php $this->load->view('Template/__partials/sidebar')?>

		<?php $this->load->view('Template/__partials/navbar')?>

		<div class="page-wrapper mdc-toolbar-fixed-adjust">
		<main class="content-wrapper">
			<?php $this->load->view('Template/__partials/breadcrumbs'); ?>
			<?php $this->load->view($content); ?>
		</main>
		<!-- partial:partials/_footer.html -->
		<footer>
			<div class="mdc-layout-grid">
			<div class="mdc-layout-grid__inner">
				<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
				<span class="text-muted">Copyright © 2019 <a class="text-green" href="https://github.com/zidanlastone" target="_blank">Zidan</a>. All rights reserved.</span>
				</div>
				<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6 d-flex justify-content-end">
				<span class="mt-0 text-right">Hand-crafted &amp; made with <i class="mdi mdi-heart text-red"></i></span>
				</div>
			</div>
			</div>
		</footer>
		<!-- partial -->
		</div>
		<?php $this->load->view('Template/__partials/modal'); ?>
	</div>
	<!-- body wrapper -->
	<!-- plugins:js -->
	<script src="<?php echo base_url(); ?>assets/node_modules/material-components-web/dist/material-components-web.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/node_modules/jquery/dist/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- endinject -->
	<!-- Plugin js for this page-->
	<script src="<?php echo base_url(); ?>assets/node_modules/chart.js/dist/Chart.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/node_modules/progressbar.js/dist/progressbar.min.js"></script>
	<!-- End plugin js for this page-->
	<!-- inject:js -->
	<script src="<?php echo base_url(); ?>assets/js/misc.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/material.js"></script>
	<!-- endinject -->
	<!-- Custom js for this page-->
	<script src="<?php echo base_url(); ?>assets/js/dashboard.js"></script>
	<!-- End custom js for this page-->
	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
	</body>

</html>

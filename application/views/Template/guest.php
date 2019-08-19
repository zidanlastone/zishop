<?php $this->load->view('Template/__partials/head');?>
<body>

    <div class="d-flex" id="wrapper">
        <!-- Page Content -->
        <div id="page-content-wrapper">

		<?php $this->load->view('Template/__partials/navbar');?>

            <div class="container mt-3">
					<?php $this->load->view($content); ?>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
	<!-- /#wrapper -->
	<?php $this->load->view('Template/__partials/modal'); ?>


	<?php $this->load->view('Template/__partials/js'); ?>

</body>

</html>

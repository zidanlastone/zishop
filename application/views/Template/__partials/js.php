    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>


    <!-- Menu Toggle Script -->
    <script>
		function deleteConfirm(url){
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}

        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");

            if(!$("#wrapper").hasClass("toggled")){
                $("#button-icon").removeClass("fa-chevron-right").addClass("fa-times");
            }else{
                $("#button-icon").removeClass("fa-times").addClass("fa-chevron-right");
            }
        });
    </script>

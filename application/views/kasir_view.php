<!DOCTYPE html>
<html>
	<head>
		<?php $this->load->view("_partials/head.php");  ?>
	</head>
	<body>
		<!-- Page Wrapper -->
		<div id="wrapper">
			<!-- Sidebar -->
			<?php $this->load->view("_partials/sidebar.php"); ?>
			<!-- Content Wrapper -->
			<div id="content-wrapper" class="d-flex flex-column">
				<!-- Main Content -->
				<div id="content">
					<?php $this->load->view("_partials/navbar.php"); ?>
					<div class="container">
						
						

					</div>
				</div>
				<!-- End of Main Content -->
				<?php $this->load->view("_partials/footer.php"); ?>
			</div>
			<!-- End of Content Wrapper -->
		</div>
		<!-- End of Page Wrapper -->
		<!-- Scroll to Top Button-->
		<?php $this->load->view("_partials/toTop.php");  ?>
		<!-- Logout Modal-->
		<?php $this->load->view("_partials/modal.php"); ?>
		<?php $this->load->view("_partials/js.php"); ?>
		
		<!-- <script>
			$(document).ready(function() {
			$('#produk').DataTable();
			} );
		</script> -->
	</body>
</html>
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
						
						<h4>Kasir</h4>
						<hr>
						<form>
							<div class="form-row py-2 mb-2" style="background-color: #b9edec;">
								<div class="form-group col-sm-3 col-form-label col-form-label-sm my-0">
									<label for="inputAddress">No Transaksi</label>
									<input type="text" class="form-control form-control-sm" id="inputAddress" placeholder="No Transaksi">
								</div>
								<div class="form-group col-sm-2 col-form-label col-form-label-sm m-0">
									<label for="inputAddress2">Tanggal Transaksi</label>
									<input type="date" class="form-control form-control-sm" id="inputAddress2" placeholder="Tanggal Transaksi">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-sm-2 col-form-label col-form-label-sm">
									<!-- <label for="inputEmail4">Nama Barang</label> -->
									<input type="email" class="form-control form-control-sm" id="inputEmail4" placeholder="id Barang">
								</div>
								<div class="form-group col-sm-2 col-form-label col-form-label-sm">
									<!-- <label for="inputEmail4">Nama Barang</label> -->
									<input type="email" class="form-control form-control-sm" id="inputEmail4" placeholder="Nama Barang">
								</div>
								<div class="form-group col-sm-2 col-form-label col-form-label-sm">
									<!-- <label for="inputPassword4">Harga</label> -->
									<input type="password" class="form-control form-control-sm" id="inputPassword4" placeholder="Harga">
								</div>
								<div class="form-group col-sm-1 col-form-label col-form-label-sm">
									<!-- <label for="inputPassword4">Jumlah</label> -->
									<input type="password" class="form-control form-control-sm" id="inputPassword4" placeholder="Qty">
								</div>
								<div class="form-group col-sm-3 col-form-label col-form-label-sm">
									<button type="submit" class="btn btn-primary btn-sm">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- End of Main Content -->
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
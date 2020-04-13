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
						<h2>Daftar Produk</h1>
						<button type="button" class="btn btn-primary mb-2">
							<i class="fas fa-plus"></i>
							Tambah Produk
						</button>
						<table id="produk" class="table">
							<thead class="thead-light">
								<tr>
									<th scope="col">No</th>
									<th scope="col">Produk</th>
									<th scope="col">Harga</th>
									<th scope="col">Kategori</th>
								</tr>
							</thead>
							<?php
							$no = 1;
							foreach ($produk as $row ):
							?>
							<tbody>
								<tr>
									<th scope="row"><?php echo $no++;  ?> </th>
									<td><?php echo $row->namaproduk  ?></td>
									<td><?php echo $row->hargaproduk  ?></td>
									<td><?php echo $row->namakategori ?></td>
								</tr>
							</tbody>
							<?php endforeach;  ?>
						</table>
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